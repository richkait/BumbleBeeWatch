
<?php 
/*
Template Name: My Messages
Description: Displays messages member has recieved from BBW admins and moderators.
*/
get_header(); 
?>

	<div class="grid col-940" style="min-height:500px;">
		
		<h2>Messages</h2>

		<div class="border"><!-- start message -->

			<b style="float:right;">Sighting # or name here</b><br><!-- SZ: link to sighting message refers to -->

			<b>Subject: Goes here</b><br>

			<b>Date: mm/dd/yy</b><br>

			<hr>

			<p>Message text here. Cut off at 100 characters.</p>

			<span style="float:right;"><a href="">Expand</a> | <a href="">Reply</a> | <a href="" style="color:red;">Delete</a><br></span>

			<a href="" class="button green">Reply</a>

		</div> <!-- end message -->

	</div>

<?php get_footer(); ?>