<?php  
/*
Template Name: History page
*/
?>
<?php 
	get_header(); 
	the_post();
	$history_post = $post;
?>

<p>This is the History page</p>
<p>The Chapeau Agricultural Society has been in existence since 1878 as an incorporated non-profit organization in the province of Quebec.  Currently we are assembling information that will go towards a comprehensive history of our activities.  As you can imagine, this is a major undertaking and will take resources and  some time to accomplish.  During this development period we have provided some historical information in the form of photos, newspaper clippings, Fair booklets, correspondence and related material in chronological order as a sample of our rich and varied heritage.</p>
<p>If you have historical information about the Society that you would be prepared to share or would like to assist us with this major undertaking please contact the President, Mr. Pat Tallon at 819-689-2676 or at tallonlakeoutdoorADV@hotmail.com</p>

<?php 
setup_postdata($history_post);
the_content();
 ?>



<?php get_footer(); ?>

