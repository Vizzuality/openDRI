<?php get_header(); ?>
	<div id="map-fake">
		<div class="what-list">
			<h2>what is open data for resilience initiative?</h2>
			<h3>OpenDRI shares, collects, and uses data, applying the concepts of the open data movement to reduce vulnerability to natural hazards and to climate change across the globe. Explore our project map to see where we’ve been working towards making an impact.</h3>
			<nav>
				<?
				$titles   = ['Sharing Data','Collecting Data','Using Data'];
				$params   = ['open','community','risk'];
				for ($i = 0; $i < count($titles); $i++) {
					echo '<a href="'.home_url().'/project/?mapregion=&mappilar='.$params[$i].'"><span data-opt="opt'.($i+1).'">';
						echo '<i class="img-pile-'.($i+1).'"></i>';
						echo $titles[$i];
					echo '</span></a>';
				}

				?>

			</nav>
		</div>
		<div class="what-explore">
			<a href="<?php echo home_url(); ?>/project">explore projects</a>
		</div>
	</div>
	<div id="content">
		<div id="inner-content" class="wrap">
			<div id="news" class="m-all index-row" role="news" itemscope itemprop="mainContentOfPage" itemtype="http://schema.org/Blog">
				<div class="row-container">
					<div class="card-third first-text">
						<h3>news</h3>
						<p>As the global need for Open Data and the knowledge base around it grow, it is important to keep informed so that communities can leverage this momentum and be better served. In this section of our online platform, find news highlighting action around the movement, notes on relevant software releases, as well as project updates from our teams in the field.</p>
						<a href="<?php echo home_url(); ?>/category/news"><span>view all news</span></a>
					</div>
					<?php
						$args = array( 'numberposts' => '3', 'category' => 'news', 'post_status' => 'publish' );
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
					<div class="card-third first-text">
						<h3>projects</h3>
						<p>OpenDRI projects apply the concepts of the global open data movement to the challenges of reducing vulnerability to natural hazards and the impacts of climate change. Here, projects can be browsed by country and region highlighting the context specific risk reduction goals of each initiative.</p>
						<a href="<?php echo home_url(); ?>/project"><span>view all projects</span></a>
					</div>
					<?php
						$args = array( 'numberposts' => '5', 'post_type' => 'project', 'post_status' => 'publish' );
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
			<div id="resources" class="m-all index-row" role="resources" itemscope itemprop="mainContentOfPage" itemtype="http://schema.org/Blog">
				<div class="row-container">
					<div class="card-third first-text">
						<h3>resources</h3>
						<p>At OpenDRI we are committed to increasing information that can empower individuals and their governments to reduce risk to natural hazards and climate change in their communities.  We’ve compiled a database of relevant resources to share what we have learned through our own projects and from the work of others.</p>
						<a href="<?php echo home_url(); ?>/resource"><span>view all resources</span></a>
					</div>
				</div>
				<div class="row-container">
				<?
					$args = array( 'numberposts' => '1', 'category' => 16, 'order' => 'DESC', 'post_type' => 'resource', 'post_status' => 'publish' );
					$featured_col = wp_get_recent_posts( $args );
					$image1 = '';
					$image2 = '';
					foreach( $featured_col as $featured ) {
						$image = wp_get_attachment_image_src( get_post_thumbnail_id( $featured["ID"] ), 'single-post-thumbnail' );
						$image1 = $image[0];
				?>
					<a href="<?php echo $featured["guid"]; ?>">
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
					$args = array( 'numberposts' => '1', 'category' => 16,  'order' => 'DESC', 'offset' => '1', 'post_type' => 'resource','post_status' => 'publish' );
					$featured_col = wp_get_recent_posts( $args );
					foreach( $featured_col as $featured ) {
						$image = wp_get_attachment_image_src( get_post_thumbnail_id( $featured["ID"] ), 'single-post-thumbnail' );
						$image2 = $image[0];
				 ?>
					<a href="<?php echo $featured["guid"]; ?>" >
						<article class="resource-cont --scnd-img"  id="secondFeatured">
							<section>
								<h3><?php echo $featured["post_title"]; ?></h3>
							</section>
						</article>
					</a>
				<? } ?>
					<ul class="resource-list home">
						<?
						$args = array( 'numberposts' => '4', 'category' => 16, 'order' => 'DESC', 'post_type' => 'resource','post_status' => 'publish' );
						$featured_col = wp_get_recent_posts( $args );
						foreach( $featured_col as $featured ) {
					?>
						<li>
							<a href="<?php echo $featured["guid"]; ?>">
								<p><span class="title"><?php echo $featured["post_title"]; ?></span><span class="format"></span></p>
								<p><span class="name"></span><span class="size"><? echo date('d M', strtotime($featured['post_date'])) ?></span>
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
