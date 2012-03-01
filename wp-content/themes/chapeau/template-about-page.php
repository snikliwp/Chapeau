<?php  
/*
Template Name: About Us page
*/
?>
<?php 
	get_header(); 
	the_post();
	$about_post = $post;
?>

<article>
	<div class="middle">
<p>This is the About Us page</p>
<p>The Chapeau Agricultural Society is comprised of an enthusiastic and diverse collection of individuals and farmers who are passionate about agriculture in our community; the Upper Pontiac region of the province of Quebec.  We are a non-profit organization celebrating 134 years of service in 2012.  The Society is revitalizing itself to match the changing dynamic of farming today within a rural community that includes a growing number of ex-urbanites.</p>
<?php 
setup_postdata($about_post);
the_content();
 ?>
</div>


<?php get_footer(); ?>

