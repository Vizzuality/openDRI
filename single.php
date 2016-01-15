<?php get_header(); ?>
	<?php 
		$image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'single-post-thumbnail' ); 
		$image = ($image[0]) ? $image[0] : get_template_directory_uri().'/library/images/red-cross.jpg';
	?>
			<div id="pic-banner" style="background-image:url(<? echo $image ?>)">
				<!-- <img src="<? echo $image ?>" alt="Picture for <?php the_title(); ?>" title="Imagery for <?php the_title(); ?>" /> -->
			</div>
			<div id="map" class="cdbmap"></div>

			<div id="content">

				<div id="inner-content" class="wrap cf">

					<main id="main" class="m-all -md-post" role="main" itemscope itemprop="mainContentOfPage" itemtype="http://schema.org/Blog">

						<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
						<?
							$cats 		= get_the_category();
							$CAT_NAME   = $cats[0]->name;
							$thispostid = get_the_ID();
							$geodata = $GLOBALS['wpdb']->get_row( "SELECT * FROM wp_places_locator WHERE post_id = $thispostid ;", ARRAY_A );
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

							if (get_post_type() != 'project') {
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

						<div id="more-content" class="index-row more-content">
							<h3>Recent news</h3>
							<div class="row-container">
								<?php
									$args = array( 'numberposts' => '3', 'category' => $CAT_NAME );
									$recent_posts = wp_get_recent_posts( $args );
									foreach( $recent_posts as $recent ){  // start loop
								?>
										<article id="post-<?php echo $recent["ID"]; ?>" <?php post_class( 'cf' ); ?> role="article">
											<?php $image = wp_get_attachment_image_src( get_post_thumbnail_id( $recent["ID"] ), 'single-post-thumbnail' );
												$image = ($image[0]) ? $image[0] : get_template_directory_uri().'/library/images/red-cross.jpg';
											?>
					            			<span class="img" style="background-image:url(<?php echo $image; ?>)"></span>

											<header class="article-header">
												<h1 class="h2 entry-title"><a href="<?php echo $recent["guid"]; ?>" rel="bookmark" title="<?php echo $recent["post_title"]; ?>"><?php echo $recent["post_title"]; ?></a></h1>
											</header>
											<section class="entry-content cf">
												<p><?php echo $recent["post_content"]; ?></p>
											</section>
											<footer class="article-footer cf">
												<p class="byline entry-meta vcard">
						                            <?php printf( __( '', 'bonestheme' ).' %1$s %2$s',
						   								/* the author of the post */
						   								'<span class="entry-author author" itemprop="author" itemscope itemptype="http://schema.org/Person">' . get_the_author_meta('display_name', $recent['post_author'] ) . '</span>',
						   								/* the time the post was published */
						   								'<time class="updated entry-time" datetime="' . get_the_time('Y-m-d') . '" itemprop="datePublished">' . get_the_time('d M') . '</time>'
													); ?>
												</p>
											</footer>
										</article>
								<?}	// end loop?>

							</div>
						</div>
					</main>

					

				</div>

			</div>
		<div id="explore-more">
			<section>
				<article>
					<h2>CONTENT HERE</h2>
					<h3>MORE CONTENT HERE</h3>
				</article>
				<div class="what-explore">
					<a href="<?php echo home_url(); ?>/category/<? echo $CAT_NAME?>">explore <? echo $CAT_NAME?></a>
				</div>
			</section>
		</div>
		<script type="text/javascript">
			LAT_VIS   = '<? echo $geodata__lat ?>';
			LONG_VIS  = '<? echo $geodata__long ?>';
			if ('<? echo $CAT_NAME?>' === 'projects' || '<? echo get_post_type( get_the_ID() )?>' === 'project') {
				document.getElementById('pic-banner').style.display = 'none';
				document.getElementById('map').style.display 		= 'block';
			}	
		</script>
<?php get_footer(); ?>
