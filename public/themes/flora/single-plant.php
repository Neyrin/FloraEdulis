<?php get_header(); ?>

<div class="row">
  <div class="col">
    <?php if (have_posts()) : ?>

      <?php while (have_posts()): the_post(); ?>
        <div class="img-container">
            <img class="plant-img" src="<?php the_field('plant_photo'); ?>">
        </div>
        <h1><?php the_title(); ?></h1>
        <?php the_content(); ?>

        <p class="author"><b>Named by: </b><?php the_field('author'); ?></p>
        <div class="color-info">
          <h4>Color: </h4>
          <div class="plant-color" style="background-color:<?php the_field('plant_color'); ?>"></div>
        </div>
        <p class="latin-name"><b>Latin name: </b><?php the_field('latin_name'); ?></p>

        <?php previous_post_link(); ?>

        <?php next_post_link(); ?>
      <?php endwhile; ?>

    <?php endif; ?>
  </div><!-- /col -->
</div><!-- /row -->

<?php get_footer(); ?>
