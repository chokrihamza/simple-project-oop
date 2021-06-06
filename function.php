<?php


$a = 10;
$add = function ($a, $b) {
  return $a + $b;
};

$adding = function () use ($add) {
  $a = 20;
  echo $add(20, 20);
  echo $a;
};

$adding();
echo $a;

///
class Student
{
  private static $id = 30;
  private $name = "hamza";
}

$get_id = static function () {
  return Student::$id;
};

$get_name = function () {
  return $this->name;
};

$student = new Student;

echo (Closure::bind($get_id, null, 'Student'))();
echo (Closure::bind($get_name, new Student, 'Student'))();