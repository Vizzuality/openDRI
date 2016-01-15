<?php get_header(); ?>
<?
if ( is_page( 'resources' ) ) {
?>
			<span class="corner-map"></span>
			<div id="content">

				<div id="inner-content" class="wrap cf">

						<main id="main" class="m-all cf" role="main" itemscope itemprop="mainContentOfPage" itemtype="http://schema.org/Blog">
							<?php if (have_posts()) : while (have_posts()) : the_post();
								the_content();
							endwhile; endif; ?>
							<div class="m-all cf index-row last-resources">
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

						</main>

						<?php /* get_sidebar();*/ ?>

				</div>

			</div>
<? } // end resources

elseif ( is_page( 'about' ) ) {
?>

<span class="corner-map about"></span>
			<div id="content">

				<div id="inner-content" class="wrap cf">

						<main id="main" class="m-all cf" role="main" itemscope itemprop="mainContentOfPage" itemtype="http://schema.org/Blog">
							<div id="about" class="m-all cf index-row about-content">
								<div class="card-third">
									<h3>OpenDRI background</h3>
									<p>In 2011, GFDRR launched the Open Data for Resilience Initiative (OpenDRI) to apply the concepts of the global open data movement to the challenges of reducing vulnerability to natural hazards and the impacts of climate change. OpenDRI supports World Bank Regional Disaster Risk Management Teams to build capacity and long-term ownership of open data projects with client countries that are tailored to meet specific needs and goals of stakeholders. OpenDRI engages with client governments in three main areas:</p>
								</div>
							</div>
							<div id="" class="m-all cf index-row contents-img">
								<span class="img-bridge"></span>
							</div>
							<div class="p-info">
								<h4>open data platforms</h4>
								<p>
									To increase public access to risk information, OpenDRI engages in dialogue with governments on the value of open data through working groups, pilot projects that evolve into long-term locally owned open data projects. OpenDRI provides technical solutions and assistance for the project implementation through GeoNode, a free and open source data sharing platform.
								</p>
							</div>
							<div class="p-info">
								<h4>community mapping and crowdsourcing</h4>
								<p>
									To engage communities in the creation of accurate and timely data about the rapidly evolving urban and rural environments in the place they live, OpenDRI works with governments and local communities to utilize simple, collaborative, crowdsourcing mapping tools such as OpenStreetMap (OSM). OpenDRI has also created and is supervising the Open Cities Project (http://www.opencitiesproject.org/) that facilitates community-mapping activities.
								</p>
							</div>
							<div class="p-info">
								<h4>risk cisualizaion and communication</h4>
								<p>
									To communicate risk more effectively to decision-makers in planning, preparedness and response activities, OpenDRI works with governments and partners to develop InaSAFE software. By combining data from scientists, local governments and communities, InaSAFE provides insights into the likely effects of disaster events.
								</p>
							</div>
							<div class="p-info double">
								<p>
									The OpenDRI team, in partnership with international and national agencies, has developed this suite of complementary tools to improve risk information through better access to data. These tools have global developer and user communities, all of whom contribute to the ongoing use and development of the tools – all of which are aimed at providing better information for decision makers at all levels to take action to reduce, prepare for, and recover from disaster risks. While engaging with government to leverage the usage of these tools, the OpenDRI also strive to create local communities of user and developers involving government agencies, universities, NGOs, innovation hub to create sustainable capacity.
								</p>
							</div>
							<div id="" class="m-all cf index-row about-content">
								<div class="card-third">
									<h3>Our principles</h3>
									<ol>
										<li><h4>Open by default</h4>
											Relevant caveats about privacy etc Collect once, use many times.
										</li>
										<li><h4>Accesible</h4>
											Relevant caveats about privacy etc Collect once, use many times.
										</li>
										<li><h4>Co-Creation</h4>
											Relevant caveats about privacy etc Collect once, use many times.
										</li>
										<li><h4>Partnership</h4>
											Relevant caveats about privacy etc Collect once, use many times.
										</li>
										<li><h4>Licensed</h4>
											Relevant caveats about privacy etc Collect once, use many times.
										</li>
										<li><h4>Documented</h4>
											Relevant caveats about privacy etc Collect once, use many times.
										</li>
										<li><h4>Local ownsership</h4>
											Relevant caveats about privacy etc Collect once, use many times.
										</li>
										<li><h4>Open source</h4>
											Relevant caveats about privacy etc Collect once, use many times.
										</li>
										<li><h4>Open data communities</h4>
											Relevant caveats about privacy etc Collect once, use many times.
										</li>
										<li><h4>Build tools</h4>
											Relevant caveats about privacy etc Collect once, use many times.
										</li>
									</ol>
								</div>
							</div>
							<div id="contact">
								<div class="-m-disclaimer m-all cf index-row">
									<div class="card-third">
										<h3>Contact</h3>
										<p>Morbi leo risus, porta ac consectetur ac, vestibulum at eros. Maecenas faucibus mollis interdum. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.</p>
										<p>Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor. Donec ullamcorper nulla non metus auctor fringilla. Nullam quis risus eget urna mollis ornare vel eu leo. Cras mattis consectetur purus sit amet fermentum.</p>
									</div>
								</div>
								<div class="-m-form">
									<?php if (have_posts()) : while (have_posts()) : the_post();
										the_content();
									endwhile; endif; ?>
								</div>
							</div>
							<div id="more-content" class="index-row more-content">
								<div class="card-third">
									<h3>Related web pages</h3>
								</div>
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
						<div id="members" class="index-row more-content">
								<div class="card-third">
									<h3>Team members</h3>
								</div>
								<div class="row-container">
									<div class="-m-team-member">
										<img src="">
										<div class="-m-info">
											<span class="name">Francis Ghesquiere</span>
											<span class="title">Head of GFDRR</span>
											<p>Mr. Ghesquiere has extensive experience on policies and instruments to mainstream disaster risk management in development strategies and programs. He has participated in numerous post disaster operations and spent more than ten years building the World Bank disaster risk management practice in Latin America and the Caribbean and in South Asia. He is known for his leadership on a number of flagship initiatives, including the Caribbean Catastrophe Risk Insurance Facility (CCRIF), the Central America Probabilistic Risk Modeling Initiative, and the Understanding Risk Forum (UR). He was also key in the design of new policy instruments to help accelerate World Bank response to disasters, including the policy on emergency operations and innovative contingent financing instruments such as the CAT-DDO and Contingency Components. Mr. Ghesquiere holds a Master Degree from the Harvard Kennedy School of Government and an Engineering Degree from the University of Louvain. He also studied Finance and Economics at New York University, ESADE Barcelona and HEC Paris.</p>
										</div>
									</div>
								</div>
						</div>
						</main>

						<?php /* get_sidebar();*/ ?>

				</div>

			</div>
<? } // end about?>
<?php get_footer(); ?>
