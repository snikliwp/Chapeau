<?php  
/*
Template Name: Quiz Template
*/
?>
<?php 
	get_header(); 
	the_post();
?>
<script src="Scripts/swfobject_modified.js" type="text/javascript"></script>


<article>

	<div class="middle-top">
        <h1><?php the_title(); ?><h1>
    </div>

	<div class="middle">
    
			<div id="flashContent">
			<object classid="clsid:d27cdb6e-ae6d-11cf-96b8-444553540000" width="530" height="400" id="quiz" align="middle">
				<param name="movie" value="quiz.swf" />
				<param name="quality" value="high" />
				<param name="bgcolor" value="#ffffff" />
				<param name="play" value="true" />
				<param name="loop" value="true" />
				<param name="wmode" value="window" />
				<param name="scale" value="showall" />
				<param name="menu" value="true" />
				<param name="devicefont" value="false" />
				<param name="salign" value="" />
				<param name="allowScriptAccess" value="sameDomain" />
				<!--[if !IE]>-->
				<object type="application/x-shockwave-flash" data="quiz.swf" width="530" height="400">
					<param name="movie" value="quiz/quiz.swf" />
					<param name="quality" value="high" />
					<param name="bgcolor" value="#ffffff" />
					<param name="play" value="true" />
					<param name="loop" value="true" />
					<param name="wmode" value="window" />
					<param name="scale" value="showall" />
					<param name="menu" value="true" />
					<param name="devicefont" value="false" />
					<param name="salign" value="" />
					<param name="allowScriptAccess" value="sameDomain" />
				<!--<![endif]-->
					<a href="http://www.adobe.com/go/getflash">
						<img src="http://www.adobe.com/images/shared/download_buttons/get_flash_player.gif" alt="Get Adobe Flash player" />
					</a>
				<!--[if !IE]>-->
				</object>
				<!--<![endif]-->
			</object>
		</div>

	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
<?php 
    setup_postdata($post);
    the_content();
     ?>
     
    </div>

	<div class="middle-bottom">
    </div>
<?php get_footer(); ?>

<script type="text/javascript">
swfobject.registerObject("FlashID");
</script>
