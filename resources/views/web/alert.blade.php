<div id="language-suggester" style="position:fixed; bottom:12px; width: 100%; max-width: 587px; margin-left: 50%; transform: translateX(-50%)">
    <div style="margin: 14px; background-color: #FFFFFF; border-radius: 8px;  box-shadow: #0000 0px 0px 0px 0px, #0000 0px 0px 0px 0px, #0000001a 0px 1px 3px 0px, #0000000f 0px 1px 2px 0px">
        <div style="padding:18px;">
            <h3 style="font-size: 16px; font-weight: 500; line-height: 24px; color: #111827; max-width: 95%; margin: 0;">
                {{ __('statamic-locale-suggester::alert.suggest', ['locale' => $locale['name']], $locale['key']) }}
            </h3>

            <button id="ignore-suggester" style="position: absolute; top: 28px; right: 28px; color:#aaa; border: none; background-color: #fff; cursor: pointer;">
                <svg style="height: 18px; width: 18px" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                    <path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"/>
                </svg>
            </button>

            <div style="margin-top:12px; font-size: 14px; line-height: 20px">
                <a href="{{ $locale['url'] }}" style="font-size: 14px; font-weight: 500; line-height: 20px; color: #1d4ed8; text-decoration: none">{{ __('statamic-locale-suggester::alert.action', ['locale' => $locale['name']], $locale['key']) }}</a>
            </div>
        </div>
    </div>
</div>
