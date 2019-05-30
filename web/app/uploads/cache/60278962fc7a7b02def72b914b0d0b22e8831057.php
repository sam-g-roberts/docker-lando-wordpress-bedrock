<time class="updated" datetime="<?php echo e(get_post_time('c', true)); ?>"><?php echo e(get_the_date()); ?></time>
<p class="byline author vcard">
  <?php echo e(__('By', 'sage')); ?> <a href="<?php echo e(get_author_posts_url(get_the_author_meta('ID'))); ?>" rel="author" class="fn">
    <?php echo e(get_the_author()); ?>

  </a>
</p>
