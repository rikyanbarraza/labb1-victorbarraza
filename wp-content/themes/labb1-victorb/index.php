<!-- strukturen på hur indexsidan ska laddas i php -->	
<!-- hämtar header.php -->
<?php get_header(); ?>
		
		<main>
			<section>
				<div class="container">
					<div class="row">
						<div class="col-xs-12">
							<?php
							// while loopen startar
							while(have_posts()) {
							the_post(); ?>	
							<div class="hero">
								<!-- hämta sidoinläggets "Utvald bild" via WP -->
								<img src="<?php the_post_thumbnail_url(); ?>" />
								<div class="text">
									<h1><?php the_title(); ?></h1>
									<!-- hämtar sidinläggets brödtext -->
									<p><?php the_content(); ?></</p>
								</div>
							</div>
							<!-- här slutar loopen -->
							<?php } ?>
						</div>
					</div>
				</div>
			</section>
		</main>
<!-- hämtar footer.php -->
<?php get_footer(); ?>
