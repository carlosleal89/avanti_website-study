<?php get_header(); ?>
<div class="cases-container">
  <h1>Cases</h1>
  <?php if( have_posts() ) : ?>
    <div class="cases-list">
      <?php while ( have_posts() ) : the_post(); ?>
        <div class="case-item">
          <h3><?php the_title(); ?></h3>
        </div>
      <?php endwhile;
      else:
      ?>
        <p>Sorry, no posts...</p>
      <?php endif; ?>    
    </div>
</div>
<?php get_footer(); ?>

  