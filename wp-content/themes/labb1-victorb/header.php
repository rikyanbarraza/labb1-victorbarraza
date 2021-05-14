<!-- vad som ska bli header i php -->
<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8" />
	<!-- function för att ändra namn på hemsidan som syns via fliken på hemsidan och går att ändra via wp -->
	<title><?php bloginfo( 'name' ); ?></title>
	<!-- hämta funktionerna ur funtions.php som länkar samman CSS och JS med hemsidan  -->
	<?php wp_head(); ?>
</head>
<body>
<div id="wrap">
	<header id="header">
			<div class="container">
				<div class="row">
					<div class="col-xs-8 col-sm-6">	
							<!-- för att kunna hämta hemsidans namn via WP -->
							<a class="logo" href="
							<?php bloginfo('url'); ?>">
							<?php bloginfo('name'); ?>
						</a>
					</div>
					<div class="col-sm-6 hidden-xs">
							<!-- få sök funktionen att fungera med wp -->
						<?php get_search_form(); ?>
					</div>
					<div class="col-xs-4 text-right visible-xs">
						<div class="mobile-menu-wrap">
							<i class="fa fa-search"></i>
							<i class="fa fa-bars menu-icon"></i>
						</div>
					</div>
				</div>
			</div>
		</header>

		<div class="mobile-search">
			<form id="searchform" class="searchform">
				<div>
					<label class="screen-reader-text">Sök efter:</label>
					<input type="text" />
					<input type="submit" value="Sök" />
				</div>
			</form>
		</div>

		<nav id="nav">
			<div class="container">
				<div class="row">
					<div class="col-xs-12">
						<!-- hämtar menyn ordning från WP -->
						<?php wp_nav_menu( array( 'menu' => 'huvudmeny', 'container' => 'ul', )); ?>
					</div>
				</div>
			</div>
		</nav>