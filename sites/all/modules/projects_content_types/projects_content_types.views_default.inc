<?php
/**
 * @file
 * projects_content_types.views_default.inc
 */

/**
 * Implements hook_views_default_views().
 */
function projects_content_types_views_default_views() {
  $export = array();

  $view = new view();
  $view->name = 'project_status';
  $view->description = '';
  $view->tag = 'default';
  $view->base_table = 'node';
  $view->human_name = 'Project Status';
  $view->core = 7;
  $view->api_version = '3.0';
  $view->disabled = FALSE; /* Edit this to true to make a default view disabled initially */

  /* Display: Master */
  $handler = $view->new_display('default', 'Master', 'default');
  $handler->display->display_options['use_more_always'] = FALSE;
  $handler->display->display_options['access']['type'] = 'perm';
  $handler->display->display_options['cache']['type'] = 'none';
  $handler->display->display_options['query']['type'] = 'views_query';
  $handler->display->display_options['exposed_form']['type'] = 'basic';
  $handler->display->display_options['pager']['type'] = 'some';
  $handler->display->display_options['pager']['options']['items_per_page'] = '5';
  $handler->display->display_options['style_plugin'] = 'default';
  $handler->display->display_options['row_plugin'] = 'fields';
  /* Field: Content: has asterisk? */
  $handler->display->display_options['fields']['field_has_asterisk_res']['id'] = 'field_has_asterisk_res';
  $handler->display->display_options['fields']['field_has_asterisk_res']['table'] = 'field_data_field_has_asterisk_res';
  $handler->display->display_options['fields']['field_has_asterisk_res']['field'] = 'field_has_asterisk_res';
  $handler->display->display_options['fields']['field_has_asterisk_res']['exclude'] = TRUE;
  /* Field: Content: has asterisk? */
  $handler->display->display_options['fields']['field_has_asterisk_sched']['id'] = 'field_has_asterisk_sched';
  $handler->display->display_options['fields']['field_has_asterisk_sched']['table'] = 'field_data_field_has_asterisk_sched';
  $handler->display->display_options['fields']['field_has_asterisk_sched']['field'] = 'field_has_asterisk_sched';
  $handler->display->display_options['fields']['field_has_asterisk_sched']['exclude'] = TRUE;
  /* Field: Content: has asterisk? */
  $handler->display->display_options['fields']['field_has_asterisk_iss']['id'] = 'field_has_asterisk_iss';
  $handler->display->display_options['fields']['field_has_asterisk_iss']['table'] = 'field_data_field_has_asterisk_iss';
  $handler->display->display_options['fields']['field_has_asterisk_iss']['field'] = 'field_has_asterisk_iss';
  $handler->display->display_options['fields']['field_has_asterisk_iss']['exclude'] = TRUE;
  /* Field: Content: has asterisk? */
  $handler->display->display_options['fields']['field_has_asterisk_']['id'] = 'field_has_asterisk_';
  $handler->display->display_options['fields']['field_has_asterisk_']['table'] = 'field_data_field_has_asterisk_';
  $handler->display->display_options['fields']['field_has_asterisk_']['field'] = 'field_has_asterisk_';
  $handler->display->display_options['fields']['field_has_asterisk_']['exclude'] = TRUE;
  /* Field: Content: has asterisk? */
  $handler->display->display_options['fields']['field_has_asterisk_scope']['id'] = 'field_has_asterisk_scope';
  $handler->display->display_options['fields']['field_has_asterisk_scope']['table'] = 'field_data_field_has_asterisk_scope';
  $handler->display->display_options['fields']['field_has_asterisk_scope']['field'] = 'field_has_asterisk_scope';
  $handler->display->display_options['fields']['field_has_asterisk_scope']['exclude'] = TRUE;
  /* Field: Content: field_status_image */
  $handler->display->display_options['fields']['field_field_status_image']['id'] = 'field_field_status_image';
  $handler->display->display_options['fields']['field_field_status_image']['table'] = 'field_data_field_field_status_image';
  $handler->display->display_options['fields']['field_field_status_image']['field'] = 'field_field_status_image';
  $handler->display->display_options['fields']['field_field_status_image']['label'] = '';
  $handler->display->display_options['fields']['field_field_status_image']['element_label_colon'] = FALSE;
  $handler->display->display_options['fields']['field_field_status_image']['click_sort_column'] = 'fid';
  $handler->display->display_options['fields']['field_field_status_image']['settings'] = array(
    'image_style' => '',
    'image_link' => '',
  );
  /* Field: Content: Title */
  $handler->display->display_options['fields']['title_1']['id'] = 'title_1';
  $handler->display->display_options['fields']['title_1']['table'] = 'node';
  $handler->display->display_options['fields']['title_1']['field'] = 'title';
  $handler->display->display_options['fields']['title_1']['label'] = '';
  $handler->display->display_options['fields']['title_1']['element_type'] = 'h3';
  $handler->display->display_options['fields']['title_1']['element_label_colon'] = FALSE;
  $handler->display->display_options['fields']['title_1']['link_to_node'] = FALSE;
  /* Field: Content: Overall */
  $handler->display->display_options['fields']['field_overall']['id'] = 'field_overall';
  $handler->display->display_options['fields']['field_overall']['table'] = 'field_data_field_overall';
  $handler->display->display_options['fields']['field_overall']['field'] = 'field_overall';
  $handler->display->display_options['fields']['field_overall']['label'] = '';
  $handler->display->display_options['fields']['field_overall']['alter']['alter_text'] = TRUE;
  $handler->display->display_options['fields']['field_overall']['alter']['text'] = '<strong>Overall:</strong> <span class="[field_overall]">[field_overall]</span> [field_has_asterisk_]';
  $handler->display->display_options['fields']['field_overall']['element_label_colon'] = FALSE;
  /* Field: Content: Scope */
  $handler->display->display_options['fields']['field_scope']['id'] = 'field_scope';
  $handler->display->display_options['fields']['field_scope']['table'] = 'field_data_field_scope';
  $handler->display->display_options['fields']['field_scope']['field'] = 'field_scope';
  $handler->display->display_options['fields']['field_scope']['label'] = '';
  $handler->display->display_options['fields']['field_scope']['alter']['alter_text'] = TRUE;
  $handler->display->display_options['fields']['field_scope']['alter']['text'] = '<strong>Scope:</strong> <span class="[field_scope]">[field_scope]</span> [field_has_asterisk_scope]';
  $handler->display->display_options['fields']['field_scope']['element_label_colon'] = FALSE;
  /* Field: Content: Resources */
  $handler->display->display_options['fields']['field_resources']['id'] = 'field_resources';
  $handler->display->display_options['fields']['field_resources']['table'] = 'field_data_field_resources';
  $handler->display->display_options['fields']['field_resources']['field'] = 'field_resources';
  $handler->display->display_options['fields']['field_resources']['label'] = '';
  $handler->display->display_options['fields']['field_resources']['alter']['alter_text'] = TRUE;
  $handler->display->display_options['fields']['field_resources']['alter']['text'] = '<strong>Resources:</strong> <span class="[field_resources]">[field_resources]</span> [field_has_asterisk_res]';
  $handler->display->display_options['fields']['field_resources']['element_label_colon'] = FALSE;
  /* Field: Content: Schedule */
  $handler->display->display_options['fields']['field_schedule']['id'] = 'field_schedule';
  $handler->display->display_options['fields']['field_schedule']['table'] = 'field_data_field_schedule';
  $handler->display->display_options['fields']['field_schedule']['field'] = 'field_schedule';
  $handler->display->display_options['fields']['field_schedule']['label'] = '';
  $handler->display->display_options['fields']['field_schedule']['alter']['alter_text'] = TRUE;
  $handler->display->display_options['fields']['field_schedule']['alter']['text'] = '<strong>Schedule:</strong> <span class="[field_schedule]">[field_schedule]</span> [field_has_asterisk_res]';
  $handler->display->display_options['fields']['field_schedule']['element_label_colon'] = FALSE;
  /* Field: Content: Issues */
  $handler->display->display_options['fields']['field_issues']['id'] = 'field_issues';
  $handler->display->display_options['fields']['field_issues']['table'] = 'field_data_field_issues';
  $handler->display->display_options['fields']['field_issues']['field'] = 'field_issues';
  $handler->display->display_options['fields']['field_issues']['label'] = '';
  $handler->display->display_options['fields']['field_issues']['alter']['alter_text'] = TRUE;
  $handler->display->display_options['fields']['field_issues']['alter']['text'] = '<strong>Issues:</strong> <span class="[field_issues]">[field_issues]</span> [field_has_asterisk_iss]';
  $handler->display->display_options['fields']['field_issues']['element_label_colon'] = FALSE;
  /* Field: Content: Asterisk Text */
  $handler->display->display_options['fields']['field_asterisk_text']['id'] = 'field_asterisk_text';
  $handler->display->display_options['fields']['field_asterisk_text']['table'] = 'field_data_field_asterisk_text';
  $handler->display->display_options['fields']['field_asterisk_text']['field'] = 'field_asterisk_text';
  $handler->display->display_options['fields']['field_asterisk_text']['label'] = '';
  $handler->display->display_options['fields']['field_asterisk_text']['element_label_colon'] = FALSE;
  /* Field: Content: Project Links */
  $handler->display->display_options['fields']['field_project_links']['id'] = 'field_project_links';
  $handler->display->display_options['fields']['field_project_links']['table'] = 'field_data_field_project_links';
  $handler->display->display_options['fields']['field_project_links']['field'] = 'field_project_links';
  $handler->display->display_options['fields']['field_project_links']['label'] = '';
  $handler->display->display_options['fields']['field_project_links']['alter']['alter_text'] = TRUE;
  $handler->display->display_options['fields']['field_project_links']['alter']['text'] = '<h3>Project Links</h3> [field_project_links]';
  $handler->display->display_options['fields']['field_project_links']['element_label_colon'] = FALSE;
  /* Sort criterion: Content: Post date */
  $handler->display->display_options['sorts']['created']['id'] = 'created';
  $handler->display->display_options['sorts']['created']['table'] = 'node';
  $handler->display->display_options['sorts']['created']['field'] = 'created';
  $handler->display->display_options['sorts']['created']['order'] = 'DESC';
  /* Filter criterion: Content: Published */
  $handler->display->display_options['filters']['status']['id'] = 'status';
  $handler->display->display_options['filters']['status']['table'] = 'node';
  $handler->display->display_options['filters']['status']['field'] = 'status';
  $handler->display->display_options['filters']['status']['value'] = 1;
  $handler->display->display_options['filters']['status']['group'] = 1;
  $handler->display->display_options['filters']['status']['expose']['operator'] = FALSE;
  /* Filter criterion: Content: Type */
  $handler->display->display_options['filters']['type']['id'] = 'type';
  $handler->display->display_options['filters']['type']['table'] = 'node';
  $handler->display->display_options['filters']['type']['field'] = 'type';
  $handler->display->display_options['filters']['type']['value'] = array(
    'project_status_info' => 'project_status_info',
  );

  /* Display: Block */
  $handler = $view->new_display('block', 'Block', 'block');
  $export['project_status'] = $view;

  $view = new view();
  $view->name = 'project_updates';
  $view->description = '';
  $view->tag = 'default';
  $view->base_table = 'node';
  $view->human_name = 'Project Updates';
  $view->core = 7;
  $view->api_version = '3.0';
  $view->disabled = FALSE; /* Edit this to true to make a default view disabled initially */

  /* Display: Master */
  $handler = $view->new_display('default', 'Master', 'default');
  $handler->display->display_options['title'] = 'Project Updates';
  $handler->display->display_options['use_more'] = TRUE;
  $handler->display->display_options['use_more_always'] = FALSE;
  $handler->display->display_options['use_more_text'] = 'Read More Updates...';
  $handler->display->display_options['access']['type'] = 'perm';
  $handler->display->display_options['cache']['type'] = 'none';
  $handler->display->display_options['query']['type'] = 'views_query';
  $handler->display->display_options['exposed_form']['type'] = 'basic';
  $handler->display->display_options['pager']['type'] = 'some';
  $handler->display->display_options['pager']['options']['offset'] = '0';
  $handler->display->display_options['style_plugin'] = 'default';
  $handler->display->display_options['row_plugin'] = 'node';
  /* Header: Global: Text area */
  $handler->display->display_options['header']['area']['id'] = 'area';
  $handler->display->display_options['header']['area']['table'] = 'views';
  $handler->display->display_options['header']['area']['field'] = 'area';
  /* Footer: Global: Text area */
  $handler->display->display_options['footer']['area']['id'] = 'area';
  $handler->display->display_options['footer']['area']['table'] = 'views';
  $handler->display->display_options['footer']['area']['field'] = 'area';
  /* No results behavior: Global: Text area */
  $handler->display->display_options['empty']['area']['id'] = 'area';
  $handler->display->display_options['empty']['area']['table'] = 'views';
  $handler->display->display_options['empty']['area']['field'] = 'area';
  $handler->display->display_options['empty']['area']['empty'] = TRUE;
  $handler->display->display_options['empty']['area']['content'] = '<p><em>There are currently no updates. Please stay tuned.</em></p>';
  $handler->display->display_options['empty']['area']['format'] = 'filtered_html';
  /* Field: Content: Title */
  $handler->display->display_options['fields']['title']['id'] = 'title';
  $handler->display->display_options['fields']['title']['table'] = 'node';
  $handler->display->display_options['fields']['title']['field'] = 'title';
  $handler->display->display_options['fields']['title']['label'] = '';
  $handler->display->display_options['fields']['title']['alter']['word_boundary'] = FALSE;
  $handler->display->display_options['fields']['title']['alter']['ellipsis'] = FALSE;
  $handler->display->display_options['fields']['title']['element_type'] = 'strong';
  $handler->display->display_options['fields']['title']['element_label_colon'] = FALSE;
  /* Field: Content: Post date */
  $handler->display->display_options['fields']['created']['id'] = 'created';
  $handler->display->display_options['fields']['created']['table'] = 'node';
  $handler->display->display_options['fields']['created']['field'] = 'created';
  $handler->display->display_options['fields']['created']['label'] = '';
  $handler->display->display_options['fields']['created']['element_type'] = 'em';
  $handler->display->display_options['fields']['created']['element_label_colon'] = FALSE;
  $handler->display->display_options['fields']['created']['date_format'] = 'short';
  $handler->display->display_options['fields']['created']['second_date_format'] = 'long';
  /* Field: Content: Body */
  $handler->display->display_options['fields']['body']['id'] = 'body';
  $handler->display->display_options['fields']['body']['table'] = 'field_data_body';
  $handler->display->display_options['fields']['body']['field'] = 'body';
  /* Sort criterion: Content: Post date */
  $handler->display->display_options['sorts']['created']['id'] = 'created';
  $handler->display->display_options['sorts']['created']['table'] = 'node';
  $handler->display->display_options['sorts']['created']['field'] = 'created';
  $handler->display->display_options['sorts']['created']['order'] = 'DESC';
  /* Filter criterion: Content: Published */
  $handler->display->display_options['filters']['status']['id'] = 'status';
  $handler->display->display_options['filters']['status']['table'] = 'node';
  $handler->display->display_options['filters']['status']['field'] = 'status';
  $handler->display->display_options['filters']['status']['value'] = 1;
  $handler->display->display_options['filters']['status']['group'] = 1;
  $handler->display->display_options['filters']['status']['expose']['operator'] = FALSE;
  /* Filter criterion: Content: Type */
  $handler->display->display_options['filters']['type']['id'] = 'type';
  $handler->display->display_options['filters']['type']['table'] = 'node';
  $handler->display->display_options['filters']['type']['field'] = 'type';
  $handler->display->display_options['filters']['type']['value'] = array(
    'article' => 'article',
  );

  /* Display: Page */
  $handler = $view->new_display('page', 'Page', 'page');
  $handler->display->display_options['defaults']['use_more'] = FALSE;
  $handler->display->display_options['defaults']['use_more_always'] = FALSE;
  $handler->display->display_options['defaults']['use_more_always'] = FALSE;
  $handler->display->display_options['use_more_always'] = FALSE;
  $handler->display->display_options['defaults']['use_more_text'] = FALSE;
  $handler->display->display_options['use_more_text'] = 'Read More Updates...';
  $handler->display->display_options['defaults']['pager'] = FALSE;
  $handler->display->display_options['pager']['type'] = 'none';
  $handler->display->display_options['pager']['options']['offset'] = '0';
  $handler->display->display_options['defaults']['style_plugin'] = FALSE;
  $handler->display->display_options['style_plugin'] = 'list';
  $handler->display->display_options['defaults']['style_options'] = FALSE;
  $handler->display->display_options['defaults']['row_plugin'] = FALSE;
  $handler->display->display_options['row_plugin'] = 'fields';
  $handler->display->display_options['row_options']['hide_empty'] = TRUE;
  $handler->display->display_options['defaults']['row_options'] = FALSE;
  $handler->display->display_options['defaults']['header'] = FALSE;
  /* Header: Global: Text area */
  $handler->display->display_options['header']['area']['id'] = 'area';
  $handler->display->display_options['header']['area']['table'] = 'views';
  $handler->display->display_options['header']['area']['field'] = 'area';
  $handler->display->display_options['header']['area']['content'] = '
<em>Join the <a href="https://mcommunity.umich.edu/#group:MFA%20Project%20Updates">mfa-project-updates</a> group to receive monthly updates and other project information via email.</em>
<br/>';
  $handler->display->display_options['header']['area']['format'] = 'full_html';
  $handler->display->display_options['defaults']['footer'] = FALSE;
  $handler->display->display_options['defaults']['fields'] = FALSE;
  /* Field: Content: Title */
  $handler->display->display_options['fields']['title']['id'] = 'title';
  $handler->display->display_options['fields']['title']['table'] = 'node';
  $handler->display->display_options['fields']['title']['field'] = 'title';
  $handler->display->display_options['fields']['title']['label'] = '';
  $handler->display->display_options['fields']['title']['alter']['word_boundary'] = FALSE;
  $handler->display->display_options['fields']['title']['alter']['ellipsis'] = FALSE;
  $handler->display->display_options['fields']['title']['element_type'] = 'h2';
  $handler->display->display_options['fields']['title']['element_label_colon'] = FALSE;
  /* Field: Content: Post date */
  $handler->display->display_options['fields']['created']['id'] = 'created';
  $handler->display->display_options['fields']['created']['table'] = 'node';
  $handler->display->display_options['fields']['created']['field'] = 'created';
  $handler->display->display_options['fields']['created']['label'] = '';
  $handler->display->display_options['fields']['created']['element_type'] = 'em';
  $handler->display->display_options['fields']['created']['element_label_colon'] = FALSE;
  $handler->display->display_options['fields']['created']['date_format'] = 'short';
  $handler->display->display_options['fields']['created']['second_date_format'] = 'long';
  /* Field: Content: Body */
  $handler->display->display_options['fields']['body']['id'] = 'body';
  $handler->display->display_options['fields']['body']['table'] = 'field_data_body';
  $handler->display->display_options['fields']['body']['field'] = 'body';
  $handler->display->display_options['fields']['body']['label'] = '';
  $handler->display->display_options['fields']['body']['element_label_colon'] = FALSE;
  $handler->display->display_options['path'] = 'project-updates';

  /* Display: Feed */
  $handler = $view->new_display('feed', 'Feed', 'feed');
  $handler->display->display_options['pager']['type'] = 'some';
  $handler->display->display_options['style_plugin'] = 'rss';
  $handler->display->display_options['row_plugin'] = 'node_rss';
  $handler->display->display_options['path'] = 'project-updates.xml';
  $handler->display->display_options['displays'] = array(
    'default' => 'default',
    'page' => 'page',
    'block' => 'block',
  );

  /* Display: Block */
  $handler = $view->new_display('block', 'Block', 'block');
  $handler->display->display_options['defaults']['pager'] = FALSE;
  $handler->display->display_options['pager']['type'] = 'some';
  $handler->display->display_options['pager']['options']['items_per_page'] = '3';
  $handler->display->display_options['pager']['options']['offset'] = '0';
  $handler->display->display_options['defaults']['style_plugin'] = FALSE;
  $handler->display->display_options['style_plugin'] = 'list';
  $handler->display->display_options['defaults']['style_options'] = FALSE;
  $handler->display->display_options['defaults']['row_plugin'] = FALSE;
  $handler->display->display_options['row_plugin'] = 'fields';
  $handler->display->display_options['defaults']['row_options'] = FALSE;
  $handler->display->display_options['defaults']['header'] = FALSE;
  /* Header: Global: Text area */
  $handler->display->display_options['header']['area']['id'] = 'area';
  $handler->display->display_options['header']['area']['table'] = 'views';
  $handler->display->display_options['header']['area']['field'] = 'area';
  $handler->display->display_options['header']['area']['content'] = '<em>Join the <a href="https://mcommunity.umich.edu/#group:MFA%20Project%20Updates">mfa-project-updates</a> group to receive monthly updates and other project information via email.</em>
<br/>';
  $handler->display->display_options['header']['area']['format'] = 'filtered_html';
  $handler->display->display_options['defaults']['footer'] = FALSE;
  /* Footer: Global: Text area */
  $handler->display->display_options['footer']['area']['id'] = 'area';
  $handler->display->display_options['footer']['area']['table'] = 'views';
  $handler->display->display_options['footer']['area']['field'] = 'area';
  $handler->display->display_options['footer']['area']['format'] = 'full_html';
  $handler->display->display_options['defaults']['fields'] = FALSE;
  /* Field: Content: Title */
  $handler->display->display_options['fields']['title']['id'] = 'title';
  $handler->display->display_options['fields']['title']['table'] = 'node';
  $handler->display->display_options['fields']['title']['field'] = 'title';
  $handler->display->display_options['fields']['title']['label'] = '';
  $handler->display->display_options['fields']['title']['alter']['word_boundary'] = FALSE;
  $handler->display->display_options['fields']['title']['alter']['ellipsis'] = FALSE;
  $handler->display->display_options['fields']['title']['element_type'] = 'strong';
  $handler->display->display_options['fields']['title']['element_label_colon'] = FALSE;
  /* Field: Content: Post date */
  $handler->display->display_options['fields']['created']['id'] = 'created';
  $handler->display->display_options['fields']['created']['table'] = 'node';
  $handler->display->display_options['fields']['created']['field'] = 'created';
  $handler->display->display_options['fields']['created']['label'] = '';
  $handler->display->display_options['fields']['created']['element_type'] = 'em';
  $handler->display->display_options['fields']['created']['element_label_colon'] = FALSE;
  $handler->display->display_options['fields']['created']['date_format'] = 'short';
  $handler->display->display_options['fields']['created']['second_date_format'] = 'long';
  /* Field: Content: Body */
  $handler->display->display_options['fields']['body']['id'] = 'body';
  $handler->display->display_options['fields']['body']['table'] = 'field_data_body';
  $handler->display->display_options['fields']['body']['field'] = 'body';
  $handler->display->display_options['fields']['body']['label'] = '';
  $handler->display->display_options['fields']['body']['alter']['max_length'] = '150';
  $handler->display->display_options['fields']['body']['alter']['trim'] = TRUE;
  $handler->display->display_options['fields']['body']['element_label_colon'] = FALSE;
  $handler->display->display_options['fields']['body']['settings'] = array(
    'trim_length' => '200',
  );
  $handler->display->display_options['block_description'] = 'Project Updates';
  $export['project_updates'] = $view;

  return $export;
}
