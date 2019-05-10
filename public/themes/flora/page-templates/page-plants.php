<?php
/**
 * Template Name: Plants
 */

get_header(); ?>

<div class="row mt-5">
  <div>
    <?php if (have_posts()): ?>
      <?php while (have_posts()): the_post(); ?>
        <h1><?php the_title(); ?></h1>
        <?php the_content(); ?>
      <?php endwhile; ?>
    <?php endif; ?>
  </div><!-- /col -->
</div><!-- /row -->

<?php $plants = get_posts(['post_type' => 'plant']); ?>

<?php if (count($plants)): ?>
  <div class="row mt-5">
    <div class="col">
      <ul>
        <?php foreach ($plants as $plant): ?>
          <li class="mb-2">
            <a href="<?php the_permalink($plant); ?>"><h2><?php echo $plant->post_title; ?></h2></a>
            <img src="<?php the_field('plant_photo'); ?>">
            <p><?php echo $plant->post_excerpt; ?></p>
            <a href="<?php the_permalink($plant); ?>" class="button">To the article</a>
          </li>
        <?php endforeach; ?>
      </ul>
    </div><!-- /col -->
  </div><!-- /row -->
<?php endif; ?>

<?php get_footer(); ?>
