<?php get_header(); ?>
	<div id="map-fake">
		<div class="what-list">
			<h2>what is open data for resilience initiative?</h2>
			<h3>Morbi leo risus, porta ac consectetur ac, vestibulum at faucibus mollis interdum.</h3>
			<nav>
				<span>
					<img src="">
					open data platforms
				</span>
				<span>
					<img src="">
					community mapping
				</span>
				<span>
					<img src="">
					risk visualization
				</span>
			</nav>
		</div>
		<div class="what-explore">
			explore projects
		</div>
	</div>
	<div id="content">
		<div id="inner-content" class="wrap cf">
			<div id="news" class="m-all cf index-row" role="news" itemscope itemprop="mainContentOfPage" itemtype="http://schema.org/Blog">
				<div class="row-container">
					<div class="card-third">
						<h3>news</h3>
						<p>Vestibulum id ligula porta felis euismod semper. Nullam id dolor. Ligula porta felis euismod semper ipsum. Vestibulum id ligula porta felis euismod semper. Nullam id dolor. Ligula porta felis euismod semper ipsum. Ullam id dolor.</p>
						<span>view all news</span>
					</div>
					<?php 
						$NEWS_COUNT = 1;
						$news_i = 0;
					?>
					<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
					<?php if ($news_i < $NEWS_COUNT) { ?>
					<?php $news_i++; ?>
					<article id="post-<?php the_ID(); ?>" <?php post_class( 'cf' ); ?> role="article">
						<?php $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'single-post-thumbnail' );
							$image = ($image[0]) ? $image[0] : home_url().'/wp-content/themes/odri/library/images/red-cross.jpg';
						?>
            			<span class="img" style="background-image:url(<?php echo $image; ?>)"></span>

						<header class="article-header">
							<h1 class="h2 entry-title"><a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a></h1>
						</header>
						<section class="entry-content cf">
							<?php the_content(); ?>
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
					<? } ?>
					<?php endwhile; ?>
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
										<p><?php _e( 'This is the error message in the index.php template.', 'bonestheme' ); ?></p>
								</footer>
							</article>
					<?php endif; ?>
				</div>
				<div class="card-third">
			        <div class="twitter mod-tweets">
			          <h3>follow us</h3>
			          <a id="twitter-timeline-link" class="twitter-timeline" href="https://twitter.com/gfdrr" data-widget-id="452107742602219521" data-chrome="nofooter noheader noscrollbar transparent" width="280" height="470">Tweets by @gfdrr</a>
			        </div>
				</div>
			</div>
			<div id="projects" class="m-all cf index-row" role="projects" itemscope itemprop="mainContentOfPage" itemtype="http://schema.org/Blog">
				<div class="row-container">
					<div class="card-third">
						<h3>projects</h3>
						<p>Vestibulum id ligula porta felis euismod semper. Nullam id dolor. Ligula porta felis euismod semper ipsum. Vestibulum id ligula porta felis euismod semper. Nullam id dolor. Ligula porta felis euismod semper ipsum. Ullam id dolor.</p>
						<span>view all projects</span>
					</div>
					<?php 
						$NEWS_COUNT = 5;
						$news_i = 0;
					?>
					<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
					<?php if ($news_i < $NEWS_COUNT) { ?>
					<?php $news_i++; ?>
					<article id="post-<?php the_ID(); ?>" <?php post_class( 'cf' ); ?> role="article">
						<?php $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'single-post-thumbnail' );
							$image = ($image[0]) ? $image[0] : home_url().'/wp-content/themes/odri/library/images/red-cross.jpg';
						?>
            			<span class="img" style="background-image:url(<?php echo $image; ?>)"></span>
						<header class="article-header">
							<h1 class="h2 entry-title"><a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a></h1>
						</header>
						<section class="entry-content cf">
							<?php the_content(); ?>
						</section>
						<footer class="article-footer cf">
	     					<?php printf( '<p class="footer-category">' . __('', 'bonestheme' ) . '%1$s</p>' , get_the_category_list(', ') ); ?>
	     					 <?php the_tags( '<p class="footer-tags tags"><span class="tags-title">' . __( 'Tags:', 'bonestheme' ) . '</span> ', ', ', '</p>' ); ?>
						</footer>
					</article>
					<? } ?>
					<?php endwhile; ?>
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
										<p><?php _e( 'This is the error message in the index.php template.', 'bonestheme' ); ?></p>
								</footer>
							</article>
					<?php endif; ?>
				</div>
			</div>
			<div id="resources" class="m-all cf index-row" role="resources" itemscope itemprop="mainContentOfPage" itemtype="http://schema.org/Blog">
				<div class="card-third">
					<h3>resources</h3>
					<p>Vestibulum id ligula porta felis euismod semper. Nullam id dolor. Ligula porta felis euismod semper ipsum. Vestibulum id ligula porta felis euismod semper. Nullam id dolor. Ligula porta felis euismod semper ipsum. Ullam id dolor.</p>
					<span>view all resources</span>
				</div>
				<div class="row-container">
					<?php 
						$NEWS_COUNT = 1;
						$news_i = 0;
					?>
					<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
					<?php if ($news_i < $NEWS_COUNT) { ?>
					<?php $news_i++; ?>
					<article id="post-<?php the_ID(); ?>" <?php post_class( 'cf' ); ?> role="article">
						<?php $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'single-post-thumbnail' );
							$image = ($image[0]) ? $image[0] : home_url().'/wp-content/themes/odri/library/images/red-cross.jpg';
						?>
            			<span class="img" style="background-image:url(<?php echo $image; ?>)"></span>
						<header class="article-header">
							<h1 class="h2 entry-title"><a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a></h1>
							<p class="byline entry-meta vcard">
	                            <?php printf( __( '', 'bonestheme' ).' %1$s %2$s',
	   								/* the time the post was published */
	   								'<time class="updated entry-time" datetime="' . get_the_time('Y-m-d') . '" itemprop="datePublished">' . get_the_time(get_option('date_format')) . '</time>',
	   								/* the author of the post */
	   								'<span class="by">'.__( 'by', 'bonestheme').'</span> <span class="entry-author author" itemprop="author" itemscope itemptype="http://schema.org/Person">' . get_the_author_link( get_the_author_meta( 'ID' ) ) . '</span>'
								); ?>
							</p>
						</header>
						<section class="entry-content cf">
							<?php the_content(); ?>
						</section>
						<footer class="article-footer cf">
							<p class="footer-comment-count">
								<?php comments_number( __( '<span>No</span> Comments', 'bonestheme' ), __( '<span>One</span> Comment', 'bonestheme' ), __( '<span>%</span> Comments', 'bonestheme' ) );?>
							</p>
	     					<?php printf( '<p class="footer-category">' . __('', 'bonestheme' ) . '%1$s</p>' , get_the_category_list(', ') ); ?>
	     					 <?php the_tags( '<p class="footer-tags tags"><span class="tags-title">' . __( 'Tags:', 'bonestheme' ) . '</span> ', ', ', '</p>' ); ?>
						</footer>
					</article>
					<? } ?>
					<?php endwhile; ?>
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
										<p><?php _e( 'This is the error message in the index.php template.', 'bonestheme' ); ?></p>
								</footer>
							</article>
					<?php endif; ?>
				</div>
			</div>
			<?php /* get_sidebar(); */ ?>
		</div>
	</div>
<?php get_footer(); ?>
