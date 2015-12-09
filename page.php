<?php get_header(); ?>
<?
if ( is_page( 'resources' ) ) {
?>
			<span class="corner-map"></span>
			<div id="content">

				<div id="inner-content" class="wrap cf">

						<main id="main" class="m-all cf" role="main" itemscope itemprop="mainContentOfPage" itemtype="http://schema.org/Blog">
							<div id="resources" class="m-all cf index-row" role="resources" itemscope="" itemprop="mainContentOfPage" itemtype="http://schema.org/Blog">
								<div class="card-third">
									<h3>resources</h3>
									<p>Vestibulum id ligula porta felis euismod semper. Nullam id dolor. Ligula porta felis euismod semper ipsum. Vestibulum id ligula porta felis euismod semper. Nullam id dolor. Ligula porta felis euismod semper ipsum. Ullam id dolor.</p>
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
							<div class="m-all cf index-row last-resources" role="resources" itemscope="" itemprop="mainContentOfPage" itemtype="http://schema.org/Blog">
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

						</main>

						<?php /* get_sidebar();*/ ?>

				</div>

			</div>
<? } // end about?>

<?php get_footer(); ?>
