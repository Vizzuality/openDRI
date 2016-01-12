<?php get_header(); ?>
	<div id="map-fake">
		<div class="what-list">
			<h2>what is open data for resilience initiative?</h2>
			<h3>Morbi leo risus, porta ac consectetur ac, vestibulum at faucibus mollis interdum.</h3>
			<nav>
				<?
				$titles = ['open data platforms','community mapping','risk visualization'];
				for ($i = 0; $i < count($titles); $i++) {
					echo '<span>';
						echo '<i class="img-pile-'.($i+1).'"></i>';
						echo $titles[$i];
					echo '</span>';
				}

				?>

			</nav>
		</div>
		<div class="what-explore">
			<a href="<?php echo home_url(); ?>/category/projects">explore projects</a>
		</div>
	</div>
	<div id="content">
		<div id="inner-content" class="wrap cf">
			<div id="news" class="m-all cf index-row" role="news" itemscope itemprop="mainContentOfPage" itemtype="http://schema.org/Blog">
				<div class="row-container">
					<div class="card-third">
						<h3>news</h3>
						<p>Vestibulum id ligula porta felis euismod semper. Nullam id dolor. Ligula porta felis euismod semper ipsum. Vestibulum id ligula porta felis euismod semper. Nullam id dolor. Ligula porta felis euismod semper ipsum. Ullam id dolor.</p>
						<a href="<?php echo home_url(); ?>/category/news"><span>view all news</span></a>
					</div>
					<?php
						$args = array( 'numberposts' => '1', 'category' => 'news' );
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
					<? } ?>
				</div>
				<div class="card-third">
			        <div class="twitter mod-tweets">
			          <span><i class="twt-img"></i></span>
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
						<a href="<?php echo home_url(); ?>/category/projects"><span>view all projects</span></a>
					</div>
					<?php
						$args = array( 'numberposts' => '5', 'category' => 'projects' );
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
					<? } ?>
				</div>
			</div>
			<div id="resources" class="m-all cf index-row" role="resources" itemscope itemprop="mainContentOfPage" itemtype="http://schema.org/Blog">
				<div class="card-third">
					<h3>resources</h3>
					<p>Vestibulum id ligula porta felis euismod semper. Nullam id dolor. Ligula porta felis euismod semper ipsum. Vestibulum id ligula porta felis euismod semper. Nullam id dolor. Ligula porta felis euismod semper ipsum. Ullam id dolor.</p>
					<a href="<?php echo home_url(); ?>/resources"><span>view all resources</span></a>
				</div>
				<div class="row-container">
					<a href="#">
						<article class="resource-cont">
							<section>
								<span>topic</span>
								<hr>
								<h3>training materials</h3>
							</section>
						</article>
					</a>
				</div>
			</div>
			<div class="m-all cf index-row last-resources" role="resources" itemscope itemprop="mainContentOfPage" itemtype="http://schema.org/Blog">
				<div class="row-container">
					<a href="#">
						<article class="resource-cont --scnd-img">
							<section>
								<span>featured resource</span>
								<hr>
								<h3>opendri mentoring guide</h3>
							</section>
						</article>
					</a>
					<ul class="resource-list">
						<li>
							<p><span class="title">Resource name</span><span class="format">pdf</span></p>
							<p><span class="name">topic/issue</span><span class="size">128kb</span>
							</p>
						</li>
						<li>
							<p><span class="title">Resource name</span><span class="format">pdf</span></p>
							<p><span class="name">topic/issue</span><span class="size">128kb</span>
							</p>
						</li>
					</ul>
				</div>
			</div>
			<?php /* get_sidebar(); */ ?>
		</div>
	</div>
<?php get_footer(); ?>
