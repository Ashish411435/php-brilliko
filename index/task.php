<?php
// $month1 = 3;
// $month2 = 10;
// $month3 = 0;
// $month4 = 5;

// $total_holidays = $month1 + $month2 + $month3 + $month4;
// $paying_per_holiday = 100;

// $total_amount = $total_holidays * $paying_per_holiday;

// echo $total_amount;


$month1 = 3;
$month2 = 10;
$month3 = 0;
$month4 = 5;

$paid_leaves = 6;

$paying_per_holiday = 100;
$paying_per_paid_leave = 300;

$total_holidays = $month1 + $month2 + $month3 + $month4;
$total_holidays_pay = $total_holidays * 100;

$total_paid_leaves = $paid_leaves * 300;


$all_total_amount = $total_holidays_pay + $total_holidays_pay;

echo $all_total_amount;
