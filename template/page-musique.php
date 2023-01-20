<?php
/**
* Template Name: Page Musique
* Description: La maquette de la page Musique
*/
    get_header();
?>

<div class="musique">
    <div class="titre">
        <h1>Musique</h1>
        <div class="line"></div>
    </div>
    <div class="music-content">
        <div class="music-header">
            <div class="part1">
                <div class="player">
                    <p>PLAYER</p>
                </div>
            </div>
            <div class="part2">
                <div class="title">
                    <p>#TITRE</p>
                </div>
                <div class="clock">
                    <i></i>
                </div>
                <div class="download">
                    <i></i>
                </div>
            </div>
        </div>
        <div class="his-music">
            <div class="part1">
                    <div class="player">
                        <audio controls>
                            <source src="../music/uman.mp3" type="audio/mp3">
                        </audio>
                    </div>
            </div>
            <div class="part2">
                <div class="title">
                    <p>Uman</p>
                </div>
                <div class="time">
                    <p>4:14</p>
                </div>
                <div onClick="dropdown()" class="down-arrow">
                    <i></i>
                </div>
            </div>
        </div>
        <div id="dropdown-menu">    
            <div>
                <div class="flex-item-dropdown">
                    <a href="#"><i class="download1"></i></a>
                    <p>Version Classique</p>
                </div>
                <div class="flex-item-dropdown">
                    <a href="#"><i class="download1"></i></a>
                    <p>Version Accapella</p>
                </div>
                <div class="flex-item-dropdown">
                    <a href="#"><i class="download1"></i></a>
                    <p>Instrumentale</p>
                </div>
                <div class="flex-item-dropdown">
                    <a href="https://romainvignes.bandcamp.com/track/uman-song-bo-du-film-la-d-gustation" target="_blank"><i class="bandcamp"></i></a>
                    <p>Écouter sur Bandcamp</p>
                </div>
            </div>
            <p class="description">Ceci est un texte représentatif</p>
        </div>
    </div>
</div>

<?php
    get_footer();
?>