<?php /* Template Name: Contact */ ?>

<?php get_header(); ?>

<div class="contact-container">
    <?php if (have_posts()) : ?>
        <?php while (have_posts()) : the_post(); ?>
            <div class="col">
                <h1><?php the_title(); ?></h1>

                <?php the_content(); ?>

            <?php endwhile; ?>
        <?php endif; ?>
            </div>
</div>

<?php get_footer(); ?>
