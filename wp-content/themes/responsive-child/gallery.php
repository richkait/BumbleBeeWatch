
<?php 
/*
Template Name: Gallery
Description: Displays member submitted sightings. Default display is 20 most recent sightings. In a search, when more than 20 sightings are returned, up to 20 will be displayed per page.
If desired, you might write a @media for mobile capping sights displayed per page at 4-8 per page.
*/
get_header(); 
?>

<div class="grid col-940">

	<h3 style="margin-bottom:2px;">Gallery</h3>

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

	<ul class="gallery">

		<!-- All link to corresponding Indv. Sighting Page --> <!-- Title attribute is Common Name for species with un/verified icon -->

		<li><a href="http://localhost/BumbleBeeWatch/view-a-sighting/" title="Common name here"><img src="https://si0.twimg.com/profile_images/3416891195/eebfa01e010e8a6b28c87b1cd98202f5.jpeg"></a></li>

		<li><a href="" title="Common name here"><img src="https://si0.twimg.com/profile_images/3416891195/eebfa01e010e8a6b28c87b1cd98202f5.jpeg"></a></li>

		<li><a href="" title="Common name here"><img src="https://si0.twimg.com/profile_images/3416891195/eebfa01e010e8a6b28c87b1cd98202f5.jpeg"></a></li>

		<li><a href="" title="Common name here"><img src="https://si0.twimg.com/profile_images/3416891195/eebfa01e010e8a6b28c87b1cd98202f5.jpeg"></a></li>

		<li><a href="" title="Common name here"><img src="https://si0.twimg.com/profile_images/3416891195/eebfa01e010e8a6b28c87b1cd98202f5.jpeg"></a></li>

		<li><a href="" title="Common name here"><img src="https://si0.twimg.com/profile_images/3416891195/eebfa01e010e8a6b28c87b1cd98202f5.jpeg"></a></li>

		<li><a href="" title="Common name here"><img src="https://si0.twimg.com/profile_images/3416891195/eebfa01e010e8a6b28c87b1cd98202f5.jpeg"></a></li>

		<li><a href="" title="Common name here"><img src="https://si0.twimg.com/profile_images/3416891195/eebfa01e010e8a6b28c87b1cd98202f5.jpeg"></a></li>

		<li><a href="" title="Common name here"><img src="https://si0.twimg.com/profile_images/3416891195/eebfa01e010e8a6b28c87b1cd98202f5.jpeg"></a></li>

		<li><a href="" title="Common name here"><img src="https://si0.twimg.com/profile_images/3416891195/eebfa01e010e8a6b28c87b1cd98202f5.jpeg"></a></li>

		<li><a href="" title="Common name here"><img src="https://si0.twimg.com/profile_images/3416891195/eebfa01e010e8a6b28c87b1cd98202f5.jpeg"></a></li>

		<li><a href="" title="Common name here"><img src="https://si0.twimg.com/profile_images/3416891195/eebfa01e010e8a6b28c87b1cd98202f5.jpeg"></a></li>

		<li><a href="" title="Common name here"><img src="https://si0.twimg.com/profile_images/3416891195/eebfa01e010e8a6b28c87b1cd98202f5.jpeg"></a></li>

		<li><a href="" title="Common name here"><img src="https://si0.twimg.com/profile_images/3416891195/eebfa01e010e8a6b28c87b1cd98202f5.jpeg"></a></li>

		<li><a href="" title="Common name here"><img src="https://si0.twimg.com/profile_images/3416891195/eebfa01e010e8a6b28c87b1cd98202f5.jpeg"></a></li>

		<li><a href="" title="Common name here"><img src="https://si0.twimg.com/profile_images/3416891195/eebfa01e010e8a6b28c87b1cd98202f5.jpeg"></a></li>

		<li><a href="" title="Common name here"><img src="https://si0.twimg.com/profile_images/3416891195/eebfa01e010e8a6b28c87b1cd98202f5.jpeg"></a></li>

		<li><a href="" title="Common name here"><img src="https://si0.twimg.com/profile_images/3416891195/eebfa01e010e8a6b28c87b1cd98202f5.jpeg"></a></li>

		<li><a href="" title="Common name here"><img src="https://si0.twimg.com/profile_images/3416891195/eebfa01e010e8a6b28c87b1cd98202f5.jpeg"></a></li>

		<li><a href="" title="Common name here"><img src="https://si0.twimg.com/profile_images/3416891195/eebfa01e010e8a6b28c87b1cd98202f5.jpeg"></a></li>

	</ul>

	<!-- SZ: Add pagnation here -->

</div>

<?php get_footer(); ?>