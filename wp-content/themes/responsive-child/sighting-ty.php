
<?php 
/*
Template Name: Sighting-thank you
Description: Step 3: for both Bumble Bee Sighting and Nest Sighting.
This page thanks the user for their sighting and offers them 2 dynamic links (view sighting, view profile).
*/
get_header(); 
?>

	<div id="progress">

		<ul>
			<li><i class="icon-circle"></i> step 1: <br>
				record</li>
			<li><i class="icon-circle"></i> step 2: <br>
				identify</li>
			<li style="border-right:none;"><i class="icon-circle"></i> step 3:<br>
				finish</li>
		</ul>

		<div class="clear"></div>

	</div>

	<div class="grid col-940" style="min-height:500px;">

		<h3 style="margin-bottom:2px;">Thank you</h3>

		<p>Thank you for submitting your sighting to Bumble Bee Watch.  Your sighting will help scientists’ document locations of these important pollinators and help inform effective conservation efforts.</p>

		<p>Next steps: Your photo will be reviewed by one of our bumble bee experts. If the species can be determined, your photo will be marked as verified and we will let you know. If the expert needs more information about your sighting, you may be contacted. Until your photo is verified, you can <a href="">edit your sighting</a>.</p>

		<p>Unverified sightings are marked with: <i class="icon-question-sign" title="This sighting is unverified"></i>.<br>
			When your sighting has been verified, it'll be marked with: <i class="icon-ok-circle" title="This sighting has been verified"></i>.</p>

		<p>It is possible that your photo will not be able to be verified (some species are notoriously difficult to ID from photos). If your photo is of a bumble bee, but an ID is not possible, don’t worry, your observations still help us understand where and when bumble bees are active. You can also see our page on <a href="">how to take effective photos of bumble bees for identification</a>.</p>

		<ul>

			<li><a href="http://localhost/BumbleBeeWatch/view-a-sighting/">View your sighting</a><br></li>
	
			<li><a href="">Return to your profile</a></li>
	
			<li><a href="mailto:bumblebees@xerces.org?Subject=BumbleBeeWatch%20Feedback">Provide Feedback</a></li>

		</ul>

	</div>

<?php get_footer(); ?>