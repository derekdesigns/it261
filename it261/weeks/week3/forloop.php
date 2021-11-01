<?php 
// for loops
// tricky!


for($x = 0; $x <= 21; $x+=3) {
  echo "The number is: $x <br>";
}

echo '<br>';

// a for loop for our famous celsius to farenheight converter

// do not call out the celsius variable OUTSIDE of the loop!!

for ($celsius = 0; $celsius <= 100; $celsius++) {
$farenheit = ($celsius * 9/5) + 32;
$friendly_farenheit = floor($farenheit);
echo '<b>Farenheit: </b> '.$friendly_farenheit.' <b>Celsius: </b> <span style ="color: red; font-weight: bold;">'.$celsius.' </span><hr> ';
 

}

// miles to kilometers
echo '<br>';

for($mile = 1; $mile <=100 ; $mile++) {
$km = ($mile * 1.60934); 

echo '<b>Miles: </b> '.$mile.' <b>Kilometers: </b> '.$km.' <hr>';

}
