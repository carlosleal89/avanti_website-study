<div class="slider-container">
  <?php
  $args = array(
    'post_type' => 'post',
    'category_name' => 'cases'
  );

  $query = new WP_Query($args);

  if ( $query->have_posts() ) : ?>
    <div class="slider">
      <?php while ( $query->have_posts() ) : $query->the_post(); ?>
        <div class="slider-item ">
          <a href=<?php echo get_permalink(); ?>>
            <?php if ( has_post_thumbnail() ) : ?>
              <div class="slider-image">
                <img src=<?php echo get_the_post_thumbnail_url(null, 'full'); ?> alt="">
              </div>
            <?php endif; ?>
            <p class="line-clamp-3 text-black mt-6"><?php the_title(); ?></p>
          </a>
        </div>
      <?php endwhile; ?>
    </div>
  <?php else: ?>
    <p>Sorry, no posts...</p>
  <?php endif;
  wp_reset_postdata(); //reseta a custom query
  ?>

</div>