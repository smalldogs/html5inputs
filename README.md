Laravel HTML 5 Inputs
=====================
![Build Status](https://travis-ci.org/smalldogs/html5inputs.svg)
[![License](http://img.shields.io/:license-bsd2-blue.svg?style=flat)](http://opensource.org/licenses/BSD-2-Clause)
![Version](http://img.shields.io/github/tag/smalldogs/html5inputs.svg?style=flat)
[![Packagist](https://img.shields.io/packagist/dt/smalldogs/html5inputs.svg?style=flat)](https://packagist.org/packages/smalldogs/html5inputs)

Composer package which adds support for HTML5 elements by extending Laravel's Form interface (e.g. Form::date())

Adds support for: `color`, `date`, `datetime`, `datatime-local`, `month`, `number`, `range`, `search`, `tel`, `time`, `week`. Laravel
Form interfce supports Email & Url out of the box.

This package allows you to use HTML5 inputs the same way as normal text fields <code>Form::color('inputName');</code>

Upgrade From v1
---------------

1. In your `composer.json` file, update the require line for this package to `2.*`

  ```json
"require": {
      "smalldogs/html5inputs": "2.*"
 },
```

2. In your command line, run `composer update`.


3. Follow Step 2 below.



New Installation
----------------

1. On your command line

  ```bash
composer require "smalldogs/html5inputs:2.*"
```

2. **REPLACE** the form alias with the new, extended facade, in `app/config/app.php`.
  ```php
'aliases' => array(
        'Form'            => 'Smalldogs\Html5inputs\Html5InputsFacade',
//  'Form'            => 'Illuminate\Support\Facades\Form',
};
```

3. Add the service provider to your `app/config/app.php` providers array
  ```php
  'providers' => array(
      'Smalldogs\Html5inputs\Html5InputsServiceProvider',
  );
```


How to Use
----------

Just like your normal Form interface.

```php
// Create a date field
Form::date('yourBirthday');

// Create a pre-populated month field for June 2014
Form::month('hottestMonth', '2014-06');

// Create an empty input with bootstrap styles
Form::search('searchBox', null, ['class' => 'form-control']);

// Auto-associate label with input (use the same name)
Form::label('favoriteColor', 'Select Your Favorite Color');
Form::color('favoriteColor', '#FFAE25');


// Use Form-model binding
$user = new User();
$user->phoneNumber = '123-555-5555';
{{ Form::model($user) }}
    {{ Form::label('phoneNumber', 'Update Your Phone #') }}
    {{ Form::tel('phoneNumber') }}
{{ Form::close() }}
```

Changes from v1
---------------

The major difference between v1 and v2 is how the Form class is extended. Version 1 made use of the
[Form::macro](http://laravel.com/docs/4.2/html#custom-macros) method, while v2 creates a Facade which extends `\Illuminate\Support\Facades\Form` directly.

This allows for more direct similarity between the handling of the new methods and the default methods (
such as "text" or "email").

This also enables [Form Model Binding](http://laravel.com/docs/4.2/html#form-model-binding) with the new HTML5
elements.

