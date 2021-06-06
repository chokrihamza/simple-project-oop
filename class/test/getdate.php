<?php

namespace App;

use DateTime;

class DateCalc
{

  public function get_today()
  {
    $dt = new DateTime();
    return $dt->format('l');
  }
}