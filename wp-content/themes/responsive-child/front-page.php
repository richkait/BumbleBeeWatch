<?php

// Exit if accessed directly
if ( !defined('ABSPATH')) exit;

/**
 * Site Front Page
 *
 * Note: You can overwrite front-page.php as well as any other Template in Child Theme.
 * Create the same file (name) include in /responsive-child-theme/ and you're all set to go!
 * @see            http://codex.wordpress.org/Child_Themes and
 *                 http://themeid.com/forum/topic/505/child-theme-example/
 *
 * @file           front-page.php
 * @package        Responsive 
 * @author         Emil Uzelac 
 * @copyright      2003 - 2013 ThemeID
 * @license        license.txt
 * @version        Release: 1.0
 * @filesource     wp-content/themes/responsive/front-page.php
 * @link           http://codex.wordpress.org/Template_Hierarchy
 * @since          available since Release 1.0
 */

/**
 * Globalize Theme Options
 */
global $responsive_options;

/**
 * If front page is set to display the
 * blog posts index, include home.php;
 * otherwise, display static front page
 * content
 */
if ( 'posts' == get_option( 'show_on_front' ) && $responsive_options['front_page'] != 1 ) {
	get_template_part( 'home' );
} elseif ( 'page' == get_option( 'show_on_front' ) && $responsive_options['front_page'] != 1 ) {
	$template = get_post_meta( get_option( 'page_on_front' ), '_wp_page_template', true );
	$template = ( $template == 'default' ) ? 'index.php' : $template;
	locate_template( $template, true );
} else { 

	get_header();
	?>

	<div id="featured" class="grid col-940 hide-mobile">

		<?php echo do_shortcode("[SlideDeck2 id=25 ress=1]"); ?><!-- SZ: Xerces to buy Personal Version: http://www.slidedeck.com/pricing/ and create a custom deck and replace this shortcode -->	
		<!-- IMPORTANT: keep "ress=1" in SlideDeck2 shortcode to enable responsive resizing! -->

	</div><!-- end of #featured -->

	<div id="mobile-hello" class="grid col-940 hide-desktop"><!-- Hide Desktop, Display Mobile -->
		<div class="pillow">

			<h1 class="featured-title">Welcome to Bumble Bee Watch</h1>
			
			<h2 class="featured-subtitle">How you can participate!</h2>
			
			<p>We need your help! Because these animals are widely distributed the best way to keep track of them is with an army of volunteers across the country armed with cameras. With any luck, you might help us to find remnant populations of rare species before they go extinct. Participating in Bumble Bee Watch is simple and you can get started now by creating an account via the “sign in” tab at the top of the page.</p> 
   		
			<div class="call-to-action">
		
				<a href="" class="blue button"><!-- -SZ: Link to "Sign In" -->
					Get started!
				</a> 
			</div>
		</div>
	</div> <!-- end #mobile-hello -->

	<div class="clear"></div>

	<div class="grid col-940"> <!-- start how to & map --> 

		<div class="grid col-620">
			<div class="block-wrap" style="min-height: 518px;">

				<h3>How to Record a Sighting</h3>

				<p>Coming soon! This video will be a quick walk through of how to submit a sighting to Bumble Bee Watch.</p>

				<!-- Paste embed YouTube code here -->
				<iframe width="560" height="315" src="http://www.youtube.com/embed/zEQskIsHKT8" frameborder="0" allowfullscreen></iframe>

				<a href="" class="black button" style="margin:10px 0px;"> Get started!</a>
			
			</div>
		
		</div>

		<div class="grid col-300 fit">

			<div class="block-wrap" style="min-height: 518px;">
		
			<img src="https://si0.twimg.com/profile_images/3416891195/eebfa01e010e8a6b28c87b1cd98202f5.jpeg" /><!-- SZ: Display Google Map here -->
			<h3><i class="icon-map-marker"></i> Map</h3>
			<p>Check out sightings submitted in your area! <a href="">Explore now...</a><!-- SZ: Link to Maps page -->
			</p>
			
			</div>

		</div>

	</div>

	<div class="clear"></div>

	<div id="recent" class="grid col-940"> <!-- Dynamic stream of 3 recently submitted sightings -->

		<h3 style="padding-left:20px;">Recent</h3>

		<div style="margin: 20px;">
			
			<div class="border"> <!-- START individual recent sighting block -->

				<div class="grid col-700">
					
					<a href=""><img class="bb-thumb" src="https://si0.twimg.com/profile_images/3416891195/eebfa01e010e8a6b28c87b1cd98202f5.jpeg" /></a> <!-- Link to Individual Sightings page -->
	
					<div class="textrecent">
	
						<a href=""><h4>Common name displayed here <i class="icon-question-sign" title="This sighting is unverified"></i> <!-- Unverified status icon --></h4></a> <!-- Link to Individual Sightings page. Also, 50 char. limit -->
						<!-- <i class="icon-ok-circle" title="This sighting has been verified"></i> Verified status icon, but unlikely to appear in Recent Stream. Anyhow, it's here for quick reference. -->
						<small>By <a href="">Username displayed here</a></small> <!-- User avatar thumbnail, link to User profile page -->
						<p><i class="icon-calendar"></i> Month 00, 2013</p> <!-- Display M-D-Y that sighting is submited -->
						<p style="padding-bottom:.3em;"><i class="icon-map-marker"></i> City, State abbr.</p> <!-- Display City, State abbrv. from User's profile, if available -->
	
					</div>
	
				</div>

				<div class="grid col-220 fit">
	
					<div style="float:right;"?
	
						<a href=""><img class="avatar-thumb" src="https://si0.twimg.com/profile_images/3416891195/eebfa01e010e8a6b28c87b1cd98202f5.jpeg" /></a> <!-- User avatar thumbnail, link to User 	profile page -->
					
					</div>
	
				</div>
	
				<div class="clear"></div>
	
			</div> <!-- END individual recent sighting block / boundary border -->

			<div class="border"> <!-- START individual recent sighting block -->

				<div class="grid col-700">
					
					<a href=""><img class="bb-thumb" src="https://si0.twimg.com/profile_images/3416891195/eebfa01e010e8a6b28c87b1cd98202f5.jpeg" /></a> <!-- Link to Individual Sightings page -->
	
					<div class="textrecent">
	
						<a href=""><h4>Common name displayed here <i class="icon-question-sign" title="This sighting is unverified"></i> <!-- Unverified status icon --></h4></a> <!-- Link to Individual Sightings page. Also, 50 char. limit -->
						<!-- <i class="icon-ok-circle" title="This sighting has been verified"></i> Verified status icon, but unlikely to appear in Recent Stream. Anyhow, it's here for quick reference. -->
						<small>By <a href="">Username displayed here</a></small> <!-- User avatar thumbnail, link to User profile page -->
						<p><i class="icon-calendar"></i> Month 00, 2013</p> <!-- Display M-D-Y that sighting is submited -->
						<p style="padding-bottom:.3em;"><i class="icon-map-marker"></i> City, State abbr.</p> <!-- Display City, State abbrv. from User's profile, if available -->
	
					</div>
	
				</div>

				<div class="grid col-220 fit">
	
					<div style="float:right;"?
	
						<a href=""><img class="avatar-thumb" src="https://si0.twimg.com/profile_images/3416891195/eebfa01e010e8a6b28c87b1cd98202f5.jpeg" /></a> <!-- User avatar thumbnail, link to User 	profile page -->
					
					</div>
	
				</div>
	
				<div class="clear"></div>
	
			</div> <!-- END individual recent sighting block / boundary border -->

			<div class="border"> <!-- START individual recent sighting block -->

				<div class="grid col-700">
					
					<a href=""><img class="bb-thumb" src="https://si0.twimg.com/profile_images/3416891195/eebfa01e010e8a6b28c87b1cd98202f5.jpeg" /></a> <!-- Link to Individual Sightings page -->
	
					<div class="textrecent">
	
						<a href=""><h4>Common name displayed here <i class="icon-question-sign" title="This sighting is unverified"></i> <!-- Unverified status icon --></h4></a> <!-- Link to Individual Sightings page. Also, 50 char. limit -->
						<!-- <i class="icon-ok-circle" title="This sighting has been verified"></i> Verified status icon, but unlikely to appear in Recent Stream. Anyhow, it's here for quick reference. -->
						<small>By <a href="">Username displayed here</a></small> <!-- User avatar thumbnail, link to User profile page -->
						<p><i class="icon-calendar"></i> Month 00, 2013</p> <!-- Display M-D-Y that sighting is submited -->
						<p style="padding-bottom:.3em;"><i class="icon-map-marker"></i> City, State abbr.</p> <!-- Display City, State abbrv. from User's profile, if available -->
	
					</div>
	
				</div>

				<div class="grid col-220 fit">
	
					<div style="float:right;"?
	
						<a href=""><img class="avatar-thumb" src="https://si0.twimg.com/profile_images/3416891195/eebfa01e010e8a6b28c87b1cd98202f5.jpeg" /></a> <!-- User avatar thumbnail, link to User 	profile page -->
					
					</div>
	
				</div>
	
				<div class="clear"></div>
	
			</div> <!-- END individual recent sighting block / boundary border -->

		</div> <!-- end margin -->

	</div> <!-- end of dynamic recent stream -->

	<div class="clear"></div>
               
	<?php 
	get_sidebar('home');
	get_footer(); 
}
?>