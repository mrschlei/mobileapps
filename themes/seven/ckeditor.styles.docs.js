/*
Copyright (c) 2003-2011, CKSource - Frederico Knabben. All rights reserved.
For licensing, see LICENSE.html or http://ckeditor.com/license
*/

/*
 * This file is used/requested by the 'Styles' button.
 * The 'Styles' button is not enabled by default in DrupalFull and DrupalFiltered toolbars.
 */
if(typeof(CKEDITOR) !== 'undefined') {
    CKEDITOR.stylesSet.add( 'drupal',
    [
			{ name: 'Danger', element: 'div', attributes: {'class': 'alert alert-danger'} },
			{ name: 'Warning', element: 'div', attributes: {'class': 'alert alert-warning'} },
			{ name: 'Note', element: 'div', attributes: {'class': 'alert alert-info'} },
			{ name: 'Keyboard input (kbd)', element: 'kbd', attributes: {'class': ''} },
		{ name : 'No-wrap Text', element : 'span', attributes : { 'class' : 'nobr' } },
		{ name: 'Button - Default', element: 'button', attributes: {'class': 'btn btn-default'} },
		{ name: 'Button - Primary', element: 'button', attributes: {'class': 'btn btn-primary'} },
		{ name: 'Button - Success', element: 'button', attributes: {'class': 'btn btn-success'} },
		{ name: 'Button - Info', element: 'button', attributes: {'class': 'btn btn-info'} },
		{ name: 'Button - Warning', element: 'button', attributes: {'class': 'btn btn-warning'} },
		{ name: 'Button - Danger', element: 'button', attributes: {'class': 'btn btn-danger'} },
		
		{ name: 'Label - Default', element: 'span', attributes: {'class': 'label label-default'} },
		{ name: 'Label - Primary', element: 'span', attributes: {'class': 'label label-primary'} },
		{ name: 'Label - Success', element: 'span', attributes: {'class': 'label label-success'} },
		{ name: 'Label - Info', element: 'span', attributes: {'class': 'label label-info'} },
		{ name: 'Label - Warning', element: 'span', attributes: {'class': 'label label-warning'} },
		{ name: 'Label - Danger', element: 'span', attributes: {'class': 'label label-danger'} },
    ]);
}