<?php get_header(); ?>

<?

// the_archive_title( '<h1 class="page-title">', '</h1>' );
if ( is_category() ) {
	$title = sprintf( __( '%s' ), 	   single_cat_title( '', false ) );
} elseif ( is_tag() ) {
	$title = sprintf( __( 'Tag: %s' ), single_tag_title( '', false ) );
}
if(is_post_type_archive()) {
	echo '				<div class="blue-bar-top" id="blue-bar">
					<div class="wrap wrapper filters">
							<div>
								<span class="title">filter by pillar:</span>
								<span><a href="#" data-option="open"><i class="img-pile-1"></i>open data platforms</a></span>
								<span><a href="#" data-option="community"><i class="img-pile-2"></i>community mapping</a></span>
								<span><a href="#" data-option="risk"><i class="img-pile-3"></i>risk visualization</a></span>
							</div>
							<div>
								<span class="title" id="toggle-filter-region">filter by region</span>
								<ul class="region-filter" id="pick-region">
									<li><input type="text" id="searchCountries" placeholder="Search country"></li>
									<li class="pickable" data-option="africa" data-lat="7" data-lng="21">africa</li>
									<li class="pickable" data-option="eastasia" data-lat="35" data-lng="103">east asia pacific</li>
									<li class="pickable" data-option="europe" data-lat="55" data-lng="25">europe and central asia</li>
									<li class="pickable" data-option="latam" data-lat="13" data-lng="-59">latin america and caribbean</li>
									<li class="pickable" data-option="middleeast" data-lat="29" data-lng="41">middle east and north africa</li>
									<li class="pickable" data-option="all" data-lat="0" data-lng="0">non wb countries</li>
									<li class="pickable" data-option="southasia" data-lat="27" data-lng="72">south asia</li>
								</ul>
							</div>
					</div>
				</div>';
	echo '<div id="map" class="cdbmap"></div>';
} elseif (is_category() && $title === 'news') {
	echo '				<div class="blue-bar-top" id="blue-bar">
					<div class="wrap wrapper filters">
							<div>
								<span class="title" id="toggle-filter-region">region</span>
								<ul class="region-filter" id="pick-region">
									<li class="pickable" data-option="africa" data-lat="7" data-lng="21">africa</li>
									<li class="pickable" data-option="eastasia" data-lat="35" data-lng="103">east asia pacific</li>
									<li class="pickable" data-option="europe" data-lat="55" data-lng="25">europe and central asia</li>
									<li class="pickable" data-option="latam" data-lat="13" data-lng="-59">latin america and caribbean</li>
									<li class="pickable" data-option="middleeast" data-lat="29" data-lng="41">middle east and north africa</li>
									<li class="pickable" data-option="all" data-lat="0" data-lng="0">non wb countries</li>
									<li class="pickable" data-option="southasia" data-lat="27" data-lng="72">south asia</li>
								</ul>
							</div>
							<div>
								<span class="title" id="toggle-filter-region">pillar</span>
								<ul class="region-filter" id="pick-pillar">
									<li class="pickable" data-option="open">open data platforms</li>
									<li class="pickable" data-option="community">community mapping</li>
									<li class="pickable" data-option="risk">risk visualization</li>
								</ul>
							</div>
					</div>
				</div>';
	echo '<span class="corner-map"></span>';
}

?>
			<div id="content">

				<div id="inner-content" class="wrap cf">

						<main id="main" class="" role="main" itemscope itemprop="mainContentOfPage" itemtype="http://schema.org/Blog">

							<?php
							echo '<h1 class="page-title">'.$title.'</h1>';
							?>
							<h3>Vestibulum id ligula porta felis euismod semper. Nullam id dolor. Ligula porta felis euismod semper ipsum. Vestibulum id ligula porta felis euismod semper. Nullam id dolor. Ligula porta felis euismod semper ipsum. Ullam id dolor.</h3>
							<div id="list-content" class="m-all cf index-row" role="news">
								<div class="row-container">
								<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

								<article id="post-<?php the_ID(); ?>" <?php post_class( 'cf' ); ?> role="article">
									<?php $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'single-post-thumbnail' );
								$image = ($image[0]) ? $image[0] : get_template_directory_uri().'/library/images/red-cross.jpg';
									?>
	            					<span class="img" style="background-image:url(<?php echo $image; ?>)"></span>

									<header class="article-header">
										<h1 class="h2 entry-title"><a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title(); ?>"><?php the_title(); ?></a></h1>
									</header>
									<section class="entry-content cf">
										<?php the_excerpt(); ?>
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

									<div id="content">

				<div id="inner-content" class="wrap cf">

					<main id="main" class="m-all t-2of3 d-5of7 cf no-results" role="main" itemscope itemprop="mainContentOfPage" itemtype="http://schema.org/Blog">


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
