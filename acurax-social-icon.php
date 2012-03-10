<?php
/* 
Plugin Name: Floating Social Media Icon
Plugin URI: http://www.acurax.com/products/floating-social-media-icon-plugin-wordpress/
Description: An easy to use plugin to show social media icons which floats on your browsers right bottom, which links to your social media profiles, You have option in plugin settings to configure social media profile urls and also can select icon style and size.
Author: Acurax 
Version: 1.0.1
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
	wp_enqueue_script ( 'acx_social_icon_script', plugins_url('js.php', __FILE__) );
}
add_action( 'get_footer', 'enqueue_acx_social_icon_script' );
//*************** Include JS in Header Ends Here ********

include('function.php');
//*************** Admin function ***************
function acx_social_icon_admin() {
	include('social-icon.php');
}
function acx_social_icon_admin_actions()
{
add_submenu_page('options-general.php', 'Acurax Social Icon Plugin Configuration', 'Acx Social Icons', 8, 'Acurax-Social-Icons-Settings' ,'acx_social_icon_admin'); 
}
if ( is_admin() )
{
add_action('admin_menu', 'acx_social_icon_admin_actions');
}
?>