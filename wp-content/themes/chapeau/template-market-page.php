<?php  
/*
Template Name: market page
*/
?>
<?php 
	get_header(); 
	the_post();
	$market_post = $post;
?>
<article>
	<div class="middle-top">
    </div>

	<div class="middle">

<?php 
setup_postdata($market_post);
the_content();
 ?>

</div>


<?php get_footer(); ?>

