<?php  
/*
Template Name: Membership page
*/
?>
<?php 
	get_header(); 
	the_post();
	$member_post = $post;
?>

<p>This is the Membership page</p>
<p>Our members are our strength and over the years we have had the benefit of many highly motivated and dedicated members from all our local communities.</p>
<p>Membership is open to anyone who accepts the mission of the Society and who is prepared, on a volunteer basis, to contribute responsibly to the work of  the Society.</p>

<p>The annual membership fee is $10.00 payable by cheque or cash to the Treasurer.</p>
<p>Please print the following Membership Form and send it, with your membership fee, to the Treasurer.</p>
<ul>
	<li>Mr. Louis Lair</li>
	<li>Treasurer</li>
	<li>Chapeau Agricultural Society</li>
	<li>C.P./P.O. Box 176</li>
	<li>Chapeau, QC</li>
	<li>Canada</li>
	<li>J0X 1M0</li>
</ul>

<a title="Membership Application Form PDF" href="forms/ApplicationForm.pdf">Membership Application Form PDF</a>
<p>Right-click the link to the PDF file, and then choose Save Target As from the pop-up menu.</p>

<?php 
setup_postdata($member_post);
the_content();
 ?>



<?php get_footer(); ?>

