<?php 

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

<h1> <?php echo $headline; ?> </h1>

<?php echo $cliche; ?>

<div id="hero">
<img class="center" src="images/<?php echo $pic; ?>" alt="<?php echo $alt ?>">
</div>

<main>
<p><?php echo $content; ?></p>
</main>

<aside>

<h4>We highlight a different topic everyday. Full list below!</h4>

<ul class="reasons">
<li><a href="daily.php?today=Monday">Homelessness</a></li>
<li><a href="daily.php?today=Tuesday">Traffic</a></li>
<li><a href="daily.php?today=Wednesday">Cost of Living</a></li>
<li><a href="daily.php?today=Thursday">Crime</a></li>
<li><a href="daily.php?today=Friday">Weather</a></li>
<li><a href="daily.php?today=Saturday">Amazon</a></li>
<li><a href="daily.php?today=Sunday">The Seattle Freeze</a></li>
</ul>

</aside>

</div> <!-- end wrapper -->

<?php include('includes/footer.php'); ?>