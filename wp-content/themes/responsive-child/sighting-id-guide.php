
<?php 
/*
Template Name: Sighting-ID Guide
Description: Step 2: in submitting a Bumble Bee or Nest Sighting. 
*/
get_header(); 
?>

	<div id="progress">

		<ul>

			<li><i class="icon-circle"></i> step 1: <br>
				record</li>

			<li><i class="icon-circle"></i> step 2: <br>
				identify</li>

			<li style="border-right:none;"><i class="icon-circle-blank"></i> step 3:<br>
				finish</li>

		</ul>

		<div class="clear"></div>

	</div>

	<div class="grid col-940" style="margin-bottom:0px;">
		<h3 style="margin-bottom:2px;">Bumble Bee Identification Guide</h3>
		This interactive identification guide will walk you through identifying your bumble bee. You can reference your uploaded photos on the left while selecting key features on the guide to the right.

		<hr>

		<div class="grid col-380" style="margin-bottom:0px;">
			
			<!-- SZ: JS gallery & carousel of user uploaded photo(s) + JS magnify/zoom -->
			<img src="https://si0.twimg.com/profile_images/3416891195/eebfa01e010e8a6b28c87b1cd98202f5.jpeg">

			<p>Mouse over the photo to magnify that area. If you'd like to use a different photo, select it from the thumbnails.</p>

		</div>

		<div class="grid col-540 fit">
			<h4>Identification Guide</h4>

			<p>Select from the options below, which patterns and coloring most closely matches your photo.</p>
			<!-- SZ: clicking an option below filters all other options. ie. if yellow face is selected, filters available choices in thorax and abdomen, as well as bumble bees at the bottom of the page -->

			<div class="bb-id"><!-- These images are 140 px by 150px -->
				<b>Face:</b>
				<ul>
	
						<li><a href=""><img title="Yellow face" src="http://localhost/bumblebeewatch/wp-content/themes/responsive-child/images/id-guide/face-y.gif"></a><br>
							<b>Yellow face</b></li>
						<li><a href=""><img title="Black face" src="http://localhost/bumblebeewatch/wp-content/themes/responsive-child/images/id-guide/face-b.gif"></a><br>
							<b>Black face</b></li>
	
				</ul>
				<div class="clear"></div>
			</div>

			<div class="bb-id">
				<b>Thorax:</b>
				<ul>
	
						<li><a href=""><img title="All yellow" src="http://localhost/bumblebeewatch/wp-content/themes/responsive-child/images/id-guide/thorax-yyy.gif"></a><br>
							<b>All yellow</b></li>
						<li><a href=""><img title="Yellow in front" src="http://localhost/bumblebeewatch/wp-content/themes/responsive-child/images/id-guide/thorax-ybb.gif"></a><br>
							<b>Yellow in front</b></li>
						<li><a href=""><img title="Yellow with a black band" src="http://localhost/bumblebeewatch/wp-content/themes/responsive-child/images/id-guide/thorax-yby.gif"></a><br>
							<b>Yellow with a black band</b></li>
						<li><a href=""><img title="Yellow with a black dot" src="http://localhost/bumblebeewatch/wp-content/themes/responsive-child/images/id-guide/thorax-bdot.gif"></a><br>
							<b>Yellow with a black dot</b></li>
						<li><a href=""><img title="White shoulders" src="http://localhost/bumblebeewatch/wp-content/themes/responsive-child/images/id-guide/thorax-whsh.gif"></a><br>
							<b>White shoulders</b></li>
	
				</ul>
				<div class="clear"></div>
			</div>

			<div class="bb-id">
				<b>Abdomen:</b>
				<ul>
	
						<li><a href=""><img title="All yellow" src="http://localhost/bumblebeewatch/wp-content/themes/responsive-child/images/id-guide/ab-yyy.gif"></a><br>
							<b>All yellow</b></li>
						<li><a href=""><img title="Yellow then black" src="http://localhost/bumblebeewatch/wp-content/themes/responsive-child/images/id-guide/ab-yb.gif"></a><br>
							<b>Yellow then black</b></li>
						<li><a href=""><img title="Black stripe" src="http://localhost/bumblebeewatch/wp-content/themes/responsive-child/images/id-guide/ab-yby.gif"></a><br>
							<b>Black stripe</b></li>
						<li><a href=""><img title="Black yellow black" src="http://localhost/bumblebeewatch/wp-content/themes/responsive-child/images/id-guide/ab-byb.gif"></a><br>
							<b>Black yellow black</b></li>
						<li><a href=""><img title="Yellow stripe" src="http://localhost/bumblebeewatch/wp-content/themes/responsive-child/images/id-guide/ab-y-stripe.gif"></a><br>
							<b>Yellow stripe</b></li>
						<li><a href=""><img title="Yellow red yellow" src="http://localhost/bumblebeewatch/wp-content/themes/responsive-child/images/id-guide/ab-yry.gif"></a><br>
							<b>Yellow red yellow</b></li>
						<li><a href=""><img title="Yellow red black" src="http://localhost/bumblebeewatch/wp-content/themes/responsive-child/images/id-guide/ab-red.gif"></a><br>
							<b>Yellow red black</b></li>
						<li><a href=""><img title="Red tail" src="http://localhost/bumblebeewatch/wp-content/themes/responsive-child/images/id-guide/ab-red-tail.gif"></a><br>
							<b>Red tail</b></li>
	
				</ul>
				<div class="clear"></div>
			</div>

			<hr>

			<h4>Bumble Bees</h4>
			If you know your bumble bee species, feel free to select it from the images below. 
			<div class="bb-bee"><!-- SZ: load corresponding bumble bee species images here, dynamically filters images here based on above choices/combo + state/provience -->

				<ul>

					<li><a href=""><img title="Bee one" src="http://localhost/bumblebeewatch/wp-content/themes/responsive-child/images/morrisoni/morrisoni.gif"></a><br>
						<b>Bee name here</b></li>
					<li><a href=""><img title="Bee two" src="http://localhost/bumblebeewatch/wp-content/themes/responsive-child/images/morrisoni/morrisoni.gif"></a><br>
						<b>Bee name here</b></li>
					<li><a href=""><img title="Bee three" src="http://localhost/bumblebeewatch/wp-content/themes/responsive-child/images/morrisoni/morrisoni.gif"></a><br>
						<b>Bee name here</b></li>

				</ul>

			</div>

		</div>

	</div>

	<div class="clear"></div>

	<div class="grid col-940">

		<input style="float:right;" type="submit" class="green" value="Submit"><!-- SZ: Link Sighting-ty.php -->

	</div>

<?php get_footer(); ?>