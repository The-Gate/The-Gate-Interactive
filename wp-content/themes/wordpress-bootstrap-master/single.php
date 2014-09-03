<?php $post = $wp_query->post;
if ( in_category('contact') ) {include(TEMPLATEPATH . '/custom-posts-templates/contact-posts.php');}
elseif ( in_category('resources') ) {include(TEMPLATEPATH . '/custom-posts-templates/resources-posts.php');}
elseif ( in_category('features') ) {include(TEMPLATEPATH . '/custom-posts-templates/features-posts.php');}
elseif ( in_category('clients') ) {include(TEMPLATEPATH . '/custom-posts-templates/clients-posts.php');}
elseif ( in_category('experience') ) {include(TEMPLATEPATH . '/custom-posts-templates/experience-posts.php');}
elseif ( in_category('sector') ) {include(TEMPLATEPATH . '/custom-posts-templates/sector-posts.php');}
elseif ( in_category('products') ) {include(TEMPLATEPATH . '/custom-posts-templates/products-posts.php');}
elseif ( in_category('awards') ) {include(TEMPLATEPATH . '/custom-posts-templates/awards-posts.php');}
elseif ( in_category('people') ) {include(TEMPLATEPATH . '/custom-posts-templates/people-posts.php');}
elseif ( in_category('process') ) {include(TEMPLATEPATH . '/custom-posts-templates/process-posts.php');}
elseif ( in_category('attitudes') ) {include(TEMPLATEPATH . '/custom-posts-templates/attitudes-posts.php');}
elseif ( in_category('aptitudes') ) {include(TEMPLATEPATH . '/custom-posts-templates/aptitudes-posts.php');}
elseif ( in_category('workreel') ) {include(TEMPLATEPATH . '/custom-posts-templates/work-reel-posts.php');}
else {include(TEMPLATEPATH . '/custom-posts-templates/single-default.php');}
?>