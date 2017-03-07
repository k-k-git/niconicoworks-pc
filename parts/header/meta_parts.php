<!DOCTYPE html>
<html>
<?php if(is_page( '34' ) || is_page( '321' ) || is_category() || is_tag() || is_search() || is_single() ): ?>
<head prefix="og: http://ogp.me/ns# fb: http://ogp.me/ns/fb# article: http://ogp.me/ns/article#">
<?php else : ?>
<head>
<?php endif; ?>
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta charset="utf-8">
    <?php //指定ページにnoindexタグを出力
    if (get_post_meta($post->ID, "noindex", true))
    {echo '<meta name="robots" content="noindex,nofollow" />';print("\n");};
    ?>
    <link rel="shortcut icon" type="image/x-icon" href="<?php echo get_template_directory_uri(); ?>/img/sw.ico" />