<?php 
/*
Template Name: Nest Sighting-record
Description: Step 1: in submitting a Nest Sighting. 
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
		<h3 style="margin-bottom:2px;">Nest Sighting</h3>
		<i>This form is for submiting a bumble bee nest sighting.<small> *Required fields.</small></i><br><br>

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

				<b>How much traffic was at the nest?</b><br>
				<select>
					<option>Select one</option>
					<option>Less than 1 bee per minute</option>
					<option>1 to 5 bees per minute</option>
					<option>5 to 10 bees per minute</option>
					<option>More than 10 bees per minute</option>
				</select><br><br>
	
				<b>Where was the nest located? *</b><br>
				<select style="margin-bottom:8px;">
					<option>Select one</option>
					<option> Underground</option>
					<option> On the surface of the ground</option>
					<option> In a hollow cavity above ground (i.e. tree)</option>
					<option> Artificial nest box</option>
					<option>Other</option>
				</select><br>
				If other, please specify: <input><br><br>
	
				<b>Describe any additional details about the nesting sight or surrounding habitat that might be of interest.</b><br>
				ie. The nest was in a compost heap, partially shaded by a tree.<br>
				<textarea></textarea><br><br>
	
				<b>How much sun does the nest receive?</b>
				<select>
					<option>Select one</option>
					<option>All day</option>
					<option>Greater than 1/2 a day</option>
					<option>Less than 1/2 a day</option>
					<option>No sun</option>
				</select><br><br>
	
				<b>How many entrances does the nest have?</b><br>
				<select>
					<option>Select one</option>
					<option>1</option>
					<option>2</option>
					<option>3</option>
					<option>More than 3</option>
				</select><br><br>
	
				<b>What direction does the primary nest entrance face?</b><br>
				<select>
					<option>Select one</option>
					<option>North</option>
					<option>Northeast</option>
					<option>Northwest</option>
					<option>South</option>
					<option>Southeast</option>
					<option>Southwest</option>
					<option>West</option>
					<option>East</option>
				</select><br><br>
	
				<b>List any observed nest materials that are being used.</b><br>
				ie. Twigs, yard debris, brush piles, etc.<br>
				<textarea></textarea><br><br>
	
				<b>Have you ever noticed this area being used by bumble bees before? *</b><br>
				<input type="radio"> Yes
				<input type="radio"> No<br><br>
	
				<b>If you answered yes to the previous question, how often have you noticed this nesting site being used by bumble bees?</b><br>
				<select>
					<option>Select one</option>
					<option>For the last year</option>
					<option> For the last two years</option>
					<option> Greater than the last two years</option>
					<option> Intermittently over the last few years</option>
					<option> As long as I can remember</option>
				</select><br><br>
	
				<b>Have you ever noticed this area being used by another animal? *</b><br>		
				<input type="radio"> No<br>
				<input type="radio"> Yes<br>
				If yes, what kind of animal: <input type="text"><br><br>
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

		<input type="submit" class="blue" value="Next"><!-- SZ: Link to BB ID Guide for Nest Sighting -->

		<!-- SZ: Add clickable pagination "1/2/3" here -->

	</div>

<?php get_footer(); ?>