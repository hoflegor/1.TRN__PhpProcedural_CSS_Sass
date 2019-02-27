<?php
require("vendor/autoload.php");
  use \BusinessDays\Calculator;

function nextWorkingDay($date, $days){
    $holidays = [
        new \DateTime('2017-05-01'),
        new \DateTime('2017-05-03')
    ];
    $freeWeekDays = [
        Calculator::SATURDAY,
        Calculator::SUNDAY
    ];
    $calculator = new Calculator();
    $startDate = new DateTime("$date");
    $calculator->setStartDate($startDate);
    $calculator->setFreeWeekDays($freeWeekDays);
    $calculator->setHolidays($holidays);
    $calculator->addBusinessDays($days);
    $result = $calculator->getDate();
    return $result->format('Y-m-d');
}

echo nextWorkingDay("2017-03-07", 10);