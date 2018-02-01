<?php
/**
 * @file
 * projects_content_types.features.user_permission.inc
 */

/**
 * Implements hook_user_default_permissions().
 */
function projects_content_types_user_default_permissions() {
  $permissions = array();

  // Exported permission: 'create project_issue content'.
  $permissions['create project_issue content'] = array(
    'name' => 'create project_issue content',
    'roles' => array(
      'administrator' => 'administrator',
    ),
    'module' => 'node',
  );

  // Exported permission: 'create project_risk content'.
  $permissions['create project_risk content'] = array(
    'name' => 'create project_risk content',
    'roles' => array(
      'administrator' => 'administrator',
    ),
    'module' => 'node',
  );

  // Exported permission: 'create project_status_info content'.
  $permissions['create project_status_info content'] = array(
    'name' => 'create project_status_info content',
    'roles' => array(
      'administrator' => 'administrator',
    ),
    'module' => 'node',
  );

  // Exported permission: 'delete any project_issue content'.
  $permissions['delete any project_issue content'] = array(
    'name' => 'delete any project_issue content',
    'roles' => array(
      'administrator' => 'administrator',
    ),
    'module' => 'node',
  );

  // Exported permission: 'delete any project_risk content'.
  $permissions['delete any project_risk content'] = array(
    'name' => 'delete any project_risk content',
    'roles' => array(
      'administrator' => 'administrator',
    ),
    'module' => 'node',
  );

  // Exported permission: 'delete any project_status_info content'.
  $permissions['delete any project_status_info content'] = array(
    'name' => 'delete any project_status_info content',
    'roles' => array(
      'administrator' => 'administrator',
    ),
    'module' => 'node',
  );

  // Exported permission: 'delete own project_issue content'.
  $permissions['delete own project_issue content'] = array(
    'name' => 'delete own project_issue content',
    'roles' => array(
      'administrator' => 'administrator',
    ),
    'module' => 'node',
  );

  // Exported permission: 'delete own project_risk content'.
  $permissions['delete own project_risk content'] = array(
    'name' => 'delete own project_risk content',
    'roles' => array(
      'administrator' => 'administrator',
    ),
    'module' => 'node',
  );

  // Exported permission: 'delete own project_status_info content'.
  $permissions['delete own project_status_info content'] = array(
    'name' => 'delete own project_status_info content',
    'roles' => array(
      'administrator' => 'administrator',
    ),
    'module' => 'node',
  );

  // Exported permission: 'edit any project_issue content'.
  $permissions['edit any project_issue content'] = array(
    'name' => 'edit any project_issue content',
    'roles' => array(
      'administrator' => 'administrator',
    ),
    'module' => 'node',
  );

  // Exported permission: 'edit any project_risk content'.
  $permissions['edit any project_risk content'] = array(
    'name' => 'edit any project_risk content',
    'roles' => array(
      'administrator' => 'administrator',
    ),
    'module' => 'node',
  );

  // Exported permission: 'edit any project_status_info content'.
  $permissions['edit any project_status_info content'] = array(
    'name' => 'edit any project_status_info content',
    'roles' => array(
      'Project Content Editor' => 'Project Content Editor',
      'administrator' => 'administrator',
    ),
    'module' => 'node',
  );

  // Exported permission: 'edit own project_issue content'.
  $permissions['edit own project_issue content'] = array(
    'name' => 'edit own project_issue content',
    'roles' => array(
      'administrator' => 'administrator',
    ),
    'module' => 'node',
  );

  // Exported permission: 'edit own project_risk content'.
  $permissions['edit own project_risk content'] = array(
    'name' => 'edit own project_risk content',
    'roles' => array(
      'administrator' => 'administrator',
    ),
    'module' => 'node',
  );

  // Exported permission: 'edit own project_status_info content'.
  $permissions['edit own project_status_info content'] = array(
    'name' => 'edit own project_status_info content',
    'roles' => array(
      'Project Content Editor' => 'Project Content Editor',
      'administrator' => 'administrator',
    ),
    'module' => 'node',
  );

  return $permissions;
}
