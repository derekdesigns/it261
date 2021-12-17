<!-- Gallery Assignment -->

<?php
include('config.php');
include('includes/header.php'); ?>
    
    <div id="wrapper">

<link href="css/styles.css" type="text/css" rel="stylesheet">

<?php

$people['<b>Billy_Joel</b>'] = 'bjoel_NY State of Mind.';
$people['<b>Gil Scott Heron</b>'] = 'heron_NY is Killing Me.';
$people['<b>Nanci Griffith</b>'] = 'griff_ Alt-Country Pioneer.';
$people['<b>Willy_Vlautin</b>'] = 'vlaut_Singer/Songwriter Turned Author.';
$people['<b>Richard_Thompson</b>'] = 'thomp_Guitarist/Lyricist Extraordinaire.';


// $name                    $image
// key                      $value
?>

<h1>A Few of My Musical Heros</h1>
<table>
<?php foreach($people as $name => $image) : ?>

<tr>
<td><img src="images/<?php echo substr($image, 0, 5);?>.jpg" alt="<?php echo str_replace('_', ' ', $name) ;?>"><td>
<td><?php  echo str_replace('_', ' ', $name) ;?></td>
<td><?php echo substr($image, 6, -1);?></td>
<td><img src="images/<?php echo substr($image, 0, 5);?>2.jpg" alt="<?php echo str_replace('_', ' ', $name) ;?>"><td>
</tr>
<?php endforeach ; ?>

</table>

</div> <!-- end wrapper -->

<?php include('includes/footer.php'); ?>