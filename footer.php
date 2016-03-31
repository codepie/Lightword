<div class="clear"></div>
</div>
<div id="footer">
<span class="text">
<?php
$blog_name = '<a href="'.get_bloginfo('url').'">'.get_bloginfo('name').'</a>';
printf(__('Copyright %s %s %s &middot; Powered by %s <br/>','lightword'),'&copy;',date('Y'),$blog_name,'WordPress')
;?>
<?php _e('Lightword Theme by Andrei Luca','lightword')
;?>
<?php global $lw_footer_content; echo $lw_footer_content; ?>
<a title="<?php _e('Go to top','lightword'); ?>" class="top" href="#top"><?php _e('Go to top','lightword'); ?> &uarr;</a>
</span>
</div>
<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/menu.js"></script>
</div>
<?php wp_footer(); ?>
</body>
</html>