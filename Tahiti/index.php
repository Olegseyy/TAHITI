<?php get_header(); ?>
	<main>
		<section class="discover" id="discover">
			<div class="container">
				<div class="discover__title">
					<div class="discover__title-bold">
						<?php the_field('discover_title_bold'); ?>
					</div>
					<div class="discover__title-light">
						<?php the_field('discover_title_light'); ?>
					</div>	
				</div>

				<div class="discover__text-light">
					<?php the_field('discover_text_light'); ?>
				</div>
				<div class="discover__items">
					<?php
					$featured_posts = get_field('tahiti_island');
					if( $featured_posts ): ?>
						<?php foreach( $featured_posts as $post ): 
							setup_postdata($post); ?>		
							<div class="tickets">
								<div class="img">
									<img src="<?php the_field('island_image'); ?>"alt="island image">
								</div>
								<div class="title">
									<?php the_field('name'); ?>
								</div>
								<div class="description">
									<?php the_field('island_description'); ?>
								</div>
								<a class="tickets_btn" href="#">
									<div class="prise">
										<div class="from">
											<?php the_field('from'); ?>
										</div>
										<div class="cost">
											<?php the_field('cost'); ?>
										</div>
										<div class="arrow">
											<span class="material-symbols-outlined">
												arrow_forward
											</span>
										</div>
									</div>
								</a>
							</div>
						<?php endforeach; ?>
					<?php endif; ?>
				</div>
				<div class="discover__select-form">
					<form class="select__from">
						<select>
							<?php
								$args = array(
								    'post_type' => 'tahiti_island',
								    'posts_per_page' => 100
								);
								$the_query = new WP_Query( $args ); ?>
								<?php if ( $the_query->have_posts() ) : ?>
									<option>Select an island</option>
								    <?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
										<option>
											<?php the_title(); ?>
										</option>
									<?php endwhile; ?>
								<?php endif; ?>
								<?php wp_reset_postdata(); ?>
						</select>
					</form>
					<button><?php the_field('select_from_btn'); ?></button>
				</div>
			
				<div class="discover__title-second">
					<?php the_field( 'discover_lol'  ); ?>
				</div>
			</div>
		</section>

		<section class="experience__baner" id="experience">
			<div class="experience__shadow"></div>
			<div class="container">
				<div class="experience__text">
					<div class="experience__title">
						<div class="experience__title-bold">
							<?php the_field('experience__title_bold'); ?>
						</div>
						<div class="experience__title-light">
							<?php the_field('experience__title_light'); ?>	
						</div>	
					</div>
					<div class="experience__text-light">
						<?php the_field('experience__text_light'); ?>
					</div>
				</div>
				<div class="experience__baner-text">
					<div class="experience__baner-description">
						<?php the_field('experience__baner_description'); ?>					
					</div>
					<div class="experience__baner-btn">
						<button><?php the_field('experience__btn'); ?></button>
					</div>
				</div>
			</div>
			<div class="experience__img">
				<img src="<?php the_field('experience_image'); ?>" alt="experience image">
			</div>
		</section>

		<section class="advantage">
			<div class="container">
				<div class="advantage__title">
					<div class="advantage__title-bold">
						<?php the_field('advantage_title_bold'); ?>
					</div>
					<div class="advantage__title-light">
						<?php the_field('advantage_title_light'); ?>
					</div>	
				</div>
				<div class="advantage__text">
					<div class="advantage__text-item">
						<?php the_field('advantage_1'); ?>		
					</div>
					<div class="advantage__text-item">
						<?php the_field('advantage_2'); ?>		
					</div>
					<div class="advantage__text-item">
						<?php the_field('advantage_3'); ?>		
					</div>
				</div>
			</div>
		</section>

		<section class="help__baner">
			<div class="container">
				<div class="help__baner-items">
					<div class="help__baner-text">
						<div class="help__baner-title">
							<?php the_field('help_baner_title'); ?>
						</div>
						<div class="help__baner-description">
							<?php the_field('help_baner_description'); ?>
						</div>
						<div class="help__baner-btn">
							<button><?php the_field('help__btn'); ?></button>
						</div>
					</div>
					<div class="opacity__background"></div>
				</div>	
			</div>
			<div class="help__baner-img ">
				<img src="<?php the_field( 'baner'  ); ?>" alt="">
			</div>
		</section>
	</main>
<?php get_footer(); ?>

