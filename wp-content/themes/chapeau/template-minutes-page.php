<?php  
/*
Template Name: minutes page
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
	$minutes = get_posts(array(
		"post_type" => "minutes", // The kind of post that we want to display should put up minutes
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
		
	<article class="minutes-body">
		<div class="prodtitle">
		
			<h3 itemprop="name" class = "minutes-title"><?php the_title(); ?></h3>
		</div><!-- end class minutess -->
			<div class="minutes-body">
				<span><?php the_content(); ?></span>
			</div><!-- end class minutes-body -->
	</article> <!--end of article class minutes-body-->
<?php endforeach; ?>

</div>

	<div class="middle-bottom">
    </div>

<?php get_footer(); ?>

