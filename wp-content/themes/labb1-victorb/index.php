<!-- strukturen på hur sidan ska laddas i php -->	
		<?php get_header(); ?>
			
		<main>
			<section>
				<div class="container">
					<div class="row">
						<div class="col-xs-12">
							<div class="hero">
								<img src="<?php echo get_template_directory_uri().'/assets/img/city.jpg'; ?>" />
								<div class="text">
									<h1><?php get_post(); ?></h1>
									<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed sed sodales mauris. Aliquam felis est, efficitur vel fringilla quis, vehicula quis ex.</p>
								</div>
							</div>
						</div>
					</div>
				</div>
			</section>
		</main>
        <?php get_footer(); ?>
		</div>

</body>
</html>