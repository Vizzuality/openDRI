<?php get_header(); ?>
	<div id="map-fake">
		<div class="what-list">
			<h2>what is open data for resilience initiative?</h2>
			<h3>Morbi leo risus, porta ac consectetur ac, vestibulum at faucibus mollis interdum.</h3>
			<nav>
				<?
				$titles = ['open data platforms','community mapping','risk visualization'];
				for ($i = 0; $i < count($titles); $i++) {
					echo '<span data-opt="opt'.($i+1).'">';
						echo '<i class="img-pile-'.($i+1).'"></i>';
						echo $titles[$i];
					echo '</span>';
				}

				?>

			</nav>
		</div>
		<div class="what-explore">
			<a href="<?php echo home_url(); ?>/project">explore projects</a>
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
						$args = array( 'numberposts' => '3', 'category' => 'news' );
						$recent_posts = wp_get_recent_posts( $args );
						foreach( $recent_posts as $recent ){  // start loop
					?>
					<article id="post-<?php echo $recent["ID"]; ?>" <?php post_class( 'cf' ); ?> role="article">
						<?php $image = wp_get_attachment_image_src( get_post_thumbnail_id( $recent["ID"] ), 'single-post-thumbnail' );
							$image = ($image[0]) ? $image[0] : get_template_directory_uri().'/library/images/red-cross.jpg';
						?>
            			<a href="<?php echo $recent["guid"]; ?>" rel="bookmark" title="<?php echo $recent["post_title"]; ?>"><span class="img" style="background-image:url(<?php echo $image; ?>)"></span></a>

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
					<? } ?>
				</div>
				<div class="card-third twitter-timeline-container">
			        <div class="twitter mod-tweets">
			          <span><i class="twt-img"></i></span>
			          <h3>Latest tweets</h3>
			          <a class="twitter-timeline" href="https://twitter.com/search?q=from%3Agfdrr%20OR%20from%3Aunderstandrisk%20%20OR%20%23opendri" data-widget-id="691548436664025089">Tweets sobre from:gfdrr OR from:understandrisk OR #opendri</a>
			        </div>
				</div>
			</div>
			<div id="projects" class="m-all cf index-row" role="projects" itemscope itemprop="mainContentOfPage" itemtype="http://schema.org/Blog">
				<div class="row-container">
					<div class="card-third">
						<h3>projects</h3>
						<p>Vestibulum id ligula porta felis euismod semper. Nullam id dolor. Ligula porta felis euismod semper ipsum. Vestibulum id ligula porta felis euismod semper. Nullam id dolor. Ligula porta felis euismod semper ipsum. Ullam id dolor.</p>
						<a href="<?php echo home_url(); ?>/project"><span>view all projects</span></a>
					</div>
					<?php
						$args = array( 'numberposts' => '5', 'post_type' => 'project' );
						$recent_posts = wp_get_recent_posts( $args );
						foreach( $recent_posts as $recent ){  // start loop
					?>
					<article id="post-<?php echo $recent["ID"]; ?>" <?php post_class( 'cf' ); ?> role="article">
						<?php $image = wp_get_attachment_image_src( get_post_thumbnail_id( $recent["ID"] ), 'single-post-thumbnail' );
							$image = ($image[0]) ? $image[0] : get_template_directory_uri().'/library/images/red-cross.jpg';
						?>
            			<a href="<?php echo $recent["guid"]; ?>" rel="bookmark" title="<?php echo $recent["post_title"]; ?>"><span class="img" style="background-image:url(<?php echo $image; ?>)"></span></a>

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
								<span>
								<?php
								foreach((get_the_category()) as $category) { 
								    echo '<a href="'.esc_url( get_category_link( $category->term_id ) ).'">'.$category->cat_name . '</a> '; 
								} 
								?>
								</span>
	                            <?php printf( __( '', 'bonestheme' ).' %1$s',
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
					<a href="<?php echo home_url(); ?>/resource"><span>view all resources</span></a>
				</div>
				<div class="row-container">
				<?
					$args = array( 'numberposts' => '1', 'category' => 16, 'order' => 'DESC', 'post_type' => 'resource' );
					$featured_col = wp_get_recent_posts( $args );
					$image1 = '';
					$image2 = '';
					foreach( $featured_col as $featured ) {
						$image = wp_get_attachment_image_src( get_post_thumbnail_id( $featured["ID"] ), 'single-post-thumbnail' );
						$image1 = $image[0];
				?>
					<a href="<?php echo $featured["guid"]; ?>" target="_blank">
						<article class="resource-cont"  id="firstFeatured">
							<section>
								<h3><?php echo $featured["post_title"]; ?></h3>
							</section>
						</article>
					</a>
				<? } ?>
				</div>
			</div>
			<div class="m-all cf index-row last-resources" role="resources" itemscope itemprop="mainContentOfPage" itemtype="http://schema.org/Blog">
				<div class="row-container">
				<?
					$args = array( 'numberposts' => '1', 'category' => 16,  'order' => 'DESC', 'offset' => '1', 'post_type' => 'resource' );
					$featured_col = wp_get_recent_posts( $args );
					foreach( $featured_col as $featured ) {
						$image = wp_get_attachment_image_src( get_post_thumbnail_id( $featured["ID"] ), 'single-post-thumbnail' );
						$image2 = $image[0];
				 ?>
					<a href="<?php echo $featured["guid"]; ?>"  target="_blank">
						<article class="resource-cont --scnd-img"  id="secondFeatured">
							<section>
								<h3><?php echo $featured["post_title"]; ?></h3>
							</section>
						</article>
					</a>
				<? } ?>
					<ul class="resource-list home">
						<?
						$args = array( 'numberposts' => '3', 'category' => 16, 'order' => 'DESC', 'post_type' => 'resource' );
						$featured_col = wp_get_recent_posts( $args );
						foreach( $featured_col as $featured ) {
					?>
						<li>
							<a href="<?php echo $featured["guid"]; ?>">
								<p><span class="title"><?php echo $featured["post_title"]; ?></span><span class="format"></span></p>
								<p><span class="name"></span><span class="size"><? echo date_format($featured["post_date_gmt"],'Y-m-d') ?></span>
								</p>
							</a>
						</li>
					<? } // end foreach ?>
					</ul>
				</div>
			</div>
			<script type="text/javascript">
			document.getElementsByTagName('head')[0].innerHTML += '<style>#firstFeatured:after{background-image:url(<? echo $image1 ?>) !important;}#secondFeatured:after{background-image:url(<? echo $image2 ?>) !important;}</style>';
			</script>
			<?php /* get_sidebar(); */ ?>
		</div>
	</div>
<?php get_footer(); ?>
