<!--This page is used to look at a single blog page -->

<?php 
	get_header(); 
	the_post();
?>

<article>
	<div class="middle-top">
    <h1><?php the_title();?></h1>
    </div>

	<div class="middle">

    <?php the_content();?>
    

    <div class="prev-post"><?php previous_post_link(); ?> &nbsp;</div>
    <div class="next-post"><?php next_post_link(); ?> </div>


</div>


	<div class="middle-bottom">
    </div>
<?php get_footer(); ?>
