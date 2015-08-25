<?php
/* 
Plugin Name: Floating Social Media Icon
Plugin URI: http://www.acurax.com/products/floating-social-media-icon-plugin-wordpress/
Description: An easy to use plugin to show social media icons which floats on your browsers right bottom, which links to your social media profiles, You have option in plugin settings to configure social media profile urls and also can select icon style,order and size.
Author: Acurax 
Version: 2.3
Author URI: http://www.acurax.com 
License: GPLv2 or later
*/

/*

Copyright 2008-current  Acurax International  ( website : www.acurax.com )

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
 define('ACX_SOCIALMEDIA_TOTAL_THEMES', 24);
 define('ACX_FSMI_TOTAL_STATIC_SERVICES', 7);
?>
<?php
//*************** Include JS in Header ********
function enqueue_acx_social_icon_script()
{
	wp_enqueue_script ( 'jquery' );
}	add_action( 'get_header', 'enqueue_acx_social_icon_script' );
//*************** Include JS in Header Ends Here ********


//*********** Include Additional Menu ********************
function AcuraxLinks($links, $file) {
	$plugin = plugin_basename(__FILE__);
	// create link
	$acx_installation_domain = $_SERVER['HTTP_HOST'];
	$acx_installation_domain = str_replace("www.","",$acx_installation_domain);
	$acx_installation_domain = str_replace(".","_",$acx_installation_domain);
	if($acx_installation_domain == "") { $acx_installation_domain = "not_defined";}
	if ($file == $plugin) {
	
		return array_merge( $links, array( 
			'<div id="plugin_page_links"><a href="http://www.acurax.com?utm_source=wp&utm_medium=link&utm_campaign=plugin-page&ref=' . $acx_installation_domain . '" target="_blank">' . __('Acurax International') . '</a>',
			'<a href="http://www.acurax.com/services/wordpress-designing-experts.php?utm_source=wp&utm_medium=link&utm_campaign=plugin-page&ref=' . $acx_installation_domain . '" target="_blank">' . __('Wordpress Expert Support') . '</a>',
			'<a href="http://www.acurax.com/services/wordpress-designing-experts.php?utm_source=wp&utm_medium=link&utm_campaign=plugin-page&ref=' . $acx_installation_domain . '" target="_blank">' . __('Need Help Configuring Plugins?') . '</a>',
			'<a href="http://www.acurax.com/services/wordpress-designing-experts.php?utm_source=wp&utm_medium=link&utm_campaign=plugin-page&ref=' . $acx_installation_domain . '" target="_blank">' . __('Instant Quick Support') . '</a>'
		));
	}
	return $links;
}	add_filter('plugin_row_meta', 'AcuraxLinks', 10, 2 );
//*********************************************************

include('function.php');

//*************** Admin function ***************
function acx_social_icon_admin() 
{
	include('social-icon.php');
}
function acx_social_icon_help() 
{
	include('social-help.php');
}

function acx_social_icon_premium() 
{
	include('premium.php');
}

function acx_social_icon_troubleshoot() 
{
	include('troubleshoot.php');
}

function acx_social_icon_misc() 
{
	include('fsmi-misc.php');
}

$acx_si_fsmi_hide_expert_support_menu = get_option('acx_si_fsmi_hide_expert_support_menu');
if ($acx_si_fsmi_hide_expert_support_menu == "") {	$acx_si_fsmi_hide_expert_support_menu = "no"; }
function acx_social_icon_admin_actions()
{
global $acx_si_fsmi_hide_expert_support_menu;
	add_menu_page(  'Acurax Social Icon Plugin Configuration', 'Floating Social Media Settings', 'manage_options', 'Acurax-Social-Icons-Settings','acx_social_icon_admin',plugin_dir_url( __FILE__ ).'/images/admin.png' ); // 8 for admin
	
	add_submenu_page('Acurax-Social-Icons-Settings', 'Acurax Social Icon Premium', 'Premium', 'manage_options', 'Acurax-Social-Icons-Premium' ,'acx_social_icon_premium');
	
	add_submenu_page('Acurax-Social-Icons-Settings', 'Acurax Social Icon Misc Settings', 'Misc', 'manage_options', 'Acurax-Social-Icons-Misc' ,'acx_social_icon_misc');
	
	add_submenu_page('Acurax-Social-Icons-Settings', 'Acurax Troubleshooter', 'Troubleshoot', 'manage_options', 'Acurax-Social-Icons-Troubleshooter' ,'acx_social_icon_troubleshoot');
	if($acx_si_fsmi_hide_expert_support_menu == "no") {
	add_submenu_page('Acurax-Social-Icons-Settings', 'Acurax Expert Support', 'Expert Support', 'manage_options', 'Acurax-Social-Icons-Expert-Support' ,'acx_social_icon_troubleshoot');
	}
	add_submenu_page('Acurax-Social-Icons-Settings', 'Acurax Social Icon Help and Support', 'Help', 'manage_options', 'Acurax-Social-Icons-Help' ,'acx_social_icon_help');
}
	
if ( is_admin() )
{
	add_action('admin_menu', 'acx_social_icon_admin_actions');
}
?>