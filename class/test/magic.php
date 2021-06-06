<?php
// the construct function 

class Student
{
  private $name;
  private $email;
  private $data = array();

  function __construct($name, $email)
  {
    $this->name = $name;
    $this->email = $email;
  }


  function __set($name, $value)
  {
    $this->data[$name] = $value;
    echo "added successfully";
  }

  function __get($name)
  {
    if (isset($this->data[$name])) {
      return "<h1>{$this->data[$name]}</h1>";
    } else {
      echo "<h1>Sorrrry</h1>";
    }
  }


  function __destruct()
  {
    echo "we destruct the student $this->name,with the email:$this->email";
  }
}

// instantiate that class
$student = new Student(name: "hamza", email: "chokrihamza1994@gmail.com");

var_dump($student);

// the __set method 

$student->phone = '20099819';
$student->age = 20;
$student->class = '2 math engineer';
var_dump($student);

// the __get method;

echo $student->phone;
echo $student->age;
echo $student->gendre;