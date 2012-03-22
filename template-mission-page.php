<?php  
/*
Template Name: Mission Statement page
*/
?>
<?php 
	get_header(); 
	the_post();
	$mission_post = $post;
?>
<article>
	<div class="middle">

<p>This is the Mission Statement page</p>
<p>The Society works to strengthen the region’s agriculture through advocacy, education, community development, communication and fundraising while encouraging best practices and respect for the land.</p>

<?php 
setup_postdata($mission_post);
the_content();
 ?>
</div>



<?php get_footer(); ?>

