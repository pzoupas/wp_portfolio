
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
					<!-- <div class="socialImgLink">
						<a class="ln-link" href="https://www.facebook.com/groups/1414771202102310" target="_blank" alt="facebook"><svg width="37" height="37" viewBox="0 0 37 37" fill="none" xmlns="http://www.w3.org/2000/svg" class="sc-ftvSNZ fvQdve"><g><path d="M10.838.128C8.87.22 7.525.536 6.35.996a9.049 9.049 0 0 0-3.272 2.14A9.068 9.068 0 0 0 .95 6.416C.494 7.594.185 8.939.099 10.908c-.087 1.974-.106 2.603-.097 7.627.01 5.023.032 5.654.126 7.628.094 1.968.408 3.312.868 4.487a9.058 9.058 0 0 0 2.14 3.273 9.07 9.07 0 0 0 3.281 2.127c1.177.455 2.523.765 4.492.851 1.973.087 2.603.106 7.625.097 5.025-.01 5.655-.032 7.628-.126 1.969-.094 3.312-.41 4.488-.868a9.068 9.068 0 0 0 3.273-2.14 9.07 9.07 0 0 0 2.127-3.281c.455-1.177.765-2.522.85-4.49.087-1.975.107-2.606.097-7.628-.01-5.024-.032-5.653-.125-7.626-.094-1.97-.41-3.313-.869-4.489a9.077 9.077 0 0 0-2.14-3.273 9.055 9.055 0 0 0-3.28-2.126C29.405.495 28.06.185 26.09.1 24.118.012 23.49-.008 18.464.002c-5.023.01-5.652.031-7.626.126m.216 33.443c-1.804-.078-2.783-.378-3.436-.629a5.771 5.771 0 0 1-2.13-1.38A5.75 5.75 0 0 1 4.1 29.438c-.253-.653-.558-1.63-.643-3.435-.091-1.95-.113-2.535-.121-7.474-.01-4.939.008-5.524.093-7.476.078-1.802.38-2.783.63-3.435a5.743 5.743 0 0 1 1.38-2.13A5.733 5.733 0 0 1 7.562 4.1c.652-.254 1.63-.557 3.433-.643 1.951-.092 2.536-.112 7.474-.121 4.94-.01 5.525.007 7.477.093 1.802.079 2.783.377 3.434.63.865.334 1.482.733 2.13 1.38A5.726 5.726 0 0 1 32.9 7.563c.255.65.558 1.63.643 3.432.093 1.951.114 2.536.123 7.475.01 4.94-.009 5.525-.094 7.475-.079 1.804-.378 2.784-.63 3.437a5.752 5.752 0 0 1-1.38 2.13 5.749 5.749 0 0 1-2.125 1.387c-.651.254-1.63.558-3.432.643-1.951.092-2.536.113-7.476.122-4.938.01-5.523-.009-7.474-.094m15.08-24.96a2.22 2.22 0 1 0 4.441-.01 2.22 2.22 0 0 0-4.441.01M9.001 18.517a9.498 9.498 0 0 0 9.517 9.48c5.246-.01 9.492-4.27 9.482-9.517-.01-5.245-4.272-9.49-9.519-9.48-5.245.01-9.49 4.271-9.48 9.517Zm3.332-.007a6.167 6.167 0 1 1 12.334-.022 6.167 6.167 0 0 1-12.334.023" fill="currentColor"></path></g><defs><clipPath id="a"><path fill="" d="M0 0h37v37H0z"></path></clipPath></defs></svg></a>
						<a class="ig-link" href="https://www.instagram.com/mike_t_dog_trainer/" target="_blank" alt="instagram"><svg width="37" height="37" viewBox="0 0 37 37" fill="none" xmlns="http://www.w3.org/2000/svg" class="sc-ftvSNZ fvQdve"><path d="M34.2611 -0.000488281H2.73164C1.22129 -0.000488281 0 1.19189 0 2.66611V34.3257C0 35.7999 1.22129 36.9995 2.73164 36.9995H34.2611C35.7715 36.9995 37 35.7999 37 34.3329V2.66611C37 1.19189 35.7715 -0.000488281 34.2611 -0.000488281ZM10.9771 31.529H5.48496V13.8673H10.9771V31.529ZM8.23105 11.4608C6.46777 11.4608 5.04414 10.0372 5.04414 8.28115C5.04414 6.5251 6.46777 5.10146 8.23105 5.10146C9.98711 5.10146 11.4107 6.5251 11.4107 8.28115C11.4107 10.03 9.98711 11.4608 8.23105 11.4608ZM31.5295 31.529H26.0445V22.9438C26.0445 20.8987 26.0084 18.261 23.19 18.261C20.3355 18.261 19.902 20.494 19.902 22.7993V31.529H14.4242V13.8673H19.6852V16.281H19.7574C20.4873 14.8935 22.2795 13.4265 24.9461 13.4265C30.5033 13.4265 31.5295 17.0831 31.5295 21.8382V31.529Z" fill="currentColor"></path></svg></a>
						<a class="yt-link" href="#" target="_blank" alt=""></a>
						<a class="tw-link" href="#" target="_blank" alt=""></a>
					</div> -->
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