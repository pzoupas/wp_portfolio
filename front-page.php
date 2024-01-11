<?php
    get_header();
?>
<div class="main-wrapper">

    <?php get_template_part('components/login-form'); ?>  
	   
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


    <?php if ( get_field('my-video') && get_field('video-text') ): ?>
        <section class="video-file" >
            <div class="container">
                <div class="video-info">
                    <!-- Video -->
                    <?php if ( get_field('video-title') ): ?>
                        <div class="video-title"><h3><?php the_field('video-title'); ?></h3></div>
                    <?php endif; ?>
                    <div class="video-text"><span><?php the_field('video-text'); ?></span></div>
                </div>
                <video class="video-upload " autoplay loop muted >
                    <source src="<?php echo esc_url( get_field('my-video') ); ?>" type="video/mp4">
                </video>
                
                <div class="overlay"></div>
            </div>
        </section>
    <?php endif; ?>

    
    <?php get_template_part('components/contact-form'); ?>  
    
    
</div>

	
<?php
	get_footer();
?>