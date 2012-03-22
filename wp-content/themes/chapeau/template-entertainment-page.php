<?php  
/*
Template Name: enertainment page
*/
?>
<?php 
	get_header(); 
	the_post();
	$enertainment_post = $post;
?>
<article>

	<div class="middle-top">
    </div>

	<div class="middle">


<?php 
setup_postdata($enertainment_post);
the_content();
 ?>

</div>


<?php get_footer(); ?>

