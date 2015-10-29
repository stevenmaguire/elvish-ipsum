Elvish Ipsum Generator
=====================

[![Latest Version](https://img.shields.io/github/release/stevenmaguire/elvish-ipsum.svg?style=flat-square)](https://github.com/stevenmaguire/elvish-ipsum/releases)
[![Software License](https://img.shields.io/badge/license-MIT-brightgreen.svg?style=flat-square)](LICENSE.md)
[![Build Status](https://img.shields.io/travis/stevenmaguire/elvish-ipsum/master.svg?style=flat-square&1)](https://travis-ci.org/stevenmaguire/elvish-ipsum)
[![Coverage Status](https://img.shields.io/scrutinizer/coverage/g/stevenmaguire/elvish-ipsum.svg?style=flat-square)](https://scrutinizer-ci.com/g/stevenmaguire/elvish-ipsum/code-structure)
[![Quality Score](https://img.shields.io/scrutinizer/g/stevenmaguire/elvish-ipsum.svg?style=flat-square)](https://scrutinizer-ci.com/g/stevenmaguire/elvish-ipsum)
[![Total Downloads](https://img.shields.io/packagist/dt/stevenmaguire/elvish-ipsum.svg?style=flat-square)](https://packagist.org/packages/stevenmaguire/yelp-php)

### tl;dr

Add random elvish words to your laravel application.

### Required setup

```bash
composer require stevenmaguire/elvish-ipsum
```

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

*Originally crafted to support a [project](https://github.com/stevenmaguire/elvish-me) I demo'd at a [Chicago Laravel Meetup](http://www.meetup.com/laravel-chicago/events/199295092/)*
