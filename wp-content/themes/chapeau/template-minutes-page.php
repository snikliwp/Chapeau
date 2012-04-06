<?php  
/*
Template Name: minutes page
*/
?>
<?php get_header(); ?>

	<?php 
	$minutes = get_posts(array(
		"post_type" => "minutes", // The kind of post that we want to display
		"numberposts" => -1,
	));
	
	foreach ($minutes as $post) :
		setup_postdata($post);
		$files = get_posts(array(
		'post_type' => 'attachment'
		, 'numberposts' => 1
		, 'post_parent' => $post->ID
		));
	?>

<article>
	<div class="middle-top">
	<h1><?php the_title(); ?><h1>
	</div> <!-- End Div middle-top -->


	<div class="middle">
	<article class="minutes-body">
		<div class="prodtitle">
			<h3 itemprop="name" class = "minutes-title"><?php the_title(); ?></h3>
		</div><!-- end class minutess -->
		<ul>
			<div class="minutes-body">
				<li><?php the_post(); ?></li>
			</div><!-- end class minutes-body -->
		</ul>
	</article> <!--end of article class minutes-body-->

<?php 
	if (have_posts()):
		while(have_posts()):
			the_post();
		endwhile;
?>



<?php endif; ?>
</div>

	<div class="middle-bottom">
    </div>

<?php get_footer(); ?>

