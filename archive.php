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
      <?php 
        the_archive_title();
        the_archive_description();
      ?>
    </div>
    <main id="main" class="site-main" role="main">
    <?php if (have_posts()): ?>
    <?php
    // Start the loop.
    while (have_posts()):
    the_post();
        
    /*
     * Include the Post-Format-specific template for the content.
     * If you want to override this in a child theme, then include a file
     * called content-___.php (where ___ is the Post Format name) and that will be used instead.
     */
    get_template_part('content', get_post_format());
        
    // End the loop.
    endwhile;
    
    // Previous/next page navigation.
    the_posts_pagination(array('prev_text' => __('Previous page', 'twentyfifteen'), 'next_text' => __('Next page', 'twentyfifteen'), 'before_page_number' => '<span class="meta-nav screen-reader-text">' . __('Page', 'twentyfifteen') . ' </span>',));
    
    // If no content, include the "No posts found" template.
    else:
        get_template_part('content', 'none');
    endif;
    ?>

		</main><!-- .site-main -->
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
