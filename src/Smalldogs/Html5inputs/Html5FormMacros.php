<?php
/***
 * This file allows you to use the other 11 HTML elements the same way as text, email, and URL.
 *
 * 1. Create the folder /app/misc, or use your preferred directory
 * 2. Copy this form_macros.php into the directory
 * 3. Include this file with `require app_path().'/misc/form_macros.php';` or in composer.json
 *      "autoload": {
 *          "psr-0": {
 *              "Helpers": "app/misc"
 *          }
 *      }
 *
 * This file manually creates each macro, allowing you to customize any given input to add defaults
 *  or restrictions.
 *
 * *Note: The only alias which differs from the element input type is datetime-local, as the dash breaks
 *    the alias. Instead, create the element using Input::datetimelocal()
 ***/


/**
* Color input - http://www.w3.org/TR/html-markup/input.color.html
*
* The input element with a type attribute whose value is "color" represents a color-well control, for
* setting the element’s value to a string representing a simple color.
*
* Value - A string exactly seven characters long, consisting of the following parts, in exactly the
* following order:
*  A "#" character.
*  Six characters in the range 0–9, a–f, and A–F.
*
* Note - Color keywords (for example, strings such as “red” or “green”) are not allowed.
*/
Form::macro('color', function($name, $default = NULL, $attrs = array())
{
    $item = '<input type="color" name="'. $name .'" ';

    if ($default) $item .= 'value="'. $default .'" ';

    if (is_array($attrs))
    {
        foreach ($attrs as $a => $v)
        {
            $item .= ($a !== 0 ? $a . '="' : null) . $v .'" ';
        }
    }
    $item .= ">";

    return $item;
});

/**
* Date input - http://www.w3.org/TR/html-markup/input.date.html
*
* The input element with a type attribute whose value is "date" represents a control for setting the
* element’s value to a string representing a date.
*
* Value - A valid full-date as defined in [RFC 3339], with the additional qualification
*   that the year component is four or more digits representing a number greater than 0.
*/
Form::macro('date', function($name, $default = NULL, $attrs = array())
{
    $item = '<input type="date" name="'. $name .'" ';

    if ($default) $item .= 'value="'. $default .'" ';

    if (is_array($attrs))
    {
        foreach ($attrs as $a => $v)
        {
            $item .= ($a !== 0 ? $a . '="' : null) . $v .'" ';
        }
    }
    $item .= ">";

    return $item;
});

/**
* Datetime input - http://www.w3.org/TR/html-markup/input.datetime.html
*
* The input element with a type attribute whose value is "datetime" represents a control
* for setting the element’s value to a string representing a global date and time (with
* timezone information).
*
* Value - A valid date-time as defined in [RFC 3339], with these additional qualifications:
*  1. The literal letters T and Z in the date/time syntax must always be uppercase
*  2. The date-fullyear production is instead defined as four or more digits representing a
*     number greater than 0
*/
Form::macro('datetime', function($name, $default = NULL, $attrs = array())
{
    $item = '<input type="datetime" name="'. $name .'" ';

    if ($default) $item .= 'value="'. $default .'" ';

    if (is_array($attrs))
    {
        foreach ($attrs as $a => $v)
        {
            $item .= ($a !== 0 ? $a . '="' : null) . $v .'" ';
        }
    }
    $item .= ">";

    return $item;
});
/**
* Datetime-local input - http://www.w3.org/TR/html-markup/input.datetime-local.html
*
* The input element with a type attribute whose value is "datetime-local" represents a control
* for setting the element’s value to a string representing a local date and time (with no
* timezone information).
*
* Value - A string representing a local date and time. The following parts, in exactly the
*  following order:
*  1. A date.
*  2. The literal string "T".
*  3. A time.
*/
Form::macro('datetimelocal', function($name, $default = NULL, $attrs = array())
{
    $item = '<input type="datetime-local" name="'. $name .'" ';

    if ($default) $item .= 'value="'. $default .'" ';

    if (is_array($attrs))
    {
        foreach ($attrs as $a => $v)
        {
            $item .= ($a !== 0 ? $a . '="' : null) . $v .'" ';
        }
    }
    $item .= ">";

    return $item;
});
/**
* Month input - http://www.w3.org/TR/html-markup/input.month.html
*
* The input element with a type attribute whose value is "month" represents a control for
* setting the element’s value to a string representing a month.
*
* Value - A string representing a month. The following parts, in exactly the following order:
*  1. Four or more digits representing a number greater than 0.
*  2. The literal string "-".
*  3. Two digits, representing the month month, in the range 1 ≤ month, ≤ 12.
*/
Form::macro('month', function($name, $default = NULL, $attrs = array())
{
    $item = '<input type="month" name="'. $name .'" ';

    if ($default) $item .= 'value="'. $default .'" ';

    if (is_array($attrs))
    {
        foreach ($attrs as $a => $v)
        {
            $item .= ($a !== 0 ? $a . '="' : null) . $v .'" ';
        }
    }
    $item .= ">";

    return $item;
});
/**
* Number input - http://www.w3.org/TR/html-markup/input.number.html
*
* The input element with a type attribute whose value is "number" represents a precise control for
* setting the element’s value to a string representing a number.
*
* Value - A string representing a number.
*/
Form::macro('number', function($name, $default = NULL, $attrs = array())
{
    $item = '<input type="number" name="'. $name .'" ';

    if ($default) $item .= 'value="'. $default .'" ';

    if (is_array($attrs))
    {
        foreach ($attrs as $a => $v)
        {
            $item .= ($a !== 0 ? $a . '="' : null) . $v .'" ';
        }
    }
    $item .= ">";

    return $item;
});
/**
* Range input - http://www.w3.org/TR/html-markup/input.range.html
*
* The input element with a type attribute whose value is "range" represents an imprecise control for
* setting the element’s value to a string representing a number.
*
* Value - A string representing a number.
*/
Form::macro('range', function($name, $default = NULL, $attrs = array())
{
    $item = '<input type="range" name="'. $name .'" ';

    if ($default) $item .= 'value="'. $default .'" ';

    if (is_array($attrs))
    {
        foreach ($attrs as $a => $v)
        {
            $item .= ($a !== 0 ? $a . '="' : null) . $v .'" ';
        }
    }
    $item .= ">";

    return $item;
});
/**
* Search input - http://www.w3.org/TR/html-markup/input.search.html
*
* The input element with a type attribute whose value is "search" represents a one-line plain-text
* edit control for entering one or more search terms.
*
* Value - Any string that contains no line feed (U+000A, “LF”) or carriage return (U+000D, “CR”)
*   characters.
*/
Form::macro('search', function($name, $default = NULL, $attrs = array())
{
    $item = '<input type="search" name="'. $name .'" ';

    if ($default) $item .= 'value="'. $default .'" ';

    if (is_array($attrs))
    {
        foreach ($attrs as $a => $v)
        {
            $item .= ($a !== 0 ? $a . '="' : null) . $v .'" ';
        }
    }
    $item .= ">";

    return $item;
});
/**
* Tel input - http://www.w3.org/TR/html-markup/input.tel.html
*
* The input element with a type attribute whose value is "tel" represents a one-line plain-text edit
* control for entering a telephone number.
*
* Value - Any string that contains no line feed (U+000A, “LF”) or carriage return (U+000D, “CR”)
*   characters.
*/
Form::macro('tel', function($name, $default = NULL, $attrs = array())
{
    $item = '<input type="tel" name="'. $name .'" ';

    if ($default) $item .= 'value="'. $default .'" ';

    if (is_array($attrs))
    {
        foreach ($attrs as $a => $v)
        {
            $item .= ($a !== 0 ? $a . '="' : null) . $v .'" ';
        }
    }
    $item .= ">";

    return $item;
});
/**
* Time input - http://www.w3.org/TR/html-markup/input.time.html
*
* The input element with a type attribute whose value is "time" represents a control for setting the
* element’s value to a string representing a time (with no timezone information).
*
* Value - A string representing a time (with no timezone information). A valid partial-time as defined
*  in [RFC 3339].
*/
Form::macro('time', function($name, $default = NULL, $attrs = array())
{
    $item = '<input type="time" name="'. $name .'" ';

    if ($default) $item .= 'value="'. $default .'" ';

    if (is_array($attrs))
    {
        foreach ($attrs as $a => $v)
        {
            $item .= ($a !== 0 ? $a . '="' : null) . $v .'" ';
        }
    }
    $item .= ">";

    return $item;
});
/**
* Week input - http://www.w3.org/TR/html-markup/input.week.html
*
* The input element with a type attribute whose value is "week" represents a control for setting the
* element’s value to a string representing a week.
*
* Value - A string representing a week. The following parts, in exactly the following order:
*  1. Four or more digits representing year year, where year > 0.
*  2. The literal string "-W".
*  3. Two digits, representing the week week, in the range 1 ≤ week ≤ maxweek, where maxweek is either
*    52 or 53, depending on the particular year.
*/
Form::macro('week', function($name, $default = NULL, $attrs = array())
{
    $item = '<input type="week" name="'. $name .'" ';

    if ($default) $item .= 'value="'. $default .'" ';

    if (is_array($attrs))
    {
        foreach ($attrs as $a => $v)
        {
            $item .= ($a !== 0 ? $a . '="' : null) . $v .'" ';
        }
    }
    $item .= ">";

    return $item;
});