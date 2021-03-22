<?php get_header(); ?>

<div class="row">
    <div class="col">
        <h1><?php single_term_title(); ?></h1>
        <?php if (have_posts()) : ?>

            <?php while (have_posts()) : the_post(); ?>

                <div>
                    <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                </div>

            <?php endwhile; ?>

        <?php endif; ?>
    </div>
</div>

<?php get_footer(); ?>