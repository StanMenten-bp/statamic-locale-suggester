<?php return [
    'title' => 'Locale Suggester',
    'dashboard' => [
        'dashboard' => 'Dashboard',
        'title' => 'Locale Suggester',
        'introduction' => "<p>You are all set 💪. We will suggest your visitors to read the content in their preferred language.</p><br/><strong>Here is how it works:</strong>
<ul class='mt-1 text-xs'>
    <li class='ml-3'>1. We detect the preferred language of your visitors based on their browser settings.</li>
    <li class='ml-3'>2. If their preferred language matches a locale in your multi-site configuration, the alert box will be shown.</li>
    <li class='ml-3'>3. If the visitor dismisses the alert box, we set a cookie and he won't be bothered again.</li>

</ul>",
    ],
    'body' => "Include the alert in your layout. By default, its position is fixed so placing it at the bottom is fine.",
    'script' => 'Add this code before </body> in your layout. This handles the dismiss button.',
    'footer' => 'Get more Statamic addons at <span class="text-grey-70">Parfaitement Web</span>',
];
