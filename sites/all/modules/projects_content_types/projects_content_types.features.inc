<?php
/**
 * @file
 * projects_content_types.features.inc
 */

/**
 * Implements hook_views_api().
 */
function projects_content_types_views_api($module = NULL, $api = NULL) {
  return array("api" => "3.0");
}

/**
 * Implements hook_node_info().
 */
function projects_content_types_node_info() {
  $items = array(
    'graphics_upload' => array(
      'name' => t('Graphics Upload'),
      'base' => 'node_content',
      'description' => '',
      'has_title' => '1',
      'title_label' => t('Name of Graphic'),
      'help' => '',
    ),
    'project_issue' => array(
      'name' => t('Project Issue'),
      'base' => 'node_content',
      'description' => '',
      'has_title' => '1',
      'title_label' => t('Issue Short Description'),
      'help' => '',
    ),
    'project_risk' => array(
      'name' => t('Project Risk'),
      'base' => 'node_content',
      'description' => '',
      'has_title' => '1',
      'title_label' => t('Short Description'),
      'help' => '',
    ),
    'project_status_info' => array(
      'name' => t('Project Status Info'),
      'base' => 'node_content',
      'description' => '',
      'has_title' => '1',
      'title_label' => t('Title'),
      'help' => '',
    ),
  );
  drupal_alter('node_info', $items);
  return $items;
}
