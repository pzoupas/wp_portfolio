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
                        <div class="bars ">
                            <div class="bar-one"></div>
                            <div class="bar-two"></div>
                        </div>
                        <div class="circle-scroll scroll_to_next">
                            <div class="img-scroll"></div>
                            <div class="arrow-scroll"></div>
                        </div>       
                    </div>
                </div>
                <!-- <div class="newsImage">
                    
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

    <section class="milestone" >
        <div class="container">
            <h2>Work Experience</h2>
            <div class="milestone-wrap">
                <div class="milestone-wrap">
                    <div class="milestone-inner">

                        <div class="milestone-inner-item">
                            <div class="milestone-year">2018</div>
                            <div class="milestone-summary">NetPlanet</div>
                        </div>
                        <div class="milestone-inner-item">
                            <div class="milestone-year">2019 - 2021</div>
                            <div class="milestone-summary">9pixels</div>
                        </div>
                        <div class="milestone-inner-item">
                            <div class="milestone-year">2021 - 2022</div>
                            <div class="milestone-summary">Deloitte</div>
                        </div>
                        <div class="milestone-inner-item">
                            <div class="milestone-year">2022 - now</div>
                            <div class="milestone-summary">Freelancer</div>
                        </div>
                       
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section>
    <video width="640" height="360" controls>
        <source src="video/video-background.mp4" type="video/mp4">
            
    </video>
    </section>

    <?php get_template_part('components/contact-form'); ?> 
    
</div>

	
<?php
	get_footer();
?>