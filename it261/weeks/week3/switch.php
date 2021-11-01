<?php
// class coffee exercise
// everyday will have its own coffee special'
// we will start with the isset() function
// then we will introduce our first GLOBAL variable
// our switch

// $variable = 'Life is good!';
// if(isset($variable)) {
// echo 'Yippy-Skippy!!!';
// } else {
// echo 'Not';
// }

// starting the switch
// if something is set, $today, then all is well
// else, today is TODAY

// GLOBAL VARIABLES are capitalized and start wit $_


if(isset($_GET['today'])) {
$today = $_GET['today'];
} else {
$today = date('l');
}

// switch

switch($today) {
    case 'Monday' :
    $coffee = '<h2>Monday is our Mocha Day!</h2>';
    $pic = 'mocha.avif';
    $alt = 'Mocha';
    $content = 'Our rich, full-bodied espresso combined with bittersweet mocha sauce and steamed milk, then topped with sweetened whipped cream. ';
    break;

    case 'Tuesday' :
    $coffee = '<h2>Tuesday is our Latte Day!</h2>';
    $pic = 'latte.jpeg';
    $alt = 'Latte';
    $content = 'classic coffee that\'s constructed with the two pillar ingredients: espresso and steamed milk. The word “latte” comes from the Italian word “caffè e latte”, which simply means “coffee & milk.';
    break;

    case 'Wednesday' :
    $coffee = '<h2>Wednesday is our Pumpkin Latte Day!</h2>';
    $pic = 'pumpkin.jpeg';
    $alt = 'Pumpkin Latte';
    $content = 'Our signature espresso and steamed milk with the celebrated flavor combination of pumpkin, cinnamon, nutmeg and clove. Enjoy it topped with whipped cream and real pumpkin-pie spices.';
    break;

    case 'Thursday' :
    $coffee = '<h2>Thursday is our Cap Latte Day!</h2>';
    $pic = 'cap.jpeg';
    $alt = 'Cappuccino';
    $content = 'A cappuccino is an Italian coffee drink that is traditionally prepared with equal parts double espresso, steamed milk, and steamed milk foam ';
    break;

    case 'Friday' :
    $coffee = '<h2>Friday is our Americano Day!</h2>';
    $pic = 'americano.jpeg';
    $alt = 'Americano';
    $content = 'Espresso shots topped with hot water create a light layer of crema culminating in this wonderfully rich cup with depth and nuance.';
    break;    

    case 'Saturday' :
    $coffee = '<h2>Saturday is our Regular Joe Day!</h2>';
    $pic = 'coffee.png';
    $alt = 'Regular Joe';
    $content = 'No Explanation necessary!!';
    break;

    case 'Sunday' :
    $coffee = '<h2>Sunday is our Green Tea Day!</h2>';
    $pic = 'green-tea.jpeg';
    $alt = 'Green Tea';
    $content = 'This green tea latte is a healthy and delicious drink, perfect for a chilly day. This recipe uses bagged green tea, foamy almond milk, and spices for flavor!';
    break;
}
?>

<!doctype html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Switch Classwork Exercise</title>
<style>
#wrapper {
    width: 940px;
    margin: 20px auto;
}

</style>
</head>

<body>
<div id="wrapper">
<h1>My Wonderful Switch Classwork Exercise!</h1>

<?php echo $coffee; ?>

<img src="images/<?php echo $pic; ?>" alt="<?php echo $alt ?>">
<p><?php echo $content; ?></p>

<h2>Check out our Daily Specials</h2>

<ul>
<li><a href="switch.php?today=Monday">Monday</a></li>
<li><a href="switch.php?today=Tuesday">Tuesday</a></li>
<li><a href="switch.php?today=Wednesday">Wednesday</a></li>
<li><a href="switch.php?today=Thursday">Thursday</a></li>
<li><a href="switch.php?today=Friday">Friday</a></li>
<li><a href="switch.php?today=Saturday">Saturday</a></li>
<li><a href="switch.php?today=Sunday">Sunday</a></li>
</ul>
</div> <!-- end wrapper -->
</body>
</html>
