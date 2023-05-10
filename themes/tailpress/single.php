<?php get_header(); ?>

	<div class="container my-8 md:my-16 mx-auto">

	<?php if ( have_posts() ) : ?>

		<?php
		while ( have_posts() ) :
			the_post();
			?>

			<?php get_template_part( 'template-parts/content', 'single' ); ?>

			<?php
			// If comments are open or we have at least one comment, load up the comment template.
			if ( comments_open() || get_comments_number() ) :
				comments_template();
			endif;
			?>

			<?php 
			$args = array(
				'post_type' => 'post',
				'posts_per_page' => 3,
			);
			$ultimos_query = new WP_Query($args);
			?>
				<div class="container mx-auto py-8 lg:max-w-7xl lg:py-16">
					<h2 class="text-3xl leading-none font-extrabold mb-8 lg:text-5xl lg:mb-16">Veja também</h2>
					<?php if($ultimos_query->have_posts()):?>
					<div class="grid grid-cols-1 gap-5 md:grid-cols-3 md:gap-8">
						<?php while($ultimos_query->have_posts()): $ultimos_query->the_post();?>
							<div class="">
								<?php if(has_post_thumbnail( $post->ID )): ?>
									<?php $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'single-post-thumbnail' ) ?>
								<?php endif; ?>
								<div class="mx-auto mb-10">
									<div class="mb-5 overflow-hidden rounded">
										<img
										src="<?php echo $image[0];?>"
										alt="image"
										class="w-full"
										/>
									</div>
									<div>
										<span
										class="bg-[#146858] mb-5 inline-block rounded py-1 px-4 text-center text-xs font-semibold leading-loose text-white"
										>
										<?php echo get_the_date('d M, Y'); ?>
										</span>
										<h3>
											<a
												href="<?php the_permalink()?>"
												class="text-dark hover:text-primary mb-4 inline-block text-xl font-semibold sm:text-2xl lg:text-xl xl:text-2xl line-clamp-2"
											>
											<?php echo get_the_title(); ?>
											</a>
										</h3>
										<div class="text-body-color text-base line-clamp-2">
											<?php the_excerpt(); ?>
										</div>
									</div>
								</div>
							</div>
						<?php endwhile; ?>
					</div>
					<?php endif; ?>
				</div>

		<?php endwhile; ?>

	<?php endif; ?>

	</div>

<?php
get_footer();
