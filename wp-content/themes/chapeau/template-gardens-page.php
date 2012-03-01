<?php  
/*
Template Name: Gardens page
*/
?>
<?php 
	get_header(); 
	the_post();
	$gardens_post = $post;
?>
<article>
	<div class="middle">


<p>This is the gardens page</p>

</div>
<?php 
setup_postdata($gardens_post);
the_content();
 ?>



<?php get_footer(); ?>

