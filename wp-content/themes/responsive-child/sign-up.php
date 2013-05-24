
<?php 
/*
Template Name: Sign Up/In
Description: Members can sign in with their exisiting account. New users can create an account.
*/
get_header(); 
?>

<div class="grid col-940">

	<div class="grid col-460">

		<h4>Sign In</h4>
		<p>Already have an account? Go ahead and sign in.</p>

		<form style="width:65.217391%;">
			<!-- Add social login here -->

			<b>Email</b>
			<input type="text"><br><br>
	
			<b>Password</b>
			<input type="text"><br><br>
	
			<a class="button" href="http://localhost/BumbleBeeWatch/user-profile/">Sign in</a><!-- Takes member to their profile page -->
			<p><input type="checkbox"> Keep me signed in on this computer<br></p>
			<hr>
			<p><small><a href="">Forgot your password? Click here to retrieve it.</a></small></p>

		</form>

	</div>

	<div class="grid col-460 fit">

		<h4>Sign Up</h4>
		<p>Don't have an account? Fill out the information below to create your account. <small style="color:red;">* information is required.</small></p>

		<form style="width:65.217391%;">
			<!-- Add social login here -->

			<b>First name*</b>
			<input type="text" name="nameFirst"><br><br>
		
			<b>Last name*</b>
			<input type="text" name="nameLast"><br><br>
		
			<b>Email*</b>
			<input type="text" name="email"><br>
			<small>Your email address is used for signing into your Bumble Bee Watch account and not displayed anywhere on the website. We will only use your email adress to contact you about a sighting, if needed.</small><br><br>
		
			<b>Password*</b>
			<input type="text" name="password"><br><br>

			<b>City*</b>
			<input type="text" name="City"><br><br>
		
			<b>Province/State*</b>
			<select>
				<option value="instruction">select one</option>
				<option value="Alaska">Alaska</option>
			</select><br><br>

			<b>Zip Code*</b>
			<input type="text" name="Zip Code"><br><br>
		
			<b>Upload a profile photo</b><br>
			<i>You can leave this blank and upload a photo later.</i><br>
			<input type="file"><br><br>
		
			<p><input type="checkbox"> <b>* Yes, I have read and agree to the terms and conditions.</b> <small><a href="">Read Terms and Conditions.</a></small></p><!-- SZ: Terms & Conditions open in an in browser pop-up window -->
			<!-- For Terms & Conditions content from RH/Xerces will draft this -->
		
			<p><input type="checkbox"> <b>Yes, I'd like to recieve the Bumble Bee Watch newsletter!</b></p>
		
			<input type="submit" value="Sign up" class="button">
		
		</form>

	</div>

</div>

<?php get_footer(); ?>