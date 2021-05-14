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
						<div class="col-xs-12 col-md-8 col-md-offset-2">
                        <!-- hämtar sidinläggets rubrik -->
                        <h2><?php the_title(); ?></h2>
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