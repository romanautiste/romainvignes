<?php
/**
* Template Name: Page Accueil
* Description: La maquette de la page d'accueil
*/
get_header();
$posts = get_posts(array(
    'numberposts' => 1
));

$events = get_posts( array(
    'numberposts' => 3,
    'post_type'   => 'event'
  ) );
?>

<!-- 
<div class="grid">
    <div class="video"></div>
    <div class="text"></div>
</div>
-->

<div class="home">
    <div class="video">
        <iframe width="600" height="360" src="<?php the_field('video'); ?>" 
        title="YouTube video player" frameborder="0" 
        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
        allowfullscreen>
        </iframe>
    </div>
    <div class="text">
        <div>
            <h1><?php the_field('titre_p1');?></h1>
            <i class="line"></i>
        </div>
        <p><?php the_field('texte_p1');?></p>
        <div class="p1-button">
            <a class="button" href="#">
                <i></i>
                <span>Télécharger</span>
            </a>
            <a class="button" href="#">
                <i></i>
                <span>Écouter</span>
            </a>
        </div>
    </div>
</div>
<div>

<div class="presentation">
    <div class="p2">
        <div>
            <h2><?php the_field('titre_p2');?></h2>
            <i class="line"></i>
        </div>
        <div class="fade1"></div>
        <p><?php the_field('texte_p2');?></p>
        <a class="button" href="#">
                <i></i>
                <span>Me découvrir</span>
            </a>
    </div>
    <div class="p2-img">
        <img src="<?php the_field('image_p2');?>" alt="Une photo de moi">
    </div>
</div>

<div class="actualite">
    <div class="center">
        <h3>Mon actualité</h3>
        <i class="line"></i>
    </div>
    <div class="actu-container">
        <div class="article">
            <h4>Articles</h4>
            <div = article-slider>
                <i></i>
                <?php foreach($posts as $post): ?>
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
                <?php endforeach; wp_reset_postdata(); ?>
                <a href="#" class="more">
                Découvrir tous les articles
                </a>
            </div>
        </div>
        <div class="evenement">
            <h4>Événements</h4>
            <div class="fade2"></div>
            <div class="event-slider">
            <?php foreach($events as $event): 
                $date = get_the_date('d/m/Y', $event);
                $hours = get_the_date('G:i', $event);
                ?>
                <div class="container-anim">
                    <div class="event">
                        <h5><?php echo $event->post_title; ?></h5>
                        <p><?php echo $date; ?> <span style="font-weight: bold;"><?php echo $hours; ?></span></p>
                    </div>
                    <div class="black"></div>
                </div>
            <?php endforeach; wp_reset_postdata(); ?>
                <a href="#" class="more">
                Voir tous les événements
                </a>
            </div>
        </div>
    </div>
</div>

<div class="livre">
    <div class="center">
        <h3>Citations</h3>
        <i class="line"></i>
    </div>
</div>
<!-- Slider main container -->
<div class="swiper">
  <!-- Additional required wrapper -->
  <div class="swiper-wrapper">
    <!-- Slides -->
    <div class="swiper-slide">
        <div class="container-anim">
            <div class="list-line">
                <div class="marquee1">
                    <p class="name">François Barré</p>
                    <p class="msg">Cette chanson m'accompagne depuis que j'ai vu le
                    film ; la douceur suave et fragile des sonorités.</p>
                </div>
            </div>
            <div class="black"></div>
        </div>
    </div>
    <div class="swiper-slide">
        <div class="container-anim">
            <div class="list-line">
                <div class="marquee1">
                    <p class="name">François Barré</p>
                    <p class="msg">Cette chanson m'accompagne depuis que j'ai vu le
                    film ; la douceur suave et fragile des sonorités.</p>
                </div>
            </div>
            <div class="black"></div>
        </div>
    </div>
    <div class="swiper-slide">
        <div class="container-anim">
            <div class="list-line">
                <div class="marquee1">
                    <p class="name">François Barré</p>
                    <p class="msg">Cette chanson m'accompagne depuis que j'ai vu le
                    film ; la douceur suave et fragile des sonorités.</p>
                </div>
            </div>
            <div class="black"></div>
        </div>
    </div>
    <div class="swiper-slide">
        <div class="container-anim">
            <div class="list-line">
                <div class="marquee1">
                    <p class="name">François Barré</p>
                    <p class="msg">Cette chanson m'accompagne depuis que j'ai vu le
                    film ; la douceur suave et fragile des sonorités.</p>
                </div>
            </div>
            <div class="black"></div>
        </div>
    </div>
    <div class="swiper-slide">
        <div class="container-anim">
            <div class="list-line">
                <div class="marquee1">
                    <p class="name">François Barré</p>
                    <p class="msg">Cette chanson m'accompagne depuis que j'ai vu le
                    film ; la douceur suave et fragile des sonorités.</p>
                </div>
            </div>
            <div class="black"></div>
        </div>
    </div>
  </div>
</div>
<?php get_footer(); ?>