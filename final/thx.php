<?php  // thx.php

// home page of final project
// after creating it, will not be able to access it unless logging in as a user or registering

session_start();

include('config.php');

// if the user has not logged in correctly, they will be directed to the login page

if(!isset($_SESSION['username'])) {
    $_SESSION['msg'] = 'You must login first!';
    header('Location:login.php');
}

if(isset($_GET['logout'])) {
    session_destroy();
    unset($_SESSION['username']);
    header('Location:login.php');
}

include('includes/header.php'); ?>

<?php
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

<h1><?php echo $headline; ?></h1>

<h2>Newsletter will be emailed within 24 hours.</h2>


<blockquote>
Retirement: It's nice to get out of the rat race, but you have to learn to get along with less cheese.
~ Gene Perret
</blockquote>

</main>

<aside>
<img src="images/retirement2.jpg" alt="retirement2">

</aside>

<?php include('includes/footer.php'); ?>