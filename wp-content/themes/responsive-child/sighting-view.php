
<?php 
/*
Template Name: Sighting-view
Description: Tempate to display user submitted sighting information (used with Bumble Bee Sighting or Nest Sighting).
Information included on page is user uploaded photo(s), survey answers, and location/date. 
To display multiple photos, I recommend a developer's license for SlideDeck2 or JQuery based ElastiSlide: http://tympanus.net/Development/Elastislide/index4.html.
*/

get_header(); 
?>

	<div class="grid col-940">

		<p style="float:right;"><a href="">Edit this sighting</a></p><!-- SZ: Only displays to logged in user/owner of sighting -->

		<div class="grid col-540">

			<h4 style="margin-bottom:0px;">Common Name <i class="icon-question-sign" title="This sighting is unverified"></i></h4> <!-- For Verified sightings: <i class="icon-ok-circle" title="This sighting has been verified"></i> -->
			<h5 style="margin-top:.6em;"><i>Scientific Name</i></h5>

			<!-- SZ: Displays user uploaded photo(s). If multiple photos, use JS gallery with carousel or other, if preferred -->
			<img src="http://www.columan.com/wp-content/uploads/2013/02/grumpy-cat-harlem-shake-640x360.jpg">

			<h4 style="margin-bottom:2px;">Nest Survey</h4>
			<hr>
			
			<b>Date that the nest was first noticed</b><br>
			Display text answer here.<br><br>

			<b>How much traffic was at the nest?</b><br>
			Display text answer here.<br><br>

			<b>Where was the nest located? *</b><br>
			Display text answer here.<br><br>

			<b>Describe any additional details about the nesting sight that might be of interest.</b><br>
			Display text answer here.<br><br>

			<b>Describe the surrounding habitat the best you can.</b><br>
			Display text answer here.<br><br>

			<b>How much sun does the nest receive?</b>
			Display text answer here.<br><br>

			<b>How many entrances does the nest have?</b><br>
			Display text answer here.<br><br>

			<b>What direction does the primary nest entrance face?</b><br>
			Display text answer here.<br><br>

			<b>List any observed nest materials that are being used.</b><br>
			Display text answer here.<br><br>

			<b>Have you ever noticed this area being used by bumble bees before? *</b><br>
			Display text answer here.<br><br>

			<b>If you answered yes to the previous question, how often have you noticed this nesting site being used by bumble bees?</b><br>
			Display text answer here.<br><br>

			<b>Have you ever noticed this area being used by another animal? *</b><br>		
			Display text answer here.<br>
			If yes, what kind of animal: Display text answer here.<br><br><!-- If "No" don't display this line -->

		</div>

		<div class="grid col-380 fit">

			<div style="margin-bottom:10px; margin-top:16px;">
			
				<img src="https://si0.twimg.com/profile_images/3416891195/eebfa01e010e8a6b28c87b1cd98202f5.jpeg" class="avatar-thumb"><!-- User's avatar --> 
			
				&nbsp;<a href="" style="vertical-align:bottom;">by User's name here</a><br><!-- SZ: link to user's profile --> <!-- If user has privacy settings on, display "by Anonymous" and don't link to user profile page -->

			</div>

			<img src="https://si0.twimg.com/profile_images/3416891195/eebfa01e010e8a6b28c87b1cd98202f5.jpeg" style="margin-bottom:10px;"><br>

			<i class="icon-map-marker"></i>&nbsp;Portland, OR<br> <!-- Displays City, State location here & not long/lat for privacy -->
			<i class="icon-calendar"></i>&nbsp;Month 00, 2013<br><!-- Displays Date of Sighting here (NOT date the sighting was submitted)-->

		</div>

	</div>

<?php get_footer(); ?>