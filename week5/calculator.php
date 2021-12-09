<!doctype html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Calculator HW</title>
<link href="css/calculator_styles.css" type="text/css" rel="stylesheet">
</head>

<body>

<form action="
<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>
" method="post">
<fieldset>

<label for="name"><b>Name</b></label>
<input type="text" name="name" value="
<?php if(isset($_POST['name'])) echo htmlspecialchars($_POST['name']) ; ;?>
">

<label for="miles"><b>How many miles will you be travelling?</b></label>
<input type="text" name="miles" value="
<?php if(isset($_POST['miles'])) echo htmlspecialchars($_POST['miles']) ; ;?>
">

<label for="hours_per_day"><b>How many hours per day do you plan on driving?</b></label>
<input type="text" name="hours_per_day" value="
<?php if(isset($_POST['hours_per_day'])) echo htmlspecialchars($_POST['hours_per_day']) ; ;?>
">

<label for="gas_price"><b>Gas Price per Gallon</b></label>
<ul>
<li><input type="radio" name="gas_price" value="3.00"
<?php if(isset($_POST['gas_price']) && $_POST['gas_price'] == '3.00')  echo 'checked="checked" '; ?>>
$3.00</li>
<li><input type="radio" name="gas_price" value="3.50"
<?php if(isset($_POST['gas_price']) && $_POST['gas_price'] == '3.50')  echo 'checked="checked" '; ?>>
$3.50</li>
<li><input type="radio" name="gas_price" value="4.00"
<?php if(isset($_POST['gas_price']) && $_POST['gas_price'] == '4.00')  echo 'checked="checked" '; ?>>
$4.00</li>
</ul>

<label for="fuel_efficiency"><b>Fuel Efficiency</b></label>

<select name="fuel_efficiency">
    <option value="" NULL
    <?php if(isset($_POST['fuel_efficiency']) && $_POST['fuel_efficiency'] == NULL) echo 'selected= "unselected" ' ; ?>>
    Select Fuel Efficiency</option>
    <option value="40"
    <?php if(isset($_POST['fuel_efficiency']) && $_POST['fuel_efficiency'] == '40') echo 'selected= "selected" ' ; ?>>
    Tree-Hugger (40MPG)</option>
    <option value="30"
    <?php if(isset($_POST['fuel_efficiency']) && $_POST['fuel_efficiency'] == '30') echo 'selected= "selected" ' ; ?>>
    Average (30MPG)</option>
    <option value="20"
    <?php if(isset($_POST['fuel_efficiency']) && $_POST['fuel_efficiency'] == '20') echo 'selected= "selected" ' ; ?>>
    Sub-Par (20MPG)</option>
    <option value="10"
    <?php if(isset($_POST['fuel_efficiency']) && $_POST['fuel_efficiency'] == '10') echo 'selected= "selected" ' ; ?>>
    Climate Change Denier (10MPG)</option>

</select>

<input type="submit" value="Calculate!">
<p><a href="">Reset</a></p>
</fieldset>
</form>

<?php

if($_SERVER['REQUEST_METHOD'] == 'POST') {
    
    if(empty($_POST['name'])) {
        echo '<span class="error">Please fill out your name.</span>';
    }
    
    if(empty($_POST['miles'])) {
        echo '<span class="error">Please fill out how many miles you plan on travelling..</span>';
    }
    
    if(empty($_POST['hours_per_day'])) {
        echo '<span class="error">Please fill out how many hours per day you plan on driving.</span>';
    }
    
    if(empty($_POST['gas_price'])) {
        echo '<span class="error">Please fill out your anticipated fuel price.</span>';
    }
    
    if($_POST['fuel_efficiency'] == NULL) {
        echo '<span class="error">Please choose your fuel efficiency.</span>';
    }

if (isset(
    $_POST['name'],
    $_POST['miles'],
    $_POST['hours_per_day'],
    $_POST['gas_price'],
    $_POST['fuel_efficiency']
)) {

$name = $_POST['name'];   
$miles = $_POST['miles'];
$hours_per_day = $_POST['hours_per_day'];
$gas_price = $_POST['gas_price'];
$fuel_efficiency = (int)$_POST['fuel_efficiency'];
$speed  = 60; // average speed of 60 mph
if($fuel_efficiency == 0) {
    $fuel_efficiency = 1;
}
$total_cost = ($miles / $fuel_efficiency) * $gas_price;
$total_hours = $miles / $speed;
if($total_hours == 0) {
    $total_hours = 1;
}
$days = $total_hours / $hours_per_day ;

if(!empty( $name && $miles && $hours_per_day && $gas_price && $fuel_efficiency)) {

echo '
<div class="box">
<h2>Calculator Results</h2>
<p>'.$name.', here is a summary of your planned trip of '.$miles.' miles:<br>
Your vehicle\'s fuel efficiency rating of '.$fuel_efficiency.' MPG means that your gas charges will be $'.$total_cost.'.<br>
Your trip will take '.ceil($total_hours).' hours, which following your parameters, equates to '.ceil($days).' days.
</div>
';



} // close !empty

} // close isset

} // close server request

?>
</body>
</html>