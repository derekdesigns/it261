<?php

define('THIS_PAGE', basename($_SERVER['PHP_SELF']));

$nav['index.php'] = 'Home';
$nav['about.php'] = 'About';
$nav['daily.php'] = 'Daily';
$nav['project.php'] = 'Project';
$nav['contact.php'] = 'Contact';
$nav['gallery.php'] = 'Gallery';

// create a function for our navigation, so it is called out on our header.php page

function my_nav($nav) {
$my_return = '';
foreach($nav as $key => $value) {
if(THIS_PAGE == $key) {
$my_return .= '<li><a href=" '.$key.'" class="current">'.$value.'</a></li>';
} else {
$my_return .= '<li><a href=" '.$key.' ">'.$value.'</a></li>';
} // end else
} // end foreach
return $my_return;
} // end function

switch(THIS_PAGE) {
    case 'index.php':
    $title = 'Home page of our IT261 Website';
    $body = 'home';
    $headline = 'Welcome to our Home page of the IT261 Website!';
    break;

    case 'about.php':
        $title = 'About page of our IT261 Website';
        $body = 'about inner';
        $headline = 'Welcome to our About page of the IT261 Website!';
        break;

    case 'daily.php':
        $title = 'Daily page of our IT261 Website';
        $body = 'daily inner';
        $headline = 'Welcome to our Daily page where my Homework 3 Switch will display!';
        break;
    
    case 'project.php':
        $title = 'Project page of our IT261 Website';
        $body = 'project inner';
        $headline = 'Welcome to our Project page of the IT261 Website!';
        break;

    case 'contact.php':
        $title = 'Contact page of our IT261 Website';
        $body = 'contact inner';
        $headline = 'Welcome to our Contact page of the IT261 Website!';
        break;

    case 'thx.php':
        $title = 'Thank You page of our IT261 Website';
        $body = 'contact inner';
        $headline = 'Thank You For Your Patronage!!';
        break;

    case 'gallery.php':
        $title = 'Gallery page of our IT261 Website';
        $body = 'gallery inner';
        $headline = 'Welcome to our Gallery page of the IT261 Website!';
        break;
}

// this is the beginning of the switch for homework 3!!!
if(isset($_GET['today'])) {
    $today = $_GET['today'];
    } else {
    $today = date('l');
}

switch($today) {
    case 'Monday' :
    $cliche = '<h2>It\'s just another Manic Monday</h2>';
    $pic = 'thebangles.jpg';
    $bgcolor = 'background-color: gray';
    $alt = 'manic';
    $content = 'We find that Karaoke is the best way to battle the Monday doldrums!';
    break;

    case 'Tuesday' :
    $cliche = '<h2>Two For Tuesday!!</h2>';
    $pic = 'twoforone.jpg';
    $bgcolor = 'background-color: lightgreen';
    $alt = '2fer1';
    $content = '2 Good 2 Be True? Heck No!! All appetizers Two for the price of one every Tuesday.';
    break;

    case 'Wednesday' :
    $cliche = '<h2>Wino Wednesday</h2>';
    $pic = 'wineglass.avif';
    $bgcolor = 'background-color: orange';
    $alt = 'wine';
    $content = 'All bottles 25% off on Wednesdays!';
    break;

    case 'Thursday' :
    $cliche = '<h2>Thirsty Thursday!</h2>';
    $pic = 'beer.avif';
    $bgcolor = 'background-color: yellow';
    $alt = 'beer';
    $content = 'Happy Hour ALL NIGHT Thursdays, and live music every First Thursday of the month!';
    break;

    case 'Friday' :
    $cliche = '<h2>Get Your Freak On Every Friday!</h2>';
    $pic = 'freakyfriday.webp';
    $bgcolor = 'background-color: lightblue';
    $alt = 'freaky';
    $content = 'Would you switch your personality for a great deal this Friday?';
    break;    

    case 'Saturday' :
    $cliche = '<h2>Make Saturday Cider-Day!</h2>';
    $pic = 'cider.avif';
    $bgcolor = 'background-color: red';
    $alt = 'cider';
    $content = 'Guaranteed to mispronounce Saturday after two ciders...';
    break;

    case 'Sunday' :
    $cliche = '<h2>Sunday is Fun Day!</h2>';
    $pic = 'sports.jpg';
    $bgcolor = 'background-color: pink';
    $alt = 'balls';
    $content = 'Drink Specials during every live sports telecast on Sunday, no matter the season!';
    break;
}

// emailable form php!

// Cannot echo above the doctype
$first_name = '';
$last_name = '';
$email = '';
$order = '';
$menu = '';
$payment = '';
$comments = '';
$privacy = '';
$phone = '';

$first_name_Err = '';
$last_name_Err = '';
$email_Err = '';
$order_Err = '';
$menu_Err = '';
$payment_Err = '';
$comments_Err = '';
$privacy_Err = '';
$phone_Err = '';


if($_SERVER['REQUEST_METHOD'] == 'POST') {

if(empty($_POST['first_name'])) {
    $first_name_Err = 'Please fill out your First Name';
    } else {
        $first_name = $_POST['first_name'];
    }

if(empty($_POST['last_name'])) {
    $last_name_Err = 'Please fill out your Last Name';
    } else {
        $last_name = $_POST['last_name'];
    }

if(empty($_POST['email'])) {
    $email_Err = 'Please fill out your Email';
    unset($_POST['email']);  // invalid format
    } else {
        $email = $_POST['email'];
    }

if(empty($_POST['order'])) {
    $order_Err = 'Please check type of order';
    } else {
        $order = $_POST['order'];
    }

if(empty($_POST['menu'])) {
    $menu_Err = 'Please select your sandwich';
    } else {
        $menu = $_POST['menu'];
    }

if($_POST['payment'] == NULL) {
    $payment_Err = 'Please select your method of payment';
    } else {
        $payment = $_POST['payment'];
    }

if(empty($_POST['comments'])) {
    $comments_Err = 'Please share your comments with us!';
    } else {
        $comments = $_POST['comments'];
    }

if(empty($_POST['privacy'])) {
    $privacy_Err = 'You must agree to our privacy policy!!!!';
    } else {
        $privacy = $_POST['privacy'];
    }

if(empty($_POST['phone'])) {  // if empty, type in your number
    $phone_Err = 'Please include your phone number!';
    unset($_POST['phone']);  // invalid format
    } elseif(array_key_exists('phone', $_POST)){
    if(!preg_match('/^[0-9]{3}-[0-9]{3}-[0-9]{4}$/', $_POST['phone']))
    { // if you are not typing the requested format of xxx-xxx-xxxx, display Invalid format
    $phone_Err = 'Invalid format!';
    unset($_POST['phone']);  // invalid format
    } else {
    $phone = $_POST['phone'];
    }
}

// the logic is if post wines is NOT empty, then...
// we need to grab the wines and display (just like in our implode.php)

function my_menu() {
$my_return = '';
if(!empty($_POST['menu'])) {
$my_return = implode(', ', $_POST['menu'] );
}
return $my_return;

} // closes function



if(isset(
$_POST['first_name'],
$_POST['last_name'],
$_POST['email'],
$_POST['order'],
$_POST['menu'],
$_POST['payment'],
$_POST['comments'],
$_POST['privacy'],
$_POST['phone']
)) {

$to = 'murphwillsurf@gmail.com';
$subject = 'Test Email,'  .date('m/d/y') ;
$body = '
The first name is: '.$first_name.' '.PHP_EOL.'
The last name is: '.$last_name.' '.PHP_EOL.'
Order: '.$order.' '.PHP_EOL.'
Email: '.$email.' '.PHP_EOL.'
Phone: '.$phone.' '.PHP_EOL.'
Payment: '.$payment.' '.PHP_EOL.'
Menu: '.my_menu().' '.PHP_EOL.'
Comments: '.$comments.' '.PHP_EOL.'
';

$headers = array (
'From' => 'noreply@murphwillsurf.com',
'Reply-to' => ''.$email.'',
);

mail($to, $subject, $body, $headers);
header('Location: thx.php');

}

} // end if server request
?>



