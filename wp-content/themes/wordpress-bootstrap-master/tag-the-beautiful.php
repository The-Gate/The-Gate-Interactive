<?php
/**
 * The template for displaying Category pages
 *
 * Used to display archive-type pages for posts in a category.
 *
 * @link http://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage The Gate Interactive
 */

get_header(); ?>
			
	<div id="content" class="clearfix row">
            
    	<?php get_sidebar('sidebar5'); // sidebar 5 ?>
			
			<div id="main" class="col col-lg-10 clearfix" role="main">

				<?php if ( have_posts() ) : ?>
  					<!-- main page content goes in here -->
                    <?php
					 foreach(get_the_category() as $category) {

						switch ($category->slug) {
  							case "aptitudes":
    							$category_header="aptitudes";
    						break;
  							case "attitudes":
    							$category_header="attitudes";
    						break;
  							case "awards":
    							$category_header="awards";
    						break;
  							case "clients":
    							$category_header="clients";
    						break;
  							case "contact":
    							$category_header="contact";
    						break;
  							case "experience":
    							$category_header="experience";
    						break;
  							case "features":
    							$category_header="features";
    						break;
  							case "people":
    							$category_header="people";
    						break;
  							case "process":
    							$category_header="process";
    						break;
  							case "products":
    							$category_header="products";
    						break;
  							case "resources":
    							$category_header="resources";
    						break;
  							case "sector":
    							$category_header="sector";
    						break;
  							case "workreel":
    							$category_header="work_reel";
    						break;
  							default:
    							$category_header="default";
						}
					}

					?> 
            		<div id="page_wrapper" class="<?php echo $category_header ?>">
            			<div id="category_title">
                			<h1><?php single_cat_title(); ?></h1>
                		</div>
						<div id="category_listings_wrapper">
			
							<?php
								$delay = 0;
								/* Start the Loop */
								while ( have_posts() ) : the_post();
								
								/* Include the post format-specific template for the content. If you want to
								* this in a child theme then include a file called called content-___.php
				 				* (where ___ is the post format) and that will be used instead.
				 				*/
								
								if ( has_post_thumbnail($thumbnail->ID)){
									echo '<div class="category_list wow fadeInUp" data-wow-delay="' . $delay . 's">';
                					echo '<div class="category_txt">';
                    				echo '<h1>' . get_the_title() . '</h1>';
                      				echo '<p>' . get_the_excerpt() .'</p>';
                    				echo '</div>';
                    				echo '<div class="category_thumb">';
               	    				echo the_post_thumbnail();
                    				echo '</div>';
                    				echo '<div class="clear"></div>';
									echo '</div>';
								}
								else{
									echo '<div class="category_list wow fadeInUp" data-wow-delay="' . $delay . 's">';
                					echo '<div class="category_txt_fullwidth">';
                    				echo '<h1>' . get_the_title() . '</h1>';
                      				echo '<p>' . get_the_excerpt() .'</p>';
                    				echo '</div>';
                    				echo '<div class="clear"></div>';
									echo '</div>';
								}							

								$delay++;

							?>
						
								<?php endwhile; ?>	

						</div><!-- End of Category Listsings Wrapper -->
						<?php if (function_exists('page_navi')) { // if expirimental feature is active ?>
							
							<?php page_navi(); // use the page navi function ?>

						<?php } else { // if it is disabled, display regular wp prev & next links ?>
							<nav class="wp-prev-next">
								<ul class="pager">
									<li class="previous"><?php next_posts_link(_e('&laquo; Older Entries', "wpbootstrap")) ?></li>
									<li class="next"><?php previous_posts_link(_e('Newer Entries &raquo;', "wpbootstrap")) ?></li>
								</ul>
							</nav>
						<?php } ?>
					</div> <!-- end page wrapper -->
										
				<?php else : ?>

				<?php wp_reset_query(); ?>
					
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
		</div> <!-- end main -->

	</div> <!-- end #content -->

<?php get_footer(); ?>