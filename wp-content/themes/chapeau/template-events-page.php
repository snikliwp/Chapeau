<?php  
/*
Template Name: Events page
*/
?>
<?php 
	get_header(); 
	the_post();
	$event_post = $post;
?>
<article>
	<div class="middle-top"><h1>Events</h1></div> <!--end of middle-top -->
	<div class="middle">
	
	
	
	

<?php 
 setup_postdata($event_post);
 the_content();
 ?>
	</div> <!--end of middle -->
	<div class="middle-bottom">
	</div> <!--end of middle-bottom -->

 <?php
 get_footer(); 
?>

<!-- more fields version 2.0.5 for edumedia
-->



