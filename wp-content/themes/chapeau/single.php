<!--This page is used to look at a single blog page -->

<?php 
	get_header(); 
	the_post();
?>

<article>

<h1><?php the_title();?></h1>
<?php the_content();?>
</article>

<footer>
	<p>Published on <?php the_date("Y-m-d h:s A");?> by <a href="<?php the_author_link();?>"><?php the_author(); ?></a> &middot; <a href="<?php comments_link();?>"><?php comments_number(); ?></a></p>
</footer>

<div class="prev-post"><?php previous_post_link(); ?> &nbsp;</div>
<div class="next-post"><?php next_post_link(); ?> </div>

<?php comments_template(); ?>
<?php get_footer(); ?>