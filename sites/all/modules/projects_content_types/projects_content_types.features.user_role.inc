<?php
/**
 * @file
 * projects_content_types.features.user_role.inc
 */

/**
 * Implements hook_user_default_roles().
 */
function projects_content_types_user_default_roles() {
  $roles = array();

  // Exported role: Project Content Editor.
  $roles['Project Content Editor'] = array(
    'name' => 'Project Content Editor',
    'weight' => 3,
  );

  // Exported role: Project Team.
  $roles['Project Team'] = array(
    'name' => 'Project Team',
    'weight' => 4,
  );

  return $roles;
}
