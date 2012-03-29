<?php  
/*
Template Name: shop page
*/
?>
<?php 
	get_header(); 
	the_post();
?>
<article>
	<div class="middle-top">
		<h1><?php the_title(); ?></h1>

    </div>
	

	<div class="middle">


<?php 
setup_postdata($post);
the_content();
 ?>

</div>
	<div class="middle-bottom">
    </div>

<?php get_footer(); ?>

