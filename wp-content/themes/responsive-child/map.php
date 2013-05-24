
<?php 
/*
Template Name: Map
Description: Displays interactive Google Map with user submitted sightings. 
*/
get_header(); 
?>

<div class="grid col-940">

	<h3 style="margin-bottom:2px;">Map</h3>

	<hr>

	<div class="grid col-300">

		Province/State
		<select>
			<option>All</option>
		</select>

	</div>

	<div class="grid col-300">

		Species
		<select>
			<option>All</option>
			<option>Common Name/Scientific Name</option>
		</select>

	</div>

	<div class="grid col-300 fit">

		Year
		<select>
			<option>All</option>
			<option>2013</option>
		</select>

	</div>

	<a href="" class="button green" style="float:right;">Search</a>

</div>

<div class="clear"></div>

<div class="grid col-940">

	<img src="http://www.lib.utexas.edu/maps/world_maps/txu-oclc-264266980-world_pol_2008-2.jpg"><!-- SZ: Google Map goes here :D -->
	
</div>

<?php get_footer(); ?>