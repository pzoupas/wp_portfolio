<?php
    get_header();
?>
    
<div class="main-wrapper">
	   
	<section class="hero-banner">
        <div class="container">
            <div class="hero-banner-wrap ">
                <div class="info">
                    <h1><?php the_title(); ?></h1>
                    <div class="big-title"><?php the_content(); ?></div>
                    
                    <div class="hero-animation">
                        <div class="bars scroll_to_next">
                            <div class="bar-one"></div>
                            <div class="bar-two"></div>
                        </div>
                    </div>
                </div>
                <!-- <div class="newsImage">
                    <img src="/images/dog-image.jpg" title="">
                </div> -->
            </div>
        </div>
    </section>

    <?php
    // Έλεγχος αν τα πεδία είναι συμπληρωμένα
    if ( get_field('text-area') && get_field('custom-image')) :
    ?>
    <section class="text-and-image <?php echo get_field('reserve-imagetext') ? 'reserve-imageText' : ''; ?>" >
        <div class="container">
            <h2><?php the_field('title'); ?></h2>
            <div class="text-and-image-wrap">
                
                <div class="text">
                    <?php the_field('text-area'); ?>
                </div>
                <div class="image">
                    <?php the_field('custom-image'); ?>
                </div>

            </div>
        </div>
    </section>
    <?php endif; ?>


    
</div>

	
<?php
	get_footer();
?>