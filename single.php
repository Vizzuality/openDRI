<?php get_header(); ?>
	<?php 
		$image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'single-post-thumbnail' );
		$hasimage = false;
		if ($image[0]) $hasimage = true;
		$placeholder = '/library/images/red-cross.jpg';
		if (get_post_type() === 'resource') {
			$placeholder = '/library/images/resource-placeholder_1024.jpg';
		}
		$image = ($image[0]) ? $image[0] : get_template_directory_uri().$placeholder;
	?>
			<div id="pic-banner" style="background-image:url(<?php echo $image ?>)">
			</div>
			<div id="map" class="cdbmap"></div>

			<div id="content">

				<div id="inner-content" class="wrap cf">

					<main id="main" class="m-all -md-post" role="main" itemscope itemprop="mainContentOfPage" itemtype="http://schema.org/Blog">
						<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
						<?php
							$cats 		= get_the_category();
							$CAT_NAME   = $cats[0]->name;
							$thispostid = get_the_ID();
							if (strpos($_SERVER['HTTP_HOST'], 'localhost') === false) {
								$geodata = $GLOBALS['wpdb']->get_row( "SELECT * FROM wp_42czsx_places_locator WHERE post_id = $thispostid ;", ARRAY_A );
							} else {
								$geodata = $GLOBALS['wpdb']->get_row( "SELECT * FROM wp_places_locator WHERE post_id = $thispostid ;", ARRAY_A );

							}
							$geodata__lat       = $geodata['lat'];
    						$geodata__long      = $geodata['long'];
						?>
							<?php
								/*
								 * Ah, post formats. Nature's greatest mystery (aside from the sloth).
								 *
								 * So this function will bring in the needed template file depending on what the post
								 * format is. The different post formats are located in the post-formats folder.
								 *
								 *
								 * REMEMBER TO ALWAYS HAVE A DEFAULT ONE NAMED "format.php" FOR POSTS THAT AREN'T
								 * A SPECIFIC POST FORMAT.
								 *
								 * If you want to remove post formats, just delete the post-formats folder and
								 * replace the function below with the contents of the "format.php" file.
								*/
								get_template_part( 'post-formats/format', get_post_format() );

							if (get_post_type() != 'resource') {
								get_sidebar();
							}
							?>
						<?php endwhile; ?>

						<?php else : ?>

							<article id="post-not-found" class="hentry cf">
									<header class="article-header">
										<h1><?php _e( 'Oops, Post Not Found!', 'bonestheme' ); ?></h1>
									</header>
									<section class="entry-content">
										<p><?php _e( 'Uh Oh. Something is missing. Try double checking things.', 'bonestheme' ); ?></p>
									</section>
									<footer class="article-footer">
											<p><?php _e( 'This is the error message in the single.php template.', 'bonestheme' ); ?></p>
									</footer>
							</article>

						<?php endif; ?>

						
						<?php
							
								if (get_the_ID() == '481') return;
								$isresource = false;
								if (get_post_type( get_the_ID() ) == 'resource') {
									$isresource = true;
								} 
						?>
						<div id="more-content" class="index-row wrap more-content">
							<!-- <h3><?php echo ($isresource) ? 'Recent resources' : 'Recent news'; ?></h3>

							<div class="row-container">
								<?php
									if ($isresource)
										$args = array( 'numberposts' => '3', 'order' => 'DESC', 'post_type' => 'resource','post_status' => 'publish' );
									else
										$args = array( 'numberposts' => '3', 'category' => $CAT_NAME, 'post_status' => 'publish' );
									$featured_col = wp_get_recent_posts( $args );
									$recent_posts = wp_get_recent_posts( $args );
									foreach( $recent_posts as $recent ){  // start loop
										if ($thispostid != $recent["ID"]) {
								?>
										<article id="post-<?php echo $recent["ID"]; ?>" <?php post_class( 'cf' ); ?> role="article">
											<?php $image = wp_get_attachment_image_src( get_post_thumbnail_id( $recent["ID"] ), 'single-post-thumbnail' );
												$image = ($image[0]) ? $image[0] : get_template_directory_uri().'/library/images/red-cross.jpg';
											?>
					            			<a href="<?php echo $related->guid; ?>" rel="bookmark" title="<?php echo $related->post_title; ?>"><span class="img" style="background-image:url(<?php echo $image; ?>)"></span></a>

											<header class="article-header">
												<h1 class="h2 entry-title"><a href="<?php echo $recent["guid"]; ?>" rel="bookmark" title="<?php echo $recent["post_title"]; ?>"><?php echo $recent["post_title"]; ?></a></h1>
											</header>
											<section class="entry-content cf related">
													<?php 
														$content = apply_filters( 'the_content', $recent["post_content"] );
													    $content = str_replace( ']]>', ']]&gt;', $content );
													    echo wp_strip_all_tags($content);
													?>
											</section>
											<footer class="article-footer cf">
												<p class="byline entry-meta vcard">
						                            <?php printf( __( '', 'bonestheme' ).' %1$s',
						   								/* the time the post was published */
						   								'<time class="updated entry-time" datetime="' . get_the_time('Y-m-d') . '" itemprop="datePublished">' . get_the_time('d M') . '</time>'
													); ?>
												</p>
											</footer>
										</article>
										<?php } //end if ?>
								<?php }	// end loop
							 ?> -->

							</div>
						</div>
					</main>

					

				</div>

			</div>
		<div id="explore-more">
			<section>
				<article>
				<?php if (get_post_type( get_the_ID() ) == 'project') { ?>
					<h2>ALL PROJECTS</h2>
					<h3>Discover more projects as this one</h3>
				<?php } else { ?>
					<h2>ALL NEWS</h2>
					<h3>Discover more news as this one</h3>
				<?php } // end else ?>
				</article>
				<div class="what-explore bigger">
					<?php if (get_post_type( get_the_ID() ) == 'project') { ?>
						<a href="<?php echo home_url(); ?>/project">explore projects</a>
					<?php } else { ?>
						<a href="<?php echo home_url(); ?>/category/news">explore news</a>
				<?php } // end else ?>

				</div>
			</section>
		</div>
		<script type="text/javascript">
			LAT_VIS   = '<?php echo $geodata__lat ?>';
			LONG_VIS  = '<?php echo $geodata__long ?>';
			POST_ID   = '<?php echo $thispostid ?>';
			if ('<?php echo $CAT_NAME ?>' === 'projects' || '<?php echo get_post_type( get_the_ID() )?>' === 'project') {
				document.getElementById('pic-banner').style.display = 'none';
				document.getElementById('map').style.display 		= 'block';
				<?php if ($hasimage) { ?>
					document.getElementById('map').style.display 		= 'none';
					document.getElementById('pic-banner').style.display = 'block';
				<?php } ?>
			}	
		</script>
<?php get_footer(); ?>
