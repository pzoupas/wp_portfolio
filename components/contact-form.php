<section class="contact-form" >
    <div class="container">
        <h2><?php the_field('title-form'); ?></h2>
        <?php 
            $shortcode = get_field('contact-form-shortcode');
            echo do_shortcode($shortcode);
        ?>
    </div>
</section>
<!-- 
<div class="popup d-none">
    <div class="popupOverlay"></div>
    <div class="popupBox">
        <button>close</button>
        <h3>Συγχαρητήρια</h3>
        <p>Το μήνυμά σας εστάλη με επιτυχία</p>
        <span></span>
    </div>
</div> -->

