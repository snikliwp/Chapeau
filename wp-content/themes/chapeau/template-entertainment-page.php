<?php  
/*
Template Name: enertainment page
*/
?>
<?php 
	get_header(); 
	the_post();
	$enertainment_post = $post;
?>

<p>This is the Entertainment page</p>

<h2>Entertainment</h2>

<p>Musical entertainment has always been a major part of the Pontiac culture and we pride ourselves in nurturing and supporting all forms of music.  We have national fiddle champions and singer/songwriters who call the Pontiac home.  To celebrate this tradition, the Chapeau Farmer’s Market will provide a venue for local deserving talent to showcase their music for everyone at the market.  Come out and enjoy the music; toe tapping is encouraged.</p>
<p>If you would like to entertain at the Chapeau Farmer’s Market, please complete the Application below and send it and a recording of you performing to  our music coordinator, ______________tba_____________________________ who will contact you if you are selected and a performance date agreed upon.  The music coordinator’s decision is final.  Good luck.</p>



<a href="">Entertainment Application Form PDF</a>



<?php 
setup_postdata($enertainment_post);
the_content();
 ?>



<?php get_footer(); ?>

