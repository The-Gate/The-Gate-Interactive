<?php
/*
Template Name: Homepage
*/
?>

<?php get_header(); ?>
			
			<div id="content" class="clearfix row">
			
				<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
            
            		<?php get_sidebar('sidebar2'); // sidebar 1 ?>
			
					<div id="main" class="col col-lg-10 clearfix" role="main">
                
                        <!-- main page content goes in here -->
                        <div id="main_slider" class="wow fadeInLeft">
                            <?php echo do_shortcode('[masterslider id=1]'); ?>
                        </div>
                        <div id="secondary_slider" class="wow fadeInRight">
                            <?php echo do_shortcode('[masterslider id=2]'); ?>
                        </div>
                        <div id="twitter_feed">
                            <div id="twitter_col1" class="wow fadeInLeft" data-wow-delay="3s">
                                <?php be_add_editable_block("twitter_col1_txt") ?>
                            </div>
                            <div id="twitter_col2" class="wow fadeIn" data-wow-delay="1s">
                                <div id="twitter_img">
                                    <img src="<?php bloginfo('url');?>/wp-content/uploads/2014/08/tweet_image.jpg" width="250" height="149">
                                </div>
                                <div id="twitter_txt">
                                    <p class="tweet_header">TWEET</p>
                                    <?php echo do_shortcode('[rotatingtweets screen_name="SIBBOdesigns"]'); ?>
                                </div>
                            </div>
                            <div id="twitter_col3" class="wow fadeInRight" data-wow-delay="3s">
                                <?php be_add_editable_block("twitter_col3_txt") ?>
                            </div>
                            <div class="clear"></div>
                        </div>
                        <div id="books">
                            <div id="books_header" class="wow fadeIn">
                                <p><span class="bk_hd_txt">POSITIVE INTERACTIONS</span> <span class="chevrons">&lt;</span><span class="plussign">+</span><span class="chevrons">&gt;</span></p>
                            </div>
                            <div id="books_col1" class="wow fadeInLeft" data-wow-delay="1s">
 <!--                               <div class="books_txt">-->
	                                <?php be_add_editable_block("the_true_button") ?>
<!--                                </div>-->
                            </div>
                            <div id="books_col2" class="wow fadeIn" data-wow-delay="2s">
<!--                                <div class="books_txt">-->
	                                <?php be_add_editable_block("the_good_button") ?>
<!--                                </div>-->
                            </div>
                            <div id="books_col3" class="wow fadeInRight" data-wow-delay="1s">
<!--                                <div class="books_txt">-->
	                                <?php be_add_editable_block("the_beautiful_button") ?>
<!--                                </div>-->
                            </div>
                            <div class="clear"></div>
                        </div>
                        <div id="news">
                            <div id="news_img" class="wow fadeInLeft">
                                <img src="<?php bloginfo('url');?>/wp-content/uploads/2014/08/news_image.jpg" width="280" height="185">
                            </div>
                            <div id="news_txt" class="wow fadeInRight">
                                <p>NEWS</p>
                                	<?php if ( function_exists('insert_newsticker') ) { insert_newsticker(); } ?>
                            </div>
                            <div class="clear"></div>
                        </div>
                        <div id="final_content">
                            <div id="video" class="wow fadeInLeft" data-wow-delay="1s">
                            	<?php be_add_editable_block("video_panel") ?>
                            </div>
                            <div id="interactive" class="wow fadeInRight" data-wow-delay="1s">
                                <div id="interactive_txt">
                                    <p>INTERACTIVE</p>
                                    <p class="interactive_header">The History of Advertising</p>
                                    <p class="interactive_link">interact</p>
                                </div>
                            </div>
                            <div class="clear"></div>
                        </div>
            
				<?php endwhile; ?>	
					
				<?php else : ?>
					
					<article id="post-not-found">
						<header>
							<h1><?php _e("Not Found", "wpbootstrap"); ?></h1>
						</header>
						<section class="post_content">
							<p><?php _e("Sorry, but the requested resource was not found on this site.", "wpbootstrap"); ?></p>
						</section>
						<footer>
						</footer>
					</article>
					
				<?php endif; ?>
			
			</div> <!-- end #main -->
    
			<?php //get_sidebar(); // sidebar 1 ?>
    
			</div> <!-- end #content -->

<?php get_footer(); ?>