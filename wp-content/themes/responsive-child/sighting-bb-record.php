
<?php 
/*
Template Name: Bumble Bee Sighting-record
Description: Step 1: in submitting a Bumble Bee Sighting. 
*/
get_header(); 
?>

	<div id="progress">

		<ul>

			<li><i class="icon-circle"></i> step 1: <br>
				record</li>

			<li><i class="icon-circle-blank"></i> step 2: <br>
				identify</li>

			<li style="border-right:none;"><i class="icon-circle-blank"></i> step 3:<br>
				finish</li>

		</ul>

		<div class="clear"></div>

	</div>

	<div class="grid col-940" style="margin-bottom:0px;">
		<h3 style="margin-bottom:2px;">Bumble Bee Sighting</h3>
		<i>This form is for submiting an individual bumble bee sighting.<small> *Required fields.</small></i><br><br>

		<hr>

		<div class="grid col-540" style="margin-bottom:0px;">

			<form style="margin-bottom:0px;">
				<h4 style="margin-bottom:2px;"><i class="icon-camera"></i> Add a Photo</h4>
				<!-- <input> <a href="" class="button">Upload new file</a><br> --> <!-- SZ: For Sightings-edit mode, displays exisiting photo filename with button to change file -->
				<small><i>*Required 1 photo, may upload up to 5 total.</i></small><br>
				<input type="file"><br>
				<a href="">Add another photo</a><br><br>

				<b>Date of Sighting:</b><br>
				Enter the date of your sighting in mm/dd/yyyy format.<br>
				<input><br><br>
	
				<b>Floral Association</b><br>
				If you know the species, please type it in:<br>
				<input><br><br>
	
				<b>Observation Notes</b><br>
				Please type any observations or comments you'd like to include with this sighting here:<br>
				<textarea></textarea>
			</form>

		</div>

		<div class="grid col-380 fit" id="location">
			<h4 style="margin-bottom:5px;"><i class="icon-map-marker"></i> Location</h4>
			<i>Enter your location manually or find it on the map below.</i><br>
			<img src="https://si0.twimg.com/profile_images/3416891195/eebfa01e010e8a6b28c87b1cd98202f5.jpeg" style="margin-bottom:10px;"><br><!-- SZ: When user clicks map, Map pop-up loads for larger map viewing/use -->
			
			<b>Site Name:</b><br>
			Give your location a site name.<br>
			<input type="text"><br>

			<b>Latitude:</b><br>
			<input type="text"><br>

			<b>Longitude:</b><br>
			<input type="text"><br>

			<b>Province/State</b>
			<select>
				<option>Select one</option>
			</select>

		</div>
	</div>

	<div class="grid col-940">

		<hr>

		<b>Photo Permission*</b><br>

		<input type="checkbox"> By creating a sighting, you agree that the photos you upload were taken by you or that you have permission of the copyright owner to upload them to Bumble Bee Watch.<br><br>
		If photo was not taken by you, please list the name of the photographer for attribution:<br>

		<input type="text" style="max-width:530px;"><br><br>

		<input type="submit" class="blue" value="Next"><!-- Link to BB ID Guide for BB Sighting -->

	</div>

<?php get_footer(); ?>