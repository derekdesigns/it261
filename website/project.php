<?php
include('config.php');
include('includes/header.php'); ?>

<!-- <link href="css/styles.css" type="text/css" rel="stylesheet"> -->

<div id="wrapper">
    
<main>
<h1> <?php echo $headline; ?> </h1>

<?php
$sql = 'SELECT * FROM seattle_restaurants';

// we need to connect to the database using mysqli_connect() function

$iConn = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME) or die(myError(__FILE__,__LINE__,mysqli_connect_error()));

// create a variable $result 
$result = mysqli_query($iConn, $sql) or die(myError(__FILE__,__LINE__,mysqli_error($iConn)));

// time for the if statement - if we have more than 0 rows... yippy skippy!

if(mysqli_num_rows($result) > 0) {
    // while loop- which will return the array
    while($row = mysqli_fetch_assoc($result)) {
        echo '<hr>';
        echo '<ul>';
        echo '<li>'.$row['restaurant_name'].'</li>';
        echo '<li>'.$row['neighborhood'].'</li>';
        echo '<li>'.$row['address'].'</li>';
        echo '<li>'.$row['website'].'</li>';
        echo '</ul>';
        echo '<h3>For more information about '.$row['restaurant_name'].', please click <a href="project-view.php?id='.$row['restaurant_id'].' ">here!</a></h3>';
        
    } // closing while

} else {
    echo 'Houston, we have a problem!!!';
} // closing if

mysqli_free_result($result);
mysqli_close($iConn);

?>

</main>

<aside>
<img src="images/pikeplace.avif" alt="pikeplace">
<img src="images/skyline.avif" alt="skyline">
<img src="images/bar.avif" alt="bar">
<img src="images/patio.avif" alt="patio">
</aside>

</div> <!-- end wrapper -->

<?php include('includes/footer.php'); ?>