<?php
error_reporting(0);
//*************** Include style.css in Header ********
function enqueue_acx_si_style()
{
	wp_enqueue_style ( 'acx-si-style', plugins_url('style.css', __FILE__) );
}	add_action( 'wp_print_styles', 'enqueue_acx_si_style' );

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

function acurax_icons()
{
	// Getting Option From DB *****************************	
	$acx_si_theme = get_option('acx_si_theme');
	$acx_si_credit = get_option('acx_si_credit');
	$acx_si_display = get_option('acx_si_display');
	$acx_si_twitter = get_option('acx_si_twitter');
	$acx_si_facebook = get_option('acx_si_facebook');
	$acx_si_youtube = get_option('acx_si_youtube');
	$acx_si_linkedin = get_option('acx_si_linkedin');
	$acx_si_gplus = get_option('acx_si_gplus');
	$acx_si_pinterest = get_option('acx_si_pinterest');
	// *****************************************************
			
	if($acx_si_twitter != "" || $acx_si_facebook != "" || $acx_si_youtube != "" || $acx_si_linkedin != ""  || $acx_si_pinterest != "" || $acx_si_gplus != "")
	{		
		//******** MAKING EACH BUTTON LINKS ********************
		if	($acx_si_twitter == "") { $twitter_link = ""; } else {
			$twitter_link = "<a href='http://www.twitter.com/". $acx_si_twitter ."' target='_blank'>" . "<img src=" . plugins_url('images/themes/'. $acx_si_theme .'/twitter.png', __FILE__) . " border='0'></a>";
		}
		if	($acx_si_facebook == "") { $facebook_link = ""; } else {
			$facebook_link = "<a href='". $acx_si_facebook ."' target='_blank'>" . "<img src=" . plugins_url('images/themes/'. $acx_si_theme .'/facebook.png', __FILE__) . " border='0'></a>";
		}
		if	($acx_si_gplus == "") { $gplus_link = ""; } else {
			$gplus_link = "<a href='". $acx_si_gplus ."' target='_blank'>" . "<img src=" . plugins_url('images/themes/'. $acx_si_theme .'/googleplus.png', __FILE__) . " border='0'></a>";
		}
		if	($acx_si_pinterest == "") { $pinterest_link = ""; } else {
			$pinterest_link = "<a href='". $acx_si_pinterest ."' target='_blank'>" . "<img src=" . plugins_url('images/themes/'. $acx_si_theme .'/pinterest.png', __FILE__) . " border='0'></a>";
		}
		if	($acx_si_youtube == "") { $youtube_link = ""; } else {
			$youtube_link = "<a href='". $acx_si_youtube ."' target='_blank'>" . "<img src=" . plugins_url('images/themes/'. $acx_si_theme .'/youtube.png', __FILE__) . " border='0'></a>";
		}
		if	($acx_si_linkedin == "") { $linkedin_link = ""; } else {
			$linkedin_link = "<a href='". $acx_si_linkedin ."' target='_blank'>" . "<img src=" . plugins_url('images/themes/'. $acx_si_theme .'/linkedin.png', __FILE__) . " border='0'></a>";
	}
	

	//*********************** STARTED DISPLAYING THE ICONS ***********************
	
		echo "\n\n\n<!-- Starting Icon Display Code For Social Media Icon From Acurax International www.acurax.com -->\n";
		echo "<div id='divBottomRight' align='center'>";
		$social_icon_array_order = get_option('social_icon_array_order');
		$social_icon_array_order = unserialize($social_icon_array_order);
		foreach ($social_icon_array_order as $key => $value)
		{
			if ($value == 0) { echo $twitter_link; } 

			else if ($value == 1) { echo $facebook_link; } 

			else if ($value == 2) { echo $gplus_link; } 

			else if ($value == 3) { echo $pinterest_link; } 

			else if ($value == 4) { echo $youtube_link; } 

			else if ($value == 5) { echo $linkedin_link; } 
		}
		echo "</div>\n";
		echo "<!-- Ending Icon Display Code For Social Media Icon From Acurax International www.acurax.com -->\n\n\n";
		
		//*****************************************************************************
			
		if ($acx_si_display == "auto") 
		{
		
			//*************** STARTING PUMBING JAVASCIRPT *******************************
			echo "\n\n\n<!-- Starting Javascript For Social Media Icon From Acurax International www.acurax.com -->\n";	?>
			<script type="text/javascript" src="<?php echo plugins_url('js.php', __FILE__);?>"></script>
			<?php echo "<!-- Ending Javascript Code For Social Media Icon From Acurax International www.acurax.com -->\n\n\n";
		
		} // Checking $acx_si_display
		
		
	} // Chking null fields
	
} // Ending acurax_icons();



// Starting Footer PBL
function pbl_footer() 
{
	// Getting Option From DB *****************************	
		$acx_si_credit = get_option('acx_si_credit');
		$acx_si_twitter = get_option('acx_si_twitter');
		$acx_si_facebook = get_option('acx_si_facebook');
		$acx_si_youtube = get_option('acx_si_youtube');
		$acx_si_linkedin = get_option('acx_si_linkedin');
		$acx_si_gplus = get_option('acx_si_gplus');
		$acx_si_pinterest = get_option('acx_si_pinterest');
	// *****************************************************

	//********** CHECKING CREDIT LINK STATUS ******************
	if($acx_si_twitter != "" || $acx_si_facebook != "" || $acx_si_youtube != "" || $acx_si_linkedin != ""  || $acx_si_pinterest != "" || $acx_si_gplus != "")
	{
		if($acx_si_credit == "yes") 
		{ 
			echo "<div style='text-align:center;color:gray;font-family:arial;font-size:10px;text-decoration:none;'>";
			echo "<a href='http://www.acurax.com/products/floating-social-media-icon-plugin-wordpress/' target='_blank' title='Social Media Wordpress plugin' style='text-align:center;color:gray;font-family:arial;font-size:10px;text-decoration:none;'>Social Media Icons</a> Powered by <a href='http://www.acurax.com/services/web-designing.php' target='_blank' title='Web Design Company' style='text-align:center;color:gray;font-family:arial;font-size:10px;text-decoration:none;'>Acurax Web Design Company</a></div>";
		} 
	}

} add_action('wp_footer', 'pbl_footer'); // pbl_footer

function extra_style_acx_icon()
{
	$acx_si_theme = get_option('acx_si_icon_size');
	$acx_si_display = get_option('acx_si_display');
		echo "\n\n\n<!-- Starting Styles For Social Media Icon From Acurax International www.acurax.com -->\n<style type='text/css'>\n";
		echo "#divBottomRight img \n{\n";
		echo "width: " . $acx_si_theme. "px; \n}\n";
		
			if ($acx_si_display != "auto") 
			{
				echo "#divBottomRight \n{\n";
				echo "min-width:0px; \n";
				echo "position: static; \n}\n";
			}
			
		echo "</style>\n<!-- Ending Styles For Social Media Icon From Acurax International www.acurax.com -->\n\n\n\n";
}	add_action('admin_head', 'extra_style_acx_icon'); // ADMIN
	add_action('wp_head', 'extra_style_acx_icon'); // PUBLIC 

function acx_si_admin_style()  // Adding Style For Admin
{
	echo '<link rel="stylesheet" type="text/css" href="' .plugins_url('style_admin.css', __FILE__). '">';
}	add_action('admin_head', 'acx_si_admin_style'); // ADMIN

	$acx_si_display = get_option('acx_si_display');
if	($acx_si_display == "auto") 
{
	add_action('wp_footer', 'acurax_icons');
}

function DISPLAY_ACURAX_ICONS()
{
		$acx_si_display = get_option('acx_si_display');
	if (function_exists('acurax_icons') && $acx_si_display != "auto") 
	{
		ob_start();
			acurax_icons();
		$content = ob_get_contents();
		ob_end_clean();
		return $content;
	} 
	else echo "<!-- Select Display Mode as Manual To Show The Acurax Social Media Icons -->";
} // DISPLAY_ACURAX_ICONS
			
function acx_not_auto()
{
	echo "<!-- Select Display Mode as Manual To Show The Acurax Social Media Icons -->";
}
if	(function_exists('DISPLAY_ACURAX_ICONS') && $acx_si_display != "auto") 
{
	add_shortcode( 'DISPLAY_ACURAX_ICONS', 'DISPLAY_ACURAX_ICONS' ); // Defining Shortcode to show Social Media Icon
}
else if (function_exists('acx_not_auto') && $acx_si_display == "auto") 
{
	add_shortcode( 'DISPLAY_ACURAX_ICONS', 'acx_not_auto' ); // Defining Shortcode to show Select Manual
}

function acx_si_custom_admin_js()
{
	wp_enqueue_script('jquery');
	wp_enqueue_script('jquery-ui-core');
	wp_enqueue_script('jquery-ui-sortable');
}	add_action( 'admin_enqueue_scripts', 'acx_si_custom_admin_js' )
?>