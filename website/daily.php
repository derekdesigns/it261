<?php
include('config.php');
include('includes/header.php'); ?>
    
    <div id="wrapper">
    
<main>
<h1> <?php echo $headline; ?> </h1>



<?php echo $cliche; ?>

<img src="images/<?php echo $pic; ?>" alt="<?php echo $alt ?>">
<p><?php echo $content; ?></p>


</main>

<aside>

<h2>Check out our Daily Specials</h2>

<ul>
<li><a href="daily.php?today=Monday">Monday</a></li>
<li><a href="daily.php?today=Tuesday">Tuesday</a></li>
<li><a href="daily.php?today=Wednesday">Wednesday</a></li>
<li><a href="daily.php?today=Thursday">Thursday</a></li>
<li><a href="daily.php?today=Friday">Friday</a></li>
<li><a href="daily.php?today=Saturday">Saturday</a></li>
<li><a href="daily.php?today=Sunday">Sunday</a></li>
</ul>

</aside>

</div> <!-- end wrapper -->

<?php include('includes/footer.php'); ?>