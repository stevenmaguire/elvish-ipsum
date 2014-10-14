Elvish Ipsum Generator
=====================

### tl;dr

Add random elvish words to your laravel application.

### Required setup

In the `require` key of `composer.json` file add the following

    "stevenmaguire/elvish-ipsum": "dev-master"

Run the Composer update comand

    $ composer update

In your `config/app.php` add `'Stevenmaguire\ElvishIpsum\Provider'` to the end of the `$providers` array

```php
'providers' => array(

    'Illuminate\Foundation\Providers\ArtisanServiceProvider',
    'Illuminate\Auth\AuthServiceProvider',
    ...
    'Stevenmaguire\ElvishIpsum\Provider',

),
```
Also in your `config/app.php` add `'Elvish' => 'Stevenmaguire\ElvishIpsum\ElvishFacade'` to the end of the `$aliases` array

```php
'aliases' => array(

    'App'             => 'Illuminate\Support\Facades\App',
    'Artisan'         => 'Illuminate\Support\Facades\Artisan',
    'Auth'            => 'Illuminate\Support\Facades\Auth',
    ...
    'Elvish'          => 'Stevenmaguire\ElvishIpsum\ElvishFacade',

),
```

### Usage

When you want to include elvish text in your project, simply call one of the following methods:

```php
    $words = Elvish::getWords(10);
    $sentences = Elvish::getSentences(6);
    $paragraphs = Elvish::getParagraphs(2);
```
