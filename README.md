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

1. On your command line

```bash
composer require "smalldogs/html5inputs:2.*"
```

2. *REPLACE* the form alias with the new, extended facade, in `app/config/app.php`. 
```php
'aliases' => array(
  'Form' => 'Smalldogs\Html5inputs\Html5InputsFacade',
//'Form' => 'Illuminate\Support\Facades\Form',
};
```

3. Add the service provider to your `app/config/app.php` providers array
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

Changes from v1
---------------

The major difference between v1 and v2 is how the Form class is extended. Version 1 made use of the 
Form::macro() method, while v2 creates a Facade which extends `\Illuminate\Support\Facades\Form` directly. 
This allows for more direct similarity between how the new methods are handled, and the default methods (
such as "text" or "email").

This also enables [Form Model Binding](http://laravel.com/docs/4.2/html#form-model-binding) with the new HTML5
elements.

