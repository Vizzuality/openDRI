

	<?
		$meta = get_post_meta(get_the_ID(), 'resource', true);
		if (strlen($meta) > 0) {
	?>		
		<div id="sidebar1" class="sidebar m-all t-1of3 d-2of7 last-col cf" role="complementary">

			<div id="recent-posts-2" class="">
				<h4 class="">Related Resources</h4>
				<ul>
				<?
					foreach(explode("\n", $meta) as $line) {
						$current_post = url_to_postid( $line );
						$resource 	  = get_post($current_post);
						$image = wp_get_attachment_image_src( get_post_thumbnail_id( $resource->ID ), 'single-post-thumbnail' );
							$image = ($image[0]) ? $image[0] : get_template_directory_uri().'/library/images/red-cross.jpg';
				?>
				<li>
					
					<p><a href="<?php echo $resource->guid; ?>" rel="bookmark" title="<?php echo $resource->post_title; ?>"><span class="img" style="background-image:url(<?php echo $image; ?>)"></span><i><?php echo $resource->post_title; ?></a></i></p></li>
				<?
					} // end loop
				?>
				</ul>
				<?
			} // end if meta
		?>
	</div>


</div>
<?php // endif; ?>

<script type="text/javascript">
document.getElementsByTagName('head')[0].innerHTML += '<style>#firstFeatured:after{background-image:url(<?php echo $image1 ?>) !important;}#secondFeatured:after{background-image:url(<?php echo $image2 ?>) !important;}</style>';
</script>