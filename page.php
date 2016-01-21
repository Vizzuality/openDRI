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
				<div class="blue-bar-top about" id="blue-bar">
					<div class="wrap wrapper">
						<span><a href="#principles">our principles</a></span>
						<span><a href="#contact">contact</a></span>
						<span><a href="#more-content">related web pages</a></span>
						<span><a href="#partners">partners</a></span>
						<span><a href="#members">team members</a></span>
					</div>
				</div>

				<div id="inner-content" class="wrap cf">
				<?php if (have_posts()) : while (have_posts()) : the_post();
										the_content();
									endwhile; endif; ?></div>

			</div>
<? } // end about 
	// default
	else {
		?>
		<div id="content">

				<div id="inner-content" class="wrap cf">
			<h1><?php echo get_the_title(); ?></h1>
		<? if (have_posts()) : while (have_posts()) : the_post();
				the_content();
			endwhile;
		endif;
	}
?>
</div>

			</div>
<?php get_footer(); ?>
