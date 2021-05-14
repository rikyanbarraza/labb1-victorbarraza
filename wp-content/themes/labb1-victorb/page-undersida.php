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
						<div id="primary" class="col-xs-12 col-md-9">
                            <!-- hämtar sidinläggets rubrik -->
							<h1><?php the_title(); ?></h1>
                            <!-- hämtar sidinläggets brödtext -->
							<p><?php the_content(); ?></p>
						</div>
						<aside id="secondary" class="col-xs-12 col-md-3">
							<ul class="side-menu">
								<li>
								<!-- egen meny med hyperlänk som går att ändra via WP -->
								<a href=<?php wp_nav_menu( array( 'menu' => 'undermeny', 'container' => 'ul' )); ?></a>
								</li>
							</ul>
						</aside>
					</div>
				</div>
			</section>
		</main>
<!-- här slutar loopen -->
<?php }
?>
<!-- hämtar footer.php -->
<?php get_footer(); ?>