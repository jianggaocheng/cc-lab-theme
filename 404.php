<?php

/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 */

get_header(); ?>
<div class="am-container">
<div class="am-g">
  <div class="am-u-md-8">
    <div class="am-alert am-alert-secondary" data-am-alert>
      找不到相关页面！404
    </div>
    <iframe scrolling='no' frameborder='0' src='http://yibo.iyiyun.com/Home/Distribute/ad404/key/17853' style='width:100%;height:470px;display:block;'></iframe>
  </div>
  
  <div class="am-u-md-4">
    <div id="amz-offcanvas" class="am-offcanvas doc-offcanvas">
    <?php
    get_sidebar(); ?>
    </div>
  </div>
</div>
</div>
<?php get_footer(); ?>
