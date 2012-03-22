<?php 
/*
Template Name: Recipes Page
*/
?>

<?php 
	get_header(); 
	the_post();
//	$berry_post = $post;
?>


<article>
	<div class="middle">
<?php 
	$recipes = get_posts(array(
		"post_type" => "recipe", // The kind of post that we want to display
		"numberposts" => -1,
		));
		
	foreach ($recipes as $post) :
		setup_postdata($post);
		$files = get_posts(array(
			'post_type' => 'attachment'
			, 'numberposts' => 1
			, 'post_parent' => $post->ID
		));
?>



<article class="">
	<div class="unit-row product" itemscope itemtype="http://schema.org/Recipe">
		<div class="unit product-image">
			<img itemprop="image" src="<?php echo wp_get_attachment_thumb_url($files[0]->ID); ?>">
		</div> <!--end of div class unit-->
		<div class="unit unit-triple product-details">
			<h2 itemprop="name" class = "product-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
		<ul>
			<?php more_fields('recipe-comment', '<li><span>', '</span></li>'); ?>
		</ul>
		</div> <!--end of div class unit triple-unit-->
	</div> <!--end of div class unit-row-->
<br>
</article> <!--end of article class product-->

<?php endforeach; ?>

</div>
<?php 
//setup_postdata($berry_post);
the_content();
 ?>




<?php get_footer(); ?>

<!-- more fields version 2.0.5 for edumedia
-->