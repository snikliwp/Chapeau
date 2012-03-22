<?php  
/*
Template Name: vendor page
*/
?>
<?php 
	get_header(); 
	the_post();
	$vendor_post = $post;
?>
<article>
	<div class="middle-top">
    </div>

	<div class="middle">



<?php 
setup_postdata($vendor_post);
the_content();
 ?>

</div>


<?php get_footer(); ?>

