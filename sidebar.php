
	<?php
		// $meta = get_post_meta(get_the_ID(), 'resource', true);
		$news = get_post_meta(get_the_ID(), 'news', true);
		if ((get_post_type() == 'project' || get_post_type() == 'news') && strlen($news)) {
	?>		
		<div id="sidebar1" class="sidebar m-all t-1of3 d-2of7 last-col cf" role="complementary">
			<?php if (strlen($news) > 0) {
			?>
			<div id="recent-posts-2" class="">
				<h4 class="">Project's news</h4>
				<ul>
				<?php
					foreach(explode("\n", $news) as $line) {
						$current_post = url_to_postid( $line );
						$resource 	  = get_post($current_post);
						$image = get_post_meta($current_post, 'thumbnailPic', true);
						$fallbackimg = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ));
						$image = ($image[0]) ? $image : $fallbackimg[0];
						$image = ($image[0]) ? $image : get_template_directory_uri().'/library/images/red-cross.jpg';
				?>
				<li>
					<p><a href="<?php echo $resource->guid; ?>" rel="bookmark" title="<?php echo $resource->post_title; ?>"><span class="img" style="background-image:url(<?php echo $image; ?>)"></span><i><?php echo $resource->post_title; ?></a></i></p></li>
				<?php
					} // end loop
				?>
				</ul>
			</div>
				<?php
			} // end if meta
		?>

<!-- 		<?php
		if (get_post_type() == 'project') {
			$news = get_post_meta(get_the_ID(), 'news', true);
			if ($news) {
		?>
		<div id="recent-posts-3" class="">
			<h4>Project's news</h4>
			<ul>
				<?php
					foreach(explode("\n", $news) as $line) {
						$current_post = url_to_postid( $line );
						$resource 	  = get_post($current_post);
						$image = wp_get_attachment_image_src( get_post_thumbnail_id( $resource->ID ), 'single-post-thumbnail' );
						$fallbackimg = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ));
						$image = ($image[0]) ? $image : $fallbackimg[0];
						$image = ($image[0]) ? $image[0] : get_template_directory_uri().'/library/images/red-cross.jpg';
				?>
				<li>
					<p><a href="<?php echo $resource->guid; ?>" rel="bookmark" title="<?php echo $resource->post_title; ?>"><span class="img" style="background-image:url(<?php echo $image; ?>)"></span><i><?php echo $resource->post_title; ?></a></i></p></li>
				<?php
					} // end loop
				?>
				</ul>
			<?php
			}// end if news
			?>
		</div>
		<?php
		}// end if is project
		?> -->
	</div>
		<?php
	}// end if meta or news
	?>

<script type="text/javascript">
document.getElementsByTagName('head')[0].innerHTML += '<style>#firstFeatured:after{background-image:url(<?php echo $image1 ?>) !important;}#secondFeatured:after{background-image:url(<?php echo $image2 ?>) !important;}</style>';
</script>