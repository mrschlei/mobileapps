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

            { name : 'Heading 2', element : 'h2', styles : { 'font-size' : '140%', 'color' : '#336699' } },
            { name : 'Heading 3', element : 'h3', styles : { 'font-size' : '120%', 'color' : '#003366' } },
            { name : 'Heading 4', element : 'h4', styles : { 'font-size' : '100%' } },

            { name : 'Computer Code', element : 'code', styles : { 'font-size' : '90%' } },            
            { name : 'No-Wrap Text', element : 'nobr', styles : { 'white-space' : 'nowrap' } }

    ]);
}