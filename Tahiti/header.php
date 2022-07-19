<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="<?php bloginfo('charset'); ?>">
	<title><?php bloginfo( 'description'  ); ?></title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">	
	<?php wp_head(); ?>
</head>
<body>
	<header class="header">
		<div class="container">
			<div class=header__menu>
				<a class="navbar-nav" href="#"><img src="<?php the_field( 'logo'  ); ?>" alt="header logo"></a>

				<?php 
				wp_nav_menu( [
					'theme_location'  => 'header_menu',
					'depth'           => 1,
					'container'       => 'nav',
					'container_id'    => 'menu',
					'menu_class' => 'links',	
				] );
				?>
				<span id="menu_ico" class="material-symbols-outlined">
					menu
				</span>
			</div>
			<?php 
			wp_nav_menu( [
				'theme_location'  => 'header_adaptive_menu',
				'depth'           => 1,
				'container'       => 'nav',
				'container_id'    => 'responsive__menu',
				'menu_class' => 'responsive__menu-list',	
			] );
			?>
		</div>
		<section class="baner__text">
			<div class="baner__text-item">
				<div class="bold"><?php the_field( 'baner_title_bold'  ); ?></div>
				<div class="light"><?php the_field( 'baner_title_light'  ); ?></div>	
			</div>
			<div class="banet__text-light"><?php the_field( 'banet_text_light'  ); ?></div>
		</section>

		<section class="slider">
			<?php
			$featured_posts = get_field('slider');
			if( $featured_posts ): ?>
				<?php foreach( $featured_posts as $post ): 
					setup_postdata($post); ?>	
					<img src="<?php the_field( 'slide'  ); ?>" alt="slider image">
				<?php endforeach; ?>
				<?php wp_reset_postdata(); ?>
			<?php endif; ?>
		</section>		
	</header>
	