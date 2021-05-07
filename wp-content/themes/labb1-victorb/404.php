<!-- fel medelande när sidan ej hittas -->
<!-- hämtar header.php -->
<?php get_header(); ?>
<div class=”error-message”>
                <div class="container">
					<div class="row">
						<div id="primary" class="col-xs-12">
							<h1>Oh no!</h1>
							<img src="<?php echo get_template_directory_uri().'/assets/img/oh yeah.png' ?>" alt="">
                            <p>The page you are looking for is not here!</p>
						</div>
					</div>
				</div>
</div>
<!-- hämtar footer.php -->
<?php get_footer(); ?>