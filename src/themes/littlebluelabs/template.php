<?php

function hook_preprocess_page(&$vars) {
  drupal_add_js('http://cdn.jquerytools.org/1.2.6/jquery.tools.min.js', 'external');
}