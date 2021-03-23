<?php

namespace Parfaitementweb\StatamicLocaleSuggester\Tags;

use Statamic\Facades\Entry;
use Statamic\Facades\Site;
use Statamic\Tags\Tags;

class LocaleSuggesterTags extends Tags
{
    protected static $handle = 'locale-suggester';

    protected function locales($excludeCurrent = false)
    {
        if (! isset($this->context['id'])) {
            return collect();
        }

        $entry = Entry::find($this->context['id']);

        if (! $entry) {
            return collect();
        }

        $locales = collect();
        foreach ($entry->sites() as $locale) {

            if ($excludeCurrent) {
                if ($locale == $entry->locale()) {
                    continue;
                }
            }

            if ($alternate = $entry->in($locale)) {
                $locales->push([
                    'locale' => Site::get($locale)->locale(),
                    'url' => $alternate->absoluteUrl(),
                ]);
            }
        }

        return $locales;
    }

    protected function shortenLocale($locale)
    {
        $result = explode('_', $locale);

        return $result[0] ?? $locale;
    }

    protected function shortLocales($locales)
    {
        if (is_null($locales)) {
            return collect();
        }

        return $locales->pluck('locale')->map(function ($item) {
            return $this->shortenLocale($item);
        });
    }

    protected function localeInPlainWords($locale)
    {
        if (! is_callable('locale_get_display_name')) {
            return $locale;
        }

        return locale_get_display_name($locale, $locale);
    }

    public function alert()
    {
        if (request()->cookies->has('ignore_language_suggester')) {
            return null;
        }

        $locale = $this->locales(true)->filter(function ($item) {
            return $this->shortenLocale($item['locale']) == request()->getPreferredLanguage($this->shortLocales($this->locales())->toArray());
        })->first();

        if (! $locale) {
            return null;
        }

        return view('statamic-locale-suggester::web.alert', [
            'locale' => [
                'name' => $this->localeInPlainWords($locale['locale']),
                'url' => $locale['url'],
                'key' => $this->shortenLocale($locale['locale']),
            ]
        ]);
    }

    public function script()
    {
        return view('statamic-locale-suggester::web.scripts');
    }
}
