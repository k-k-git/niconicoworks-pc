<?php if ( is_page( '146' ) ): ?>
<!-- is_page( '146' ) (each_exrpt_post.php)
======================================================================================================================================== -->
    <div id="content">
            <?php get_template_part('parts/column_the_content'); ?>
            <h1 class="right"><?php echo get_the_title(); ?></h1>
            <?php

            if (have_posts()): // WordPress ループ
            while (have_posts()):
                    the_post(); // 繰り返し処理開始
            ?>

                <?php the_content(); ?>

            <?php
            endwhile; // 繰り返し処理終了
            else: // ここから記事が見つからなかった場合の処理
            ?>
            <div class="post">
                <h2>記事はありません</h2>
                <p>お探しの記事は見つかりませんでした。</p>
            </div>
            <?php endif; ?>
            <?php echo get_template_part( "parts/related_posts" ); ?>
    </div>
    <!--end content-->
<?php elseif ( is_page( '170' ) ): ?>
<!-- is_page( '170' ) (each_exrpt_post.php)
======================================================================================================================================== -->
    <div id="allinone">
            <?php

            if (have_posts()): // WordPress ループ
            while (have_posts()):
                    the_post(); // 繰り返し処理開始
            ?>
                <?php the_content(); ?>
            <?php
            endwhile; // 繰り返し処理終了
            else: // ここから記事が見つからなかった場合の処理
            ?>
            <div class="post">
                <h2>記事はありません</h2>
                <p>お探しの記事は見つかりませんでした。</p>
            </div>
            <?php endif; ?>
    </div>
    <!--end content-->
<?php elseif(is_page( '321' ) ): ?>
<!-- is_page( '321' ) (each_exrpt_post.php)
======================================================================================================================================== -->
        <div style="margin-top: 1em" class="post">
                <div style="float: left;"><?php get_template_part('parts/slider_parts'); ?></div>
                <?php get_template_part('parts/adsense_content_pc'); ?>
                <?php get_template_part('parts/head_line'); ?>
                <?php if (have_posts()): // WordPress ループ ?>
                <div class="single-post">
                <?php get_template_part('parts/pankuzu_list'); ?>
                <div class="postarticle">
                <?php while (have_posts()): the_post(); // 繰り返し処理開始 ?>
                    <?php the_content(); ?>
                <?php endwhile; // 繰り返し処理終了 ?>
                <?php else: // ここから記事が見つからなかった場合の処理 ?>
                <div class="post">
                    <h2>記事はありません</h2>
                    <p>お探しの記事は見つかりませんでした。</p>
                </div>
                <?php endif; // WordPress ループ終了 ?>
                <div style="text-align: center;">
                <?php get_template_part('parts/ad/adsense_730_pc'); ?>
                </div>
                </div><!--end postarticle-->
                </div><!--end single-post-->
                <?php echo get_template_part( "parts/button" ); ?>
                <?php wp_reset_query() ?>
                <br class="fix">
        </div><!--end post-->
<?php elseif(is_page( '34' )): ?>
<!-- is_page( '34' ) (each_exrpt_post.php)
======================================================================================================================================== -->
        <div class="post">
            <div style="float: left;"><?php get_template_part('parts/slider_parts'); ?></div>
            <?php get_template_part('parts/ad/adsense_300_pc'); ?>
            <?php get_template_part('parts/head_line'); ?>
            <?php get_template_part('parts/content'); ?>
        </div><!--end post-->
<?php elseif(is_archive( 'column' )): ?>
<!-- is_archive( 'column' ) (each_exrpt_post.php)
======================================================================================================================================== -->
    <div id="content_column">
    <?php if (have_posts()): // WordPress ループ ?>
    <?php while (have_posts()): the_post(); // 繰り返し処理開始 ?>
    <?php get_template_part( "parts/content" ); ?>
    <?php endwhile; ?>
    <?php endif; ?>
    <?php echo get_template_part( "parts/button" ); ?>
    <?php wp_reset_query(); // 投稿データをリセット ?>
    </div>
    <!--end content-->
<?php elseif( is_singular("column") ): ?>
<!-- is_singular("column") (each_exrpt_post.php)
======================================================================================================================================== -->
    <div id="content_column">
        <?php
        if (have_posts()):
            while (have_posts()):
                the_post();
            ?>
            <div class="post_column">
            <p><span class="date"><?php the_time('Y年n月j日'); ?></span></p>
            <h1><?php the_title(); ?></h1>
            <?php the_content();?>
            </div><!--end post_column-->
            <?php
            endwhile;
            endif;
            ?>
            <div class="post_column">
            <?php echo get_template_part( "parts/related_posts" ); ?>
            </div>
    </div>
    <!--end content-->
<?php elseif( is_category() || is_tag() || is_search() ): ?>
<!-- category/tag/search (each_exrpt_post.php)
======================================================================================================================================== -->
        <div class="post">
            <div style="float: left;"><?php get_template_part('parts/slider_parts'); ?></div>
            <?php get_template_part('parts/ad/adsense_300_pc'); ?>
            <?php get_template_part('parts/head_line'); ?>
            <?php get_template_part('parts/content'); ?>
            <?php echo get_template_part( "parts/button" ); ?>
        </div><!--end post-->
<?php elseif(is_page()): ?>
<!-- is_page() (each_exrpt_post.php)
======================================================================================================================================== -->
    <div id="content">
            <h1 class="right"><?php echo get_the_title(); ?></h1>
            <?php

            if (have_posts()): // WordPress ループ
            while (have_posts()):
                    the_post(); // 繰り返し処理開始
            ?>

                <?php the_content(); ?>

            <?php
            endwhile; // 繰り返し処理終了
            else: // ここから記事が見つからなかった場合の処理
            ?>
            <div class="post">
                <h2>記事はありません</h2>
                <p>お探しの記事は見つかりませんでした。</p>
            </div>
            <?php endif; ?>
            <?php echo get_template_part( "parts/related_posts" ); ?>
    </div>
    <!--end content-->
<?php elseif(is_single()): ?>
<!-- is_single() (each_exrpt_post.php)
======================================================================================================================================== -->
        <div style="margin-top: 1em" class="post">
                <div style="float: left;"><?php get_template_part('parts/slider_parts'); ?></div>
                <?php get_template_part('parts/ad/adsense_300_pc'); ?>
                <?php get_template_part('parts/head_line'); ?>
                <?php if (have_posts()): // WordPress ループ ?>
                <div class="single-post">
                <?php get_template_part('parts/pankuzu_list'); ?>
                <div class="postarticle">
                <?php while (have_posts()): the_post(); // 繰り返し処理開始 ?>
                    <?php the_content(); ?>
                <?php endwhile; // 繰り返し処理終了 ?>
                <?php else: // ここから記事が見つからなかった場合の処理 ?>
                <div class="post">
                    <h2>記事はありません</h2>
                    <p>お探しの記事は見つかりませんでした。</p>
                </div>
                <?php endif; // WordPress ループ終了 ?>
                <p class="postinfo ">Category　：　<a class="category" rel="category tag"><?php the_category(', ') ?></a></p>
                <div style="text-align: center;">
                <?php get_template_part('parts/ad/adsense_730_pc'); ?>
                </div>
                <?php SNS_btn_horizontal_bottom() ?>
                </div><!--end postarticle-->
                </div><!--end single-post-->
                <?php echo get_template_part( "parts/button" ); ?>
                <?php wp_reset_query() ?>
                <?php echo get_template_part( "parts/related_posts" ); ?>
                <?php comments_template(); ?>
                <br class="fix">
        </div><!--end post-->
<?php elseif(is_home()): ?>
<!-- index (each_exrpt_post.php)
======================================================================================================================================== -->
            <div class="box col1">
                <a href="<?php echo home_url('/'); ?>" class="cur"><img src="<?php echo get_template_directory_uri(); ?>/img/sitelogo2014_rollout.png" alt="SOHO　ホームページ制作" width="238" height="238" /></a>
                <ul class="topmenu">
                    <li><a href="<?php echo get_page_link(132); ?>"><img src="<?php echo get_template_directory_uri(); ?>/img/topmenu1_rollout.png" alt="ニコニコワークスについて" width="238" height="28" /></a></li>
                    <li><a href="<?php echo get_page_link(135); ?>"><img src="<?php echo get_template_directory_uri(); ?>/img/topmenu2_rollout.png" alt="ホームページ制作実績" width="238" height="28" /></a></li>
                    <li><a href="<?php echo get_page_link(138); ?>"><img src="<?php echo get_template_directory_uri(); ?>/img/topmenu3_rollout.png" alt="ホームページ制作の流れ" width="238" height="28" /></a></li>
                    <li><a href="<?php echo get_page_link(141); ?>"><img src="<?php echo get_template_directory_uri(); ?>/img/topmenu4_rollout.png" alt="FAQ" width="238" height="28" /></a></li>
                    <li><a href="<?php echo get_page_link(143); ?>"><img src="<?php echo get_template_directory_uri(); ?>/img/topmenu5_rollout.png" alt="料金案内" width="238" height="28" /></a></li>
                    <li><a href="<?php echo get_page_link(146); ?>"><img src="<?php echo get_template_directory_uri(); ?>/img/topmenu6_rollout.png" alt="お問い合わせ" width="238" height="28" /></a></li>
                    <li><a href="<?php echo get_page_link(34); ?>"><img src="<?php echo get_template_directory_uri(); ?>/img/topmenu7_rollout.png" alt="ニコニコブログ" width="238" height="28" /></a></li>
                </ul>
            </div>
            <div class="box col0">
                <?php echo get_template_part( "parts/slider_parts" ); ?>
                <div class="newstitle">
                    <a href="<?php echo $url = get_post_type_archive_link( 'column' ); ?>"><img src="<?php echo get_template_directory_uri(); ?>/img/news_logo_rollout.png" alt="NEWS" width="102" height="102" /></a>
                </div>
                <!--end newstitle-->
                <?php echo get_template_part( "parts/column_parts" ); ?>
            </div>
            <!--end box-->
            <div class="box col1">
                <div class="boxinner">
                    <h2 class="web_icon">ホームページ制作</h2>
                    <a href="<?php echo get_page_link(2); ?>"><img src="<?php echo get_template_directory_uri(); ?>/img/top_hp2014.png" alt="ホームページ制作" class="opa" width="200" height="200" /></a>
                    <p class="topmenu_desc">お客様と「目的」を明確に共有し、価値あるホームページを制作致します。</p>
                </div>
                <!--end inner-->
                <div class="readmore_icon">
                    <a href="<?php echo get_page_link(2); ?>"><img src="<?php echo get_template_directory_uri(); ?>/img/readmore_icon_rollout.png" alt="" width="150" height="28" /></a>
                </div>
            </div>
            <!--end box-->
            <div class="box col1">
                <div class="boxinner">
                    <h2 class="wp_icon">WordPressでCMS構築</h2>
                    <a href="<?php echo get_page_link(40); ?>"><img src="<?php echo get_template_directory_uri(); ?>/img/top_wp2014.png" alt="WordPressを使った便利なサイト運営" class="opa" width="200" height="200" /></a>
                    <p class="topmenu_desc">世界利用者数NO.1のCMSワードプレスを使用し、誰でも更新可能なWEBシステムを取り入れたホームページを作成します。</p>
                </div>
                <!--end inner-->
                <div class="readmore_icon">
                    <a href="<?php echo get_page_link(40); ?>"><img src="<?php echo get_template_directory_uri(); ?>/img/readmore_icon_rollout.png" alt="" width="150" height="28" /></a>
                </div>
            </div>
            <!--end box-->
            <div class="box col1">
                <div class="boxinner">
                    <h2 class="sp_icon">スマートフォンサイト制作</h2>
                    <a href="<?php echo get_page_link(154); ?>"><img src="<?php echo get_template_directory_uri(); ?>/img/top_sp2014.png" alt="スマートフォン閲覧最適化" class="opa" width="200" height="200" /></a>
                    <p class="topmenu_desc">スマホからの流入をしっかりキャッチできるモバイルフレンドリーなサイトを作成致します。</p>
                </div>
                <!--end inner-->
                <div class="readmore_icon">
                    <a href="<?php echo get_page_link(154); ?>"><img src="<?php echo get_template_directory_uri(); ?>/img/readmore_icon_rollout.png" alt="" width="150" height="28" /></a>
                </div>
            </div>
            <div class="box col1">
                <div class="boxinner">
                    <h2 class="sm_icon">ソーシャルメディア活用</h2>
                    <a href="<?php echo get_page_link(151); ?>"><img src="<?php echo get_template_directory_uri(); ?>/img/top_sm2014.png" alt="ソーシャルネットワークを利用したマーケティング" class="opa" width="200" height="200" /></a>
                    <p class="topmenu_desc">ソーシャルメディアを活用した被リンク対策、潜在的な顧客層を集客します。</p>
                </div>
                <!--end inner-->
                <div class="readmore_icon">
                    <a href="<?php echo get_page_link(151); ?>"><img src="<?php echo get_template_directory_uri(); ?>/img/readmore_icon_rollout.png" alt="" width="150" height="28" /></a>
                </div>
            </div>
            <!--end box-->
            <div class="box col1">
                <div class="boxinner">
                    <h2 class="seo_icon">SEO対策</h2>
                    <a href="<?php echo get_page_link(163); ?>"><img src="<?php echo get_template_directory_uri(); ?>/img/top_seo2014.png" alt="Google対策上位表示" class="opa" width="200" height="200" /></a>
                    <p class="topmenu_desc">グーグルのアルゴリズムに則ったホワイトハットなSEO対策を実施致します。内部SEO対策・外部SEO対策も承ります。</p>
                </div>
                <!--end inner-->
                <div class="readmore_icon">
                    <a href="<?php echo get_page_link(163); ?>"><img src="<?php echo get_template_directory_uri(); ?>/img/readmore_icon_rollout.png" alt="" width="150" height="28" /></a>
                </div>
            </div>
            <!--end box-->
            <div class="box col1">
                <div class="boxinner">
                    <h2 class="out_icon">アウトソーシング</h2>
                    <a href="<?php echo get_page_link(167); ?>"><img src="<?php echo get_template_directory_uri(); ?>/img/top_out2014.png" alt="クリエイティブパートナー外注" class="opa" width="200" height="200" /></a>
                    <p class="topmenu_desc">社内業務の外注化をお考えの企業様はお気軽にニコニコワークスへお問い合わせ下さい。</p>
                </div>
                <!--end inner-->
                <div class="readmore_icon">
                    <a href="<?php echo get_page_link(167); ?>"><img src="<?php echo get_template_directory_uri(); ?>/img/readmore_icon_rollout.png" alt="" width="150" height="28" /></a>
                </div>
            </div>
            <!--end box-->
            <div class="box col4">
                <div class="boxinner_b">
                    <h2 class="gray_icon">ホームページ制作ポリシー</h2>
                    <a href="<?php echo get_page_link(132); ?>"><img src="<?php echo get_template_directory_uri(); ?>/img/concept2014.png" alt="WEB制作ポリシー" width="449" height="120" /></a>
                    <p class="topmenu_desc">
                        ニコにコワークスでは、<br />お客様と目的を明確に共有し価値あるホームページを制作致します。<br />
                        時代の変化、新しい携帯端末へも対応可能な「マルチデバイス対応」を実施します。<br />
                        実際にホームページを閲覧する方々の使いやすさを考えたユーザビリティーを重視したWEBサイトを制作致します。<br />
                    </p>
                </div>
                <!--end inner-->
                <div class="readmore_icon">
                    <a href="<?php echo get_page_link(132); ?>"><img src="<?php echo get_template_directory_uri(); ?>/img/about_sw_icon_rollout.png" alt="" width="200" height="28" /></a>
                </div>
            </div>
            <!--end box-->
            <div class="box col2">
                <div class="boxinner_c">
                    <h2 class="gray_icon">WORKS</h2>
                    <a href="<?php echo get_page_link(135); ?>"><img src="<?php echo get_template_directory_uri(); ?>/img/works_img.png" alt="製作事例" class="opa" width="442" height="130" /></a>
                    <p class="topmenu_desc">ニコニコワークスでのホームページ制作実績はこちらをご覧下さい。<a href="<?php echo get_page_link(135); ?>"><img src="<?php echo get_template_directory_uri(); ?>/img/arrow_anime.gif" alt="" /></a></p>
                </div>
                <!--end inner-->
            </div>
            <!--end box-->
            <div class="box col3">
                <div class="boxinner_d">
                    <a href="<?php echo get_page_link(141); ?>"><img src="<?php echo get_template_directory_uri(); ?>/img/top_faq.png" alt="FAQ" class="opa" width="200" height="200" /></a>
                </div>
                <!--end inner-->
            </div>
            <!--end box-->
            <div class="box col3">
                <div class="boxinner_d">
                    <a href="<?php echo get_page_link(143); ?>"><img src="<?php echo get_template_directory_uri(); ?>/img/top_price.png" alt="料金案内" class="opa" width="200" height="200" /></a>
                </div>
                <!--end inner-->
            </div>
            <!--end box-->
            <div class="box col3">
                <div class="boxinner_d">
                    <a href="<?php echo get_page_link(146); ?>"><img src="<?php echo get_template_directory_uri(); ?>/img/top_contact_rollout.png" alt="お問い合わせフォーム" width="200" height="200" /></a>
                </div>
                <!--end inner-->
            </div>
            <!--end box-->
            <div class="box col3">
                <div class="boxinner_d">
                    <a href="<?php echo get_page_link(170); ?>"><img src="<?php echo get_template_directory_uri(); ?>/img/top_allinone_rollout.png" alt="ホームページ制作オールインワンパッケージ" width="200" height="200" /></a>
                </div>
                <!--end inner-->
            </div>
            <!--end box-->
            <div class="box col3">
                <div class="boxinner_d">
                    <a href="<?php echo get_page_link(34); ?>"><img src="<?php echo get_template_directory_uri(); ?>/img/top_blog_rollout.png" alt="ニコニコブログ" width="200" height="200" /></a>
                </div>
                <!--end inner-->
            </div>
            <!--end box-->
<?php endif; ?>


