<?php  
/*
Template Name: shop page
*/
?>
<?php 
	get_header(); 
	the_post();
	$shop_post = $post;
?>
<article>
	<div class="middle-top">
    </div>
	

	<div class="middle">


<?php 
setup_postdata($shop_post);
the_content();
 ?>

</div>
	<div class="middle-bottom">
    </div>

<?php get_footer(); ?>

