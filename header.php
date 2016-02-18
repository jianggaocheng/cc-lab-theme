<? header("Access-Control-Allow-Origin: *"); ?>
<!DOCTYPE html>
<html lang="zh-CN" class="no-js">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="Keywords" content="cc-lab, 技术博客, 蒋杲程, 个人网站" />
  <meta name="Description" content="蒋杲程的个人网站" />
  <link rel="shortcut icon" href="<?php bloginfo('template_url'); ?>/favicon.ico">
  <title><?php if ( is_home() ) {
        bloginfo('name'); echo " - "; bloginfo('description');
    } elseif ( is_category() ) {
        single_cat_title(); echo " - "; bloginfo('name');
    } elseif (is_single() || is_page() ) {
        single_post_title(); echo " - "; bloginfo('name');
    } elseif (is_search() ) {
        echo "搜索结果"; echo " - "; bloginfo('name');
    } elseif (is_404() ) {
        echo '页面未找到!';
    } else {
        wp_title('',true);
    } 
  ?></title>

  <?php wp_head(); ?>
  <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/amazeui.css" type="text/css" media="all" />
  <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" media="all" />
  <link rel="alternate" type="application/rss+xml" title="RSS 2.0 - 所有文章" href="<?php echo get_bloginfo('rss2_url'); ?>" />
  <link rel="alternate" type="application/rss+xml" title="RSS 2.0 - 所有评论" href="<?php bloginfo('comments_rss2_url'); ?>" />
  <link rel="profile" href="http://gmpg.org/xfn/11">
  <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">
  <script>
  var _hmt = _hmt || [];
  (function() {
    var hm = document.createElement("script");
    hm.src = "//hm.baidu.com/hm.js?0d204a974c636ba5409c74cdb75e8d47";
    var s = document.getElementsByTagName("script")[0]; 
    s.parentNode.insertBefore(hm, s);
  })();
  </script>

</head>
<?php flush(); ?>
<body>
  <div class="amz-banner">
    <div class="amz-container">
      <h1><a href="<?php echo get_option('home'); ?>/"><?php bloginfo('name'); ?></a></h1>
      <p><?php bloginfo('description'); ?></p>
    </div>
  </div>
  <header id="amz-header" data-am-sticky>
    <div class="amz-container am-cf">
    <button class="am-btn am-btn-primary am-show-sm-only" data-am-collapse="{target: '.amz-header-nav'}"><span class="am-sr-only">导航切换</span> <span class="am-icon-bars"></span></button>
	<?php wp_nav_menu( array( 'menu_class' => 'amz-header-nav am-collapse', 'container' => 'nav', ) );?>
    </div>
  </header>