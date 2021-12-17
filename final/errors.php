<?php  // this is the errors page

// logically, display a message if there are more than 0 errors
// if end-user did not fill in the email input field, the Error Message will display
// array_push($errors, 'Email is required')
// CANNOT echo an array- must use foreach loop


if(count($errors) > 0) : ?>
<div class="error">
<?php foreach($errors as $error) : ?>
<p> <?php echo $error; ?> </p>
<?php endforeach; ?>
</div>
<?php endif; ?>