<?php if ( is_page() || is_singular("column") ): ?>
<!-- is_page()/is_singular("column") (related_posts.php)
======================================================================================================================================== -->
<div id="content_foot_menu">
    <h4>その他のサービスメニュー</h4>
    <ul>
        <li><a href="<?php echo get_page_link(2); ?>"><img src="<?php echo get_template_directory_uri(); ?>/img/footmenu1_rollout.png" alt="ホームページ制作" /></a></li>
        <li><a href="<?php echo get_page_link(40); ?>"><img src="<?php echo get_template_directory_uri(); ?>/img/footmenu2_rollout.png" alt="WordPressでCMS構築" /></a></li>
        <li><a href="<?php echo get_page_link(154); ?>"><img src="<?php echo get_template_directory_uri(); ?>/img/footmenu3_rollout.png" alt="スマートホンサイト制作" /></a></li>
        <li><a href="<?php echo get_page_link(151); ?>"><img src="<?php echo get_template_directory_uri(); ?>/img/footmenu4_rollout.png" alt="ソーシャルメディア連携" /></a></li>
        <li><a href="<?php echo get_page_link(160); ?>"><img src="<?php echo get_template_directory_uri(); ?>/img/footmenu5_rollout.png" alt="DTP、バナー、チラシ制作" /></a></li>
        <li><a href="<?php echo get_page_link(163); ?>"><img src="<?php echo get_template_directory_uri(); ?>/img/footmenu6_rollout.png" alt="SEO対策" /></a></li>
        <li><a href="<?php echo get_page_link(167); ?>"><img src="<?php echo get_template_directory_uri(); ?>/img/footmenu7_rollout.png" alt="WEB制作外注" /></a></li>
    </ul>
</div>
<?php elseif(is_single()): ?>
<!-- is_single() (related_posts.php)
======================================================================================================================================== -->
<?php
$categories = get_the_category($post->ID);
$category_ID = array();
foreach($categories as $category):
  array_push( $category_ID, $category -> cat_ID);
endforeach ;
$args = array(
    'post__not_in' => array($post -> ID),
    'category__in' => $category_ID,
    'posts_per_page' => 4,
    'meta_key' => 'views',
     'orderby' => 'meta_value_num',
     'order' => 'DESC',
        );
$the_query = new WP_Query( $args );
            // ループ
if ( $the_query->have_posts() ) : ?>
<?php
$category = get_the_category();
$cat_id   = $category[0]->cat_ID;
$cat_name = $category[0]->cat_name;
$cat_slug = $category[0]->category_nicename;
?>
<h3><?php echo $cat_name; ?>&nbsp;カテゴリーの人気記事</h3>
<ul class="related_list cf">
    <?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
        <li>
            <a href="<?php the_permalink();?>"><?php $title= get_the_title(); the_post_thumbnail( '120' , array( 'alt' =>$title, 'title' => $title)); ?></a>
            <span class="label label-danger" style="display: inline;padding: .2em .6em .3em;font-size: 75%;color: #fff;border-radius: .25em;font-weight: 700;line-height: 1;vertical-align: baseline;white-space: nowrap;text-align: center;background-color: #d9534f;"><?php echo the_views(); ?></span>
            <p class="related_title"style="float: left;">
                <a href="<?php the_permalink();?>">
                    <?php the_title(); ?>
                </a>
            </p>
        </li>
    <?php endwhile; ?>
</ul>
<?php endif; ?>
<?php wp_reset_postdata(); ?>
<?php endif; ?>