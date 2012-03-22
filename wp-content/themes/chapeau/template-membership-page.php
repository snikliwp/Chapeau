<?php  
/*
Template Name: Membership page
*/
?>
<?php 
	get_header(); 
	the_post();
	$member_post = $post;
?>

<article>
	<div class="middle-top">
    </div>

	<div class="middle">
<?php 
setup_postdata($member_post);
the_content();
 ?>
	</div>


<?php get_footer(); ?>

