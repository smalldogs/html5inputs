Laravel HTML 5 Inputs
=====================
![Build Status](https://travis-ci.org/smalldogs/html5inputs.svg)
![Version](http://img.shields.io/github/tag/smalldogs/html5inputs.svg)

Composer package which adds support for HTML5 elements by extending Laravel's Form interface (e.g. Form::date())

Adds support for: color, date, datetime, datatime-local, month, number, range, search, tel, time, week. Laravel 
Form interfce supports Email & Url out of the box.

This package allows you to use HTML5 inputs the same way as normal text fields <code>Form::color('inputName');</code>

How to Install
--------------

On your command line

```bash
composer require "smalldogs/html5inputs"
```

Then add the service provider to your <code>app/config/app.php</code> providers array
```php
'providers' => array(
  'Smalldogs\Html5inputs\Html5InputsServiceProvider',
   //[..]
  'Illuminate\Foundation\Providers\ArtisanServiceProvider',
);
```
How to Use
----------

Just like your normal Form interface.

```php
Form::date('inputName', 'defaultValue', ['class' => 'myClass', 'required']);
```

Get the Goods Without the Package
-----------------------------------

I've made the heart of this package available as a standalone file that you can simply include in your global.php or 
composer autoload file, if that's more your speed: https://gist.github.com/brwnll/10927191.
