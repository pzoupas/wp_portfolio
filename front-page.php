<?php
    get_header();
?>
    
<div class="main-wrapper">
	   
	<section class="hero-banner">
            <div class="container">
            <div class="hero-banner-wrap">
                <div class="info">
                    <h1><?php the_title(); ?></h1>
					<h2><?php the_content(); ?></h2>
                    
                    <a href="/"  title=""><button class="clickBtn">Μαθε περισσότερα </button></a>
                </div>
                <div class="newsImage">
                    <img src="/images/dog-image.jpg" title="">
                </div>
            </div>
            </div>
        </section>


    
</div>

	
<?php
	get_footer();
?>