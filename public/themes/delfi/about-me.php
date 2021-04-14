<?php /* Template Name: About-me */ ?>

<?php get_header(); ?>


<div class="about-us-container">
    <?php if (have_posts()) : ?>
        <?php while (have_posts()) : the_post(); ?>
            <div class="col">




                <?php the_content(); ?>

            <?php endwhile; ?>
        <?php endif; ?>
            </div>
</div>

<?php
$args = [
    'numberposts' => 3,
    'order' => 'desc',
    'post_type' => 'project',
];

$latestPost = get_posts($args);
?>

<div class="row nt-5 gx-5">
    <div class="col">
        <?php foreach ($latestPost as $post) :
            setup_postdata($post); ?>
            <div>
                <a href="<?php the_permalink(); ?>">
                    <div class="img">
                        <?php the_post_thumbnail('medium'); ?>
                    </div>
                    <h6>
                        <?php the_title(); ?>
                    </h6>
                </a>
            </div>
        <?php endforeach; ?>
    </div>
</div>
<?php get_footer(); ?>
