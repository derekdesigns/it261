<?php

session_start();

if(!isset($_SESSION['username'])) {
    $_SESSION['msg'] = 'You must login first!';
    header('Location:login.php');
}

if(isset($_GET['logout'])) {
    session_destroy();
    unset($_SESSION['username']);
    header('Location:login.php');
}

include('config.php');
include('includes/header.php');


// Notification message
// if successful, welcome the user

if(isset($_SESSION['success'])) : ?>

<div class="success">
<h3>
<?php echo $_SESSION['success'];
unset($_SESSION['success']); ?>
</h3>
</div> <!-- end div success -->
<?php endif; 

if(isset($_SESSION['username'])) : ?>

<div class="welcome-logout">
<h3>Welcome <?php echo $_SESSION['username'];?></h3>
<p><a href="index.php?logout='1' ">Log out</a></p>
</div> <!-- end welcome-logout -->
<?php endif; ?>

<div id="wrapper">
<main>
<h1> <?php echo $headline; ?> </h1>
<h2 class="list">Pacific Northwest Alternatives</h2>

<?php
$sql = 'SELECT * FROM list_destinations_to_retire';

// we need to connect to the database using mysqli_connect() function

$iConn = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME) or die(myError(__FILE__,__LINE__,mysqli_connect_error()));

// create a variable $result 
$result = mysqli_query($iConn, $sql) or die(myError(__FILE__,__LINE__,mysqli_error($iConn)));

// time for the if statement - if we have more than 0 rows... yippy skippy!

if(mysqli_num_rows($result) > 0) {
    // while loop- which will return the array
    while($row = mysqli_fetch_assoc($result)) {
        echo '<ul>';
        echo '<li><b>City Name:</b> '.$row['city_name'].'</li>';
        echo '<li><b>State:</b> '.$row['state'].'</li>';
        echo '<li><b>Population:</b> '.$row['population'].'</li>';
        echo '</ul>';
        echo '<h3>For more information about '.$row['city_name'].', please click <a href="list-view.php?id='.$row['city_id'].' ">here!</a></h3>';
        echo '<hr>';
    } // closing while

} else {
    echo 'Houston, we have a problem!!!';
} // closing if

?>

<h2 class="list2">Southern US Alternatives</h2>

<?php

$sql = 'SELECT * FROM list_destinations_to_retire2';

// we need to connect to the database using mysqli_connect() function

$iConn = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME) or die(myError(__FILE__,__LINE__,mysqli_connect_error()));

// create a variable $result 
$result = mysqli_query($iConn, $sql) or die(myError(__FILE__,__LINE__,mysqli_error($iConn)));

// time for the if statement - if we have more than 0 rows... yippy skippy!

if(mysqli_num_rows($result) > 0) {
    // while loop- which will return the array
    while($row = mysqli_fetch_assoc($result)) {
        echo '<ul>';
        echo '<li><b>City Name:</b> '.$row['city_name'].'</li>';
        echo '<li><b>State:</b> '.$row['state'].'</li>';
        echo '<li><b>Population:</b> '.$row['population'].'</li>';
        echo '</ul>';
        echo '<h3>For more information about '.$row['city_name'].', please click <a href="list-view.php?id='.$row['city_id'].' ">here!</a></h3>';
        echo '<hr>';
    } // closing while

} else {
    echo 'Houston, we have a problem!!!';
} // closing if

mysqli_free_result($result);
mysqli_close($iConn);

?>

</main>

<aside>
<img src="images/pnwmountains.jpg" alt="pnw1">
<img src="images/pnwwater.jpg" alt="pnw2">
<img class="list" src="images/florida.jpg" alt="florida">
<img src="images/sw.jpg" alt="sw">
</aside>

</div> <!-- end wrapper -->

<?php include('includes/footer.php'); ?>