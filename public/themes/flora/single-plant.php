<?php get_header(); ?>

<div class="row">
    <div class="col">
        <?php if (have_posts()) : ?>

            <?php while (have_posts()): the_post(); ?>

                <img src="<?php the_field('plant_photo'); ?>">
                <h1><?php the_title(); ?></h1>
                <?php the_content(); ?>

                <h2><?php the_field('author'); ?></h2>
                <div style="background-color:<?php the_field('plant_color'); ?>">Something here...</div>
                <h2><?php the_field('latin_name'); ?></h2>

                <?php previous_post_link(); ?>

                <?php next_post_link(); ?>
            <?php endwhile; ?>

        <?php endif; ?>
    </div><!-- /col -->
</div><!-- /row -->

<?php get_footer(); ?>