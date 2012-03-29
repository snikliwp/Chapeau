<?php  
/*
Template Name: producers page
*/
?>
<?php 
	get_header(); 
	the_post();
?>
<article>
	<div class="middle-top">
	<h1><?php the_title(); ?><h1>
	</div> <!-- End Div middle-top -->


	<div class="middle">
		<?php 
        setup_postdata($post);
        the_content();
         ?>

	<?php 
	$producers = get_posts(array(
		"post_type" => "producer", // The kind of post that we want to display
		"numberposts" => -1,
	));
	
	foreach ($producers as $post) :
		setup_postdata($post);
		$files = get_posts(array(
		'post_type' => 'attachment'
		, 'numberposts' => 1
		, 'post_parent' => $post->ID
		));
	?>

	<article class="producer">
		<div class="prodtitle">
			<h3 itemprop="name" class = "producer-title"><?php the_title(); ?></h3>
		</div><!-- end class prodtitle -->
		<ul>
			<div class="prod-prod">
				<li><h4>Producer</h4></li>
				<li><?php more_fields('producer-producer'); ?></li>
			</div> <!-- end class prod-prod -->
			<div class="prod-product">
				<li><h4>Products</h4></li>
				<li><?php more_fields('producer-products'); ?></li>
			</div><!-- end class prod-product -->
			<div class="prod-contact">
				<li><h4>Contact Information</h4></li>
				<li><?php more_fields('producer-address'); ?></li>
				<li><?php more_fields('producer-phone'); ?></li>
				<li><a href="<?php more_fields('producer-web'); ?>"><?php more_fields('producer-web');?></a></li>
			</div><!-- end class prod-contact -->
		</ul>
	</article> <!--end of article class producer-->

<?php endforeach; ?>












</div>

	<div class="middle-bottom">
    </div>
<?php get_footer(); ?>

