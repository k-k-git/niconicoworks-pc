<?php if( is_singular("column") ): ?>
<div id="header_bg">
    <div id="header_page">
        <a href="<?php echo home_url('/'); ?>"><img src="<?php echo get_template_directory_uri(); ?>/img/sitelogo190.png" alt="ニコニコワークス" class="sitelogo" /></a>
        <div id="gnavi">
            <ul>
                <li class="first-child"><a href="<?php echo get_page_link(132); ?>"><img src="<?php echo get_template_directory_uri(); ?>/img/gnavi1_rollout.png" alt="ニコニコワークスについて" /></a></li>
                <li><a href="<?php echo get_page_link(135); ?>"><img src="<?php echo get_template_directory_uri(); ?>/img/gnavi2_rollout.png" alt="制作実績" /></a></li>
                <li><a href="<?php echo get_page_link(138); ?>"><img src="<?php echo get_template_directory_uri(); ?>/img/gnavi3_rollout.png" alt="制作から納品までの流れ" /></a></li>
                <li><a href="<?php echo get_page_link(141); ?>"><img src="<?php echo get_template_directory_uri(); ?>/img/gnavi4_rollout.png" alt="よくある質問" /></a></li>
                <li><a href="<?php echo get_page_link(143); ?>"><img src="<?php echo get_template_directory_uri(); ?>/img/gnavi5_rollout.png" alt="制作料金案内" /></a></li>
                <li><a href="<?php echo get_page_link(146); ?>"><img src="<?php echo get_template_directory_uri(); ?>/img/gnavi6_rollout.png" alt="お問い合わせ" /></a></li>
                <li class="last-child"><a href="<?php echo get_page_link(34); ?>"><img src="<?php echo get_template_directory_uri(); ?>/img/gnavi7_rollout.png" alt="ニコニコブログ" /></a></li>
            </ul>
            <br class="fix" />
        </div>
        <!--end gnavi-->
    </div>
    <!--end header_page-->
</div>
<!--end header bg-->
<?php elseif( is_page( '34' ) || is_page( '321' ) || is_category() || is_tag() || is_search() || is_single() ): ?>
<div id="header">
    <div id="h_body" class="cf">
        <div class="h_l">
            <a href="<?php echo get_permalink(34); ?>"><img src="<?php echo get_template_directory_uri(); ?>/img/swblog_title.png" alt="ニコニコブログ" style="padding-left:1em;" /></a><img src="<?php echo get_template_directory_uri(); ?>/img/text_subtitle.png" alt="webデザインを楽しむ。" style="padding-left:2em;" />
        </div>
        <div class="h_r">
            <div class="rumble">
                <a href="<?php echo home_url('/'); ?>"><img src="<?php echo get_template_directory_uri(); ?>/img/swlogo_wh.png" alt="ホームページ制作ニコニコワークス" style="padding-right:1em;" /></a>
            </div>
        </div>
    </div>
    <!--end h_body-->
</div>
<!--end header-->
<?php elseif( is_archive( "column" ) || is_page() ): ?>
<div id="header_bg">
    <div id="header_page">
        <a href="<?php echo home_url('/'); ?>"><img src="<?php echo get_template_directory_uri(); ?>/img/sitelogo190.png" alt="ニコニコワークス" class="sitelogo" /></a>
        <div id="gnavi">
            <ul>
                <li class="first-child"><a href="<?php echo get_page_link(132); ?>"><img src="<?php echo get_template_directory_uri(); ?>/img/gnavi1_rollout.png" alt="ニコニコワークスについて" /></a></li>
                <li><a href="<?php echo get_page_link(135); ?>"><img src="<?php echo get_template_directory_uri(); ?>/img/gnavi2_rollout.png" alt="制作実績" /></a></li>
                <li><a href="<?php echo get_page_link(138); ?>"><img src="<?php echo get_template_directory_uri(); ?>/img/gnavi3_rollout.png" alt="制作から納品までの流れ" /></a></li>
                <li><a href="<?php echo get_page_link(141); ?>"><img src="<?php echo get_template_directory_uri(); ?>/img/gnavi4_rollout.png" alt="よくある質問" /></a></li>
                <li><a href="<?php echo get_page_link(143); ?>"><img src="<?php echo get_template_directory_uri(); ?>/img/gnavi5_rollout.png" alt="制作料金案内" /></a></li>
                <li><a href="<?php echo get_page_link(146); ?>"><img src="<?php echo get_template_directory_uri(); ?>/img/gnavi6_rollout.png" alt="お問い合わせ" /></a></li>
                <li class="last-child"><a href="<?php echo get_page_link(34); ?>"><img src="<?php echo get_template_directory_uri(); ?>/img/gnavi7_rollout.png" alt="ニコニコブログ" /></a></li>
            </ul>
            <br class="fix" />
        </div>
        <!--end gnavi-->
    </div>
    <!--end header_page-->
</div>
<!--end header bg-->
<?php elseif(is_home()): ?>
        <div id="header" class="cf">
            <div class="header_l">
                <h1>大分県でホームページ作成をお考えなら、SOHO・フリーランスWEBデザイナーのニコニコワークへ！楽天・Amazonなどのネットショップが得意です。大分・別府市より全国対応</h1>
            </div>
            <div class="header_r">
                <a href="<?php echo get_page_link(188); ?>"><img src="<?php echo get_template_directory_uri(); ?>/img/sitemap_icon.png" alt="サイトマップ" width="119" height="28" /></a>
            </div>
        </div>
        <!--end header-->
<?php endif; ?>
