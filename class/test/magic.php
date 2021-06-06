<?php
// the construct function 

class Student
{
  private static $id = 0;
  public $name;
  private $email;
  private $data = array();

  function __construct($name, $email)
  {
    self::$id = ++self::$id;
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
  function __toString()
  {
    return "$this->name, $this->email";
  }

  function __call($name, $arguments)
  {
    var_dump([$name, $arguments]);
  }
  static function __callStatic($name, $arguments)
  {
    if ($name == 'say_id') {
      return "The id is :" . self::$id;
    }
  }

  // the __isset() fucntion 
  public function __isset($name)
  {
    echo $name;
    return isset($this->data[$name]);
  }

  public function __unset($name)
  {
    $this->unset($name);
  }

  public function __sleep()
  {
    return array('name', 'email');
  }

  public function __wakeup()
  {
    // do somthing
  }

  public function __invoke()
  {
    echo "<h2 style='color:blue'>Hi $this->name are you okay your id is : " . self::$id . " .</h2>";
  }

  public function __debugInfo()
  {
    return array('student_name' => $this->name);
  }
  public static function __set_state(array $array)
  {
    var_dump($array);
    $obj = new Student('', '');
    $obj->name = $array['name'];
    $obj->email = $array['email'];

    return $obj;
  }


  private static function say_id()
  {
    echo   self::$id;
  }


  function __destruct()
  {
    
    echo "we destruct the student $this->name,with the email:$this->email";
  }
}

// instantiate that class
$student = new Student(name: "hamza", email: "ch4k4iha5z455841994@gmail.com");

var_dump($student);

// the __set method 

$student->phone = '200829514';
$student->age = 20;
$student->class = '2 math engineer';
var_dump($student);

// the __get method;

echo $student->phone;
echo $student->age;
echo $student->gendre;

// the __tostring method
// when we try to echo the object

echo $student;

// the __call and __callstatic

$student->hi('hamza', 'chokri');
//$student1 = new Student("fkjhg", "flgjh");
echo Student::say_id();

// the __isset() and unset()

echo isset($student->phone);

// the unset() function
//unset($student->name);

echo $student->name;

// __sleep()  and __wakeup()

echo "<h1>" . serialize($student) . "</h1>";

//echo unserialize($student);

//echo unserialize($student);

// invoke method when we invoke object;

$student();

// the __clone method clone->__clone-->return the value;
// the __debuginfo()  var_dump->__debuginfo()-->return the value;

var_dump($student);

// the __set_state()
echo var_export($student);