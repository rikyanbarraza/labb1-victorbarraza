<!-- hämtar header.php -->
<?php get_header(); ?>

    	<main>
			<section>
				<div class="container">
					<div class="row">
						<div class="col-xs-12 col-sm-8 col-md-6">
						 <!-- while loopen startar -->
						<?php
						while(have_posts()) {
							the_post(); ?>
						<!-- hämtar sidinläggets rubrik -->
                        <h1><?php the_title(); ?></h1>
						<!-- hämtar sidinläggets brödtext -->
							<p><?php the_content(); ?></p>
						</div>
						<!-- här slutar loopen -->
						<?php }
						?>
						<div class="col-xs-12 col-sm-4 col-md-6">
							<!-- hämta sidoinläggets "Utvald bild" via WP -->
							<img src="<?php the_post_thumbnail_url(); ?> " />
						</div>
					</div>
				</div>
			</section>
		</main>

<!-- hämtar footer.php -->
<?php get_footer(); ?>