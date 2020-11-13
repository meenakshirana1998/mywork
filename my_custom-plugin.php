<?php
/**
*Plugin Name: My Custom Plugin
*Description: This is my first plugin 
*Version: 1.0.0
*Author: Meenakshi Rana
*Licence: GPLv2 or later
*Text Domain: my_custom-plugin
*/

/*


This program is free software; you can redistribute it and/or
modify it under the terms of the GNU General Public License
as published by the Free Software Foundation; either version 2
of the License, or (at your option) any later version.

This program is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
GNU General Public License for more details.

You should have received a copy of the GNU General Public License
along with this program; if not, write to the Free Software
Foundation, Inc., 51 Franklin Street, Fifth Floor, Boston, MA  02110-1301, USA.

Copyright 2005-2015 Automattic, Inc.
*/

if( ! defined('ABSPATH')){
	
	die;
}

add_action( 'init', 'create_cpt' );
function create_cpt() {
    register_post_type( 'Books',
        array(
            'labels' => array(
                'name' => 'Books',
                'singular_name' => 'Book',
                'add_new' => 'Add New',
                'add_new_item' => 'Add New Book',
                'edit' => 'Edit',
                'edit_item' => 'Edit Book',
                'new_item' => 'New Book',
                'view' => 'View',
                'view_item' => 'View Book',
                'search_items' => 'Search Book',
                'not_found' => 'No Book found',
                'not_found_in_trash' => 'No Book found in Trash',
                'parent' => 'Parent Book Review'
            ),
 
            'public' => true,
            'menu_position' => 15,
            'supports' => array( 'title', 'editor', 'comments', 'thumbnail' ),
            'taxonomies' => array( '' ),
            
            'has_archive' => true
			
        )
    );
}

