<!doctype html>
<html <?php echo get_language_attributes(); ?>>
  <?php echo $__env->make('partials.head', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
  <body <?php body_class() ?>>
    <?php do_action('get_header') ?>
    <?php echo $__env->make('partials.header', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
    <div class="wrap container" role="document">
      <div class="content">
        <main class="main">
          <?php echo $__env->yieldContent('content'); ?>
        </main>
        <?php if(App\display_sidebar()): ?>
          <aside class="sidebar">
            <?php echo $__env->make('partials.sidebar', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
          </aside>
        <?php endif; ?>
      </div>
    </div>
    <?php do_action('get_footer') ?>
    <?php echo $__env->make('partials.footer', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
    <?php wp_footer() ?>
  </body>
</html>
