<?php  
/*
Template Name: Vendor List page
*/
?>
<?php 
	get_header(); 
	the_post();
	$vendorlist_post = $post;
?>
<article>
	<div class="middle">

<p>This is the Vendor List page</p>

<p>TBA</p>


<?php 
setup_postdata($vendorlist_post);
the_content();
 ?>

</div>


<?php get_footer(); ?>

