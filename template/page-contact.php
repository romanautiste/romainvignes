<?php
/**
* Template Name: Page Contact
* Description: La maquette de la page contact
*/
get_header();
?>


<div class="contact">

    <h1><?php the_field("titre-contact") ?></h1>
    <div class="line"></div>

    <div class="contact-container">
        <div class="contact-img">
            <img src="<?php the_field("image-contact") ?>" alt="Image de la page contact">
        </div>
        <div class="form">
            <?php echo do_shortcode("[wpforms id='59']"); ?>
        </div>
    </div>
</div>
<?php
    get_footer();
?>

