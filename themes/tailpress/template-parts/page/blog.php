<?php
// $paged = ( get_query_var( 'paged' ) ) ? get_query_var( 'paged' ) : 1;
$posts_args = array(
  'post_type' => 'post',
  'posts_per_page' => 6,
  // 'paged'          => $paged
);

// var_dump($posts_args);

$posts_query = new WP_Query($posts_args);
?>

<section class="bg-gray-50 pt-20 pb-10 lg:pt-[80px] lg:pb-20">
  <div class="container lg:max-w-7xl mx-auto">
    <div class="-mx-4 flex flex-wrap justify-center">
      <div class="w-full px-4">
        <div class="mx-auto mb-[60px] max-w-[510px] text-center lg:mb-20">
          <span class="text-[#146858] mb-2 block text-lg font-semibold">
            Nosso Blog
          </span>
          <h2
            class="text-dark text-3xl font-extrabold sm:text-4xl md:text-5xl"
          >
            Últimas postagens
          </h2>
        </div>
      </div>
    </div>
    <div class="container mx-auto lg:max-w-7xl">
        <?php if($posts_query->have_posts()):?>
        <div class="grid grid-cols-1 gap-5 md:grid-cols-3 md:gap-8">
          <?php while($posts_query->have_posts()): $posts_query->the_post();?>
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
        <div class="flex justify-center">
          <?php
                // var_dump($posts_args);
                echo paginate_links( array(
                    'base'         => str_replace( 999999999, '%#%', esc_url( get_pagenum_link( 999999999 ) ) ),
                    'total'        => $posts_query->max_num_pages,
                    'current'      => max( 1, get_query_var( 'paged' ) ),
                    'format'       => '?paged=%#%',
                    'show_all'     => false,
                    'type'         => 'plain',
                    'end_size'     => 2,
                    'mid_size'     => 1,
                    'prev_next'    => true,
                    'prev_text'    => sprintf( '<i></i> %1$s', __( '&#8592;', 'text-domain' ) ),
                    'next_text'    => sprintf( '%1$s <i></i>', __( '&#8594;', 'text-domain' ) ),
                    'add_args'     => false,
                    'add_fragment' => '',
                    
                ) );
            ?>
        </div>
        <?php endif; ?>
      </div>
  </div>
</section>