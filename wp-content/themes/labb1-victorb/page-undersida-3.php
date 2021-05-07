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
						<div id="primary" class="col-xs-12">
                            <!-- hämtar sidinläggets rubrik -->
							<h1><?php the_title(); ?></h1>
                            <!-- hämtar sidinläggets brödtext -->
							<p><?php the_content(); ?></p>
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