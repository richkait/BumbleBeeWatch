
<?php 
/*
Template Name: Bumble Bee Species Indv. Profile
Description: This page displays a photo, description, "when to look" SVG graphic, map, and identifying features images (from Interactive ID Guide).
*/

get_header(); 
?>

	<div class="grid col-940">

		<div style="float:left;">

			<h4 style="margin-bottom:0px;">Common Name</h4>

			<h5 style="margin-top:.6em;"><i>Scientific Name</i></h5>

		</div>

		<div style="float:right;margin-top:20px;margin-bottom:15px;">

			<select>
				<option>Select a species</option>
				<option><i>Bombus vosnesenskii</i>&nbsp;/&nbsp;Yellowfaced bumble bee</option>
			</select>

		</div>

	</div>

	<div class="grid col-940">

		<hr>

		<div class="grid col-540">

			<figure>

				<img src="http://localhost/bumblebeewatch/wp-content/themes/responsive-child/images/affinis/stewart_2012_dal_pur_2.JPG"><!-- Displays main image of bumble bee -->

				<figcaption>Photo: Name Here</figcaption>

			</figure>

		</div>

		<div class="grid col-380 fit">
			<h5>Identifying Features</h5>
			Status: common<br>
			
			<div style="float:left; margin:5px 0;"><!-- DIV for each ID image & feature list in "Identifying Features." Ranges from 1 - 3 ID images per species. -->

				<img class="bb-thumb" style="float:left;" src="http://localhost/bumblebeewatch/wp-content/themes/responsive-child/images/affinis/affinis2.jpg"><!-- Displays ID image -->
			
				<ul style="float:left;"><!-- Displays list of identifying features -->
					<li>1</li>
					<li>2</li>
					<li>3</li>
				</ul>

			</div>

			<div style="float:left; margin:5px 0;"><!-- DIV for each ID image & feature list in "Identifying Features" -->

				<img class="bb-thumb" style="float:left;" src="http://localhost/bumblebeewatch/wp-content/themes/responsive-child/images/affinis/affinis2.jpg"><!-- Displays ID image -->
			
				<ul style="float:left;"><!-- Displays list of identifying features -->
					<li>1</li>
					<li>2</li>
					<li>3</li>
				</ul>

			</div>

		</div>

	</div>

	<div class="grid col-940">

		<hr>

		<div class="grid col-460">
			
			<h5>Range for this species</h5>

			<figure>

				<img style="border:1px solid grey;" src="http://localhost/bumblebeewatch/wp-content/themes/responsive-child/images/affinis/affinismap.svg"><!-- Display speciesmap.svg here -->
			
				<figcaption>Base map: <a href="http://commons.wikimedia.org/wiki/File:BlankMap-North_America-Subdivisions.svg" target="_blank">Wikimedia Commons</a></figcaption>

			</figure>
			
		</div>

		<div class="grid col-460 fit">

			<span style="float:left; margin:0 35px;"><h5>Floral Associations</h5><!-- Some of these will have external links, info in DB from RH -->

			<ul>
				<li>flower flower</li>
				<li>flower flower</li>
				<li>flower flower</li>
				<li>flower flower</li>
				<li>flower flower</li>
				<li>flower flower</li>
				<li>flower flower</li>
				<li>flower flower</li>
				<li>flower flower</li>
				<li>flower flower</li>
			</ul></span>

			<span style="float:left;"><h5>Look Alike Species</h5><!-- Some of these will have external links, info in DB from RH -->

			<ul>
				<li>bumble bee name</li>
				<li>bumble bee name</li>
				<li>bumble bee name</li>
			</ul></span><br><br>

			<div style="float:left;">
				<hr>
				<h5>When to Look</h5>
				<img src="http://localhost/bumblebeewatch/wp-content/themes/responsive-child/images/affinis/affinisphen.svg">
			</div>

		</div>

	</div>

<?php get_footer(); ?>