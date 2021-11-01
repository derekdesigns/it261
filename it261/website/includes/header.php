<?php

define('THIS_PAGE', basename($_SERVER['PHP_SELF']));

$nav['index.php'] = 'Home';
$nav['about.php'] = 'About';
$nav['daily.php'] = 'Daily';
$nav['project.php'] = 'Project';
$nav['contact.php'] = 'Contact';
$nav['gallery.php'] = 'Gallery';

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
?>

<!doctype html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0" >
<link href="css/styles.css" type="text/css" rel="stylesheet">
<title> <?php echo $title; ?></title>

</head>
<body class=" <?php echo $body; ?> "
      style="<?php echo $bgcolor;?>">

    <header>
        <div class="header-inner">
        <a href="index.php">
        <img id="logo" src="images/logo.png" alt="logo">
        </a>
        <nav>
           <!-- <ul>
              <li><a href="">Home</a></li>
              <li><a href="">About</a></li>
              <li><a href="">Daily</a></li>
              <li><a href="">Project</a></li>
              <li><a href="">Contact</a></li>
              <li><a href="">Gallery</a></li> 
           </ul>  -->

<ul>
<?php 
foreach($nav as $key => $value) {
if(THIS_PAGE == $key) {
    echo '
    <li><a class="current" href="'.$key.' ">'.$value.'</a></li>
    ';
} else {
    echo '
    <li><a href="'.$key.' ">'.$value.'</a></li>
    ';
}

}
?>
</ul>
        </nav>
    </div> <!-- end header-inner -->
    </header>