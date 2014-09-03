<?php
/*
Template Name: Casestudy Page
*/
?>

<?php get_header(); ?>
			
			<div id="content" class="clearfix row">
            
            	<?php get_sidebar(); // sidebar 1 ?>
			
				<div id="main" class="col col-lg-10 clearfix" role="main">

					<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
					
					<article id="post-<?php the_ID(); ?>" <?php post_class('clearfix'); ?> role="article">
						
  		  				<!-- main page content goes in here -->
            				<div id="page_wrapper" class="case_study">
            					<div id="case_study_title">
                					<h1><?php the_title(); ?></h1>
                				</div>
						<div class="case_study_content">
							<?php the_content(); ?>
					
						</div> <!-- end article section -->
					
					</article> <!-- end article -->
					
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
    
			</div> <!-- end #content -->

<?php get_footer(); ?>