<?php
// the date function
echo date("l jS \of F Y h:i:s A");
echo '<br>';
echo date("H:i");
echo '<br>';
date_default_timezone_set('America/Los_Angeles');
echo date("H:i");
// why the change to a 24 hour clock?
// I will use an if/else statement, resulting in a different message based on the time of day
// if the time is less than 11, it's morning
// if the time is less than 16, it's afternoon
// else, it's evening
// we need to assign our date to a variable!
$time = date("H:i");
if($time <= 11) {
echo '<h2 style="color: yellow;">Good Morning Vietnam!</h2>';
} elseif($time <= 16) {
echo '<h2 style="color: lightblue;">Good Afternoon, Murphy</h2>';
} else {
echo '<h2 style="color: purple;">Time for beer! Cheers!!</h2>';
}
// we can place html elements inside our echo
