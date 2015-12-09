<?php get_header(); ?>

			<div id="content">

				<div id="inner-content" class="wrap cf">

						<main id="main" class="m-all t-2of3 d-5of7 cf" role="main" itemscope itemprop="mainContentOfPage" itemtype="http://schema.org/Blog">

							<?php
							// the_archive_title( '<h1 class="page-title">', '</h1>' );
							if ( is_category() ) {
								$title = sprintf( __( '%s' ), 	   single_cat_title( '', false ) );
							} elseif ( is_tag() ) {
								$title = sprintf( __( 'Tag: %s' ), single_tag_title( '', false ) );
							}
							echo '<h1 class="page-title">'.$title.'</h1>';
							the_archive_description( '<div class="taxonomy-description">', '</div>' );
							?>
							<div id="list-content" class="m-all cf index-row" role="news" itemscope itemprop="mainContentOfPage" itemtype="http://schema.org/Blog">
							<div class="row-container">
							<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

							<article id="post-<?php the_ID(); ?>" <?php post_class( 'cf' ); ?> role="article">
								<?php $image = wp_get_attachment_image_src( get_post_thumbnail_id( the_ID() ), 'single-post-thumbnail' );
							$image = ($image[0]) ? $image[0] : get_template_directory_uri().'/library/images/red-cross.jpg';
						?>
            					<span class="img" style="background-image:url(<?php echo $image; ?>)"></span>

								<header class="article-header">
									<h1 class="h2 entry-title"><a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title(); ?>"><?php the_title(); ?></a></h1>
								</header>
								<section class="entry-content cf">
									<p><?php the_excerpt(); ?></p>
								</section>
								<footer class="article-footer cf">
									<p class="byline entry-meta vcard">
			                            <?php printf( __( '', 'bonestheme' ).' %1$s %2$s',
			   								/* the author of the post */
			   								'<span class="entry-author author" itemprop="author" itemscope itemptype="http://schema.org/Person">' . get_the_author_link( get_the_author_meta( 'ID' ) ) . '</span>',
			   								/* the time the post was published */
			   								'<time class="updated entry-time" datetime="' . get_the_time('Y-m-d') . '" itemprop="datePublished">' . get_the_time('d M') . '</time>'
										); ?>
									</p>
								</footer>
							</article>

							<?php endwhile; ?>
						</div>
						</div>
									<?php bones_page_navi(); ?>

							<?php else : ?>

									<article id="post-not-found" class="hentry cf">
										<header class="article-header">
											<h1><?php _e( 'Oops, Post Not Found!', 'bonestheme' ); ?></h1>
										</header>
										<section class="entry-content">
											<p><?php _e( 'Uh Oh. Something is missing. Try double checking things.', 'bonestheme' ); ?></p>
										</section>
										<footer class="article-footer">
												<p><?php _e( 'This is the error message in the archive.php template.', 'bonestheme' ); ?></p>
										</footer>
									</article>

							<?php endif; ?>

						</main>

					<?php // get_sidebar(); ?>

				</div>

			</div>

<?php get_footer(); ?>
