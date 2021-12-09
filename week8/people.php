<?php
// people.php
// people-view.php
// config file
// credentials
// will not work locally- must be uploaded to server
include('config.php');
include('includes/header.php');
// for the big database assignment, the header include would go right here!

// we need to grab out table and assign it to a variable
?>
<main>
<h1>Welcome to my People Page Class Exercise!</h1>

<?php
$sql = 'SELECT * FROM people';

// we need to connect to the database using mysqli_connect() function

$iConn = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME) or die(myError(__FILE__,__LINE__,mysqli_connect_error()));

// create a variable $result 

$result = mysqli_query($iConn, $sql) or die(myError(__FILE__,__LINE__,mysqli_error($iConn)));

// time for the if statement - if we have more than 0 rows... yippy skippy!

if(mysqli_num_rows($result) > 0) {
    // while loop- which will return the array
    while($row = mysqli_fetch_assoc($result)) {
        echo '<h3>For more information about '.$row['first_name'].', please click <a href="people-view.php?id='.$row['people_id'].' ">here!</a></h3>';
        echo '<ul>';
        echo '<li>'.$row['first_name'].'</li>';
        echo '<li>'.$row['last_name'].'</li>';
        echo '<li>'.$row['email'].'</li>';
        echo '</ul>';
        echo '<hr>';
    } // closing while

} else {
    echo 'Houston, we have a problem!!!';
} // closing if

mysqli_free_result($result);
mysqli_close($iConn);

?>
</main>

<aside>
<h3>My Mystery Aside</h3>

</aside>


</div> <!-- end wrapper -->
<?php
include('includes/footer.php');