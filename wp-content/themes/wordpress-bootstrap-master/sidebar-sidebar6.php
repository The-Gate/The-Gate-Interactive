				<div id="sidebar6" class="col-sm-2" role="complementary">
				
					<?php if ( is_active_sidebar( 'sidebar6' ) ) : ?>

						<?php dynamic_sidebar( 'sidebar6' ); ?>

					<?php else : ?>

						<!-- This content shows up if there are no widgets defined in the backend. -->
						
						<div class="alert alert-message">
						
							<p><?php _e("Please activate some Widgets","wpbootstrap"); ?>.</p>
						
						</div>

					<?php endif; ?>

				</div>