<!-- hämtar header.php -->
<?php get_header(); ?>

<?php
// while loopen startar
while(have_posts()) {
    the_post(); ?>
    	<main>
			<section>
				<div class="container">
					<div class="row">
						<div class="col-xs-12 col-sm-8 col-md-6">
						<!-- hämtar sidinläggets rubrik -->
                        <h1><?php the_title(); ?></h1>
						<!-- hämtar sidinläggets brödtext -->
							<p><?php the_content(); ?></p>
						</div>
						<div class="col-xs-12 col-sm-4 col-md-6">
							<img src="<?php the_post_thumbnail_url(); ?> " />
						</div>
					</div>
				</div>
			</section>
		</main>
<!-- här slutar loopen -->
<?php }
?>
<!-- hämtar footer.php -->
<?php get_footer(); ?>