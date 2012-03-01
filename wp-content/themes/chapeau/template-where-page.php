<?php  
/*
Template Name: where page
*/
?>
<?php 
	get_header(); 
	the_post();
	$where_post = $post;
?>
<article>
	<div class="middle">

<p>This is the Where and When page</p>

<h2>Annual Schedule</h2>
<p>TBA</p>

<h2>Location</h2>
<p>Harrington Hall in Chapeau, Quebec. (see map)</p>
<a href="#">Location Map</a>

<h2>Hours</h2>
<p>TBA</p>

<h2>Season</h2>
<p>TBA</p>
</div>
<?php 
setup_postdata($where_post);
the_content();
 ?>



<?php get_footer(); ?>

