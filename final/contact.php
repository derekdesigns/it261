<?php  // contact.php

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
<h1> <?php echo $headline; ?> </h1>

<?php include('includes/form.php'); ?>

</main>

<aside>
<h2 class="newsletter">It Starts With A Plan</h2>
<img src="images/retirement1.jpg" alt="retirement1">

<p>
Americans as a whole aren’t saving nearly enough for retirement. In fact, an alarming number of people have absolutely nothing put away for their golden years.

That’s according to new data from Northwestern Mutual’s 2019 Planning & Progress Study, which found that 15% of Americans have no retirement savings at all.

Younger generations who have had limited time to save aren’t skewing the numbers either. For both Gen X-ers (defined here as ages 39 to 54) and baby boomers (defined as ages 55 to 73), 14% of survey respondents in each group say they have nothing saved for retirement.

Just 17% of respondents say they have between $1 and $74,999 earmarked for retirement, which falls short of the $1 million experts typically recommend.    
</p>
</aside>

</div> <!-- end wrapper -->

<?php include('includes/footer.php'); ?>