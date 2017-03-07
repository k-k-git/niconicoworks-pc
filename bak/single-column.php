<!-- コラムシングルページ　直指定
======================================================================================================================================== -->
<!DOCTYPE HTML>
<html>
<head>
<meta charset="utf-8">
<meta http-equiv="Expires" content="86400" />
<meta http-equiv="X-UA-Compatible" content="IE=edge" />
<link rel="shortcut icon" type="image/x-icon" href="<?php echo get_template_directory_uri(); ?>/img/sw.ico" />
<link rel="stylesheet" href="<?php echo get_stylesheet_uri(); ?>" type="text/css" />
<link rel="stylesheet" type "text/css" href="<?php echo get_template_directory_uri(); ?>/css/jquery.slider.css" />
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/column_options.js"></script>
<script>
//スライダー
$(function() {
    $('.spsitesample').slider({
        showControls: false,
        autoplay: true,
        showProgress: true,
        hoverPause: true,
        wait: 5000,
        fade: 500,
        direction: "left"
    });
});
</script>
<?php wp_head(); ?>
</head>
<body class="page">
<p id="page-top"><a href="#top">PAGE TOP</a></p>
<div id="wrapper">
<?php echo get_template_part( "parts/header_parts" ); ?>
<?php echo get_template_part( "parts/pankuzu_list" ); ?>
<?php get_template_part('parts/content_parts'); ?>
<?php get_footer();?>