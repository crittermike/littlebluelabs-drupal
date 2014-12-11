<?php
/**
 * @file
 * Enables modules and site configuration for a littlebluelabs site install.
 */

/**
 * Implements hook_install_tasks_alter().
 */
function littlebluelabs_install_tasks_alter(&$tasks, $install_state) {
  // Magically go one level deeper in solving years of dependency problems.
  $path = drupal_get_path('module', 'panopoly_core');
  require_once $path . '/panopoly_core.profile.inc';
  $tasks['install_load_profile']['function'] = 'panopoly_core_install_load_profile';
}
