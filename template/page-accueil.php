<?php
/**
* Template Name: Page Accueil
* Description: La maquette de la page d'accueil
*/
get_header();
?>



<div class="home">
    <div>
        <iframe width="600" height="360" src="<?php the_field('video'); ?>" 
        title="YouTube video player" frameborder="0" 
        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
        allowfullscreen>
        </iframe>
    </div>
    <div class = "p1">
        <div>
            <h1 class="step"><?php the_field('titre_p1');?></h1>
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
                <div class="container-anim">
                    <div class="article1">
                        <div class="article1-image"></div>
                        <h6>L'histoire de Uman.</h6>
                        <p>Comment une seule rencontre m'a fait <br>
                            comprendre autant de choses...</p>
                        <a href="#" class="button">
                            <i></i>
                            <span>Lire</span>
                        </a>    
                    </div>
                    <div class="black"></div>
                </div>
                <a href="#" class="more">
                Découvrir tous les articles
                </a>
            </div>
        </div>
        <div class="evenement">
            <h4>Événements</h4>
            <div class="event-slider">
                <div class="container-anim">
                    <div class="event">
                        <h5>Sortie du nouvel album le 10/05</h5>
                        <p>Il y a 3 heures</p>
                    </div>
                    <div class="black"></div>
                </div>
                <div class="container-anim">
                    <div class="event">
                        <h5>Nouvel chanson exclusive</h5>
                        <p>Il y a 4 Jours</p>
                    </div>
                    <div class="black"></div>
                </div>
                <div class="container-anim">
                    <div class="event">
                        <h5>Concerts chez vous le 23/04</h5>
                        <p>Il y a 16 Jours</p>
                    </div>
                    <div class="black"></div>
                    
                </div>
                <a href="#" class="more">
                Voir tous les événements
                </a>
            </div>
        </div>
    </div>
</div>

<div class="livre">
    <div class="center">
        <h3>Le livre d'or</h3>
        <i class="line"></i>
    </div>
    <div class="container-anim">
        <div class="marquee1">
            <p class="name">François Barré</p>
            <p class=msg>Cette chanson m'accompagne depuis que j'ai vu le <br>
            film ; la douceur suave et fragile des sonorités.</p>
        </div>
        <div class="black"></div>
    </div>
    
</div>



<?php get_footer(); ?>
