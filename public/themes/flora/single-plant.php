<?php get_header(); ?>

<div class="row">
    <div class="col">
        <?php if (have_posts()) : ?>

            <?php while (have_posts()): the_post(); ?>

                <img src="<?php the_field('plant_photo'); ?>">
                <h1><?php the_title(); ?></h1>
                <?php the_content(); ?>

                <h4>Named by: <?php the_field('author'); ?></h4>
                <div class="color-info">    
                    <h4>Color: </h4>
                    <div class="plant-color" style="background-color:<?php the_field('plant_color'); ?>"></div>
                </div>
                <h4>Latin name: <?php the_field('latin_name'); ?></h4>

                <?php previous_post_link(); ?>

                <?php next_post_link(); ?>
            <?php endwhile; ?>

        <?php endif; ?>
    </div><!-- /col -->
</div><!-- /row -->

<?php get_footer(); ?>