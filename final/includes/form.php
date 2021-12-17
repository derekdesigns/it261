<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>" method="post">
<fieldset>
<legend><b>Retirement Awaits...</b></legend>

<label>First Name</label>
<input type="text" name="first_name" value="<?php if(isset($_POST['first_name'])) echo htmlspecialchars($_POST['first_name']); ?>">
<span class="error">
<?php echo $first_name_Err; ?>
</span> 

<label>Last Name</label>
<input type="text" name="last_name" value="<?php if(isset($_POST['last_name'])) echo htmlspecialchars($_POST['last_name']); ?>">
<span class="error">
<?php echo $last_name_Err; ?>
</span>

<label>Email</label>
<input type="email" name="email" value="
<?php if(isset($_POST['email'])) echo htmlspecialchars($_POST['email']); ?>
">
<span class="error">
<?php echo $email_Err; ?>
</span>

<label>Phone Number</label>
<input type="tel" name="phone" placeholder="xxx-xxx-xxxx" value="<?php if(isset($_POST['phone'])) echo htmlspecialchars($_POST['phone']); ?>">
<span class="error">
<?php echo $phone_Err; ?>
</span>

<label>Order</label>
<ul>
<li>
<input type="radio" name="order" value="single-issue"
<?php if(isset($_POST['order']) && $_POST['order'] == 'single-issue') echo 'checked="checked" '; ?>
>Single Issue: $9.95
</li>
<li>
<input type="radio" name="order" value="30-Day Subscription"
<?php if(isset($_POST['order']) && $_POST['order'] == '30-Day Subscription') echo 'checked="checked" '; ?>
>30 Day Subscription: $24.95
</li>
<li>
<input type="radio" name="order" value="One-Year Subscription"
<?php if(isset($_POST['order']) && $_POST['order'] == 'One-Year Subscription') echo 'checked="checked" '; ?>
>One Year Subsciption (Best Value): $49.95
</li>
</ul>
<span class="error">
<?php echo $order_Err; ?>
</span>

<label>Where do you want to retire?</label>
<ul>
<li>
<input type="checkbox" name="menu[]" value="pnw"
<?php if(isset($_POST['menu']) && in_array('pnw', $menu )) echo 'checked="checked" '; ?>
>Pacific Northwest
</li>

<li>
<input type="checkbox" name="menu[]" value="sw"
<?php if(isset($_POST['menu']) && in_array('sw', $menu )) echo 'checked="checked" '; ?>
>Southwest
</li>

<li>
<input type="checkbox" name="menu[]" value="tx"
<?php if(isset($_POST['menu']) && in_array('tx', $menu )) echo 'checked="checked" '; ?>
>Texas
</li>

<li>
<input type="checkbox" name="menu[]" value="se"
<?php if(isset($_POST['menu']) && in_array('se', $menu )) echo 'checked="checked" '; ?>
>Southeast
</li>

<li>
<input type="checkbox" name="menu[]" value="intnl"
<?php if(isset($_POST['menu']) && in_array('intnl', $menu )) echo 'checked="checked" '; ?>
>International
</li>
</ul>

<span class="error">
<?php echo $menu_Err; ?>
</span>

<label for="payment">Payment</label>
<select name="payment">
<option value="" NULL
<?php if(isset($_POST['payment']) && $_POST['payment'] == NULL) echo 'selected ="unselected"';?>
>Select One</option>
<option value="visa" 
<?php if(isset($_POST['payment']) && $_POST['payment'] == 'visa') echo 'selected ="selected"';?>
>Visa</option>
<option value="mc" 
<?php if(isset($_POST['payment']) && $_POST['payment'] == 'mc') echo 'selected ="selected"';?>
>Mastercard</option>
<option value="amex" 
<?php if(isset($_POST['payment']) && $_POST['payment'] == 'amex') echo 'selected ="selected"';?>
>American Express</option>
<option value="paypal" 
<?php if(isset($_POST['payment']) && $_POST['payment'] == 'paypal') echo 'selected ="selected"';?>
>PayPal</option>
<option value="venmo" 
<?php if(isset($_POST['payment']) && $_POST['payment'] == 'venmo') echo 'selected ="selected"';?>
>Venmo</option>
<option value="bitcoin" 
<?php if(isset($_POST['payment']) && $_POST['payment'] == 'bitcoin') echo 'selected ="selected"';?>
>Bitcoin</option>
</select>
<span class="error">
<?php echo $payment_Err; ?>
</span>

<label>Comments</label>
<textarea id="comments" name="comments">
<?php if(isset($_POST['comments'])) echo htmlspecialchars($_POST['comments']) ; ?>
</textarea>
<span class="error">
<?php echo $comments_Err; ?>
</span>

<label>Privacy</label>
<ul>
<li><input type="radio" name="privacy" value="agree"
<?php if(isset($_POST['privacy']) && $_POST['privacy'] == 'agree') echo 'checked="checked" '; ?>
>I agree!</li>
</ul>
<span class="error">
<?php echo $privacy_Err; ?>
</span>

<input id="submit" type="submit" value="Submit">
<p><a href="">Reset</a></p>


</fieldset>
</form>