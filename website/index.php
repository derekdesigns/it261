<?php
include('config.php');
include('includes/header.php'); ?>
    
    <div id="wrapper">
    <div id="hero">



    </div> <!-- end hero -->
<main>

<?php
$photos = array(
    'photo1',
    'photo2',
    'photo3',
    'photo4',
    'photo5'
);

$photos[0] = 'photo1';
$photos[1] = 'photo2';
$photos[2] = 'photo3';
$photos[3] = 'photo4';
$photos[4] = 'photo5';

$i = rand(0, 4);
$selected_image = ''.$photos[$i].'.jpg';
echo '<img src="images/'.$selected_image.'" alt=" '.$photos[$i].' " >';
?>
<h1> <?php echo $headline; ?> </h1>

<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam nec rutrum lacus. Quisque ut ante at ligula sodales porta. In posuere congue nulla vel semper. Cras maximus lacinia lectus, at pharetra risus mattis vitae. Ut non orci elementum massa scelerisque placerat vel ut mi. Nullam varius, metus non lacinia iaculis, orci magna consectetur mauris, id tristique libero mauris sed tortor. Nullam at magna non augue interdum aliquet eget at dolor. Proin dignissim pellentesque mi, ut fringilla ante blandit vel. Nulla a ante a est dignissim feugiat. Etiam non tellus mattis, vulputate dolor vitae, consequat eros. Aliquam et sem vel est fermentum suscipit. Praesent sit amet posuere turpis. Morbi finibus luctus lorem, in pellentesque nisi mattis tincidunt. Ut egestas, elit id tincidunt tincidunt, velit purus tincidunt erat, non feugiat nulla felis id orci. Nunc interdum felis eget eros congue, nec ullamcorper diam fringilla. Aenean volutpat tempus mi sit amet dignissim.
</p>
</main>

<aside>

</aside>

<?php include('includes/footer.php'); ?>