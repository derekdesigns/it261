<?php
// intro to variables
// var.php
// a variable is a container for information

$name = 'Derek';
$weather = 'Today is a sunny day';
$body_temp = 98.6;
// my 98.6 is a float- if it were 98, it would be an integer.

echo $name;
echo '<br>';
echo 'My name is $name';
echo '<br>';
echo '<br>';
echo "My name is $name";
echo '<br>';
// if you use single quotes around a variable, the value will not display.
// if you use double quotes, the variable value will display.

echo 'My name is '.$name.'  ';
echo '<br>';
echo $weather;
echo '<br>';
echo $body_temp;
echo '<br>';
echo 'The normal body temperature is '.$body_temp. ' and all is well!';
echo '<br>';
$name = 'Murph';
echo $name;
echo '<br>';
$x = 20;
$y = 5;
echo $x;
echo '<br>';
$z = $x + $y;
echo '<br>';
echo $z;
$z = $x * $y;
echo '<br>';
echo $z;
echo '<br>';
// continue with our name

$first_name = 'Derek';
$last_name = 'Murphy';
echo $first_name.' '.$last_name;
echo '<br>';
echo ' '.$first_name.' '.$last_name.'';
echo '<br>';
echo 'Here are the names with a single\'s quote! '.$first_name.' '.$last_name.' ';
// punctuation challenges- inside single quotes, you MUST nest the variable with the following: '.$variable.'
// When you have an apostrophe, you must use ESCAPE before it: \'
echo '<br>';
echo "Here are the names with a double's quote! $first_name$last_name";
echo '<br>';
$name = 'Derek ';
$name .= 'Murphy';
echo $name;
echo '<br>';

$x = 20;
$x *= 2;
echo $x;

echo '<br>';

$x = 120;
$x /= 2;
echo $x;

echo '<br>';

$x = 120;
$x *= .09;
echo $x;

// Our first function - number_format()
echo '<br>';
$x =137;
$x /= 4;
// result is 34.25
$friendly_x = number_format($x, 1);
echo $friendly_x;
echo '<br>';
// Our second preset function - the date function
echo date('Y');
echo '<br>';
echo date ('l');
echo '<br>';
// arrays - you cannot ech an array
$fruit[] = 'orange';
$fruit[] = 'banana';
$fruit[] = 'grapes';
$fruit[] = 'apples';
$fruit[] = 'cherries';
echo '<br>';
echo $fruit[3];  // you can echo an indexed option
echo '<br>';
$fruit = array(
    'orange',
    'banana',
    'grapes',
    'apples',
    'cherries'
);

$fruit = [
    'orange',
    'banana',
    'grapes',
    'apples',
    'cherries',
    'strawberries'
];
// CANNOT echo an array
echo $fruit;
echo '<br>';
print_r($fruit);
echo '<br>';
var_dump($fruit);

echo '<br>';
// another array in the world of websites

$nav[]= 'Home';
$nav[]= 'About';
$nav[]= 'Daily';
$nav[]= 'Contact';
$nav[]= 'Gallery';

echo $nav[0];

echo '<br>';
// associative array

$nav['index.php']= 'Home';
$nav['about.php']= 'About';
$nav['daily.php']= 'Daily';
$nav['contact.php']= 'Contact';
$nav['gallery.php']= 'Gallery';

// index is the key of the array, and Home is the value (key, value) relationship
$nav = array(
    'index.php' => 'Home',
    'about.php' => 'About',
    'daily.php' => 'Daily',
    'contact.php' => 'Contact',
    'gallery.php' => 'Gallery'
);
echo '<pre>';
var_dump($nav);
echo '</pre>';

echo '<br>';

$show = 'The Crown';
$show_actor = 'Olivia Colman';
$show_genre = 'Historical Fiction';

echo 'My favorite series during 2020 was "'.$show.'", starring '.$show_actor. ', and it is a '.$show_genre.' ';


