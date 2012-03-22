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
		<p>This is the sales page</p>
		<?php 
			$news = get_posts(array(
				"post_type" => "advertisment", // The kind of post that we want to display
				"numberposts" => -1,
				));
				
			foreach ($news as $post) :
				setup_postdata($post);
				$files = get_posts(array(
					'post_type' => 'attachment'
					, 'numberposts' => 1
					, 'post_parent' => $post->ID
				));
		?>
		
		<article class="news">
			<div class="ad">
				<div class="adtitle">
					<h2 itemprop="name" class = "product-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
				</div><!-- end class adtitle -->
				<div class="adname">
					<?php more_fields('ad-name', '<li><span>', '</span></li>'); ?>
				</div> <!-- end class adname -->
				<div class="adcat">
					<?php more_fields('ad-cat', '<li><span>', '</span></li>'); ?>
				</div><!-- end class adtxt -->
				<div class="adtxt">
					<?php more_fields('ad-text', '<li><span>', '</span></li>'); ?>
				</div> <!-- end class adtxt -->
			</div> <!--end of class ad-->
		<br>
		<?php endforeach; ?>
		
		</article> <!--end of article class news-->
	</div> <!--end of middle ad-->
<?php 
 setup_postdata($sales_post);
 the_content();
 get_footer(); 
?>

<!-- more fields version 2.0.5 for edumedia
-->



