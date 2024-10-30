<?php
/*
Plugin Name: Hide Login Logo
Plugin URI:  http://wordpress.org/plugins/hide-login-logo
Description: Hides logo in WordPress login screen to make it clearer.
Version:     1.0
Author:      silver530
Author URI:  http://www.pixelwars.org
License:     GPLv2 or later
Text Domain: hide_login_logo
Domain Path: /langs/
*/


/*
Copyright (c) 2014, silver530.

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
*/


/* ============================================================================================================================================= */

	function hide_login_logo_load_textdomain()
	{
		load_plugin_textdomain( 'hide_login_logo', false, dirname( plugin_basename( __FILE__ ) ) . '/langs/' ); 
	}
	
	add_action( 'plugins_loaded', 'hide_login_logo_load_textdomain' );

/* ============================================================================================================================================= */

	function hide_login_logo_login_head()
	{
		echo '<style>
			
				#login h1
				{
					display: none;
				}
			
			</style>';
	}
	
	add_action( 'login_head', 'hide_login_logo_login_head' );

/* ============================================================================================================================================= */
	
?>