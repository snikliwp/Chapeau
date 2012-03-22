<?php  
/*
Template Name: sales page
*/
?>
<?php 
	get_header(); 
	the_post();
	$sales_post = $post;
?>
<article>
	<div class="middle">
		<h2>Announcements</h2>
		 
	<?php $postslist = get_posts(array("post_type" => "advertisment", 'category' => 6, 'numberposts' => 4));
		foreach ($postslist as $post) :
			setup_postdata($post); ?>
			<article class="ad-item">
			<h3 class="ad-title"><a href="<?php the_permalink(); ?>"rel="bookmark"><?php the_title();?></a></h3>
			<?php the_excerpt(); ?>
			</article>
		<?php endforeach; ?>

		<h2>Wanted</h2>
	<?php $postslist = get_posts(array("post_type" => "advertisment", 'category' => 5, 'numberposts' => 4));
		foreach ($postslist as $post) :
			setup_postdata($post); ?>
			<article class="news-item">
			<h3 class="news-title"><a href="<?php the_permalink(); ?>"rel="bookmark"><?php the_title();?></a></h3>
			<?php the_excerpt(); ?>
			</article>
		<?php endforeach; ?>

		<h2>For Sale</h2>
	<?php $postslist = get_posts(array("post_type" => "advertisment", 'category' => 4, 'numberposts' => 4));
		foreach ($postslist as $post) :
			setup_postdata($post); ?>
			<article class="news-item">
			<h3 class="news-title"><a href="<?php the_permalink(); ?>"rel="bookmark"><?php the_title();?></a></h3>
			<?php the_excerpt(); ?>
			</article>
		<?php endforeach; ?>

		
	</div> <!--end of class middle -->
<?php 
 setup_postdata($sales_post);
 the_content();
 get_footer(); 
?>

<!-- more fields version 2.0.5 for edumedia
-->



