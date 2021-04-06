<?php get_header(); ?>

<div class="row">
    <div class="col">
        <?php if (have_posts()) : ?>
            <?php while (have_posts()) : the_post(); ?>


                <div class="podcast-image"><?php the_post_thumbnail('large'); ?>
                    <div class="podcast-text">
                        <h1> Alla tiders Podcast </h1>
                        <p>I denna pod utgiven av Delfyne förlag avhandlar Carl Magnus Juliusson och Sebastian Bernhard kulturell kuriosa och det “fulaste från finkulturen”. Ämnen tyngda av historia och kulturell vikt närmas avslappnat med humor, och inget ämne existerar som inte rymmer åtminstone en gnutta trams.
                        </p>
                        <button><a href="https://play.acast.com/s/allatiderspodcast">Lyssna via acast</a></button>
                    </div>
                </div>
                <?php the_content(); ?>

            <?php endwhile; ?>
        <?php endif; ?>
    </div>
</div>


<?php get_footer(); ?>
