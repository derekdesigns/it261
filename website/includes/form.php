<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>" method="post">
<fieldset>
<label for="first_name">First Name</label>
<input type="text" name="first_name" value="
<?php if(isset($_POST['first_name'])) echo htmlspecialchars($_POST['first_name']); ?>
">
<span class="error">
<?php echo $first_name_Err; ?>
</span> 

<label for="last_name">Last Name</label>
<input type="text" name="last_name" value="
<?php if(isset($_POST['last_name'])) echo htmlspecialchars($_POST['last_name']); ?>
">
<span class="error">
<?php echo $last_name_Err; ?>
</span>

<label for="email">Email</label>
<input type="email" name="email" value="
<?php if(isset($_POST['email'])) echo htmlspecialchars($_POST['email']); ?>
">
<span class="error">
<?php echo $email_Err; ?>
</span>

<label for="phone">Phone Number</label>
<input type="tel" name="phone" placeholder="xxx-xxx-xxxx" value="
<?php if(isset($_POST['phone'])) echo htmlspecialchars($_POST['phone']); ?>
">
<span class="error">
<?php echo $phone_Err; ?>
</span>

<label for="order">Order</label>
<ul>
<li>
<input type="radio" name="order" value="dine-in"
<?php if(isset($_POST['order']) && $_POST['order'] == 'dine-in') echo 'checked="checked" '; ?>
>Dine-In
</li>
<li>
<input type="radio" name="order" value="pick-up"
<?php if(isset($_POST['order']) && $_POST['order'] == 'pick-up') echo 'checked="checked" '; ?>
>Pick-Up
</li>
<li>
<input type="radio" name="order" value="delivery"
<?php if(isset($_POST['order']) && $_POST['order'] == 'delivery') echo 'checked="checked" '; ?>
>Delivery
</li>
</ul>
<span class="error">
<?php echo $order_Err; ?>
</span>

<label for="menu">Menu</label>
<ul>
<li>
<input type="checkbox" name="menu[]" value="steak"
<?php if(isset($_POST['menu']) && in_array('steak', $menu )) echo 'checked="checked" '; ?>
>Steak Sandwhich
</li>
<li>
<input type="checkbox" name="menu[]" value="cubano"
<?php if(isset($_POST['menu']) && in_array('cubano', $menu )) echo 'checked="checked" '; ?>
>Cubano
</li>
<li>
<input type="checkbox" name="menu[]" value="shrimp"
<?php if(isset($_POST['menu']) && in_array('shrimp', $menu )) echo 'checked="checked" '; ?>
>Shrimp Po' Boy
</li>
<li>
<input type="checkbox" name="menu[]" value="veg"
<?php if(isset($_POST['menu']) && in_array('veg', $menu )) echo 'checked="checked" '; ?>
>Roasted Vegetable
</li>
<li>
<input type="checkbox" name="menu[]" value="cheese"
<?php if(isset($_POST['menu']) && in_array('cheese', $menu )) echo 'checked="checked" '; ?>
>Grilled Cheese
</li>
</ul>
<span class="error">
<?php echo $menu_Err; ?>
</span>

<label for="payment">Payment</label>
<select name="payment">
<option value="" NULL
<?php if(isset($_POST['payment']) && $_POST['payment'] == NULL) echo 'selected = "unselected" '; ?>
>Select One</option>
<option value="visa" 
<?php if(isset($_POST['payment']) && $_POST['payment'] == 'visa') echo 'selected = "selected" '; ?>
>Visa</option>
<option value="mc" 
<?php if(isset($_POST['payment']) && $_POST['payment'] == 'mc') echo 'selected = "selected" '; ?>
>Mastercard</option>
<option value="amex" 
<?php if(isset($_POST['payment']) && $_POST['payment'] == 'amex') echo 'selected = "selected" '; ?>
>American Express</option>
<option value="paypal" 
<?php if(isset($_POST['payment']) && $_POST['payment'] == 'paypal') echo 'selected = "selected" '; ?>
>PayPal</option>
<option value="venmo" 
<?php if(isset($_POST['payment']) && $_POST['payment'] == 'venmo') echo 'selected = "selected" '; ?>
>Venmo</option>
<option value="bitcoin" 
<?php if(isset($_POST['payment']) && $_POST['payment'] == 'bitcoin') echo 'selected = "selected" '; ?>
>Bitcoin</option>
</select>
<span class="error">
<?php echo $payment_Err; ?>
</span>

<label for="comments"></label>
<textarea name="comments">
<?php if(isset($_POST['comments'])) echo htmlspecialchars($_POST['comments']) ; ?>
</textarea>
<span class="error">
<?php echo $comments_Err; ?>
</span>

<label for="privacy">Privacy</label>
<ul>
<li><input type="radio" name="privacy" value="agree"
<?php if(isset($_POST['privacy']) && $_POST['privacy'] == 'agree') echo 'checked="checked" '; ?>
>I agree!</li>
</ul>
<span class="error">
<?php echo $privacy_Err; ?>
</span>

<input type="submit" value="Submit">
<p><a href="">Reset</a></p>


</fieldset>
</form>