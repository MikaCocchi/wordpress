<?php get_header(); ?>
<?php if( have_posts() ) : while( have_posts() ) : the_post(); ?>

    <article class="post">
        <h2><?php the_title(); ?></h2>

        <div style="max-width: 700px ">
        <?php the_post_thumbnail(); ?>
        </div>
        <p class="post__meta">
            Publié le <?php the_time( get_option( 'date_format' ) ); ?>
            par <?php the_author(); ?> • <?php comments_number(); ?>
        </p>
        <p> <?php echo get_field("desciption") ?></p>
        <?php the_excerpt(); ?>

        <p>
            <a href="http://wordpress.local/points-de-ventes">Retour à la liste</a>
        </p>
    </article>
<?php endwhile; endif; ?>
<?php get_footer(); ?>