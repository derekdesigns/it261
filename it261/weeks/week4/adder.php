<?php //adder-wrong.php

if (isset($_POST['num1'],     
          $_POST['num2'])) {
$num1 = $_POST['num1'];
$num2 = $_POST['num2'];
$myTotal = $num1 + $num2;
echo '<h2>You added '.$num1.' and '.$num2.' </h2>';
echo '<p> and the answer is </p>';
echo '<p style="color:red;"> '.$myTotal.' </p>';
echo '<p><a href="">Reset!</a></p>';
}
?>

<!doctype html>
<html lang="en"> 
<head>
<title>My Adder Assignment</title>
    <meta charset="UTF-8">
<style>
    p {
        color:red;
        text-align: center;
    }
    
    h1 {
        color:green;
        text-align: center;
    }
    
    h2 {
        font-size:1.5em;
        text-align: center;
    }
    
    form {
        width:350px;
        margin:0 auto;
        border:1px solid red;
        padding:10px;
    }
    
</style>
</head>
<body>  
<h1>Adder.php</h1>   
<form action="" method="post">
    <label> Enter the 1st number:</label>
    <input type="text" name="num1"><br>  
    <label>Enter the 2nd number:</label>
    <input type="text" name="num2"><br>  
  <input type="submit" value="Add Em!!">   
</form> 
</body>  
</html>

<!-- Lines 3-4: isset statement missing num2 -->
<!-- Line 8: structure around variable not correct- changed to '.variable.' -->
<!-- Line 8: no closing h2 tag -->
<!-- Line 10: style must be within the p tag -->
<!-- Line 11: closing p tag -->
<!-- Line 13: closing php tag -->
<!-- Line 52: missing closing double quote for value -->