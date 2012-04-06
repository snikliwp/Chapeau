<?php get_header(); ?>

<?php 
	if (have_posts()):
		while(have_posts()):
			the_post();
		endwhile;
?>



<?php endif; ?>
<?php get_footer(); ?>

