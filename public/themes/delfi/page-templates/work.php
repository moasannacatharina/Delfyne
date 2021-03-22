<?php /* Template Name: Work */ ?>

<?php get_header(); ?>


<div class="row">
    <div class="col">
        <?php if (have_posts()) : ?>
            <?php while (have_posts()) : the_post(); ?>

                <h1><?php the_title(); ?></h1>

                <?php the_content(); ?>

            <?php endwhile; ?>
        <?php endif; ?>
    </div>
</div>

<?php
$projects = get_posts(['post_type' => 'project']);

?>

<?php if (count($projects)) : ?>
    <div class="row-mt-5">
        <div class="col">
            <h2 class="h5">Projects</h2>
            <ul>
                <?php foreach ($projects as $post) : setup_postdata($post); ?>
                    <li>
                        <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                        <?php $tools = get_the_terms($post, 'tool'); ?>
                        <?php if ($tools) : ?>
                            <p>
                                Built using:
                                <?php foreach ($tools as $tool) : ?>
                                    <a href="<?= get_term_link($tool) ?>"><?= $tool->name ?></a>
                                <?php endforeach; ?>
                            </p>
                        <?php endif; ?>
                    </li>
                <?php endforeach; ?>
            </ul>
        </div>
    </div>
<?php endif; ?>


<?php get_footer(); ?>