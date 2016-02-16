<?php 
    // 移除版本显示
    remove_action('wp_head', 'wp_generator'); 

    // 隐藏面板登陆错误信息
    add_filter('login_errors', create_function('$a', "return null;"));

    // This theme uses wp_nav_menu() in one location.
    register_nav_menus();

    /**
     * Register widget area.
     *
     * @link https://codex.wordpress.org/Function_Reference/register_sidebar
     */
    function cc_lab_amaze_widgets_init() {
        register_sidebar( array(
            'name'          => __( 'Widget Area', 'CC-Lab-Amaze' ),
            'id'            => 'sidebar-1',
            'description'   => __( 'Add widgets here to appear in your sidebar.', 'CC-Lab-Amaze' ),
            'before_widget' => '<section id="%1$s" class="amz-sidebar am-offcanvas-bar %2$s">',
            'after_widget'  => '</section>',
            'before_title'  => '<span class="am-nav-header">',
            'after_title'   => '</span>',
        ) );
    }
    add_action( 'widgets_init', 'cc_lab_amaze_widgets_init' );

    /**
     * Comments callback.
     */
    function cc_lab_amaze_comment($comment, $args, $depth) {
        $GLOBALS['comment'] = $comment;
        ?>
        <li class="am-comment" id="li-comment-<?php comment_ID(); ?>">
          <a href="#link-to-user-home">
            <?php if (function_exists('get_avatar') && get_option('show_avatars')) { echo get_avatar($comment, 48); } ?>
          </a>
          <div class="am-comment-main"> <!-- 评论内容容器 -->
            <header class="am-comment-hd">
              <!--<h3 class="am-comment-title">评论标题</h3>-->
              <div class="am-comment-meta"> <!-- 评论元数据 -->
                <?php echo get_comment_author_link(); ?> <!-- 评论者 -->
                评论于 <time datetime=""><?php echo get_comment_time('Y-m-d H:i'); ?></time>
                <?php comment_reply_link(array_merge( $args, array('reply_text' => '回复','depth' => $depth, 'max_depth' => $args['max_depth']))) ?>
              </div>
            </header>
            <div class="am-comment-bd">
              <?php if ($comment->comment_approved == '0') : ?>
              <em>你的评论正在审核，稍后会显示出来！</em><br>
              <?php endif; ?>
              <?php comment_text(); ?>
            </div> <!-- 评论内容 -->
          </div>
        </li>
    <?php }
?>