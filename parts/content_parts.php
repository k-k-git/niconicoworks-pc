<?php if ( is_page( '321' ) ): ?>
<!-- is_page( '321' ) (content_parts.php)
======================================================================================================================================== -->
<!--コンテンツ-->
<div id="wrapper" class="cf">
    <div id="main">
        <?php get_template_part('parts/each_exrpt_post'); ?>
    </div><!--end main-->
    <div style="margin-top: 1em"><?php get_sidebar(); ?></div>
</div>
<!--end wrapper-->
<?php elseif( is_page( '34' ) ): ?>
<!-- is_page( '34' ) (content_parts.php)
======================================================================================================================================== -->
<!--コンテンツ-->
<div id="wrapper" class="cf">
    <div id="main">
        <?php get_template_part('parts/each_exrpt_post'); ?>
    </div><!--end main-->
    <?php get_sidebar(); ?>
</div>
<!--end wrapper-->
<?php elseif ( is_page() ): ?>
<!-- is_page() (content_parts.php)
======================================================================================================================================== -->
<div id="main">
    <?php get_template_part('parts/each_exrpt_post'); ?>
    <?php get_sidebar(); ?>
    <br class="fix" />
</div>
<!--end main-->
<?php elseif ( is_archive( 'column' ) || is_singular("column") ): ?>
<!-- is_archive( 'column' )/is_singular("column") (content_parts.php)
======================================================================================================================================== -->
<div id="main" class="cf">
    <?php get_template_part('parts/each_exrpt_post'); ?>
    <?php get_sidebar();?>
</div>
<!--end main-->
<?php elseif( is_category() || is_tag() || is_search() ): ?>
<!-- is_page( '34' )/category/tag/search (content_parts.php)
======================================================================================================================================== -->
<!--content-->
<div id="wrapper" class="cf">
    <div id="main">
        <?php get_template_part('parts/each_exrpt_post'); ?>
    </div>
    <!--end main-->
    <?php get_sidebar(); ?>
</div>
<!--end wrapper-->
<?php elseif ( is_single() ): ?>
<!-- single (content_parts.php)
======================================================================================================================================== -->
<!--コンテンツ-->
<div id="wrapper" class="cf">
    <div id="main">
        <?php get_template_part('parts/each_exrpt_post'); ?>
    </div><!--end main-->
    <div style="margin-top: 1em"><?php get_sidebar(); ?></div>
</div>
<!--end wrapper-->
<?php elseif(is_home()): ?>
<!-- index (content_parts.php)
======================================================================================================================================== -->
        <div id="container" class="centered">
            <?php get_template_part('parts/each_exrpt_post'); ?>
<?php endif; ?>