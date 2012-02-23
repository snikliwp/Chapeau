<?php  
/*
Template Name: Board page
*/
?>
<?php 
	get_header(); 
	the_post();
	$board_post = $post;
?>

<p>This is the Board of Directors page</p>
<table border="1">
	<caption>Board of Directors</caption>
<thead>
	<tr>
		<th>Title</th>
		<th>Name</th>
		<th>Phone Number</th>
		<th>E-Mail Address</th>
	</tr>
</thead>
<tr>
	<td>President</td>
	<td>Mr. Patrick Tallon</td>
	<td>819-689-2676</td>
	<td>tallonlakeoutdoorADV@hotmail.com</td>
</tr>
<tr>
	<td>Vice-President</td>
	<td>Ms. Gene O’Brien</td>
	<td>819-689-2410</td>
	<td>gene.Obrien@hotmail.com</td>
</tr>
<tr>
	<td>Treasurer</td>
	<td>Mr. Louis Lair</td>
	<td>819-689-5192</td>
	<td>ghilou1@live.ca</td>
</tr>
<tr>
	<td>Secretary</td>
	<td>Ms. Edith Lair</td>
	<td>819-689-2950</td>
	<td></td>
</tr>
<tr>
	<td>Director</td>
	<td>Mr. Wayne Wilson</td>
	<td>819-689-5577</td>
	<td>tractorman@vianet.ca, Waynew86@gmail.com
</td>
</tr>
<tr>
	<td>Director</td>
	<td>Mr. David Gillespie</td>
	<td>819-689-1154</td>
	<td>keenefarm@yahoo.ca</td>
</tr>
<tr>
	<td>Director</td>
	<td>Mr. Lucas Kaiser</td>
	<td>819-689-5664</td>
	<td>lkaiser@sympatico.ca</td>
</tr>
<tr>
	<td>Director</td>
	<td>Ms. Sharon Sullivan</td>
	<td>819-689-2242</td>
	<td></td>
</tr>
<tr>
	<td>Director</td>
	<td>Mr. Bert Collin</td>
	<td>819-689-2746</td>
	<td>a.collin@picanoc.ca</td>
</tr>

</table>
</

<?php 
setup_postdata($board_post);
the_content();
 ?>



<?php get_footer(); ?>

