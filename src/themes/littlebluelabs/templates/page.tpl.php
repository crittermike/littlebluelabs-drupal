<div id="header">

  <div id="header-overlay">
    <div id="header-inner">
      <h1 id="logo">little<span>blue</span>labs</h1>
      <h2 id="slogan">Drupal development by <a href="http://drupal.org/u/mcrittenden">Mike Crittenden</a> and friends.</h2>
    </div>
  </div>

  <?php if ($page['header']): ?>
    <?php print render($page['header']); ?>
  <?php endif; ?>

  <?php print $breadcrumb; ?>

  <?php if ($page['highlight']): ?>
    <?php print render($page['highlight']) ?>
  <?php endif; ?>

  <?php print render($title_prefix); ?>
  <?php if ($title): ?>
    <!-- <h1><?php print $title; ?></h1> -->
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
</div>

<div id="content">
  <div id="content-inner">
    <?php print render($page['content']) ?>
  </div>
</div>

<?php if ($main_menu || $secondary_menu): ?>
  <?php print theme('links', array('links' => $main_menu, 'attributes' => array('id' => 'primary', 'class' => array('links', 'clearfix', 'main-menu')))); ?>
  <?php print theme('links', array('links' => $secondary_menu, 'attributes' => array('id' => 'secondary', 'class' => array('links', 'clearfix', 'sub-menu')))); ?>
<?php endif; ?>

<div id="footer">
  <?php if ($page['footer']): ?>
    <?php print render($page['footer']); ?>
  <?php endif; ?>
  <ul class="social-icons">
    <li class="icon-drupal"><a href="http://drupal.org/u/mcrittenden">Drupal.org</a></li>
    <li class="icon-github"><a href="http://github.com/mikecrittenden">GitHub</a></li>
    <li class="icon-linkedin"><a href="http://linkedin.com/in/mikecrittenden">LinkedIn</a></li>
    <li class="icon-twitter"><a href="http://twitter.com/mcrittenden">Twitter</a></li>
  </ul>
</div>


