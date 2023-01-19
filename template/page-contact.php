<?php
/**
* Template Name: Page Contact
* Description: La maquette de la page contact
*/
    get_header();
    $form = "[wpforms id='59']";
?>
<h1></h1>

<div class="contact">
    <div class="contact-img">
        <img src="<?php the_field("image-contact") ?>" alt="Image de la page contact">
    </div>
    <div class="form">
        <?php echo do_shortcode($form); ?>
    </div>

</div>

<?php
    get_footer();
?>

