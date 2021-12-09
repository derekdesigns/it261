<?php // project-view.php

include('config.php');

// if isset $GET['today']

if(isset($_GET['id'])) {
    $id = (int)$_GET['id'];

} else {
    header('Location: project.php');
}

$sql = 'SELECT * FROM seattle_restaurants WHERE restaurant_id = '.$id.'';

$iConn = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME) or die(myError(__FILE__,__LINE__,mysqli_connect_error()));



$result = mysqli_query($iConn, $sql) or die(myError(__FILE__,__LINE__,mysqli_error($iConn)));

if(mysqli_num_rows($result) > 0) {
    // while loop- which will return the array
    // we are not echoing here- we are assigning our row first name to the variable first_name
    while($row = mysqli_fetch_assoc($result)) {
        $restaurant_name = stripslashes($row['restaurant_name']) ;
        $neighborhood = stripslashes($row['neighborhood']) ;
        $address = stripslashes($row['address']) ;
        $website = stripslashes($row['website']) ;
        $description = stripslashes($row['description']) ;
        $blurb = stripslashes($row['blurb']) ;
        $feedback = '';
        }    // ending while

    } else {
        $feedback = 'Something is not working!'; 
    }
include('includes/header.php');
?>

<div id="wrapper">
<main>
<h1>Welcome to <?php echo $restaurant_name ;?>'s page!</h1>

<?php
if($feedback == '') {
    echo '<ul>';
    echo '<li><b>Restaurant Name:</b> '.$restaurant_name.'</li>';
    echo '<li><b>Neighborhood:</b> '.$neighborhood.'</li>';
    echo '<li><b>Address:</b> '.$address.'</li>';
    echo '<li><b>Website:</b> '.$website.'</li>';
    echo '</ul>';
    echo '<p>'.$description.'</p>';
    echo '<p>Return back to the <a href="project.php">Project Page!</a></p>';
}


?>
</main>

<aside>
<?php 
if($feedback == '') {
echo '<img class="center" src="images/restaurants'.$id.'.jpg" alt=" '.$restaurant_name.' "> ';
echo '<p class="blurb">'.$blurb.'</p>';
}

?>

</aside>

</div> <!-- end wrapper -->
<?php

mysqli_free_result($result);
mysqli_close($iConn);

include('includes/footer.php');