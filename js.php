<?php
require( dirname( __FILE__ ) . '../../../../wp-config.php' );
$acx_si_icon_size=get_option('acx_si_icon_size');
$y = -60;
$x = -170;
////////////////////////////////////////////////////////////////////////////
//STARTING CROSS CHECK			    $count,$icon_size,$set_value  
function acx_si_check_loaded_count($count,$icon_size,$set_x_value,$set_y_value)
{
// Defining Values To Use
$acx_si_icon_size=get_option('acx_si_icon_size'); // Getting Value From DB :)
$acx_si_twitter = get_option('acx_si_twitter');
$acx_si_facebook = get_option('acx_si_facebook');
$acx_si_youtube = get_option('acx_si_youtube');
$acx_si_linkedin = get_option('acx_si_linkedin');
$acx_si_gplus = get_option('acx_si_gplus');
$count_check = 0;
$l1 = 0;
$l2 = 0;
$l3 = 0;
$l4 = 0;
$l5 = 0;
				if ($acx_si_twitter != "") { $l1 = 1; }
				if ($acx_si_facebook != "") { $l2 = 1; }
				if ($acx_si_youtube != "") { $l3 = 1; }
				if ($acx_si_linkedin != "") { $l4 = 1; }
				if ($acx_si_gplus != "") { $l5 = 1; }
	$count_check = $l1 + $l2 + $l3 + $l4 + $l5;

	if ($acx_si_icon_size == $icon_size && $count_check == $count)
	{
	global $x;
	global $y;

	$x = $set_x_value;
	$y = $set_y_value;	
	}
} // ENDING THE FUNCTION TO CROS CHECK
////////////////////////////////////////////////////////////////////////////


/**************************************************************************
CONDITIONS STARTING HERE  
if X Decreases then move to Right
If Y Decreases then Move to Down
***************************************************************************/
// Icon Size 16 Starts Here
// acx_si_check_loaded_count($count,$icon_size,$set_x_value,$set_y_value);
acx_si_check_loaded_count(1,16,-170,-35);
acx_si_check_loaded_count(2,16,-170,-35);
acx_si_check_loaded_count(3,16,-170,-35);
acx_si_check_loaded_count(4,16,-170,-35);
acx_si_check_loaded_count(5,16,-170,-35);
// *********************************
// Icon Size 25 Starts Here
// acx_si_check_loaded_count($count,$icon_size,$set_x_value,$set_y_value);
acx_si_check_loaded_count(1,25,-160,-50);
acx_si_check_loaded_count(2,25,-160,-50);
acx_si_check_loaded_count(3,25,-160,-50);
acx_si_check_loaded_count(4,25,-160,-50);
acx_si_check_loaded_count(5,25,-160,-50);
// *********************************
// Icon Size 32 Starts Here
// acx_si_check_loaded_count($count,$icon_size,$set_x_value,$set_y_value);
acx_si_check_loaded_count(1,32,-170,-55);
acx_si_check_loaded_count(2,32,-170,-55);
acx_si_check_loaded_count(3,32,-170,-55);
acx_si_check_loaded_count(4,32,-170,-55);
acx_si_check_loaded_count(5,32,-190,-60);
// *********************************
// Icon Size 40 Starts Here
// acx_si_check_loaded_count($count,$icon_size,$set_x_value,$set_y_value);
acx_si_check_loaded_count(1,40,-170,-65);
acx_si_check_loaded_count(2,40,-170,-65);
acx_si_check_loaded_count(3,40,-170,-65);
acx_si_check_loaded_count(4,40,-170,-105);
acx_si_check_loaded_count(5,40,-170,-105);
// *********************************
// Icon Size 48 Starts Here
// acx_si_check_loaded_count($count,$icon_size,$set_x_value,$set_y_value);
acx_si_check_loaded_count(1,48,-170,-75);
acx_si_check_loaded_count(2,48,-170,-75);
acx_si_check_loaded_count(3,48,-170,-75);
acx_si_check_loaded_count(4,48,-170,-120);
acx_si_check_loaded_count(5,48,-170,-120);
// *********************************
// Icon Size 55 Starts Here
// acx_si_check_loaded_count($count,$icon_size,$set_x_value,$set_y_value);
acx_si_check_loaded_count(1,55,-170,-80);
acx_si_check_loaded_count(2,55,-170,-80);
acx_si_check_loaded_count(3,55,-170,-135);
acx_si_check_loaded_count(4,55,-170,-135);
acx_si_check_loaded_count(5,55,-190,-135);
// *********************************
/**************************************************************************
CONDITIONS ENDING HERE
***************************************************************************/
?>

var ns = (navigator.appName.indexOf("Netscape") != -1);
var d = document;
var px = document.layers ? "" : "px";
function JSFX_FloatDiv(id, sx, sy)
{
	var el=d.getElementById?d.getElementById(id):d.all?d.all[id]:d.layers[id];
	window[id + "_obj"] = el;
	if(d.layers)el.style=el;
	el.cx = el.sx = sx;el.cy = el.sy = sy;
	el.sP=function(x,y){this.style.left=x+px;this.style.top=y+px;};
	el.flt=function()
	{
		var pX, pY;
		pX = (this.sx >= 0) ? 0 : ns ? innerWidth : 
		document.documentElement && document.documentElement.clientWidth ? 
		document.documentElement.clientWidth : document.body.clientWidth;
		pY = ns ? pageYOffset : document.documentElement && document.documentElement.scrollTop ? 
		document.documentElement.scrollTop : document.body.scrollTop;
		if(this.sy<0) 
		pY += ns ? innerHeight : document.documentElement && document.documentElement.clientHeight ? 
		document.documentElement.clientHeight : document.body.clientHeight;
		this.cx += (pX + this.sx - this.cx)/8;this.cy += (pY + this.sy - this.cy)/8;
		this.sP(this.cx, this.cy);
		setTimeout(this.id + "_obj.flt()", 40);
	}
	return el;
}
 JSFX_FloatDiv("divBottomRight", <?php echo $x; ?>, <?php echo $y; ?>).flt();