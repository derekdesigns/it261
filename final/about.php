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

<link href="css/styles.css" type="text/css" rel="stylesheet">

<div id="wrapper">
    
<main>
<h1> <?php echo $headline; ?> </h1>

<h4>With Seattle’s cost of living nearly 50 percent above the national average, retirement in a less expensive city is one strategy to make savings go farther.</h4>
<p class="aboutpar">
Longtime Seattle resident Michelle Kelly is a disciplined saver with a stable work history in art and teaching, professions that she loves.
But as Kelly, 56, looks ahead to retirement, the mathematics of her personal finances lead to a sobering conclusion: She can’t afford to live in Seattle when she stops working.
Many city residents of modest means are in the same boat.</p>

<p>Living expenses in Seattle are now among the highest in the nation, according to the Cost of Living Index compiled by the Council for Community and Economic Research, based in Arlington, Virginia.
The cost of living in Seattle last year exceeded the national average by 49 percent, according to the index.
In the third quarter of 2017, the city was the sixth most expensive market in the nation.
For Kelly, who expects to earn about $42,000 this year as a part-time college art instructor, the changes have been keenly felt.
She routinely adjusted to rising prices during the city’s cyclical expansions.
Then, “in the last five years the cost of living has exploded exponentially,” she said.
Kelly says she is paying more for rent, food, clothing, insurance, health care and utilities, including power to heat her apartment.
One reason she likes the unit is because neighboring apartments above and below provide insulation against the cold.
Last fall Kelly began weighing when she could retire and how much money she needed — complex questions made more difficult by Seattle’s changing economic landscape.
</p>
</main>

<aside>
    <img src="images/michellekelly.jpg" alt="seattletimes">
    <p><i>This is an excerpt from the Seattle Times of one woman's story, written by George Erb.</i><a target="_blank" href="https://www.seattletimes.com/business/seattle-will-be-too-expensive-for-you-when-you-retire-longtimer-is-told/">
 Full Article</a></p>
</aside>

</div> <!-- end wrapper -->
<?php include('includes/footer.php'); ?>