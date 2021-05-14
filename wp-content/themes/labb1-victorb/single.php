<!-- blogginlägg -->
<?php get_header(); ?>



    <main>
			<section>
				<div class="container">
					<div class="row">
						<div id="primary" class="col-xs-12 col-md-9">
                            <!--  while loopen startar -->
                            <?php while(have_posts()) {
                            the_post(); ?>
							<article>
                                <!-- hämta sidoinläggets "Utvald bild" via WP -->
								<img src="<?php the_post_thumbnail_url(); ?>">
								<h2 class="title">
                                    <?php the_title(); ?>
									<a href="<?php the_permalink(); ?>"></a>
								</h2>
								<ul class="meta">
									<li>
										<i class="fa fa-calendar"></i>
										<!-- hämtar datum från inlägget -->
                                        <?php echo get_the_date('l j F , Y'); ?>
									</li>
									<li>
										<i class="fa fa-user"></i>
										<!-- hämtar förfatarens namn och derigerar till deras sida -->
                                        <?php the_author_posts_link(); ?>
									</li>
									<li>
										<i class="fa fa-tag"></i> 
										<!-- Hämtar och skriver ut dom olika kategorierna -->
                                        <?php the_category(','); ?>
									</li>
								</ul>
								<!-- skriver ut brödtexten -->
								<p><?php the_content(); ?></p>
							</article>
							<!-- slutar loopen -->
							<?php }
							?>
                            </div>
						<aside id="secondary" class="col-xs-12 col-md-3">
							<div id="sidebar">
								<ul>
									<li>
										<form id="searchform" class="searchform">
											<div>
												<label class="screen-reader-text">Sök efter:</label>
												<input type="text" />
												<input type="submit" value="Sök" />
											</div>
										</form>
									</li>
								</ul>
								<ul role="navigation">
										<li class="pagenav">
										<h2>Sidor</h2>
										<!-- egen meny med hyperlänk som går att ändra via WP -->
										<?php wp_nav_menu( array( 'menu' => 'bloggmeny', 'container' => 'li' )); ?>
										</li>
										<li>
											<h2>Arkiv</h2>
											<!-- egen meny med hyperlänk som går att ändra via WP -->
											<?php wp_nav_menu( array( 'menu' => 'arkiv', 'container' => 'li' )); ?>
										</li>
										<li class="categories">
											<h2>Kategorier</h2>
											<!-- egen meny med hyperlänk som går att ändra via WP -->
											<?php wp_nav_menu( array( 'menu' => 'kategorier', 'container' => 'li' )); ?>
										</li>
									</ul>
							</div>
						</aside>
					</div>
				</div>
			</section>
		</main>
<?php get_footer(); ?>