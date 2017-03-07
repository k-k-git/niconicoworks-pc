<?php get_header(); ?>
<?php echo get_template_part( "parts/pankuzu_list" ); ?>
<!--コンテンツ-->
<div id="wrapper" class="cf">
	<div id="main">
        <div class="post">
            <div style="float: left;"><?php get_template_part('parts/slider_parts'); ?></div>
            <?php get_template_part('parts/ad/adsense_300_pc'); ?>
            <?php get_template_part('parts/head_line'); ?>
            <?php get_template_part('parts/content'); ?>
            <?php echo get_template_part( "parts/button" ); ?>
        </div><!--end post-->
	</div><!--end main-->
	<?php get_sidebar(); ?>
</div>
<!--end wrapper-->
<?php get_footer(); ?>