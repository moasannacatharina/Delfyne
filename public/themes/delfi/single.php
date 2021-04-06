<?php get_header(); ?>


<div class="row">
    <div class="col">
        <?php if (have_posts()) : ?>
            <?php while (have_posts()) : the_post(); ?>

                <h1><?php the_title(); ?></h1>
                <?php if (has_post_thumbnail()) {
                    the_post_thumbnail('medium');
                } ?>
                <p class="h5"><?php the_date(); ?></p>

                <?php the_content(); ?>

            <?php endwhile; ?>
        <?php endif; ?>
    </div>
</div>
<div class="navigation">
    <div class="alignleft">
        <?php previous_post_link(); ?>
    </div>
    <div class="alignright">
        <?php next_post_link(); ?>
    </div>
</div> <!-- end navigation -->

<?php get_footer(); ?>
