<?php
class Form{
  private $data;
  public $surround='p';

  public function __construct($data=array())
  {
    $this->data=$data;
  }
  private function surround($html){
   return "<{$this->surround}>{$html}</{$this->surround}>";
  }
  private function get_value($index){
   return isset($this->data[$index]) ?$this->data[$index]:null;
  }
  public function input($name){
    return $this->surround('<input type="text" name="'.$name.'" value="'.$this->get_value($name).'"/>')  ;
  }
  public function submit(){
    return $this->surround("<button type='submit'>Send</button>");
  }
}