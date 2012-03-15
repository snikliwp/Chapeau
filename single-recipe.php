<!--This page is used to look at a single recipe page -->
<?php 
	get_header(); 
	the_post();
?>

<?php
	$files = get_posts(array(
		'post_type' => 'attachment'
		, 'numberposts' => 1
		, 'post_parent' => $post->ID
	));
?>
<article>
	<div class="middle">


<article class="product">
	<div itemscope itemtype="http://schema.org/Recipe">
		<h2 itemprop="name"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
        <img itemprop="image" src="<?php echo wp_get_attachment_thumb_url($files[0]->ID); ?>">
		<div class="single-recipe">
		<ul>
			<?php more_fields('recipe-name', '<li><strong><span itemprop="name">', '</span></strong></li>'); ?>
			<?php more_fields('recipe-Description', '<li><span itemprop="description">', '</span></li>'); ?>
			<?php more_fields('recipe-comment', '<li><span class="price">', '</span></li>'); ?>
			<li><strong>Prep Time: </strong><span itemprop="prepTime" content="PT<?php more_fields('recipe-prep');?>M"><?php more_fields('recipe-prep'); more_fields('recipes-prep-minutes');?></span></li>
			<li><strong>Cook Time: </strong><span itemprop="cookTime" content="PT<?php more_fields('recipe-cook');?>M"><?php more_fields('recipe-cook'); more_fields('recipes-cook-minutes'); ?></span></li>
			<?php more_fields('recipe-ready', '<li><strong>Ready in: </strong><span itemprop="ingredients">', '</span></li>'); ?>
			<li><strong>Ingredients:</strong></li>
			<?php more_fields('recipe-ingredient', '<li><span itemprop="ingredients">', '</span></li>'); ?>
			<?php more_fields('recipe-ingredient-2', '<li><span itemprop="ingredients">', '</span></li>'); ?>
			<?php more_fields('recipe-ingredient-3', '<li><span itemprop="ingredients">', '</span></li>'); ?>
			<?php more_fields('recipe-ingredient-4', '<li><span itemprop="ingredients">', '</span></li>'); ?>
			<?php more_fields('recipe-ingredient-5', '<li><span itemprop="ingredients">', '</span></li>'); ?>
			<?php more_fields('recipe-ingredient-6', '<li><span itemprop="ingredients">', '</span></li>'); ?>
			<?php more_fields('recipe-ingredient-7', '<li><span itemprop="ingredients">', '</span></li>'); ?>
			<?php more_fields('recipe-ingredient-8', '<li><span itemprop="ingredients">', '</span></li>'); ?>
			<?php more_fields('recipe-ingredient-9', '<li><span itemprop="ingredients">', '</span></li>'); ?>
			<?php more_fields('recipe-ingredient-10', '<li><span itemprop="ingredients">', '</span></li>'); ?>
			<?php more_fields('recipe-ingredient-11', '<li><span itemprop="ingredients">', '</span></li>'); ?>
			<li><strong>Directions:</strong></li>
			<?php more_fields('recipe-directions', '<li><span itemprop="recipeInstructions">', '</span></li>'); ?>
		</ul>
	</div>
	</div>

</article>
</div>

<?php //endforeach; ?>



<?php the_content(); ?>

<div class="prev-post"><?php previous_post_link(); ?> &nbsp;</div>
<div class="next-post"><?php next_post_link(); ?> </div>


<?php get_footer(); ?>