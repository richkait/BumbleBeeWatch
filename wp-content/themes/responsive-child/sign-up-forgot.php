
<?php 
/*
Template Name: Forgot Password 
Description: If member forgets password, they can have a reset link, etc. emailed to them.
*/
get_header(); 
?>

<div class="grid col-940">

	<div class="grid col-460" style="min-height:500px;"><!-- SZ: feel free to change wording, etc. to set this page up correctly. -->

		<h4>Forgot your password?</h4>
		<p>Please enter your account email address. You will recieve a reset link shortly.</p>

		<form style="width:65.217391%;">
			<!-- Add social login here -->

			<b>Email</b>
			<input type="text"><br><br>

			<input type="submit">

		</form>

	</div>


</div>

<?php get_footer(); ?>