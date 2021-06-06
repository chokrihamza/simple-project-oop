<?php

namespace Tutoriel\HTML;

use DateTime;

class Form
{
  private $data;
  public $surround = 'p';
  static $color = '';

  public function __construct($data = array())
  {
    $this->data = $data;
  }
  protected function surround($html)
  {
    return "<{$this->surround} >{$html}</{$this->surround}>";
  }
  protected function get_value($index)
  {
    return isset($this->data[$index]) ? $this->data[$index] : null;
  }
  public function input($name)
  {
    return $this->surround('<input type="text" name="' . $name . '" value="' . $this->get_value($name) . '"/>');
  }
  protected function col()
  {
    return self::$color;
  }

  public function submit()
  {
    return $this->surround("<button style='background-color:{$this->col()}' type='submit'>Send</button>");
  }

  public function date()
  {
    return new \DateTime();
  }
}