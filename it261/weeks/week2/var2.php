<?php
// More on variables, arithmetic, and additional set functions

$a = '20';
$b = '30';
$c = $a + $b;
echo $c;
echo '<br>';

$a = '700';
$b = '330';
$c = $a - $b;
echo $c;
echo '<br>';

$a = '50';
$b = '5';
$c = $a * $b;
echo $c;
echo '<br>';

$money = 100;
$money /= 7;
echo $money;
echo '<br>';

$money = 100;
$money /= 7;
$friendly_money = number_format($money, 2);
echo $friendly_money;
echo '<br>';
// two new functions, rounding down and rounding up (floor and ceil)
$friendly_money = floor($money);
echo $friendly_money;
echo '<br>';
$friendly_money = ceil($money);
echo $friendly_money;
echo '<br>';

// Logic and calculations!!
// circumference of a circle- circumference = 2 pie r
$radius = '10';
$pie = 3.14;
$circumference = (2 * $pie) * $radius;
echo $circumference;

// always think logic first
// 22 degrees celsius = ? in farenheit?
// farenheit = (C * 9/5) + 32
$celsius = 14;
$farenheit = ($celsius * 9/5) + 32;
$friendly_farenheit = floor($farenheit);
echo '<br>';
echo ''.$friendly_farenheit.' degrees';

// logic and the exchange rate
// canadian = 100
// exchange rate = .79
echo '<br>';
$canada = 1433;
$canada *= .79;

echo $canada;

echo '<p>I have <b>$'.$canada.'</b> American dollars! </p>';



echo '<br>';
$canada = 1433;
$canada *= .79;
$friendly_canada = floor($canada);


echo '<p>I have <b>$'.$friendly_canada.'</b> American dollars! </p>';
