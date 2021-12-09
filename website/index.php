<?php  // index.php

// home page of website
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

<div id="wrapper">
<h1> <?php echo $headline; ?> </h1>

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
<h3>Welcome
<?php echo $_SESSION['username']; ?>
!</h3>
<p><a href="index.php?logout='1' ">Log out</a></p>
</div> <!-- end welcome-logout -->
<?php endif; ?>

<div id="hero">
<?php   
echo '<img src="images/'.$selected_image.'" alt=" '.$photos[$i].' " >';
?>
<pre>
    
<br>
$photos = array(
    'photo1',
    'photo2',
    'photo3',
    'photo4',
    'photo5'
);

$photos[0] = 'photo1';
$photos[1] = 'photo2';
$photos[2] = 'photo3';
$photos[3] = 'photo4';
$photos[4] = 'photo5';

$i = rand(0, 4);
$selected_image = ''.$photos[$i].'.jpg';

</pre>

</div> <!-- end hero -->

<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam nec rutrum lacus. Quisque ut ante at ligula sodales porta. In posuere congue nulla vel semper. Cras maximus lacinia lectus, at pharetra risus mattis vitae. Ut non orci elementum massa scelerisque placerat vel ut mi. Nullam varius, metus non lacinia iaculis, orci magna consectetur mauris, id tristique libero mauris sed tortor. Nullam at magna non augue interdum aliquet eget at dolor. Proin dignissim pellentesque mi, ut fringilla ante blandit vel. Nulla a ante a est dignissim feugiat. Etiam non tellus mattis, vulputate dolor vitae, consequat eros. Aliquam et sem vel est fermentum suscipit. Praesent sit amet posuere turpis. Morbi finibus luctus lorem, in pellentesque nisi mattis tincidunt. Ut egestas, elit id tincidunt tincidunt, velit purus tincidunt erat, non feugiat nulla felis id orci. Nunc interdum felis eget eros congue, nec ullamcorper diam fringilla. Aenean volutpat tempus mi sit amet dignissim.
</p>

</div> <!-- end wrapper -->

<?php include('includes/footer.php'); ?>

