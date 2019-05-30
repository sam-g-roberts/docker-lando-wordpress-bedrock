<article <?php post_class() ?>>
  <header>
    <h2 class="entry-title"><a href="<?php echo e(get_permalink()); ?>"><?php echo get_the_title(); ?></a></h2>
    <?php echo $__env->make('partials/entry-meta', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
  </header>
  <div class="entry-summary">
    <?php the_excerpt() ?>
  </div>
</article>
