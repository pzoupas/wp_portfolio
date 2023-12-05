<section class="contact-form" >
    <div class="container">
        <h2><?php the_field('title-form'); ?></h2>
        <?php acf_form(array(
            'post_id' => 'new_post',
            'post_title' => false, // Default:true -> το αλλαζω σε false για να εξαφανιζω το title*  
            'post_content' => false,
            'submit_value' => 'Send',
            'fields' => array('name', 'email', 'object', 'summary'),
        ));?>
    </div>
</section>
<div class="popup d-none">
    <div class="popupOverlay"></div>
    <div class="popupBox">
        <button>close</button>
        <h3>Συγχαρητήρια</h3>
        <p>Το μήνυμά σας εστάλη με επιτυχία</p>
        <span></span>
    </div>
</div>