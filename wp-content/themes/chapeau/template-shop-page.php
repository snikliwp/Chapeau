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
	
    
    <div class="middle">
<p>This is the shopping page</p>
  
   


<?php 
setup_postdata($shop_post);
the_content();
 ?>

</div>


<?php get_footer(); ?>

