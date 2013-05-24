
<?php 
/*
Template Name: Profile
*/
get_header(); 
?>

	<div class="grid col-940">
		<div class="grid col-300">
			<img id="avatar" src="https://si0.twimg.com/profile_images/3416891195/eebfa01e010e8a6b28c87b1cd98202f5.jpeg">
			<h4>Eggly Bagelface</h4> <!-- Display user's full name here -->
			<ul class="settings">
				<li class="settings"><i class="icon-map-marker"></i> Portland, OR</li><!-- This displays the user's location, defined in their profile settings -->
				<li class="settings"><a href="http://localhost/BumbleBeeWatch/user-profile-edit/"><i class="icon-cog"></i> Settings</a></li> <!-- Links to Profile-edit page --> 
				<li class="settings"><a href=""><i class="icon-envelope"></i> Messages</a></li><!-- Links to My Comments page -->
			</ul>
			<a href="http://localhost/BumbleBeeWatch/bb-sighting/" class="blue button">Record a new bumble bee sighting!</a><br><br>

			<a href="http://localhost/BumbleBeeWatch/nest-sighting/" class="blue button" style="margin-bottom:80px;">Record a new nest sighting!</a>

		</div>
		
		<div class="grid col-620 fit">
			<h4>My Sightings</h4><!-- SZ: If user has no sightings, display text "You currently do not have any sightings. <a href="link to bumble bee sighting">Why not create one?</a> " -->
			<div class="border">
			
				<img class="bb-thumb" src="https://si0.twimg.com/profile_images/3416891195/eebfa01e010e8a6b28c87b1cd98202f5.jpeg">

				<div class="textrecent">

					<a href=""><h4>Common name displayed here <i class="icon-question-sign" title="This sighting is unverified"></i> <!-- Unverified status icon --></h4></a> <!-- Link to Individual Sightings page. Also, 50 char. limit -->
					<p><i class="icon-calendar"></i> Month 00, 2013</p> <!-- Display M-D-Y that sighting is submited -->
					<p style="padding-bottom:.3em;"><i class="icon-map-marker"></i> City, State abbr.</p> <!-- Display City, State abbrv. from User's profile, if available -->

				</div>

				<div style="float:right; margin-top:10%;"><a href="">Edit this sighting</a></div>

				<div class="clear"></div>

			</div> <!-- end sighting box -->

						<div class="border">
			
				<img class="bb-thumb" src="https://si0.twimg.com/profile_images/3416891195/eebfa01e010e8a6b28c87b1cd98202f5.jpeg">

				<div class="textrecent">

					<a href=""><h4>Common name displayed here <i class="icon-ok-circle" title="This sighting has been verified"></i> <!-- Verified status icon --></h4></a> <!-- Link to Individual Sightings page. Also, 50 char. limit -->
					<p><i class="icon-calendar"></i> Month 00, 2013</p> <!-- Display M-D-Y that sighting is submited -->
					<p style="padding-bottom:.3em;"><i class="icon-map-marker"></i> City, State abbr.</p> <!-- Display City, State abbrv. from User's profile, if available -->

				</div>

				<div class="clear"></div>

			</div> <!-- end sighting box -->

		</div> <!-- end my sightings col -->

	</div>

<?php get_footer(); ?>