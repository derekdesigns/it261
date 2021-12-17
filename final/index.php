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
<h2 class="indexmain">Perhaps You've Been Asking Yourself...</h2>
<h1 class="indexmain"> <?php echo $headline; ?> </h1>

<?php   
echo '<img src="images/'.$selected_image.'" alt=" '.$photos[$i].' " >';
?>
</main>

<aside>
<h2 class="indexaside">This Website Conceived With a Heavy Heart</h2>
<p>
I'm a Seaatle native. I've chosen to stay here for a multitude of reasons; friends, family, job prospects. And an abundance of natural beauty- the water, the mountains, the greenery...
</p>
<p>
But this place that I've lived and loved is no longer where I envision my best self.
</p>
</aside>
</div> <!-- end wrapper -->

<?php include('includes/footer.php'); ?>

