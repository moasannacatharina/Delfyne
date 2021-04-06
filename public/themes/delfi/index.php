<?php get_header(); ?>

<div class="row">
    <div class="col">
        <?php if (have_posts()) : ?>

            <?php while (have_posts()) : the_post(); ?>
                <div class="post-list">
                    <a href="<?php the_permalink(); ?>">
                        <?php if (has_post_thumbnail()) {
                            the_post_thumbnail('medium');
                        } ?>
                    </a>
                    <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>

                    <?php // the_excerpt();
                    ?>
                </div>

            <?php endwhile; ?>

        <?php endif; ?>
    </div>
</div>

<?php get_footer(); ?>
