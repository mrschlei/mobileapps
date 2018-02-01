<?php
/**
 * @file
 * Zen theme's implementation to display a single Drupal page.
 *
 * Available variables:
 *
 * General utility variables:
 * - $base_path: The base URL path of the Drupal installation. At the very
 *   least, this will always default to /.
 * - $directory: The directory the template is located in, e.g. modules/system
 *   or themes/garland.
 * - $is_front: TRUE if the current page is the front page.
 * - $logged_in: TRUE if the user is registered and signed in.
 * - $is_admin: TRUE if the user has permission to access administration pages.
 *
 * Site identity:
 * - $front_page: The URL of the front page. Use this instead of $base_path,
 *   when linking to the front page. This includes the language domain or
 *   prefix.
 * - $logo: The path to the logo image, as defined in theme configuration.
 * - $site_name: The name of the site, empty when display has been disabled
 *   in theme settings.
 * - $site_slogan: The slogan of the site, empty when display has been disabled
 *   in theme settings.
 *
 * Navigation:
 * - $main_menu (array): An array containing the Main menu links for the
 *   site, if they have been configured.
 * - $secondary_menu (array): An array containing the Secondary menu links for
 *   the site, if they have been configured.
 * - $secondary_menu_heading: The title of the menu used by the secondary links.
 * - $breadcrumb: The breadcrumb trail for the current page.
 *
 * Page content (in order of occurrence in the default page.tpl.php):
 * - $title_prefix (array): An array containing additional output populated by
 *   modules, intended to be displayed in front of the main title tag that
 *   appears in the template.
 * - $title: The page title, for use in the actual HTML content.
 * - $title_suffix (array): An array containing additional output populated by
 *   modules, intended to be displayed after the main title tag that appears in
 *   the template.
 * - $messages: HTML for status and error messages. Should be displayed
 *   prominently.
 * - $tabs (array): Tabs linking to any sub-pages beneath the current page
 *   (e.g., the view and edit tabs when displaying a node).
 * - $action_links (array): Actions local to the page, such as 'Add menu' on the
 *   menu administration interface.
 * - $feed_icons: A string of all feed icons for the current page.
 * - $node: The node object, if there is an automatically-loaded node
 *   associated with the page, and the node ID is the second argument
 *   in the page's path (e.g. node/12345 and node/12345/revisions, but not
 *   comment/reply/12345).
 *
 * Regions:
 * - $page['help']: Dynamic help text, mostly for admin pages.
 * - $page['highlighted']: Items for the highlighted content region.
 * - $page['content']: The main content of the current page.
 * - $page['sidebar_first']: Items for the first sidebar.
 * - $page['sidebar_second']: Items for the second sidebar.
 * - $page['header']: Items for the header region.
 * - $page['footer']: Items for the footer region.
 * - $page['bottom']: Items to appear at the bottom of the page below the footer.
 *
 * @see template_preprocess()
 * @see template_preprocess_page()
 * @see zen_preprocess_page()
 * @see template_process()
 */
?>

<div id="page-wrapper"><div id="page">

  <div id="header"><div class="section clearfix">
  
<!--- edited by mrschlei 4/20 --->
<?php

//print_r($user);
if (isset($_SERVER['REMOTE_USER'])) {

$user = user_load_by_name($_SERVER['REMOTE_USER']);

if(user_authenticate($user->name, "test"))
    {
      //$user_obj = user_load_by_name($username);
      $form_state = array();
      $form_state['uid'] = $user->uid;
	    

	  //user_login_name_validate($form, &$form_state);
      user_login_submit(array(), $form_state);
	 // print_r($user->roles);
    }
}




	if (arg(0) == 'node' && is_numeric(arg(1))) {
		$nodeid = arg(1);
		$nodec = node_load($nodeid);
		$nodetype = $nodec->type;
	}
	else {$nodetype = "";}

	 if ((strpos($_SERVER["REQUEST_URI"],'devtoolkit') == false) && (strpos($_SERVER["REQUEST_URI"],'forum') == false) && $logo && ($nodetype != 'forum')): ?>
      <a href="<?php print $front_page; ?>" title="<?php print t('Home'); ?>" rel="home" id="logo"><img src="<?php print $logo; ?>" alt="<?php print t('Home'); ?>" /></a>
    
    <?php else: ?>
	    <a href="/devtoolkit" title="Mobile Developer Toolkit" rel="home" id="logo"><img src="/sites/all/themes/umzen/images/page-banner-devkit.png" alt="Mobile Developer Toolkit" /></a>
      
    <?php endif; ?>

    <?php if ($site_name || $site_slogan): ?>
      <div id="name-and-slogan">
        <?php if ($site_name): ?>
          <?php if ($title): ?>
            <div id="site-name"><strong>
              <a href="<?php print $front_page; ?>" title="<?php print t('Home'); ?>" rel="home"><span><?php print $site_name; ?></span></a>
            </strong></div>
          <?php else: /* Use h1 when the content title is empty */ ?>
            <h1 id="site-name">
              <a href="<?php print $front_page; ?>" title="<?php print t('Home'); ?>" rel="home"><span><?php print $site_name; ?></span></a>
            </h1>
          <?php endif; ?>
        <?php endif; ?>

        <?php if ($site_slogan): ?>
          <div id="site-slogan"><?php print $site_slogan; ?></div>
        <?php endif; ?>
      </div><!-- /#name-and-slogan -->
    <?php endif; ?>

    <?php print theme('links__system_secondary_menu', array(
      'links' => $secondary_menu,
      'attributes' => array(
        'id' => 'secondary-menu',
        'class' => array('links', 'inline', 'clearfix'),
      ),
      'heading' => array(
        'text' => $secondary_menu_heading,
        'level' => 'h2',
        'class' => array('element-invisible'),
      ),
    )); 
	

	?>

    <?php print render($page['header']); ?>

  </div></div><!-- /.section, /#header -->

  <div id="main-wrapper"><div id="main" class="clearfix<?php if ($main_menu || $page['navigation']) { print ' with-navigation'; } ?>">

    <div id="content" class="column">
    
    <div class="section">
    
      <?php print render($page['highlighted']); ?>

<!-- foolishly changing the breadcrumbs due to lack of system knowledge - 4/13/12 -->      
	  <?php 
	  	if (strpos($_SERVER['REQUEST_URI'], "forum")) {
			
			$pieces = explode("/", $_SERVER['REQUEST_URI']);
			$end = end($pieces);
			
			if ($_SERVER['REQUEST_URI'] == "/forum") {
				print "<div class='breadcrumb'><h2 class='element-invisible'>You are here</h2><a href='/devtoolkit'>Mobile Developer Toolkit</a> &gt; Forums</div>";}

			else if ( !empty($node) ) {
				$nid = $node->nid;
				$container = $variables['page']['content']["system_main"]["nodes"][$nid]["body"]["#object"]->taxonomy_forums["und"][0]["taxonomy_term"]->name;
				$containertid = $variables['page']['content']["system_main"]["nodes"][$nid]["body"]["#object"]->taxonomy_forums["und"][0]["tid"];
								
print "<div class='breadcrumb'><h2 class='element-invisible'>You are here</h2><a href='/devtoolkit'>Mobile Developer Toolkit</a> &gt; <a href='/forum'>Forums</a> &gt; <a href='/forum/".$containertid."'>".$container."</a> &gt; ".drupal_get_title()."</div>";					
			}


			else {
		  		print "<div class='breadcrumb'><h2 class='element-invisible'>You are here</h2><a href='/devtoolkit'>Mobile Developer Toolkit</a> &gt; <a href='/forum'>Forums</a> &gt; ".drupal_get_title()."</div>";
			}
      		//else {print $breadcrumb;}
      		}
	  
	 else {
     print $breadcrumb; 
	 } ?>



      <a id="main-content"></a>
      <?php print render($title_prefix); ?>
      <?php if ($title): ?>
<?php
	if (arg(0) == 'node' && is_numeric(arg(1))) {
		$nodeid = arg(1);
		$nodec = node_load($nodeid);
		$imguri = "";
		if (isset($nodec->field_app_logo)){
			$imguri = $nodec->field_app_logo["und"][0]["uri"];
		}
		$nodetype = $nodec->type;
	}
?>      

     	<?php if ($nodetype == "app_record"): ?>
        	<h1 class="title" id="page-title" style="vertical-align:top;margin-top:12px;"><img src="<?php print image_style_url('large', $imguri) ?>" style="margin-right:12px;" /><?php print $title; ?></h1>
      	<?php else: ?>
        	<h1 class="title" id="page-title"><?php print $title; ?></h1>
		<?php endif; ?>
	  <?php endif; ?>
      <?php print render($title_suffix); ?>
      <?php print $messages; ?>
      <?php if ($tabs = render($tabs)): ?>
        <div class="tabs"><?php print $tabs; ?></div>
      <?php endif; ?>
      <?php print render($page['help']); ?>
      <?php if ($action_links): ?>
        <ul class="action-links"><?php print render($action_links); ?></ul>
      <?php endif; ?>
      <?php print render($page['content']); ?>
      <?php print $feed_icons; ?>
      
    </div></div><!-- /.section, /#content -->

    <?php if ($page['navigation'] || $main_menu): ?>
      <div id="navwrap"><div id="navigation"><div class="section clearfix">
     
      <!--added by mrschlei 4/19-->
<?php if (strpos($_SERVER["REQUEST_URI"],'devtoolkit') !== false || strpos($_SERVER["REQUEST_URI"],'forum') !== false): ?>      

     <div id="developers"><a href="/">App Center &#187;</a></div>
	 <?php else: ?>
     <div id="developers"><a href="/devtoolkit/">For Developers &#187;</a></div>          
     
<?php endif; ?>     
     
     
     
        <?php print theme('links__system_main_menu', array(
          'links' => $main_menu,
          'attributes' => array(
            'id' => 'main-menu',
            'class' => array('links', 'inline', 'clearfix'),
          ),
          'heading' => array(
            'text' => t('Main menu'),
            'level' => 'h2',
            'class' => array('element-invisible'),
          ),
        )); ?>

        <?php print render($page['navigation']); ?>

      </div>

      
      </div><!-- /.section, /#navigation -->
      </div> <!-- /navwrap -->
    <?php endif; ?>

    <?php print render($page['sidebar_first']); ?>
    
    <?php print render($page['sidebar_second']); ?>

  </div></div><!-- /#main, /#main-wrapper -->

  <?php print render($page['footer']); ?>

</div></div><!-- /#page, /#page-wrapper -->

<?php print render($page['bottom']); ?>
