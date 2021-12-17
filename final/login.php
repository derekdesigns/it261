<?php //login.php page
// input fields for username and password

include('server.php');
include('includes/header-form.php');
?>
<div id="wrapper">
<h1 class="center">Exit The Rat Race Here</h1>
<form action=" <?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post">
<fieldset>
<label><b>Username</b></label>
<input type="text" placeholder="Enter Username" name="username" value="<?php if(isset($_POST['username'])) echo $_POST['username']; ?>">

<label><b>Password</b></label>
<input type="password" placeholder="Enter Password" name="password">

<button type="submit" class="btn" name="login_user">Login</button>

<button type="button" onclick="window.location.href='<?php echo htmlspecialchars($_SERVER['PHP_SELF']) ; ?>' ">Reset</button>

<?php include('errors.php') ; ?>



</fieldset>
</form>

<h3 class="center">Not a member?</h3>
<span class="block"><a href="register.php">Register here!</a></span>

<img class="center" src="images/ratrace.jpg" alt="ratrace">

</div>  <!-- end wrapper -->
</body>
</html>