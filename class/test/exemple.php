<?php
require('Item.php');
require('function.php');
require('test.php');
require('getdate.php');

use const App\Utils\Max;
use function App\Utils\sayHello;
use App\Modles\Item;
use MyProject\DateTime as MyDateTime;

$obj = new Item;

var_dump($obj);

echo Max;
sayHello();

$date = new MyDateTime;
$date1 = new DateTime;
var_dump($date);
var_dump($date1);

$day = new App\DateCalc();

echo $day->get_today();