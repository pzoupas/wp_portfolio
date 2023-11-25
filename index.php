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
                        <div class="bars">
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


    
</div>

	
<?php
	get_footer();
?>