				<div id="sidebar5" class="col-sm-2" role="complementary">
				
					<?php if ( is_active_sidebar( 'sidebar5' ) ) : ?>

						<?php dynamic_sidebar( 'sidebar5' ); ?>
						<div class="sidebarcatlist">
							<ul>
								<?php query_posts('showposts=150&tag=the-beautiful'); ?>
								<?php while (have_posts()) : the_post(); ?>
									<li><a href="<?php the_permalink() ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a></li>
								<?php endwhile; ?>
                                <?php wp_reset_query(); ?>
							</ul>
                        </div>
                    </div>					
					<?php else : ?>

						<!-- This content shows up if there are no widgets defined in the backend. -->
						
						<div class="alert alert-message">
						
							<p><?php _e("Please activate some Widgets","wpbootstrap"); ?>.</p>
						
						</div>

					<?php endif; ?>

				</div>