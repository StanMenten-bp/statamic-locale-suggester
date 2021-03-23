# Locale Suggester

![Statamic 3.0+](https://img.shields.io/badge/Statamic-3.0+-FF269E?style=for-the-badge&link=https://statamic.com)
> Suggest your visitors to read the content in their preferred language. 🌍

## Features
- **Displays an alert** if the current page is available in the **visitor's preferred language.**
- Based on your **multi-site configuration**.
- Entirely **customizable**
- Entirely **translatable**
- **Built-in translations** in English, French, German, Spanish, Italian, Dutch and Portugese

## How does it work?

1. We detect the preferred language of your visitors based on their browser settings.
2. If their preferred language matches a locale in your multi-site configuration, the alert box will be shown.
3. If the visitor dismisses the alert box, we set a cookie and he won't be bothered again.

## Getting Started

> This addon required PHP PECL intl >= 1.0.0 to be installed on your server.

We have made things easy for you to start. Here are the three steps your need to follow:

1. **Install the addon**  
   Simply run `composer require parfaitementweb/statamic-locale-suggester`  
   You also can follow the [official Statamic help guide](https://statamic.dev/addons#installing-addons)


2. **Add these two tags in your layout.**  

This insert the alert in your layout. By default, its position is fixed so placing this tag at the bottom of your `<body>` is fine.
```
{{ locale-suggester:alert }}
```

Add the scripts in your layout. This handles the dismiss button.
```
{{ locale-suggester:script }}
```

3. **Enjoy.**

## What does the addon look like?

![Statamic Locale Suggester Preview in EN](https://parfaitementweb.com/statamic/statamic-locale-suggester/statamic-locale-suggester-en.png)

![Statamic Locale Suggester Preview in FR](https://parfaitementweb.com/statamic/statamic-locale-suggester/statamic-locale-suggester-fr.png)

![Statamic Locale Suggester Dashboard](https://parfaitementweb.com/statamic/statamic-locale-suggester/statamic-locale-suggester-dashboard.png)

## Customize the alert, the script and the translations

You can execute the following commands so the views and translations files will be copied to your vendor resources folder.

```
php artisan vendor:publish --tag=statamic-locale-suggester-views
php artisan vendor:publish --tag=statamic-locale-suggester-translations
```

Don't be shocked when you'll discover we've used plain and inlined CSS rules in our alert template. This is done to ensure maximum compability without the need to recompile and repurge your stylesheet before being able to use this addon. You can of course customize everything to your needs.

## Changelog

**V1.0.1**  
SameSite Cookie value has been set to Lax.  
Improved default UI for the alert

**V1.0.1**  
Better to not show the alert for unpublished versions isn't?

**V1.0.0**  
🚀 Would you like to read the initial commit in another language?
