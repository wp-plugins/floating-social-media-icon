<?php
/* 
Plugin Name: Floating Social Media Icon
Plugin URI: http://www.acurax.com/products/floating-social-media-icon-plugin-wordpress/
Description: An easy to use plugin to show social media icons which floats on your browsers right bottom, which links to your social media profiles, You have option in plugin settings to configure social media profile urls and also can select icon style and size.
Author: Acurax 
Version: 1.0.7
Author URI: http://www.acurax.com 
License: GPLv2 or later
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
*/ 
?>
<?php
//*************** Include JS in Header ********
function enqueue_acx_social_icon_script()
{
	wp_enqueue_script ( 'jquery' );
}
add_action( 'get_header', 'enqueue_acx_social_icon_script' );
//*************** Include JS in Header Ends Here ********
//*********** Include Additional Menu ********************
function AcuraxLinks($links, $file) {
	$plugin = plugin_basename(__FILE__);
	// create link
	if ($file == $plugin) {
		return array_merge( $links, array( 
			'<div id="plugin_page_links"><a href="http://www.acurax.com" target="_blank">' . __('Acurax International') . '</a>',
			'<a href="https://twitter.com/#!/acuraxdotcom" target="_blank">' . __('Acurax on Twitter') . '</a>',
			'<a href="http://www.facebook.com/AcuraxInternational" target="_blank">' . __('Acurax on Facebook') . '</a>',
			'<a href="http://www.acurax.com/services/web-designing.php" target="_blank">' . __('Wordpress Theme Design') . '</a>',
			'<a href="http://www.acurax.com/services/blog-design.php" target="_blank">' . __('Wordpress Blog Design') . '</a>',
			'<a href="http://www.acurax.com/contact.php" target="_blank" style="border:0px;">' . __('Contact Acurax') . '</a></div>' 
		));
	}
	return $links;
}
add_filter('plugin_row_meta', 'AcuraxLinks', 10, 2 );
//*********************************************************
include('function.php');
//*************** Admin function ***************
function acx_social_icon_admin() {
	include('social-icon.php');
}
function acx_social_icon_help() {
	include('social-help.php');
}
function acx_social_icon_admin_actions()
{
add_menu_page(  'Acurax Social Icon Plugin Configuration', 'Acx Social Icons', 8, 'Acurax-Social-Icons-Settings','acx_social_icon_admin',plugin_dir_url( __FILE__ ).'/images/admin.ico', 55 ); // 8 for admin
add_submenu_page('Acurax-Social-Icons-Settings', 'Acurax Social Icon Help and Support', 'Help', 8, 'Acurax-Social-Icons-Help' ,'acx_social_icon_help');
}
if ( is_admin() )
{
add_action('admin_menu', 'acx_social_icon_admin_actions');
}
?>