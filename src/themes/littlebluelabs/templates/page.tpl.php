<?php if (!$is_front): ?>
  <?php print render($title_prefix); ?>
  <?php if ($title): ?>
    <h1><?php print $title; ?></h1>
  <?php endif; ?>
  <?php print render($title_suffix); ?>

  <?php print $messages; ?>
  <?php print render($page['help']); ?>

  <?php if ($tabs): ?>
    <?php print render($tabs); ?>
  <?php endif; ?>

  <?php if ($action_links): ?>
    <ul><?php print render($action_links); ?></ul>
  <?php endif; ?>
<?php endif; ?>

<?php print render($page['content']) ?>

<footer>
  <div class="container">
    <div class="row">
      <div class="col-md-4">
        <span class="copyright">copyright &copy; littlebluelabs <?php echo date('Y'); ?></span>
      </div>
      <div class="col-md-4">
        <ul class="list-inline social-buttons">
          <li><a href="http://drupal.org/u/mcrittenden"><i class="fa fa-drupal"></i></a></li>
          <li><a href="http://github.com/mikecrittenden"><i class="fa fa-github"></i></a></li>
          <li><a href="http://twitter.com/littlebluelabs"><i class="fa fa-twitter"></i></a></li>
          <li><a href="http://facebook.com/littlebluelabs"><i class="fa fa-facebook"></i></a></li>
          <li><a href="http://linkedin.com/in/mikecrittenden"><i class="fa fa-linkedin"></i></a></li>
        </ul>
      </div>
      <div class="col-md-4">
        <ul class="list-inline quicklinks">
          <li><a href="mailto:hello@littlebluelabs.com">hello@littlebluelabs.com</a></li>
        </ul>
      </div>
    </div>
  </div>
</footer>
