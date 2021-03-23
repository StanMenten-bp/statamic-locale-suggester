<?php

namespace Parfaitementweb\StatamicLocaleSuggester;

use Parfaitementweb\StatamicLocaleSuggester\Tags\LocaleSuggesterTags;
use Statamic\Facades\CP\Nav;
use Statamic\Providers\AddonServiceProvider;

class ServiceProvider extends AddonServiceProvider
{
    protected $tags = [
        LocaleSuggesterTags::class,
    ];

    protected $routes = [
        'cp' => __DIR__ . '/../routes/cp.php',
    ];

    public function boot()
    {
        parent::boot();

        $this->setPublishables();
        $this->createNavigation();
    }

    public function bootTranslations()
    {
        $this->loadTranslationsFrom(__DIR__.'/../resources/lang/web/', 'statamic-locale-suggester');
        $this->loadTranslationsFrom(__DIR__.'/../resources/lang/cp/', 'statamic-locale-suggester-cp');

        return $this;
    }

    public function setPublishables()
    {
        $this->publishes([
            __DIR__.'/../resources/views/web' => resource_path('views/vendor/statamic-locale-suggester/web'),
        ], 'statamic-locale-suggester-views');

        $this->publishes([
            __DIR__.'/../resources/lang/web' => resource_path('lang/vendor/statamic-locale-suggester'),
        ], 'statamic-locale-suggester-translations');
    }

    protected function createNavigation()
    {
        Nav::extend(function ($nav) {
            $nav->tools('Locale Suggester')
                ->route('statamic-locale-suggester.dashboard')
                ->icon('flag')
                ->active('locale-suggester');
        });
    }
}
