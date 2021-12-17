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
<?php endif;

// if isset $GET['today']

if(isset($_GET['id'])) {
    $id = (int)$_GET['id'];

} else {
    header('Location: list.php');
}

$sql = 'SELECT * FROM list_destinations_to_retire WHERE city_id = '.$id.'';

$iConn = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME) or die(myError(__FILE__,__LINE__,mysqli_connect_error()));



$result1 = mysqli_query($iConn, $sql) or die(myError(__FILE__,__LINE__,mysqli_error($iConn)));

if(mysqli_num_rows($result1) > 0) {
    // while loop- which will return the array
    // we are not echoing here- we are assigning our row first name to the variable first_name
    while($row = mysqli_fetch_assoc($result1)) {
        $city_name = stripslashes($row['city_name']) ;
        $state = stripslashes($row['state']) ;
        $population = stripslashes($row['population']) ;
        $description = stripslashes($row['description']) ;
        $blurb = stripslashes($row['blurb']) ;
        $feedback1 = '';
        }    // ending while

    } else {
        $feedback1 = 'Something is not working!'; 
    }

$sql = 'SELECT * FROM list_destinations_to_retire2 WHERE city_id = '.$id.'';

$iConn = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME) or die(myError(__FILE__,__LINE__,mysqli_connect_error()));



$result2 = mysqli_query($iConn, $sql) or die(myError(__FILE__,__LINE__,mysqli_error($iConn)));

if(mysqli_num_rows($result2) > 0) {
    // while loop- which will return the array
    // we are not echoing here- we are assigning our row first name to the variable first_name
    while($row = mysqli_fetch_assoc($result2)) {
        $city_name = stripslashes($row['city_name']) ;
        $state = stripslashes($row['state']) ;
        $population = stripslashes($row['population']) ;
        $description = stripslashes($row['description']) ;
        $blurb = stripslashes($row['blurb']) ;
        $feedback2 = '';
        }    // ending while

    } else {
        $feedback2 = 'Something is not working!'; 
    }
?>

<div id="wrapper">
<main>
<h1>Welcome to <?php echo $city_name ;?>'s page!</h1>

<?php
if($feedback1 == '' || $feedback2 == '') {
    echo '<ul>';
    echo '<li><b>City Name:</b> '.$city_name.'</li>';
    echo '<li><b>State:</b> '.$state.'</li>';
    echo '<li><b>Population:</b> '.$population.'</li>';
    echo '</ul>';
    echo '<p class="description">'.$description.'</p>';
    echo '<p>Return back to the <a href="list.php">List Page!</a></p>';
}


?>
</main>

<aside>
<?php 
if($feedback1 == '' || $feedback2 == '') {
echo '<img class="center" src="images/cities'.$id.'.jpg" alt=" '.$city_name.' "> ';
echo '<p class="blurb">'.$blurb.'</p>';
}

?>

</aside>

</div> <!-- end wrapper -->
<?php

mysqli_free_result($result1);
mysqli_free_result($result2);
mysqli_close($iConn);

include('includes/footer.php');