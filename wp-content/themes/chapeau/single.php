<!--This page is used to look at a single blog page -->

<?php 
	get_header(); 
	the_post();
?>

<article>
	<div class="middle">

<h1><?php the_title();?></h1>
<?php the_content();?>

		<div class="prev-post"><?php previous_post_link(); ?></div>
		<div class="next-post"><?php next_post_link(); ?></div>
	</div>
		</article>




<?php get_footer(); ?>