<?php  
/*
Template Name: producers page
*/
?>
<?php 
	get_header(); 
	the_post();
	$producers_post = $post;
?>
<article>
	<div class="middle-top">
	</div> <!-- End Div middle-top -->


	<div class="middle">
		<div class="intro">
			<h2>Local & Regional Producers</h2>
			<p>The Chapeau Agricultural Society supports the idea of local production of as many foods as possible.  To that end, we are pleased to support the following local and regional producers and encourage our members and readers to make local food purchases from local producers wherever possible.</p>
			<p>If you are a local producer and would like to be listed here please contact us at:<span><a href="#">chapeauagsociety@gmail.com</a></span></p>
		</div>

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











<?php 
setup_postdata($producers_post);
the_content();
 ?>

</div>


<?php get_footer(); ?>

