<?php  
/*
Template Name: suggestion page
*/
?>
<?php 
	get_header(); 
	the_post();
	$suggestion_post = $post;
?>

<p>This is the suggestion page</p>

<h2>Suggestion Box</h2>



<p>The Chapeau Farmer’s Market is run by a Market Subcommittee of the Chapeau Agricultural Society. If you have any constructive suggestions, recommendations, ideas that would improve our market, please contact the following subcommittee members:<p>
<ul>
	<li>Ms. Gene O’Brien, chair	gene.Obrien@hotmail.com		819 689 2410</li>
	<li>Mr. Dave Gillespie	keenefarm@yahoo.ca		819 689 1154</li>
	<li>Mr. Wayne Wilson	tractor man@vianet.ca		819 689 5577</li>
</ul>



<?php 
setup_postdata($suggestion_post);
the_content();
 ?>



<?php get_footer(); ?>

