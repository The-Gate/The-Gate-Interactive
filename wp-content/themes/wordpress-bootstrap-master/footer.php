<footer>
  	  	  <!-- footer content goes in here -->
       	  <div id="footer_left">
           	<div id="bottom_logo">
          			<img src="<?php bloginfo('url');?>/wp-content/uploads/2014/08/the_gate_logo_footer.jpg" width="119" height="113" alt="The Gate Interactive"></div>
            	<div id="footer_bottom_border">
       	  			<img src="<?php bloginfo('url');?>/wp-content/uploads/2014/08/side_bar_footer_bg.jpg" width="224" height="29">
           	  </div>
        	</div>
       	  <div id="footer_right">
            	<div id="footer_top_bar">
                	<div id="footer_top_bar_text">
                		<p><strong>EDINBURGH <span class="extra_space">|</span> LONDON <span class="extra_space_left">T</span></strong> 0333 123 4567 <strong>E</strong> <a href="mailto:hello@thegateworldwide.com">hello@thegateworldwide.com</a></p>
                    </div>
                    <div class="social_icon">
                    	<a href="#" target="_blank"><img src="<?php bloginfo('url');?>/wp-content/uploads/2014/08/facebook_icon.jpg" width="23" height="22" alt="facebook"></a>
                        <a href="https://twitter.com/TheGateScotland" target="_blank"><img src="<?php bloginfo('url');?>/wp-content/uploads/2014/08/twitter_icon.jpg" width="23" height="22" alt="twitter"></a>
                        <a href="https://plus.google.com/111893295285452819392/videos" target="_blank"><img src="<?php bloginfo('url');?>/wp-content/uploads/2014/08/google_plus_icon.jpg" width="23" height="22" alt="gogle plus"></a>
                    </div> 
                </div>
                <div id="footer_nav">
					<?php wp_bootstrap_footer_links(); // Adjust using Menus in Wordpress Admin ?>
                </div>
                <div class="clear"></div>
            	<div id="copyright">
                	<div class="copyright-txt">
                		<p>The Gate Interactive, 100 Ocean Drive, Edinburgh, EH6 6JJ</p>
                    </div>
                    <div class="nl-mobile">
                    	<span class="extra_space mobile-hide">|</span> <a href="<?php echo get_page_link(2594); ?>">Site map</a> <span class="extra_space">|</span> <a href="<?php echo get_page_link(2597); ?>">Terms & Conditions</a> <span class="extra_space">|</span> <a href="<?php echo get_page_link(2599); ?>">Privacy Policy</a></div>
                        <div class="clear"></div>
                </div>
			</div>
            <div class="clear"></div>
	  	</footer>
		
		</div> <!-- end #container -->
				
		<!--[if lt IE 7 ]>
  			<script src="//ajax.googleapis.com/ajax/libs/chrome-frame/1.0.3/CFInstall.min.js"></script>
  			<script>window.attachEvent('onload',function(){CFInstall.check({mode:'overlay'})})</script>
		<![endif]-->
		
		<?php wp_footer(); // js scripts are inserted using this function ?>

		<script>
		    document.createElement('article');
		    document.createElement('section');
		    document.createElement('aside');
		    document.createElement('hgroup');
		    document.createElement('nav');
		    document.createElement('header'); 
		    document.createElement('footer');
		    document.createElement('figure');
		    document.createElement('figcaption'); 
		</script>

		<script>
			new WOW().init();
		</script>

	</body>

</html>