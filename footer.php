<!-- Footer -->
<footer class="footer">
<p>
  <?php printf( __('Proudly powered by %s'), '<a href="http://wordpress.org">WordPress</a>'); ?>
  <span class="sep"> | </span>
  <?php printf( __('Design by %s'), '<a href="http://www.cc-lab.cn">CC-Lab-Amaze</a>'); ?>
  <span class="sep"> | </span>
  <?php print(" Copyright © 2015-".date('Y',time())." · <a href=".get_option('home').">www.cc-lab.cn</a> All rights reserved"); ?>
</p>
</footer>
<!--End Footer-->

<div class="amz-toolbar" id="amz-toolbar" style="right: 119.5px;">
  <a href="#" data-am-smooth-scroll title="回到顶部" class="am-icon-btn am-icon-arrow-up am-active" id="amz-go-top"></a> 
</div>

<script src="http://libs.baidu.com/jquery/1.11.1/jquery.min.js"></script>
<script src="http://cdn.amazeui.org/amazeui/2.2.1/js/amazeui.min.js"></script>

<?php wp_footer(); ?>

</body>
</html>