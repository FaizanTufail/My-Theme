<?php 
  get_header();
  the_post();
?>
<!--           <div class="middle-right">
          	<div class="page-status">
          		<h1>
          			<?php the_title() ?>:</h1>
          		<h2>
          		    <a href="<?php echo site_url() ?>">
          		    	<i> Furniture /</i>
          		    </a>
          		    <?php the_title()  ?>:</h2>	
          	</div>
          </div> -->
<?php 
  the_post_thumbnail(array(120,80));
  ?>
<?php  $imagepath=wp_get_attachment_image_src(get_post_thumbnail_id(),'large');
?>
<?php
  the_content()
?>
<img style="float: right;" class="image-block" src="<?php echo $imagepath[0] ?>">





 <?php
  get_footer()
?>