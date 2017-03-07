<?php get_header(); ?>
<?php if( is_page() || is_category() || is_tag() || is_search() || is_archive( 'column' ) || is_singular("column") ) {echo get_template_part( "parts/pankuzu_list" );} ?>
<?php get_template_part('parts/content_parts'); ?>
<?php get_footer(); ?>
