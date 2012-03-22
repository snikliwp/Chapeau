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
	<div class="middle-top">
    </div>

	<div class="middle">
<?php 
setup_postdata($vendorlist_post);
the_content();
 ?>

</div>


<?php get_footer(); ?>

