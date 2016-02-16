<article id="post-<?php the_ID(); ?>" class="am-article">
  <div class="am-article-hd">
    <?php the_title(sprintf('<h1 class="am-article-title"><a href="%s" rel="bookmark">', esc_url(get_permalink())), '</a></h1>'); ?>
    <p class="am-article-meta">
    <?php
    $time_string = '<time class="entry-date published updated" datetime="%1$s">%2$s</time>';
    if (get_the_time('U') !== get_the_modified_time('U')) {
        $time_string = '<time class="entry-date published" datetime="%1$s">%2$s</time><time class="updated" datetime="%3$s">%4$s</time>';
    }

    $time_string = sprintf($time_string,
        esc_attr(get_the_date('c')),
        esc_html(get_the_date()),
        esc_attr(get_the_modified_date('c')),
        esc_html(get_the_modified_date())
    );

    $posted_on = sprintf(
        _x('%s', 'post date', 'CC-Lab-Amaze'),
        '<i class="am-icon-clock-o"></i> <a href="' . esc_url(get_permalink()) . '" rel="bookmark">' . $time_string . '</a>'
    );

    $byline = sprintf(
        _x('%s', 'post author', 'CC-Lab-Amaze'),
        '<i class="am-icon-user"></i> <a href="' . esc_url(get_author_posts_url(get_the_author_meta('ID'))) . '">' . esc_html(get_the_author()) . '</a>'
    );

    echo '<span class="posted-on">' . $posted_on . '</span><span class="byline"> ' . $byline . '</span>';
    edit_post_link(__('Edit', 'CC-Lab-Amaze'), '<span class="edit-link"><i class="am-icon-edit"></i> ', '</span>' );
    ?>
    </p>
  </div>

  <div class="am-article-bd">
  <?php
  the_content(sprintf(
    __('继续阅读 %s <span class="meta-nav">&rarr;</span>', 'CC-Lab-Amaze'), 
      the_title( '<span class="screen-reader-text">"', '"</span>', false)
  ));
  ?>
  <p class="am-article-meta">
  <?php 
    // Hide category and tag text for pages.
  if ('post' == get_post_type()) {
    
      /* translators: used between list items, there is a space after the comma */
      $categories_list = get_the_category_list(__(', ', 'CC-Lab-Amaze'));
      if ($categories_list) {
          printf('<span class="cat-links"><i class="am-icon-navicon"></i>' . __('%1$s', 'CC-Lab-Amaze') . '</span>', $categories_list);
      }
    
      /* translators: used between list items, there is a space after the comma */
      $tags_list = get_the_tag_list('', __(', ', 'CC-Lab-Amaze'));
      if ($tags_list) {
          printf('<span class="tags-links"><i class="am-icon-tags"></i> ' . __('%1$s', 'CC-Lab-Amaze') . '</span>', $tags_list);
      }
  }

  if (!is_single() && !post_password_required() && (comments_open() || get_comments_number())) {
      echo '<span class="comments-link"><i class="am-icon-comments"></i>';
      comments_popup_link(__('亲，留下点评论吧:)', 'CC-Lab-Amaze'), __('1 条评论', 'CC-Lab-Amaze'), __('% 条评论', 'CC-Lab-Amaze'), '', __('评论已关闭', 'CC-Lab-Amaze'));
      echo '</span>';
  }
  ?>
  </p>
  </div>
</article>