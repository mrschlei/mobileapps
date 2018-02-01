<?php
/**
 * @file
 * Contains theme override functions and preprocess functions for the theme.
 *
 * ABOUT THE TEMPLATE.PHP FILE
 *
 *   The template.php file is one of the most useful files when creating or
 *   modifying Drupal themes. You can modify or override Drupal's theme
 *   functions, intercept or make additional variables available to your theme,
 *   and create custom PHP logic. For more information, please visit the Theme
 *   Developer's Guide on Drupal.org: http://drupal.org/theme-guide
 *
 * OVERRIDING THEME FUNCTIONS
 *
 *   The Drupal theme system uses special theme functions to generate HTML
 *   output automatically. Often we wish to customize this HTML output. To do
 *   this, we have to override the theme function. You have to first find the
 *   theme function that generates the output, and then "catch" it and modify it
 *   here. The easiest way to do it is to copy the original function in its
 *   entirety and paste it here, changing the prefix from theme_ to umzen_.
 *   For example:
 *
 *     original: theme_breadcrumb()
 *     theme override: umzen_breadcrumb()
 *
 *   where STARTERKIT is the name of your sub-theme. For example, the
 *   zen_classic theme would define a zen_classic_breadcrumb() function.
 *
 *   If you would like to override either of the two theme functions used in Zen
 *   core, you should first look at how Zen core implements those functions:
 *     theme_breadcrumbs()      in zen/template.php
 *     theme_menu_local_tasks() in zen/template.php
 *
 *   For more information, please visit the Theme Developer's Guide on
 *   Drupal.org: http://drupal.org/node/173880
 *
 * CREATE OR MODIFY VARIABLES FOR YOUR THEME
 *
 *   Each tpl.php template file has several variables which hold various pieces
 *   of content. You can modify those variables (or add new ones) before they
 *   are used in the template files by using preprocess functions.
 *
 *   This makes THEME_preprocess_HOOK() functions the most powerful functions
 *   available to themers.
 *
 *   It works by having one preprocess function for each template file or its
 *   derivatives (called template suggestions). For example:
 *     THEME_preprocess_page    alters the variables for page.tpl.php
 *     THEME_preprocess_node    alters the variables for node.tpl.php or
 *                              for node-forum.tpl.php
 *     THEME_preprocess_comment alters the variables for comment.tpl.php
 *     THEME_preprocess_block   alters the variables for block.tpl.php
 *
 *   For more information on preprocess functions and template suggestions,
 *   please visit the Theme Developer's Guide on Drupal.org:
 *   http://drupal.org/node/223440
 *   and http://drupal.org/node/190815#template-suggestions
 */


/**
 * Override or insert variables into the html templates.
 *
 * @param $variables
 *   An array of variables to pass to the theme template.
 * @param $hook
 *   The name of the template being rendered ("html" in this case.)
 */
/* -- Delete this line if you want to use this function
function umzen_preprocess_html(&$variables, $hook) {
  $variables['sample_variable'] = t('Lorem ipsum.');

  // The body tag's classes are controlled by the $classes_array variable. To
  // remove a class from $classes_array, use array_diff().
  //$variables['classes_array'] = array_diff($variables['classes_array'], array('class-to-remove'));
}
// */


function umzen_preprocess_html(&$variables, $hook) {
	if (arg(0) == 'node' && is_numeric(arg(1))) {
		$nodeid = arg(1);
		$nodec = node_load($nodeid);
		$nodetype = $nodec->type;
	}
	else {$nodetype = "";}
	
	
	//added by mrschlei 4/23 - custom styles for he devtoolkit and weird front page
	if ((strpos($_SERVER["REQUEST_URI"],'devtoolkit') == true) || (strpos($_SERVER["REQUEST_URI"],'forum') == true) || ($nodetype == 'forum')) {
		drupal_add_css(path_to_theme() . '/css/umzen.css', array('group' => CSS_THEME, 'weight' => 115, 'browsers' => array('IE' => TRUE, '!IE' => TRUE), 'preprocess' => FALSE));
	}

	if (drupal_is_front_page()) {
		drupal_add_css(path_to_theme() . '/css/umzen-front.css', array('group' => CSS_THEME, 'weight' => 115, 'browsers' => array('IE' => TRUE, '!IE' => TRUE), 'preprocess' => FALSE));
	}
}


//added 5/2/12 - moves help text directly under field labels
//http://drupal.org/node/1347866
//removed 6/5/12 - the code killed the forum




/**
 * Override or insert variables into the page templates.
 *
 * @param $variables
 *   An array of variables to pass to the theme template.
 * @param $hook
 *   The name of the template being rendered ("page" in this case.)
 */
/* -- Delete this line if you want to use this function
function umzen_preprocess_page(&$variables, $hook) {
  $variables['sample_variable'] = t('Lorem ipsum.');
}
// */

/**
 * Override or insert variables into the node templates.
 *
 * @param $variables
 *   An array of variables to pass to the theme template.
 * @param $hook
 *   The name of the template being rendered ("node" in this case.)
 */
/* -- Delete this line if you want to use this function
function umzen_preprocess_node(&$variables, $hook) {
  $variables['sample_variable'] = t('Lorem ipsum.');

  // Optionally, run node-type-specific preprocess functions, like
  // umzen_preprocess_node_page() or umzen_preprocess_node_story().
  $function = __FUNCTION__ . '_' . $variables['node']->type;
  if (function_exists($function)) {
    $function($variables, $hook);
  }
}
// */

/**
 * Override or insert variables into the comment templates.
 *
 * @param $variables
 *   An array of variables to pass to the theme template.
 * @param $hook
 *   The name of the template being rendered ("comment" in this case.)
 */
/* -- Delete this line if you want to use this function
function umzen_preprocess_comment(&$variables, $hook) {
  $variables['sample_variable'] = t('Lorem ipsum.');
}
// */

/**
 * Override or insert variables into the block templates.
 *
 * @param $variables
 *   An array of variables to pass to the theme template.
 * @param $hook
 *   The name of the template being rendered ("block" in this case.)
 */
/* -- Delete this line if you want to use this function
function umzen_preprocess_block(&$variables, $hook) {
  // Add a count to all the blocks in the region.
  $variables['classes_array'][] = 'count-' . $variables['block_id'];
}
// */


/**
* Replacement for theme_webform_element() to enable descriptions to come BEFORE the field to be filled out.
*/
function umzen_form_element($variables) {
  $element = $variables['element'];
  $value = $variables['element']['#children'];

  $wrapper_classes = array(
    'form-item',
  );
  $output = '<div class="' . implode(' ', $wrapper_classes) . '" id="' . $element['#id'] . '-wrapper">' . "\n";
  $required = !empty($element['#required']) ? '<span class="form-required" title="' . t('This field is required.') . '">*</span>' : '';

  if (!empty($element['#title'])) {
    $title = $element['#title'];
    $output .= ' <label for="' . $element['#id'] . '">' . t('!title: !required', array('!title' => filter_xss_admin($title), '!required' => $required)) . "</label>\n";
  }

  if (!empty($element['#description'])) {
    $output .= ' <div class="description">' . $element['#description'] . "</div>\n";
  }

  $output .= '<div id="' . $element['#id'] . '">' . $value . '</div>' . "\n";

  $output .= "</div>\n";

  return $output;
}


function umzen_theme($existing, $type, $theme, $path){
  $hooks['user_register_form']=array(
    'render element'=>'form',
    'template' =>'templates/user-register',
  );
return $hooks;
}

function umzen_preprocess_user_register(&$variables) {
  $variables['form'] = drupal_build_form('user_register_form', user_register_form(array()));
}