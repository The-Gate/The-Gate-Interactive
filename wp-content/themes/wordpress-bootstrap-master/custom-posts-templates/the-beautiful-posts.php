<?php get_header(); ?>
			
			<div id="content" class="clearfix row">
            
            	<?php get_sidebar('sidebar5'); // sidebar 5 ?>
			
				<div id="main" class="col col-lg-10 clearfix" role="main">

					<?php query_posts('tag=The Beautiful'); ?>

					<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                    
					<article id="post-<?php the_ID(); ?>" <?php post_class('clearfix'); ?> role="article">
						
  		  				<!-- main page content goes in here -->
            			<div id="page_wrapper" class="aptitudes">
            				<div id="case_study_title">
                				<h1>The Beautiful</h1>
                			</div>
								
                            <div class="case_study_content">
								<?php the_content(); ?>

                                <?php if (get_previous_post('the-beautiful') || get_next_post('beautiful')): ?>                                
                 				<div id="page_nav">
                                	<?php if (get_previous_post('the-beautiful')): ?>
                   					<div class="casestudy_prev">
                        				<div class="page_prev_txt">
                            				<p><span class="readmoretxt11pt">back</span> <span class="btntxt23pt">{</span> <?php previous_post('%', '', 'yes','the-beautiful'); ?></p>
                            			</div>
                        			</div>
                                    <?php endif; ?>
                                	<?php if (get_next_post('the-beautiful')): ?>
                        			<div class="casestudy_next">
                        				<div class="page_next_txt">
                            				<p><?php next_post('%', '', 'yes', 'the-beautiful'); ?> <span class="btntxt23pt">}</span> <span class="readmoretxt11pt">next</span></p>
                            			</div>
                        			</div>
                                    <?php endif; ?>
									<div class="clear"></div>
                				</div>								
								<?php endif; ?>
                               
							</div>
                               
						</div> <!-- end article section -->
					
					</article> <!-- end article -->
					
					<?php endwhile; ?>	

					<?php wp_reset_query(); ?>
					
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
    
			</div> <!-- end #content -->

<?php get_footer(); ?>