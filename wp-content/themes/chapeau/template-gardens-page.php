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

<p>This is the gardens page</p>
<article>
	<div class="middle">


<?php 
setup_postdata($gardens_post);
the_content();
 ?>
</div>



<?php get_footer(); ?>

