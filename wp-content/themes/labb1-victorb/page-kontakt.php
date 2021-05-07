<?php get_header(); ?>

<?php
while(have_posts()) {
    the_post(); ?>
    <main>
			<section>
				<div class="container">
					<div class="row">
						<div class="col-xs-12 col-md-8 col-md-offset-2">
                        <h2><?php the_title(); ?></h2>
                         <p><?php the_content(); ?></p>
                            <form>
								<label>Namn</label>
								<input type="text" />
								<label>E-post</label>
								<input type="email" />
								<label>Meddelande</label>
								<textarea></textarea>
								<input type="submit" value="Skicka" />
							</form>
							</form>
						</div>
					</div>
				</div>
			</section>
		</main>
<?php }
?>

<?php get_footer(); ?>

</div>
	
    </body>
    </html>