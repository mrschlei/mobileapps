<?php
/**
 * @file views-view-row-rss.tpl.php
 * Default view template to display a item in an RSS feed.
 *
 * @ingroup views_templates
 
 * 7/27 - removed link code from under title:
 * <title><?php print $title; ?></title>
 * <link><?php print $link; ?></link>
 */
?>
  <item>
    <title><?php print $title; ?></title>
    <link><?php //print $link; ?></link>
    <description><?php //$description = html_entity_decode($description);
	//$description = str_replace('"',"'",$description); 
	print $description; ?></description>
    <?php print $item_elements; ?>
  </item>
