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