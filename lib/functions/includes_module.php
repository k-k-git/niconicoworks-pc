<?php
// JSインクルード一元管理
    function register_script(){
        // wp_register_script('main_jquery', get_bloginfo('template_directory').'/js/jquery.min.js', array(), '20170203', true );
        wp_register_script('column_options', get_bloginfo('template_directory').'/js/column_options.js', array(), '20170203', true );
        wp_register_script('blog_options', get_bloginfo('template_directory').'/js/blog_options.js', array(), '20170206', true );
        wp_register_script('page_options', get_bloginfo('template_directory').'/js/page_options.js', array(), '20170203', true );
        wp_register_script('top_options', get_bloginfo('template_directory').'/js/top_options.js', array(), '20170203', true );
        wp_register_script('column_custom', get_bloginfo('template_directory').'/js/column_custom.js', array(), '20170203', true );
        wp_register_script('blog_custom', get_bloginfo('template_directory').'/js/blog_custom.js', array(), '20170206', true );
        wp_register_script('home_custom', get_bloginfo('template_directory').'/js/home_custom.js', array(), '20170203', true );
        // wp_register_script('carousel', get_bloginfo('template_directory').'/js/owl.carousel.min.js', array(), '20170203', true );
        wp_register_script('migrate', get_bloginfo('template_directory').'/js/jquery-migrate-1.2.1.min.js', array(), '20170203', true );
    }
    function add_script() {
        register_script();
            // wp_enqueue_script('main_jquery');
        if ( is_singular('column') ) {
            wp_enqueue_script('column_options');
            wp_enqueue_script('column_custom');
        }
        elseif (is_page( '34' ) || is_page( '321' ) || is_category() || is_tag() || is_search() ) {
            // wp_enqueue_script('carousel');
            wp_enqueue_script('blog_options');
            wp_enqueue_script('blog_custom');
        }
        elseif ( is_single() ) {
            wp_enqueue_script('carousel');
            wp_enqueue_script('blog_options');
            wp_enqueue_script('blog_custom');
            wp_enqueue_script('comment-reply');
        }
        elseif ( is_archive( 'column' ) ) {
            wp_enqueue_script('column_options');
            wp_enqueue_script('column_custom');
        }
        elseif (is_page() ) {
            wp_enqueue_script('migrate');
            wp_enqueue_script('page_options');
        }
        elseif (is_home() ) {
            wp_enqueue_script('top_options');
            wp_enqueue_script('home_custom');
        }
    }
    add_action('wp_enqueue_scripts', 'add_script');
// CSS インクルード 一元管理
function register_style() {
    wp_register_style('style', get_bloginfo('template_directory').'/style.css');
    wp_register_style('slider', get_bloginfo('template_directory').'/css/jquery.slider.css');
    wp_register_style('blog', get_bloginfo('template_directory').'/css/swblog.css');
    // wp_register_style('carousel01', get_bloginfo('template_directory').'/css/owl.carousel.css');
    // wp_register_style('carousel02', get_bloginfo('template_directory').'/css/owl.theme.css');
    wp_register_style('icomoon', get_bloginfo('template_directory').'/icomoon/style.css');
    wp_register_style('mCustomScrollbar', get_bloginfo('template_directory').'/css/jquery.mCustomScrollbar.css');
}
    function add_stylesheet() {
        register_style();
        if ( is_singular('column') ) {
            wp_enqueue_style('style');
            wp_enqueue_style('slider');
        }
        elseif (is_page( '34' ) || is_page( '321' ) || is_category() || is_tag() || is_search() || is_single() ) {
            wp_enqueue_style('blog');
            wp_enqueue_style('slider');
            // wp_enqueue_style('carousel01');
            // wp_enqueue_style('carousel02');
            wp_enqueue_style('icomoon');
        }
        elseif ( is_archive( 'column' ) ) {
            wp_enqueue_style('style');
            wp_enqueue_style('slider');
        }
        elseif (is_page() ) {
            wp_enqueue_style('style');
            wp_enqueue_style('slider');
        }
        elseif (is_home() ) {
            wp_enqueue_style('style');
            wp_enqueue_style('slider');
            wp_enqueue_style('mCustomScrollbar');
        }
    }
add_action('wp_enqueue_scripts', 'add_stylesheet');
?>
<?php
function load_cdn() {
    if ( !is_admin() ) {
        wp_deregister_script('jquery');
        wp_enqueue_script('jquery', 'https://code.jquery.com/jquery-3.1.1.min.js', array(), '1.6.1');
    }
}
add_action('init', 'load_cdn');
?>
<?php
add_action('wp_footer', 'ga');
function ga() { ?>
<script>
    (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
        (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
        m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
                            })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');
    ga('create', 'UA-58709942-4', 'auto');
    ga('send', 'pageview');
</script>
<?php } ?>
<?php
// シェアボタン
function SNS_btn_horizontal_bottom()
{ ?>
<?php
$canonical_url=get_permalink();
$title=wp_title( '', false, 'right' ).'| '.get_bloginfo('name');
$canonical_url_encode=urlencode($canonical_url);
$title_encode=urlencode($title);
?>
<div id="sns-btn-bottom" class="sns-buttons-pc">
  <ul class="snsbv">
    <li class="balloon-btn-horizontal feedly-balloon-btn-horizontal">
      <span class="balloon-btn-set">
        <span class="arrow-box-horizontal">
          <a href="http://cloud.feedly.com/#subscription%2Ffeed%2Fhttp%3A%2F%2Fniconicoworks.com%2Ffeed%2F" target="blank" class="arrow-box-horizontal-link feedly-arrow-box-horizontal-link" title="Feedlyで最新記事をフォロー！">
            <?php if(function_exists('scc_get_follow_feedly')) echo (scc_get_follow_feedly()==0)?'0':scc_get_follow_feedly(); ?>
          </a>
          <a href="http://cloud.feedly.com/#subscription%2Ffeed%2Fhttp%3A%2F%2Fniconicoworks.com%2Ffeed%2F" target="blank" class="balloon-btn-horizontal-link feedly-balloon-btn-horizontal-link" title="Feedlyで最新記事をフォロー！">
            <i class="icon-feedly"></i>
          </a>
        </span>
      </span>
    </li>
    <li class="balloon-btn-horizontal pocket-balloon-btn-horizontal">
      <span class="balloon-btn-set">
        <span class="arrow-box-horizontal">
          <a href="http://getpocket.com/edit?url=<?php echo $canonical_url_encode;?>&title=<?php echo $title_encode;?>" target="blank" class="arrow-box-horizontal-link pocket-arrow-box-horizontal-link" title="Pocketしてあとで読む">
            <?php if(function_exists('scc_get_share_pocket')) echo (scc_get_share_pocket()==0)?'0':scc_get_share_pocket(); ?>
          </a>
          <a href="http://getpocket.com/edit?url=<?php echo $canonical_url_encode;?>&title=<?php echo $title_encode;?>" target="blank" class="balloon-btn-horizontal-link pocket-balloon-btn-horizontal-link" title="Pocketしてあとで読む">
            <i class="icon-pocket"></i>
          </a>
        </span>
      </span>
    </li>
    <li class="balloon-btn-horizontal googleplus-balloon-btn-horizontal">
      <span class="balloon-btn-set">
        <span class="arrow-box-horizontal">
          <a href="https://plus.google.com/share?url=<?php echo $canonical_url_encode;?>" onclick="javascript:window.open(this.href, '', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=600,width=500');return false;" target="blank" class="arrow-box-horizontal-link googleplus-arrow-box-horizontal-link" title="+1する！">
            <?php if(function_exists('scc_get_share_gplus')) echo (scc_get_share_gplus()==0)?'0':scc_get_share_gplus(); ?>
          </a>
          <a href="https://plus.google.com/share?url=<?php echo $canonical_url_encode;?>" onclick="javascript:window.open(this.href, '', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=600,width=500');return false;" target="blank" class="balloon-btn-horizontal-link googleplus-balloon-btn-horizontal-link" title="+1する！">
            <i class="icon-googleplus"></i>
          </a>
        </span>
      </span>
    </li>
    <li class="balloon-btn-horizontal hatena-balloon-btn-horizontal">
      <span class="balloon-btn-set">
        <span class="arrow-box-horizontal">
          <a href="http://b.hatena.ne.jp/add?mode=confirm&url=<?php echo $canonical_url_encode ?>&title=<?php echo $title_encode;?>" onclick="javascript:window.open(this.href, '', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=400,width=510');return false;" target="blank" class="arrow-box-horizontal-link hatena-arrow-box-horizontal-link" title="はてブする！">
            <?php if(function_exists('scc_get_share_hatebu')) echo (scc_get_share_hatebu()==0)?'0':scc_get_share_hatebu(); ?>
          </a>
          <a href="http://b.hatena.ne.jp/add?mode=confirm&url=<?php echo $canonical_url_encode ?>&title=<?php echo $title_encode;?>" onclick="javascript:window.open(this.href, '', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=400,width=510');return false;" target="blank" class="balloon-btn-horizontal-link hatena-balloon-btn-horizontal-link" title="はてブする！">
            <i class="icon-hatena"></i>
          </a>
        </span>
      </span>
    </li>
    <li class="balloon-btn-horizontal twitter-balloon-btn-horizontal">
      <span class="balloon-btn-set">
        <span class="arrow-box-horizontal">
          <a href="http://twitter.com/intent/tweet?url=<?php echo $canonical_url_encode ?>&text=<?php echo $title_encode ?>&tw_p=tweetbutton" target="blank" class="arrow-box-horizontal-link twitter-arrow-box-horizontal-link" title="ツイートする！">
            <?php if(function_exists('scc_get_share_twitter')) echo (scc_get_share_twitter()==0)?'0':scc_get_share_twitter(); ?>
          </a>
          <a href="http://twitter.com/intent/tweet?url=<?php echo $canonical_url_encode ?>&text=<?php echo $title_encode ?>&tw_p=tweetbutton" target="blank" class="balloon-btn-horizontal-link twitter-balloon-btn-horizontal-link" title="ツイートする！">
            <i class="icon-twitter"></i>
          </a>
        </span>
      </span>
    </li>
    <li class="balloon-btn-horizontal facebook-balloon-btn-horizontal">
      <span class="balloon-btn-set">
        <span class="arrow-box-horizontal">
          <a href="http://www.facebook.com/sharer.php?src=bm&u=<?php echo $canonical_url_encode;?>&t=<?php echo $title_encode;?>" onclick="javascript:window.open(this.href, '', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=300,width=600');return false;" target="blank" class="arrow-box-horizontal-link facebook-arrow-box-horizontal-link" title="Facebookでシェア！">
            <?php if(function_exists('scc_get_share_facebook')) echo (scc_get_share_facebook()==0)?'0':scc_get_share_facebook(); ?>
          </a>
          <a href="http://www.facebook.com/sharer.php?src=bm&u=<?php echo $canonical_url_encode;?>&t=<?php echo $title_encode;?>" onclick="javascript:window.open(this.href, '', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=300,width=600');return false;" target="blank" class="balloon-btn-horizontal-link facebook-balloon-btn-horizontal-link" title="Facebookでシェア！">
            <i class="icon-facebook"></i>
          </a>
        </span>
      </span>
    </li>
  </ul>
  <div class="clearfloat"></div>
</div>
<?php }
?>