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
	<div class="middle-top">
    </div>
	

	<div class="middle">
	<div class="forsale">
		<h2>For Sale</h2>
			<?php 
				$news = get_posts(array(
					"post_type" => "advertisment", // The kind of post that we want to display
					"numberposts" => -1,
					"category_name" => 'forsale'
					));
					
				foreach ($news as $post) :
					setup_postdata($post);
					$files = get_posts(array(
						'post_type' => 'attachment'
						, 'numberposts' => 1
						, 'post_parent' => $post->ID
					));
			?>
			
			<div class="ad">
				<div class="adtitle">
					<h3 itemprop="name" class = "product-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
				</div><!-- end class adtitle -->
				<div class="adexcerpt">
					<?php the_excerpt(); ?>
				</div> <!-- end class adexcerpt -->
			</div> <!-- end class adtitle -->
			<?php endforeach; ?>
	</div> <!-- end class forsale -->
	<div class="announcement">
		<h2>Announcements</h2>
			<?php 
				$news = get_posts(array(
					"post_type" => "advertisment", // The kind of post that we want to display
					"numberposts" => -1,
					"category_name" => 'announcement'
					));
					
				foreach ($news as $post) :
					setup_postdata($post);
					$files = get_posts(array(
						'post_type' => 'attachment'
						, 'numberposts' => 1
						, 'post_parent' => $post->ID
					));
			?>
			
			<div class="ad">
				<div class="adtitle">
					<h3 itemprop="name" class = "product-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
				</div><!-- end class adtitle -->
				<div class="adexcerpt">
					<?php the_excerpt(); ?>
				</div> <!-- end class adexcerpt -->
			</div> <!-- end class adtitle -->
			<?php endforeach; ?>
	</div> <!-- end class announcement -->
	<div class="wanted">
		<h2>Wanted</h2>
			<?php 
				$news = get_posts(array(
					"post_type" => "advertisment", // The kind of post that we want to display
					"numberposts" => -1,
					"category_name" => 'wanted'
					));
					
				foreach ($news as $post) :
					setup_postdata($post);
					$files = get_posts(array(
						'post_type' => 'attachment'
						, 'numberposts' => 1
						, 'post_parent' => $post->ID
					));
			?>
			
			<div class="ad">
				<div class="adtitle">
					<h3 itemprop="name" class = "product-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
				</div><!-- end class adtitle -->
				<div class="adexcerpt">
					<?php the_excerpt(); ?>
				</div> <!-- end class adexcerpt -->
			</div> <!-- end class adtitle -->
			<?php endforeach; ?>
	</div> <!-- end class wanted -->

	</div> <!--end of middle -->
<?php 
 setup_postdata($sales_post);
 the_content();
 get_footer(); 
?>

<!-- more fields version 2.0.5 for edumedia
-->



