<?php

/*
Developer Comment:
1: Optimized Query
*/

global $wpdb;

$args = array(
   'post_type' => 'post',
   'posts_per_page' => 10,
   'no_found_rows'=> true
);

$query = new WP_Query($args);

if ($query->have_posts()) :
   while ($query->have_posts()) : $query->the_post();
      the_title();
      the_content();
   endwhile;
endif;




$result = $wpdb->get_results("SELECT * FROM {$wpdb->prefix}posts WHERE post_type = 'page' AND post_status = 'publish' LIMIT 0, 10");
?>