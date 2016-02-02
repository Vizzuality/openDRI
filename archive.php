<?php get_header(); ?>

<?

// the_archive_title( '<h1 class="page-title">', '</h1>' );
if ( is_category() ) {
	$title = sprintf( __( '%s' ), 	   single_cat_title( '', false ) );
} elseif ( is_tag() ) {
	$title = sprintf( __( 'Tag: %s' ), single_tag_title( '', false ) );
}
	global $post_type;
if(is_post_type_archive() && $post_type=='project') {
	$title = 'Projects';
	$postsInAfrica = get_term_by('slug','africa','category');
	$postsInAfrica = $postsInAfrica->count;
	$postsIneastasia = get_term_by('slug','east-asia-pacific','category');
	$postsIneastasia = $postsIneastasia->count;
	$postsIneurope = get_term_by('slug','europe-and-central-asia','category');
	$postsIneurope = $postsInEurope->count;
	$postsInlatam = get_term_by('slug','latin-america-and-caribbean','category');
	$postsInlatam = $postsInlatam->count;
	$postsInmiddleeast = get_term_by('slug','middle-east-and-north-africa','category');
	$postsInmiddleeast = $postsInmiddleeast->count;
	$postsInall = get_term_by('slug','non-wb-countries','category');
	$postsInall = $postsInall->count;
	$postsInsouthasia = get_term_by('slug','south-asia','category');
	$postsInsouthasia = $postsInsouthasia->count;

	$postsInTotal = array('africa' => $postsInAfrica,
						  'eastasia' => $postsIneastasia,
						  'europe' => $postsInEurope,
						  'latam' => $postsInlatam,
						  'middleeast' => $postsInmiddleeast,
						  'all' => $postsInall,
						  'southasia' => $postsInsouthasia);

	echo '<script>var jsonValues = \''.json_encode($postsInTotal).'\'</script>';


	echo '		<div class="blue-bar-top" id="blue-bar">
					<div class="wrap wrapper filters">
							<div id="blue-bar-pick-pillar">
								<span class="title">Select:</span>
								<span class="option-pillar" data-option="open"><a href="#" data-option="open"><i class="img-pile-1"></i>open data platforms</a></span>
								<span class="option-pillar" data-option="community"><a href="#" data-option="community"><i class="img-pile-2"></i>community mapping</a></span>
								<span class="option-pillar" data-option="risk"><a href="#" data-option="risk"><i class="img-pile-3"></i>risk visualization</a></span>
							</div>
							<div class="container-region-filter">
								<span class="title" id="toggle-filter-region">filter by region</span>
								<ul class="region-filter" id="pick-region">
									<li><input type="text" id="searchCountries" placeholder="Search country"></li>
									<li class="pickable" data-option="africa" data-lat="6.3152" data-lng="5.80" data-zoom="3">africa</li>
									<li class="pickable" data-option="eastasia" data-lat="9.968" data-lng="118.3" data-zoom="3">east asia pacific</li>
									<li class="pickable" data-option="europe" data-lat="64.32" data-lng="99.84" data-zoom="3">europe and central asia</li>
									<li class="pickable" data-option="latam" data-lat="-10.314" data-lng="-68.027" data-zoom="3">latin america and caribbean</li>
									<li class="pickable" data-option="middleeast" data-lat="30.75" data-lng="28.03" data-zoom="4">middle east and north africa</li>
									<li class="pickable" data-option="nonwp" data-lat="0" data-lng="0" data-zoom="2">non wb countries</li>
									<li class="pickable" data-option="southasia" data-lat="23.40" data-lng="77.08" data-zoom="4">south asia</li>
									<li class="pickable clear-map" data-option="reload" data-lat="27" data-lng="72">Clear map</li>
								</ul>
							</div>
					</div>
				</div>';
	echo '<div id="map" class="cdbmap"></div>';
} elseif (is_category() && $title === 'news') {
	$display_navi = true;
	echo '		<div class="blue-bar-top" id="blue-bar">
					<div class="wrap wrapper filters">
							<div id="blue-bar-pick-pillar">
								<span class="title">Select:</span>
								<span class="option-pillar" data-option="open"><a href="#" data-option="open"><i class="img-pile-1"></i>open data platforms</a></span>
								<span class="option-pillar" data-option="community"><a href="#" data-option="community"><i class="img-pile-2"></i>community mapping</a></span>
								<span class="option-pillar" data-option="risk"><a href="#" data-option="risk"><i class="img-pile-3"></i>risk visualization</a></span>
							</div>
							<div class="container-region-filter">
								<span class="title" id="toggle-filter-region">filter by region</span>
								<ul class="region-filter" id="pick-region">
									<li><input type="text" id="searchCountries" placeholder="Search country"></li>
									<li class="pickable" data-option="africa" data-lat="6.3152" data-lng="5.80" data-zoom="3">africa</li>
									<li class="pickable" data-option="eastasia" data-lat="9.968" data-lng="118.3" data-zoom="3">east asia pacific</li>
									<li class="pickable" data-option="europe" data-lat="64.32" data-lng="99.84" data-zoom="3">europe and central asia</li>
									<li class="pickable" data-option="latam" data-lat="-10.314" data-lng="-68.027" data-zoom="3">latin america and caribbean</li>
									<li class="pickable" data-option="middleeast" data-lat="30.75" data-lng="28.03" data-zoom="4">middle east and north africa</li>
									<li class="pickable" data-option="nonwp" data-lat="0" data-lng="0" data-zoom="2">non wb countries</li>
									<li class="pickable" data-option="southasia" data-lat="23.40" data-lng="77.08" data-zoom="4">south asia</li>
									<li class="pickable clear-map" data-option="reload" data-lat="27" data-lng="72">Clear map</li>
								</ul>
							</div>
					</div>
				</div>';
	echo '<span class="corner-map"></span>';
} elseif (is_post_type_archive() && $post_type=='resource'){
	$title = 'Resources';
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
									<? if (is_post_type_archive() && $post_type=='resource') : ?>
									<ul class="resource-list">
									<? endif; ?> 
								<? if (have_posts()) : while (have_posts()) : the_post(); ?>
							 	 <? $cats = array();
									foreach(wp_get_post_categories($post->ID) as $c)
									{
										$cat = get_category($c);
										array_push($cats,$cat->name);
									}
								?>
								<? if (is_post_type_archive() && $post_type=='resource') : ?>
								<li>
									<div>
										<span class="title"><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></span>
									</div>
									<div>
										<span class="name">topic/issue</span><span class="size"><?php the_date() ?></span>
									</div>
								</li>
								<? else: ?>
									<article id="post-<?php the_ID(); ?>" <?php post_class( 'cf '); ?> role="article">
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
					                            <?php printf( __( '', 'bonestheme' ).' %1$s',
					   								/* the time the post was published */
					   								'<time class="updated entry-time" datetime="' . get_the_time('Y-m-d') . '" itemprop="datePublished">' . get_the_time('d M') . '</time>'
												); ?>
											</p>
										</footer>
									</article>
								<? endif; ?>

								<?php endwhile; ?>
								<? if (is_post_type_archive() && $post_type=='resource') : ?>
									</ul>
									<div class="m-all cf index-row last-resources">
									<?
										$args = array( 'numberposts' => '1', 'category' => 'highlighted-resource', 'order' => 'DESC', 'post_type' => 'resource' );
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
									<? } 
										$args = array( 'numberposts' => '1', 'category' => 'highlighted-resource',  'order' => 'DESC', 'offset' => '1', 'post_type' => 'resource' );
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
									</div>
									<script type="text/javascript">
										document.getElementsByTagName('head')[0].innerHTML += '<style>#firstFeatured:after{background-image:url(<? echo $image1 ?>) !important;}#secondFeatured:after{background-image:url(<? echo $image2 ?>) !important;}</style>';
									</script>
								<? endif; ?>
							</div>
						</div>
									<?php if (!!$display_navi){ bones_page_navi();} ?>

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
