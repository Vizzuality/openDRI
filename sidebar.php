				<div id="sidebar1" class="sidebar m-all t-1of3 d-2of7 last-col cf" role="complementary">

					<div id="recent-posts-2" class="widget widget_recent_entries">

						<?
							$meta = get_post_meta(get_the_ID(), 'resource', true);
							if (strlen($meta) > 0) {
						?>		
								<h4 class="widgettitle">Resources</h4>
								<ul>
								<?
									foreach(explode("\n", $meta) as $line) {
										$current_post = url_to_postid( $line );
										$resource 	  = get_post($current_post);

								?>
								<li><a href="<?php echo $resource->guid; ?>" rel="bookmark" title="<?php echo $resource->post_title; ?>"><?php echo $resource->post_title; ?></a></li>
								<?
									} // end loop
								?>
								</ul>
								<?
							} // end if meta
						?>
					</div>


					<?php // endif; ?>

				</div>
			<script type="text/javascript">
			document.getElementsByTagName('head')[0].innerHTML += '<style>#firstFeatured:after{background-image:url(<? echo $image1 ?>) !important;}#secondFeatured:after{background-image:url(<? echo $image2 ?>) !important;}</style>';
			</script>