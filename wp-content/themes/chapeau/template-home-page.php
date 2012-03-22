<?php  
/*
Template Name: Home page
*/
?>
<?php 
	get_header(); 
	the_post();
	$home_post = $post;
?>

<article>
	<span class="middle-top">
    </span>
	
    <div class="home-middle">
    
        <h2><?php the_title ?></h2>
		<?php 
        setup_postdata($home_post);
        the_content();
         ?>
	</div>


<?php get_footer(); ?>

