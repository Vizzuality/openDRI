<?php get_header(); ?>

			<div id="content">

				<div id="inner-content" class="wrap cf">

					<main id="main" class="m-all t-2of3 d-5of7 cf" role="main" itemscope itemprop="mainContentOfPage" itemtype="http://schema.org/Blog">

						<article id="post-not-found" class="hentry cf">


								<h1><?php _e( 'Page not found', 'bonestheme' ); ?></h1>


							<section class="entry-content">

								The requested page was not found on this server

							</section>

							<section class="search">

									<p><?php get_search_form(); ?></p>

							</section>
							<section>
								<a href="<?php echo home_url(); ?>" class="home-404">go to homepage</a>
							</section>
						</article>

					</main>

				</div>

			</div>

<?php get_footer(); ?>
