<?php  
/*
Template Name: minutes page
*/
?>
<?php get_header(); ?>
<article>
	<div class="middle-top">
	<h1><?php the_title(); ?><h1>
	</div> <!-- End Div middle-top -->


	<div class="middle">

<?php 
	if (have_posts()):
		while(have_posts()):
			the_post();
		endwhile;
?>



<?php endif; ?>
</div>

	<div class="middle-bottom">
    </div>

<?php get_footer(); ?>

