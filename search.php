<?php get_header(); ?>

			<div id="content">

				<div id="inner-content" class="wrap">

					<main id="main" class="" role="main">
						<h1 class="archive-title"><span><?php _e( 'Search Results for:', 'bonestheme' ); ?></span> <?php echo esc_attr(get_search_query()); ?></h1>

						<div id="list-content" class="m-all index-row" role="news">
								<div class="row-container">
								<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

								<article id="post-<?php the_ID(); ?>" <?php post_class( 'cf' ); ?> role="article">
									<?php 
									$image = get_post_meta($post->ID, 'thumbnailPic', true);
									$fallbackimg = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ));
									$image = ($image[0]) ? $image : $fallbackimg[0];
									$image = ($image[0]) ? $image : get_template_directory_uri().'/library/images/red-cross.jpg';
									?>
	            					<a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title(); ?>"><span class="img" style="background-image:url(<?php echo $image; ?>)"></span></a>

									<header class="article-header">
										<h1 class="h2 entry-title"><a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title(); ?>"><?php the_title(); ?></a></h1>
									</header>
									<section class="entry-content cf">
										<?php the_excerpt(); ?>
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

								<?php endwhile; ?>
							</div>

								<?php bones_page_navi(); ?>

							<?php else : ?>

									<div id="content">

				<div id="inner-content" class="wrap cf">

					<main id="main" class="m-all t-2of3 d-5of7 cf no-results" role="main" itemscope itemprop="mainContentOfPage" itemtype="http://schema.org/Blog">
						<h2> We're sorry, there are not results for <em><?php echo esc_attr(get_search_query()); ?></em></h2>
						<h3>Try anything different instead</h3>
							<section class="search">

									<p><?php get_search_form(); ?></p>

							</section>
							<section>
								<a href="<?php echo home_url(); ?>" class="home-404">go to homepage</a>
							</section>
					</main>

				</div>

			</div>

							<?php endif; ?>

						</main>

							<?php // get_sidebar(); ?>

					</div>

			</div>

<?php get_footer(); ?>
