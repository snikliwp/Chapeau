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
	
    <?php /*?><div class="middle"> </div><?php */?>
    <div class="middle1">
<p>This is the shopping page</p>
  
    </div>


<?php 
setup_postdata($shop_post);
the_content();
 ?>



<?php get_footer(); ?>

