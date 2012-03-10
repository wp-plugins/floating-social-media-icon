<?php
//*************** Include CSS in Header ********
function enqueue_acx_si_style()
{
	wp_enqueue_style ( 'acx-si-style', plugins_url('style.css', __FILE__) );
}
add_action( 'wp_print_styles', 'enqueue_acx_si_style' );
//*************** Include CSS in Header Ends Here ********
// Check Credit Link
function check_acx_credit($yes,$no)
{ 	$acx_si_credit = get_option('acx_si_credit');
	if($acx_si_credit != "no") { echo $yes; } else { echo $no; } 
}
// Options Value Checker
function acx_option_value_check($option_name,$yes,$no)
{ 	$acx_si_option_set = get_option($option_name);
	if ($acx_si_option_set != "") { echo $yes; } else { echo $no; }
}
// Social Media Links
$twitter_link = "<a href='http://www.twitter.com/". $acx_si_twitter ."' target='_blank'>" . "<img src=" . plugins_url('images/'. $acx_si_theme .'/twitter.png', __FILE__) . " border='0'></a>";
$facebook_link = "<a href='". $acx_si_facebook ."' target='_blank'>" . "<img src=" . plugins_url('images/'. $acx_si_theme .'/facebook.png', __FILE__) . " border='0'></a>";
$youtube_link = "<a href='". $acx_si_youtube ."' target='_blank'>" . "<img src=" . plugins_url('images/'. $acx_si_theme .'/youtube.png', __FILE__) . " border='0'></a>";
$linkedin_link = "<a href='". $acx_si_linkedin ."' target='_blank'>" . "<img src=" . plugins_url('images/'. $acx_si_theme .'/linkedin.png', __FILE__) . " border='0'></a>";
// Display HTML

function acurax_icons()
{		
		$acx_si_theme = get_option('acx_si_theme');
		$acx_si_twitter = get_option('acx_si_twitter');
		$acx_si_facebook = get_option('acx_si_facebook');
		$acx_si_youtube = get_option('acx_si_youtube');
		$acx_si_linkedin = get_option('acx_si_linkedin');
		$twitter_link = "<a href='http://www.twitter.com/". $acx_si_twitter ."' target='_blank'>" . "<img src=" . plugins_url('images/'. $acx_si_theme .'/twitter.png', __FILE__) . " border='0'></a>";
		$facebook_link = "<a href='". $acx_si_facebook ."' target='_blank'>" . "<img src=" . plugins_url('images/'. $acx_si_theme .'/facebook.png', __FILE__) . " border='0'></a>";
		$youtube_link = "<a href='". $acx_si_youtube ."' target='_blank'>" . "<img src=" . plugins_url('images/'. $acx_si_theme .'/youtube.png', __FILE__) . " border='0'></a>";
		$linkedin_link = "<a href='". $acx_si_linkedin ."' target='_blank'>" . "<img src=" . plugins_url('images/'. $acx_si_theme .'/linkedin.png', __FILE__) . " border='0'></a>";
echo "<div id='divBottomRight' align='center'>";
acx_option_value_check("acx_si_twitter",$twitter_link,"");
acx_option_value_check("acx_si_facebook",$facebook_link,"");
acx_option_value_check("acx_si_youtube",$youtube_link,"");
acx_option_value_check("acx_si_linkedin",$linkedin_link,"");
$acx_si_credit = get_option('acx_si_credit');
	if($acx_si_credit == "yes") { 
	echo "<br>" . "<a href='http://www.acurax.com' target='_blank' title='Web Design and Development' style='text-decoration: none; display: block; text-align: center; font-size: 8px;' align='center'>Web Design</a>";
	}
echo "</div>";
	wp_enqueue_script ( 'acx_social_icon_script', plugins_url('js.php', __FILE__) );
}
function extra_style_acx_icon()
{
$acx_si_theme = get_option('acx_si_icon_size');
echo "<style>";
echo "#divBottomRight img {";
echo "width: " . $acx_si_theme. "}";
echo "</style>";
}
if ( function_exists('acurax_icons') ) {
 add_action('get_footer', 'acurax_icons');
 add_action('get_header', 'extra_style_acx_icon');
}
?>