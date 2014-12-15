<?php namespace Smalldogs\Html5Inputs;

class Html5InputsFacade extends \Illuminate\Support\Facades\Form {

  /**
   * Create a color input field.
   *
   * @param  string  $name
   * @param  string  $value
   * @param  array   $options
   * @return string
   */
  public static function color($name, $value = null, $options = array())
  {
      return static::input('color', $name, $value, $options);
  }

  /**
   * Create a date input field.
   *
   * @param  string  $name
   * @param  string  $value
   * @param  array   $options
   * @return string
   */
  public static function date($name, $value = null, $options = array())
  {
      return static::input('date', $name, $value, $options);
  }

  /**
   * Create a datetime input field.
   *
   * @param  string  $name
   * @param  string  $value
   * @param  array   $options
   * @return string
   */
  public static function datetime($name, $value = null, $options = array())
  {
      return static::input('datetime', $name, $value, $options);
  }

  /**
   * Create a datetimelocal input field.
   *
   * @param  string  $name
   * @param  string  $value
   * @param  array   $options
   * @return string
   */
  public static function datetimelocal($name, $value = null, $options = array())
  {
    return static::input('datetimelocal', $name, $value, $options);
  }

  /**
   * Create a month input field.
   *
   * @param  string  $name
   * @param  string  $value
   * @param  array   $options
   * @return string
   */
  public static function month($name, $value = null, $options = array())
  {
    return static::input('month', $name, $value, $options);
  }

  /**
   * Create a number input field.
   *
   * @param  string  $name
   * @param  string  $value
   * @param  array   $options
   * @return string
   */
  public static function number($name, $value = null, $options = array())
  {
    return static::input('number', $name, $value, $options);
  }

  /**
   * Create a range input field.
   *
   * @param  string  $name
   * @param  string  $value
   * @param  array   $options
   * @return string
   */
  public static function range($name, $value = null, $options = array())
  {
    return static::input('range', $name, $value, $options);
  }

  /**
   * Create a search input field.
   *
   * @param  string  $name
   * @param  string  $value
   * @param  array   $options
   * @return string
   */
  public static function search($name, $value = null, $options = array())
  {
    return static::input('search', $name, $value, $options);
  }

  /**
   * Create a tel input field.
   *
   * @param  string  $name
   * @param  string  $value
   * @param  array   $options
   * @return string
   */
  public static function tel($name, $value = null, $options = array())
  {
    return static::input('tel', $name, $value, $options);
  }

  /**
   * Create a time input field.
   *
   * @param  string  $name
   * @param  string  $value
   * @param  array   $options
   * @return string
   */
  public static function time($name, $value = null, $options = array())
  {
    return static::input('time', $name, $value, $options);
  }

  /**
   * Create a week input field.
   *
   * @param  string  $name
   * @param  string  $value
   * @param  array   $options
   * @return string
   */
  public static function week($name, $value = null, $options = array())
  {
    return static::input('week', $name, $value, $options);
  }
}