<?php 
/**********************************************/
$total_themes = 12; // DEFINE NUMBER OF THEMES HERE
$total_themes = ($total_themes+1); // DO NOT EDIT THIS
/**********************************************/
	if($_POST['acurax_social_icon_hidden'] == 'Y') {
		//Form data sent
$acx_si_theme = $_POST['acx_si_theme'];
update_option('acx_si_theme', $acx_si_theme);

$acx_si_twitter = $_POST['acx_si_twitter'];
update_option('acx_si_twitter', $acx_si_twitter);

$acx_si_facebook = $_POST['acx_si_facebook'];
update_option('acx_si_facebook', $acx_si_facebook);

$acx_si_youtube = $_POST['acx_si_youtube'];
update_option('acx_si_youtube', $acx_si_youtube);

$acx_si_linkedin = $_POST['acx_si_linkedin'];
update_option('acx_si_linkedin', $acx_si_linkedin);

$acx_si_gplus = $_POST['acx_si_gplus'];
update_option('acx_si_gplus', $acx_si_gplus);

$acx_si_credit = $_POST['acx_si_credit'];
update_option('acx_si_credit', $acx_si_credit);

$acx_si_icon_size = $_POST['acx_si_icon_size'];
update_option('acx_si_icon_size', $acx_si_icon_size);

$acx_si_display = $_POST['acx_si_display'];
update_option('acx_si_display', $acx_si_display);

?>

		<div class="updated"><p><strong><?php _e('Acurax Settings Saved!.' ); ?></strong></p></div>
		<?php
	} else {
		//Normal page display
		$acx_si_theme = get_option('acx_si_theme');
		$acx_si_twitter = get_option('acx_si_twitter');
		$acx_si_facebook = get_option('acx_si_facebook');
		$acx_si_youtube = get_option('acx_si_youtube');
		$acx_si_linkedin = get_option('acx_si_linkedin');
		$acx_si_gplus = get_option('acx_si_gplus');
		$acx_si_credit = get_option('acx_si_credit');
		$acx_si_icon_size = get_option('acx_si_icon_size');
		$acx_si_display = get_option('acx_si_display');
		if ($acx_si_credit == "") {	$acx_si_credit = "no"; }
		if ($acx_si_icon_size == "") { $acx_si_icon_size = "32"; }
		if ($acx_si_display == "") { $acx_si_display = "auto"; }
		if ($acx_si_theme == "") { $acx_si_theme = "1"; }

	}

?>
<?php
// function check_acx_credit($yes,$no)
check_acx_credit("","<div class='updated'><p><strong style='color:darkred;'>You Have Selected Show Credit Link as <b>NO</b>. We Appreciate You Link Back to Our Website,Select Yes to Enable Credit Link, Its just a small font size link :)</strong></p></div>"); ?>
<div class="wrap">
<p><b>Acurax Services >> </b><a href="http://www.acurax.com/services/blog-design.php" target="_blank">Wordpress Theme Design</a> | <a href="http://www.acurax.com/services/web-designing.php" target="_blank">Website Design</a> | <a href="http://www.acurax.com/social-media-marketing-optimization/social-profile-design.php" target="_blank">Social Profile Design</a>| <a href="http://www.acurax.com/social-media-marketing-optimization/twitter-background-design.php" target="_blank">Twitter Background Design</a>| <a href="http://www.acurax.com/social-media-marketing-optimization/facebook-page-design.php" target="_blank">Facebook Page Design</a>
</p>
<?php echo "<h2>" . __( 'Acurax Social Icons Options', 'acx_si_config' ) . "</h2>"; ?>

<form name="acurax_si_form" method="post" action="<?php echo str_replace( '%7E', '~', $_SERVER['REQUEST_URI']); ?>">
<input type="hidden" name="acurax_social_icon_hidden" value="Y">
<?php    echo "<h4>" . __( 'Select an icon style', 'acx_si_config' ) . "</h4>"; ?>
	

<?php
echo "<p>Your Current Theme is <b>Theme" . $acx_si_theme."</b>";
?>
<div class="image_div"><img src="<?php echo plugins_url('images/themes/'.$acx_si_theme.'/single.png', __FILE__);?>" style="height:<?php echo $acx_si_icon_size;?>px;"></div>
<?php
echo "</p>";

// Starting The Theme List
echo "<div id='acx_si_theme_display'>";
for ($i=1; $i < $total_themes; $i++)
{ ?>
	<label class="acx_si_single_theme_display <?php if ($acx_si_theme == $i) { echo "selected"; } ?>" id="icon_selection">
	<div class="acx_si_single_label">Theme <?php echo $i; ?><br><input type="radio" name="acx_si_theme" value="<?php echo $i; ?>"<?php if ($acx_si_theme == $i) { echo " checked"; } ?>></div>
	<div class="image_div"><img src="<?php echo plugins_url('images/themes/'.$i.'/single.png', __FILE__);?>"></div>
	</label>
<?php
}
echo "</div> <!-- acx_si_theme_display -->";
// Ending The Theme List
?>
<p><?php _e("Social Icon Size: " ); ?>
<select name="acx_si_icon_size">
<option value="16"<?php if ($acx_si_icon_size == "16") { echo 'selected="selected"'; } ?>>16px X 16px </option>
<option value="25"<?php if ($acx_si_icon_size == "25") { echo 'selected="selected"'; } ?>>25px X 25px </option>
<option value="32"<?php if ($acx_si_icon_size == "32") { echo 'selected="selected"'; } ?>>32px X 32px </option>
<option value="40"<?php if ($acx_si_icon_size == "40") { echo 'selected="selected"'; } ?>>40px X 40px </option>
<option value="48"<?php if ($acx_si_icon_size == "48") { echo 'selected="selected"'; } ?>>48px X 48px </option>
<option value="55"<?php if ($acx_si_icon_size == "55") { echo 'selected="selected"'; } ?>>55px X 55px </option>
</select>
<?php _e("Select a social icon size" ); ?></p>






	<hr />
<?php    echo "<h4>" . __( 'Social Media Settings', 'acx_si_config' ) . "</h4>"; ?>	
<p>
<?php _e("Twitter Username: " ); ?><input type="text" name="acx_si_twitter" value="<?php echo $acx_si_twitter; ?>" size="50">
<?php _e("<b>Eg:</b> acuraxdotcom" ); ?>
</p>
<p>
<?php _e("Facebook Page/Profile URL: " ); ?><input type="text" name="acx_si_facebook" value="<?php echo $acx_si_facebook; ?>" size="50">
<?php _e("<b>Eg:</b> http://www.facebook.com/AcuraxInternational" ); ?>
</p>
<p>
<?php _e("Google Plus URL: " ); ?><input type="text" name="acx_si_gplus" value="<?php echo $acx_si_gplus; ?>" size="50">
<?php _e("Enter Your Complete Google Plus Url Starting With http://" ); ?>
</p>
<p>
<?php _e("Youtube URL: " ); ?><input type="text" name="acx_si_youtube" value="<?php echo $acx_si_youtube; ?>" size="50">
<?php _e("<b>Eg:</b> http://www.youtube.com/user/acuraxdotcom" ); ?>
</p>
<p>
<?php _e("Linkedin URL: " ); ?><input type="text" name="acx_si_linkedin" value="<?php echo $acx_si_linkedin; ?>" size="50">
<?php _e("<b>Eg:</b> http://www.linkedin.com/company/acurax-international" ); ?>
</p>
<hr />
<?php    echo "<h4>" . __( 'Other Settings', 'acx_si_config' ) . "</h4>"; ?>	


<p><?php _e("Display Mode: " ); ?>
<select name="acx_si_display">
<option value="auto"<?php if ($acx_si_display == "auto") { echo 'selected="selected"'; } ?>>Automatic (With Animation)</option>
<option value="manual"<?php if ($acx_si_display == "manual") { echo 'selected="selected"'; } ?>>Manual (No Animation)</option>
</select>
<?php
$code = ' <?php DISPLAY_ACURAX_ICONS(); ?>';
$code_2 = ' [DISPLAY_ACURAX_ICONS]';
?>

If you select display mode as automatic, it will show automatically, If you select as manual, there will be no animation and you need to place <br><?php highlight_string($code); ?> in your theme file or use the shortcode <?php highlight_string($code_2); ?>, to display the Social Icons.</p>



<p><?php _e("Show Credit Link: " ); ?>
<select name="acx_si_credit">
<option value="yes"<?php if ($acx_si_credit == "yes") { echo 'selected="selected"'; } ?>>Yes, Its Okay to Show Credit Link </option>
<option value="no"<?php if ($acx_si_credit == "no") { echo 'selected="selected"'; } ?>>No, I dont Like to Show Credit Link</option>
</select>
<?php _e("We Appreciate You Link Back to Our Website, Its just a small font size link :)" ); ?></p>	
	<p class="submit">
	<input type="submit" name="Submit" value="<?php _e('Update Acurax Social Icon', 'acx_si_config' ) ?>" />
	</p>
</form>
<hr/>
<p>Something Not Working Well? Have a Doubt? Have a Suggestion? - <a href="http://www.acurax.com" target="_blank">Contact us now</a> | Need a Custom Designed Theme For your Blog or Website? Need a Custom Header Image? - <a href="http://www.acurax.com" target="_blank">Contact us now</a></p>
</div>