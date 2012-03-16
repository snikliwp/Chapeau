<?php  
/*
Template Name: Goals and Objectives page
*/
?>
<?php 
	get_header(); 
	the_post();
	$goals_post = $post;
?>
<article>
	<div class="middle">

<p>This is the Goals and Objectives page</p>
<ul>
	<li>to promote and reward good agricultural practice.</li>
	<li>to create opportunities for members to meet and exchange ideas.</li>
	<li>to provide educational and training opportunities for members.</li>
	<li>to advocate on behalf of farmers.</li>
	<li>to contribute to community development through activities such as a Farmer’s Market, a Community Garden, an annual Calendar</li>
	<li>to increase Society membership</li>
</ul>

<?php 
setup_postdata($goals_post);
the_content();
 ?>
</div>



<?php get_footer(); ?>

