<?php 
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

$acx_si_credit = $_POST['acx_si_credit'];
update_option('acx_si_credit', $acx_si_credit);

$acx_si_icon_size = $_POST['acx_si_icon_size'];
update_option('acx_si_icon_size', $acx_si_icon_size);

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
		$acx_si_credit = get_option('acx_si_credit');
		$acx_si_icon_size = get_option('acx_si_icon_size');
		if ($acx_si_credit == "") {
		$acx_si_credit = "yes";
		}
		if ($acx_si_credit == "") {
		$acx_si_credit = "yes";
		}
		if ($acx_si_icon_size == "") {
		$acx_si_icon_size = "32";
		}

	}

?>
<?php
// function check_acx_credit($yes,$no)
check_acx_credit("","<div class='updated'><p><strong style='color:darkred;'>You Have Selected Show Credit Link as <b>NO</b>. We Appreciate You Link Back to Our Website,Select Yes to Enable Credit Link, Its just a small font size link :)</strong></p></div>"); ?>



<div class="wrap">
<?php echo "<h2>" . __( 'Acurax Social Icons Options', 'acx_si_config' ) . "</h2>"; ?>

<form name="acurax_si_form" method="post" action="<?php echo str_replace( '%7E', '~', $_SERVER['REQUEST_URI']); ?>">
	<input type="hidden" name="acurax_social_icon_hidden" value="Y">
	<?php    echo "<h4>" . __( 'Social Icon Settings', 'acx_si_config' ) . "</h4>"; ?>
	<div style="height: 85px; font-size: 10px; margin-right: auto; margin-left: auto; overflow-y: scroll; width: 833px;">
	<div style="width:153px;float:left;border:1px solid lightgray;padding:2px;margin:2px;">
	<div style="width:50px;float:left;padding-top:5px;font-weight:bold;">Theme 1</div>
	<div style="width:100px;float:left;"><img src="<?php echo plugins_url('images/1/single.png', __FILE__);?>" style="width:100px;border:0px;"></div>
	</div>
	<div style="width:153px;float:left;border:1px solid lightgray;padding:2px;margin:2px;">
	<div style="width:50px;float:left;padding-top:5px;font-weight:bold;">Theme 2</div>
	<div style="width:100px;float:left;"><img src="<?php echo plugins_url('images/2/single.png', __FILE__);?>" style="width:100px;border:0px;"></div>
	</div>
	<div style="width:153px;float:left;border:1px solid lightgray;padding:2px;margin:2px;">
	<div style="width:50px;float:left;padding-top:5px;font-weight:bold;">Theme 3</div>
	<div style="width:100px;float:left;"><img src="<?php echo plugins_url('images/3/single.png', __FILE__);?>" style="width:100px;border:0px;"></div>
	</div>
	<div style="width:153px;float:left;border:1px solid lightgray;padding:2px;margin:2px;">
	<div style="width:50px;float:left;padding-top:5px;font-weight:bold;">Theme 4</div>
	<div style="width:100px;float:left;"><img src="<?php echo plugins_url('images/4/single.png', __FILE__);?>" style="width:100px;border:0px;"></div>
	</div>
	<div style="width:153px;float:left;border:1px solid lightgray;padding:2px;margin:2px;">
	<div style="width:50px;float:left;padding-top:5px;font-weight:bold;">Theme 5</div>
	<div style="width:100px;float:left;"><img src="<?php echo plugins_url('images/5/single.png', __FILE__);?>" style="width:100px;border:0px;"></div>
	</div>
	<div style="width:153px;float:left;border:1px solid lightgray;padding:2px;margin:2px;">
	<div style="width:50px;float:left;padding-top:5px;font-weight:bold;">Theme 6</div>
	<div style="width:100px;float:left;"><img src="<?php echo plugins_url('images/6/single.png', __FILE__);?>" style="width:100px;border:0px;"></div>
	</div>
	<div style="width:153px;float:left;border:1px solid lightgray;padding:2px;margin:2px;">
	<div style="width:50px;float:left;padding-top:5px;font-weight:bold;">Theme 7</div>
	<div style="width:100px;float:left;"><img src="<?php echo plugins_url('images/7/single.png', __FILE__);?>" style="width:100px;border:0px;"></div>
	</div>
	<div style="width:153px;float:left;border:1px solid lightgray;padding:2px;margin:2px;">
	<div style="width:50px;float:left;padding-top:5px;font-weight:bold;">Theme 8</div>
	<div style="width:100px;float:left;"><img src="<?php echo plugins_url('images/8/single.png', __FILE__);?>" style="width:100px;border:0px;"></div>
	</div>
	<div style="width:153px;float:left;border:1px solid lightgray;padding:2px;margin:2px;">
	<div style="width:50px;float:left;padding-top:5px;font-weight:bold;">Theme 9</div>
	<div style="width:100px;float:left;"><img src="<?php echo plugins_url('images/9/single.png', __FILE__);?>" style="width:100px;border:0px;"></div>
	</div>
	<div style="width:153px;float:left;border:1px solid lightgray;padding:2px;margin:2px;">
	<div style="width:50px;float:left;padding-top:5px;font-weight:bold;">Theme 10</div>
	<div style="width:100px;float:left;"><img src="<?php echo plugins_url('images/10/single.png', __FILE__);?>" style="width:100px;border:0px;"></div>
	</div>
	

	
	

	
	
	</div>
	<p><?php _e("Social Icon Theme: " ); ?>
<select name="acx_si_theme">
<option value="1"<?php if ($acx_si_theme == "1") { echo 'selected="selected"'; } ?>>Theme 1 </option>
<option value="2"<?php if ($acx_si_theme == "2") { echo 'selected="selected"'; } ?>>Theme 2 </option>
<option value="3"<?php if ($acx_si_theme == "3") { echo 'selected="selected"'; } ?>>Theme 3 </option>
<option value="4"<?php if ($acx_si_theme == "4") { echo 'selected="selected"'; } ?>>Theme 4 </option>
<option value="5"<?php if ($acx_si_theme == "5") { echo 'selected="selected"'; } ?>>Theme 5 </option>
<option value="6"<?php if ($acx_si_theme == "6") { echo 'selected="selected"'; } ?>>Theme 6 </option>
<option value="7"<?php if ($acx_si_theme == "7") { echo 'selected="selected"'; } ?>>Theme 7 </option>
<option value="8"<?php if ($acx_si_theme == "8") { echo 'selected="selected"'; } ?>>Theme 8 </option>
<option value="9"<?php if ($acx_si_theme == "9") { echo 'selected="selected"'; } ?>>Theme 9 </option>
<option value="10"<?php if ($acx_si_theme == "10") { echo 'selected="selected"'; } ?>>Theme 10 </option>
</select>
<?php _e("Select a social icon theme" ); ?></p>




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
<?php _e("Youtube URL: " ); ?><input type="text" name="acx_si_youtube" value="<?php echo $acx_si_youtube; ?>" size="50">
<?php _e("<b>Eg:</b> http://www.youtube.com/user/acuraxdotcom" ); ?>
</p>
<p>
<?php _e("Linkedin URL: " ); ?><input type="text" name="acx_si_linkedin" value="<?php echo $acx_si_linkedin; ?>" size="50">
<?php _e("<b>Eg:</b> http://www.linkedin.com/company/acurax-international" ); ?>
</p>
<hr />
<?php    echo "<h4>" . __( 'Other Settings', 'acx_si_config' ) . "</h4>"; ?>	
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
</div>