<?php  
/*
Template Name: vendor page
*/
?>
<?php 
	get_header(); 
	the_post();
	$vendor_post = $post;
?>
<article>
	<div class="middle">

<p>This is the Vendor page</p>

<p>Vendor Information</p>
<p>Contact Market Coordinator, _______________________ or call 819-689 _______
<p>All vendors much be approved by provincial government authorities 
<ul>
	<li>Health Unit Application Form</li>
	<li>Chapeau Farmer’s Market Vendor’s Application Form</li>
	<li>hapeau Farmer’s Market Rules and Regulations</li>
</ul>

<p>Our rules and entry forms are available as PDF files. Click <a href="http://get.adobe.com/reader/" target="_blank">here </a> to get Adbobe Acrobat Reader to view and print these files.</p>

<a href="">Provincial Health Unit Application Form PDF</a>

<a href="">Farmer’s Market Vendor’s Application Form PDF</a>
</div>


<?php 
setup_postdata($vendor_post);
the_content();
 ?>



<?php get_footer(); ?>

