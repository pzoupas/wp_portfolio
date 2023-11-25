
	<?php
		wp_footer(); //  Ενεργοποιεί την ενέργεια wp_head - Fires the wp_head action
	?>
	<footer>
		<div class="footer-wrapper">
			<div class="container">
				<div class="footer-inside">
					<div class="footer-text">
						<h3>Θέλετε να με έχετε στην ομάδα σας;</h3>
						<a class="btn-primary" href="/">Ας ξεκινήσουμε</a>
					</div>
					<?php
						// Διημιουργια custom logo 
						if (function_exists('the_custom_logo')){ 

							$custom_logo_id = get_theme_mod('custom_logo');
							$logo = wp_get_attachment_image_src($custom_logo_id);
						}
					?>
					<a class="ft-logo" href="/"><img src="<?php echo $logo[0] ?>" alt="logo"> </a>
						
					<div class="nav-menu">
						<?php
							wp_nav_menu(
								array(
									'menu' => 'primary',
									'container' => '',
									'theme_location' => 'primary',
									'items_wrap' => '<ul id="" class="navbar-nav">%3$s</ul>'
								)
							);
						?>
					</div>
					<div class="social-img-links">
						<div class="txt"><span>Feel Free to Connect With me on Social</span></div>
						<div class="links"> 
								<a class="ig-link" href="/"> 
									<span>instagram</span>
									<!-- <span>instagram</span> -->
								</a>
								<a class="ln-link" href="/"> 
									<span>linkedin</span>
									<!-- <span>linkedin</span> -->
								</a>
								
						</div>
					</div>
					<div class="copyright mt-5 mb-0">
						© Panagiotis Zoupas 2023. All right reserved.
					</div>
					<div class="scrollToTop" title="Πήγαινε στην κορυφή" onclick="scrollToTop()"><svg xmlns="http://www.w3.org/2000/svg" width="10.015" height="6.25" viewBox="0 0 10.015 6.25"><defs><style>.a{fill:none;stroke:#fff;stroke-width:2px;}</style></defs><path class="a" d="M0,0,4.321,4.142,8.63,0" transform="translate(9.323 5.528) rotate(180)"/></svg></div>
				</div>
			</div>
		</div>
	</footer>
    
    
   

</body>
</html> 