	<footer class=" footer" id="footer">
		<div class="container">
			<div class="footer__block">
				<div class="footer__logo">
					<a class="logo" href="#"><img src="<?php the_field( 'footer_logo'  ); ?>" alt="footer logo"></a>
				</div>
				<div class="items">
					<ul class="list">
						<div class="block__title">
							<?php the_field( 'footer_island_title'  ); ?>
						</div>
						<?php 
						wp_nav_menu( [
							'theme_location'  => 'footer_menu_islands',
							'depth'           => 1,
							'container'       => 'div',
							'container_id'    => 'islands__block',
							'menu_class' => 'list',
						] );
						?>
					</ul>
				</div>
				<div class="items">
					<ul class="list">
						<div class="block__title">
							<?php the_field( 'footer_packages_title'  ); ?>
						</div>
						<?php 
						wp_nav_menu( [
							'theme_location'  => 'footer_menu_packages',
							'depth'           => 1,
							'container'       => 'div',
							'container_id'    => 'packages__block',
							'menu_class' => 'list',
						] );
						?>
					</ul>
				</div>
				<div class="items">
					<ul class="list">
						<div class="block__title">
							<?php the_field( 'footer_tahiti_title'  ); ?>
						</div>
						<?php 
						wp_nav_menu( [
							'theme_location'  => 'footer_menu_tahiti',
							'depth'           => 1,
							'container'       => 'div',
							'container_id'    => 'tahati__block',
							'menu_class' => 'list',
						] );
						?>
					</ul>
				</div>
				<div class="sidebar">
					<?php dynamic_sidebar('footer_sidebar'); ?>
				</div> 
			</div>
		</div>	
	<?php wp_footer(); ?>
</body>
</html>