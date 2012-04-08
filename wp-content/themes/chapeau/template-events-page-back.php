<?php  
/*
Template Name: EventsBack page
*/
?>
<?php 
	get_header(); 
	the_post();
	$event_post = $post;
?>
<article>
	<div class="middle-top">
        <h1><?php the_title(); ?><h1>
    </div>

	<div class="middle">

	<div class="forsale">
		<h2>Events</h2>
			<?php 
//				query_posts('meta_key=key_name&orderby=key_name&sort=ASC');
				$news = query_posts(array(
					"post_type" => "event", // The kind of post that we want to display
					'meta_key' => 'event-startdate', 
					'orderby' => 'meta_value', 
					'order' => 'ASC',
					"numberposts" => -1,
					));
					
				foreach ($news as $post) :
					setup_postdata($post);
					$files = get_posts(array(
						'post_type' => 'event'
						, 'numberposts' => 1
						, 'post_parent' => $post->ID
					));
			?>
			
			<div class="event">
				<div class="eventtitle">
					<h3 itemprop="name" class = "event-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
				</div><!-- end class eventtitle -->
				<div class="eventstart">
					<?php more_fields('event-startdate'); ?>
				</div> <!-- end class eventstart -->
				<div class="eventend">
					<?php more_fields('event-enddate'); ?>
				</div> <!-- end class eventend -->
				<div class="eventexcerpt">
					<?php the_excerpt(); ?>
				</div> <!-- end class eventexcerpt -->
			</div> <!-- end class adtitle -->
			<?php endforeach; ?>
	</div> <!-- end class forsale -->

	</div> <!--end of middle -->
    

<?php 
 setup_postdata($event_post);
 the_content();
 ?>

 	<div class="middle-bottom">
    </div>

 <?php
 get_footer(); 
?>

<!-- more fields version 2.0.5 for edumedia
-->



