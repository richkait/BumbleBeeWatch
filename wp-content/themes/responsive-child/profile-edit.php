
<?php 
/*
Template Name: Profile-edit
Description: Allows member to edit and update their profile information.
*/
get_header(); 
?>

	<div class="grid col-940">
		<div class="grid col-300">
			<img id="avatar" src="https://si0.twimg.com/profile_images/3416891195/eebfa01e010e8a6b28c87b1cd98202f5.jpeg">
			<h5>Upload a new photo:</h5>
			<input type="file">

		</div>
		
		<div class="grid col-620 fit">
			<h4>Settings</h4>
			<form>
				<b>First name*:</b> <br>
				<input type="text"><br><br><!-- auto fill with current info -->

				<b>Last name*:</b> <br>
				<input type="text"><br><br><!-- auto fill with current info -->

				<b>Email*:</b><br>
				<input type="email"><br><!-- auto fill with current info -->
				<small>Your email address is used for signing into your Bumble Bee Watch account and not displayed anywhere on the website. We will only use your email adress to contact you about a sighting, if needed.</small><br><br>

				<input type="checkbox"> Yes, I'd like to recieve the Bumble Bee Watch newsletter!<br><br><!-- auto fill with current info -->

				<b>City*</b>
				<input type="text" name="City"><br><br>

				<b>Province/State*:</b><br>
				<select>
					<option>Displays current user location</option><!-- auto fill with current info -->
				</select><br><br>

				<b>Zip Code*</b>
				<input type="text" name="Zip Code"><br><br>

				<hr>

				<b>Old Password:</b><br>
				<input><br><br>

				<b>New Password:</b><br>
				<input><br><br>

				<b>Confirm Password:</b><br>
				<input><br><br>

				<b>Privacy</b><br>
				<input type="checkbox">&nbsp;&nbsp;Keep my profile private: Don't allow other Bumble Bee Watch members to view my profile. When you submit a sighting, it will be displayed "By Anonymous." <br><br>

				<a href="" class="button green">Save</a>&nbsp;&nbsp;&nbsp; or &nbsp;&nbsp;&nbsp;  <a href="">Cancel</a>

			</form>


		</div> <!-- end my sightings col -->

	</div>

<?php get_footer(); ?>