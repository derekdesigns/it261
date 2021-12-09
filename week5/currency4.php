<!doctype html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Currency 4 - Extra Credit!</title>
<link href="css/extra_credit_styles.css" type="text/css" rel="stylesheet">
</head>

<body>
<h1>Extra Credit Videos</h1>
<form action="
<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post">
<fieldset>
<label for="name">NAME</label>
<input id="name" type="text" name="name" value="<?php if(isset($_POST['name'])) echo htmlspecialchars($_POST['name']); ?>">

<label for="email">EMAIL</label>
<input id="email" type="email" name="email" value="<?php if(isset($_POST['email'])) echo htmlspecialchars($_POST['email']); ?>">

<label for="amount">How much money do you have?</label>
<input id="amount" type="text" name="amount" value="<?php if(isset($_POST['amount'])) echo htmlspecialchars($_POST['amount']); ?>">

<label id="currency">Choose your currency</label>
<ul>
<!-- Our logic - we are asking if it has been set (isset) and if post is equal to our value -->
<li><input type="radio" name="currency" value=".013"
<?php if(isset($_POST['currency']) && $_POST['currency'] == '.013')  echo 'checked="checked" '; ?>>
Rubles</li>
<li><input type="radio" name="currency" value=".76"
<?php if(isset($_POST['currency']) && $_POST['currency'] == '.76')  echo 'checked="checked" '; ?>>
Canadian</li>
<li><input type="radio" name="currency" value="1.28"
<?php if(isset($_POST['currency']) && $_POST['currency'] == '1.28')  echo 'checked="checked" '; ?>>
Pounds</li>
<li><input type="radio" name="currency" value="1.18"
<?php if(isset($_POST['currency']) && $_POST['currency'] == '1.18')  echo 'checked="checked" '; ?>>
Euros</li>
<li><input type="radio" name="currency" value=".0094"
<?php if(isset($_POST['currency']) && $_POST['currency'] == '.0094')  echo 'checked="checked" '; ?>>
Yen</li>
</ul>

<label id="bank">Choose your banking institution</label>

<select name="bank">
    <option value="NULL">
    <?php if(isset($_POST['bank']) && $_POST['bank'] == NULL) echo 'selected= "unselected" ' ; ?>
    >Select one!</option>
    <option value="BOA"
    <?php if(isset($_POST['bank']) && $_POST['bank'] == 'BOA') echo 'selected= "selected" ' ; ?>
    >Bank of America</option>
    <option value="key"
    <?php if(isset($_POST['bank']) && $_POST['bank'] == 'key') echo 'selected= "selected" ' ; ?>
    >Key Bank</option>
    <option value="chase"
    <?php if(isset($_POST['bank']) && $_POST['bank'] == 'chase') echo 'selected= "selected" ' ; ?>
    >Chase</option>
    <option value="BECU"
    <?php if(isset($_POST['bank']) && $_POST['bank'] == 'BECU') echo 'selected= "selected" ' ; ?>
    >Boeing Credit Union</option>
    <option value="mattress"
    <?php if(isset($_POST['bank']) && $_POST['bank'] == 'mattress') echo 'selected= "selected" ' ; ?>
    >Mattress</option>

</select>


<input type="submit" value="Convert It!">
<p><a href="">Reset</a></p>
</fieldset>
</form>

<?php

if($_SERVER['REQUEST_METHOD'] == 'POST') {

// if our posts name, email, currency, and amount are empty, then we'll make a specific echo!

if(empty($_POST['name'])) {
    echo '<span class="error">Please fill out your name.</span>';
}

if(empty($_POST['email'])) {
    echo '<span class="error">Please fill out your email.</span>';
}

if(empty($_POST['amount'])) {
    echo '<span class="error">Please fill out your amount.</span>';
}

if(empty($_POST['currency'])) {
    echo '<span class="error">Please choose your currency.</span>';
}

// if post bank is NULL, please select your bank

if($_POST['bank'] == NULL) {
    echo '<span class="error">Please choose your banking institution.</span>';
}

if (isset(
    $_POST['name'],
    $_POST['email'],
    $_POST['amount'],
    $_POST['currency'],
    $_POST['bank']
)) {
$name     = $_POST['name'];
$email    = $_POST['email'];
$amount   = $_POST['amount'];
$currency = $_POST['currency'];
$bank     = $_POST['bank'];
$total    = $amount * $currency;
$friendly_total = floor($total);

if($total < 1000) {
    echo '
    
    <div class="embed-container">
    <div class="color1">
    <h2 style="color: white">I Do Need a Dollar Indeed!!</h2>
    <center>
    <iframe src="https://www.youtube.com/embed/nFZP8zQ5kzk"></iframe>
        </center>
        </div>
        </div>
    ';
} else {
    echo '
    
    <div class="embed-container">
    <div class="color2">
    <h2>Is There Anything Better Than $ For Nothin\'!?!</h2>
    <center>
    <iframe src="https://www.youtube.com/embed/JRDgihVDEko"></iframe>
        </center>
        </div>
        </div>
    ';
}

} // close isset
 


} // server request


?>
<ul>
    <li><a href="https://validator.w3.org/nu/?doc=http%3A%2F%2Fwww.dermur7.dreamhosters.com%2Fit261%2Fweeks%2Fweek5%2Fcurrency4.php"><h6>HTML Validation</h6></a></li>
    <li><a href="https://jigsaw.w3.org/css-validator/validator?uri=http%3A%2F%2Fwww.dermur7.dreamhosters.com%2Fit261%2Fweeks%2Fweek5%2Fcurrency4.php&profile=css3svg&usermedium=all&warning=1&vextwarning=&lang=en"><h6>CSS Validation</h6></a></li>
</ul>
</body>
</html>