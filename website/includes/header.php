<!doctype html>
<html class="<?php
if(basename($_SERVER['PHP_SELF']) !== 'daily.php') {
    echo 'none';
} else {
    echo $background2;
}
?>" lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0" >
<link href="css/styles.css" type="text/css" rel="stylesheet">
<title> <?php echo $title; ?></title>
</head>
<body class=" <?php echo $body; ?> ">
    <header>
        <div class="header-inner">
        <a href="index.php">
        <img id="logo" src="images/logo.png" alt="logo">
        </a>
        <nav>
<ul>
<?php 
echo my_nav($nav);
?>
</ul>
</nav>

</div> <!-- end header-inner -->
</header>