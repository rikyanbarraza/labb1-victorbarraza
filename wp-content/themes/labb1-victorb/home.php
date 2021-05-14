<!-- blogginlägg -->
<?php get_header(); ?>
    <main>
		<section>
				<div class="container">
					<div class="row">
						<div id="primary" class="col-xs-12 col-md-9">
							<!-- hämtar sidans title från wp -->
							<h1><?php wp_title(''); ?></h1>
                            <!--  while loopen startar -->
                            <?php while(have_posts()) {
                                the_post(); ?>
							<article>
                                <!-- hämta sidoinläggets "Utvald bild" via WP -->
								<img src="<?php the_post_thumbnail_url(); ?>">
								<h2 class="title">
									<!-- hyperlänk till blogginlägg -->
									<a href="<?php the_permalink(); ?>">
								<!-- blogginläggets title -->
                                    <?php the_title(); ?>
                                    </a>
                                    </h2>
								<ul class="meta">
									<li>
										<i class="fa fa-calendar"></i>
                                        <!-- visa blogginläggets datum -->
                                        <?php echo get_the_date('l j F , Y'); ?>
									</li>
									<li>
										<i class="fa fa-user"></i>
                                        <!-- få fram blogginläggets författare   -->
                                        <?php the_author_posts_link(); ?>
									</li>
									<li>
										<i class="fa fa-tag"></i>
                                        <!-- få fram wp's kategorier -->
                                        <?php the_category(','); ?>
									</li>
								</ul>
                                <!-- skära av brödtexten så bara en bestämd antal ord visa och bestäms via WP -->
								<p><?php the_excerpt(); ?></p>
							</article>
                            <!-- slutar loopen -->
                            <?php
                            }
                            ?>
							<nav class="navigation pagination">
									<h2 class="screen-reader-text">Inläggsnavigering</h2>
									<a class="prev page-numbers" href="">Föregående</a>
									<span class="page-numbers current">1</span>
									<a class="page-numbers" href="">2</a>
									<a class="next page-numbers" href="">Nästa</a>
							</nav>
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