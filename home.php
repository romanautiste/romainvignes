<?php
/**
* Description: La maquette de la page Article
*/
    get_header();
?>

<div class="page-titre">
    <h1>Mes articles</h1>
    <div class="line"></div>
</div>

<section class="articles-page">
    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
        <div class="container-anim">
            <div class="article1">
                <div class="article1-image"></div>
                <h6><?php the_title(); ?></h6>
                <p><?php the_excerpt(); ?></p>
                <a href="<?php the_permalink(); ?>" class="button">
                    <i></i>
                    <span>Lire</span>
                </a>    
            </div>
            <div class="black"></div>
        </div>
    <?php endwhile; else : ?>
        <p><?php _e( "Désolé, il semble que vous n'ayez pas de post" ); ?></p>
    <?php endif; ?>
    </section>
<?php
    get_footer();
?>