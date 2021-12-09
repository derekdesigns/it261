<?php  // server page- where we are connecting to our database
// a session is a way to store info, i.e. variables, to be used across several pages

session_start();

include('config.php');
// this is where the header.php will eventually be placed
// connect to the database

$iConn = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME) or die(myError(__FILE__,__LINE__,mysqli_connect_error()));

// register the user
// if (isset reg_user)

if(isset($_POST['reg_user'])) {
$first_name = mysqli_real_escape_string($iConn, $_POST['first_name']);
$last_name = mysqli_real_escape_string($iConn, $_POST['last_name']);
$email = mysqli_real_escape_string($iConn, $_POST['email']);
$username = mysqli_real_escape_string($iConn, $_POST['username']);
$password_1 = mysqli_real_escape_string($iConn, $_POST['password_1']);
$password_2 = mysqli_real_escape_string($iConn, $_POST['password_2']);

// we want the end user to fill everything out
// if it is empty, we are going to use a new function

if(empty($first_name)) {
    array_push($errors, 'First Name is required!');
}

if(empty($last_name)) {
    array_push($errors, 'Last Name is required!');
}

if(empty($email)) {
    array_push($errors, 'Email is required!');
}

if(empty($username)) {
    array_push($errors, 'Username is required!');
}

if(empty($password_1)) {
    array_push($errors, 'Password is required!');
}

if($password_1 !== $password_2) {
    array_push($errors, 'Passwords do not match!');
}

// check the username and password, selecting it from the table

$user_check_query = "SELECT * FROM users WHERE username = '$username' OR email = '$email' LIMIT 1";

$result = mysqli_query($iConn, $user_check_query) or die(myError(__FILE__,__LINE__,mysqli_error($iConn)));

$rows = mysqli_fetch_assoc($result);

if($rows) {

if($rows['username'] == $username) {
    array_push($errors, 'Username already exists!'); 
}

if($rows['email'] == $email) {
    array_push($errors, 'Email already exists!'); 
}

} // end big rows

// if everything is ok (no errors)...

if(count($errors) < 1) {
// introducing a new function- md5() - it spits out a 32 hex character value for password in database

$password = md5($password_1);

// insert registration data into the table inside our database- this will happen by using the INSERT

$query = "INSERT INTO users (first_name, last_name, email, username, password) VALUES ('$first_name', '$last_name', '$email', '$username', '$password')";

mysqli_query($iConn, $query);

$_SESSION['username'] = $username;
$_SESSION['success'] = $success;

header('Location:login.php');

} // end count

} // end if isset reg_user


// now, to communicate to the login.php

if(isset($_POST['login_user'])) {
    $username = mysqli_real_escape_string($iConn, $_POST['username']);
    $password = mysqli_real_escape_string($iConn, $_POST['password']);

if(empty($username)) {
    array_push($errors, 'Username is required!'); 
}

if(empty($password)) {
    array_push($errors, 'Password is required!'); 
}


// count the erros- and if they equal 0, we are happy

if(count($errors) == 0) {
    $password = md5($password);

// we have to make sure there is only one username and password
// we will SELECT our information from our table

$query = "SELECT * FROM users WHERE username = '$username' AND password = '$password' ";
}

$results = mysqli_query($iConn, $query);

// if our username and password is equal to one, life is good

if(mysqli_num_rows($results) == 1) {
    $_SESSION['username'] = $username;
    $_SESSION['success'] = $success;

    // if successful, it will direct to the index.php page
header('Location:index.php');

} else {
    array_push($errors, 'Wrong username/password combo!');
}

} // end isset login