<?php get_header(); ?>

<?php
while(have_posts()) {
    the_post(); ?>
        <main>
			<section>
				<div class="container">
					<div class="row">
						<div id="primary" class="col-xs-12">
							<h1><?php the_title(); ?></h1>
							<p><?php the_content(); ?></p>
						</div>
					</div>
				</div>
			</section>
		</main>
<?php }
?>

<?php get_footer(); ?>