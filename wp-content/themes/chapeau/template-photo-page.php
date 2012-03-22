<?php  
/*
Template Name: photo page
*/
?>
<?php 
	get_header(); 
	the_post();
	$photo_post = $post;
?>

<article>
	<span class="middle-top">
    </span>
	
	<div class="middle">
        
            <?php 
            setup_postdata($photo_post);
            the_content();
            ?>
      </div>      


<?php get_footer(); ?>

