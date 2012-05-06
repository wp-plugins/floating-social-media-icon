<?php
$code = ' <?php wp_footer(); ?>';
$code_2 = ' <?php wp_head(); ?>';
$code_3 = ' </body>';
$code_4 = ' </head>';
$code_5 = ' <?php DISPLAY_ACURAX_ICONS(); ?>';
$code_6 = ' [DISPLAY_ACURAX_ICONS]';
?>
<div id="acx_help_page">
<h2>Floating Social Media Icon - Wordpress Plugin - Help/Support</h2>

<p>Thank you for using Floating Social Media Icon Plugin For Your Wordpress Social Media Profile Linking Need.</p>
<p>We always look forward for your suggestions and comments regarding the plugin. You can submit them via our website <a href="http://www.acurax.com" target="_blank">www.acurax.com</a></p>
<p><a href="http://www.acurax.com/services/blog-design.php" target="_blank">Wordpress Theme Design</a> | <a href="http://www.acurax.com/services/web-designing.php" target="_blank">Website Design</a> | <a href="http://www.acurax.com/social-media-marketing-optimization/social-profile-design.php" target="_blank">Social Profile Design</a>| <a href="http://www.acurax.com/social-media-marketing-optimization/twitter-background-design.php" target="_blank">Twitter Background Design</a>| <a href="http://www.acurax.com/social-media-marketing-optimization/facebook-page-design.php" target="_blank">Facebook Page Design</a> |
	<a href="#cheat-sheet">Free Social Media Marketing Cheat Sheet</a>
</p>
<hr>
<h3>Frequently Asked Questions</h3>

<p class="q" style="margin-top: 18px;">How can i hide an icon?</p>
<p class="a">To hide an icon, Just dont give any value for that button link.. it will automatically gets hiden.</p>

<p class="q" style="border:0px;padding:0px;">Why the floating social media icon is not displaying on my page even if i made all properly?</p>
<p class="a">Our Plugin Uses Hooks to integrate the suppported javascripts styles and html to the theme. So Make sure your theme footer.php have <?php highlight_string($code); ?> and header.php have <?php highlight_string($code_2); ?>, Most of all the plugins work with the support of this code and if this is not present on your theme.. Its your themes mistake..</p>

<p class="q">How can i integrate the <?php highlight_string($code); ?> and <?php highlight_string($code_2); ?> to my theme if it is not present on my theme?</p>
<p class="a">It can be easily done.. Just to go Theme Editor which is under apperance and select footer.php and add <?php highlight_string($code); ?> before the closing body tag which is <?php highlight_string($code_3); ?> and then go and edit header.php and add <?php highlight_string($code_2); ?> just before the closing head tag which is <?php highlight_string($code_4); ?></p>

<p class="q">Can i disable the automated integration and place where ever i want?</p>
<p class="a">Yes, You can.. Just to go "Acx Social icons" Menu which is in left side on wp-admin and in that page you will find "Display Mode" option. Select it to Manual. But then there will be no animation but you can Use Our Shortcode or PHP Code to display the social media icons anywhere you want.</p>

<p class="q">What are theshortcode and php code that will display this social media icon?</p>
<p class="a">You can use the shortcode <?php highlight_string($code_6); ?> in any post or page or even in your custom post types. You can also use <?php highlight_string($code_5); ?> anywhere in the theme files to show this icons.(But note that manual icons display will not have the animation</p>

<p class="q">Can i customize the shortcode to show icons with differant icon design and size?</p>

<p class="a">Yes, You can use shortcode to display icon and set icon size,what ever you want which is supported by the plugin. You can override the global icon theme and size configuration using some attributes on shortcode.</p>

<p class="a">As you know we have given icon themes, Numbers to identify. Right now we have themes like, 1,2,3,4....</p>

<p class="a">If you want to show icons with Theme # 5, You can use the shortcode <b>[DISPLAY_ACURAX_ICONS theme="5"]</b></p>
<p class="a">Here we using the attribute <b>"theme"</b> to define the theme number (Make sure you use the available theme numbers, You can see the theme numbers on <a href="admin.php?page=Acurax-Social-Icons-Settings" target="_blank">plugin settings page</a>)</p>

<p class="a">If you want to show the icons with a custom size 50px.. you can use the shortcode <b>[DISPLAY_ACURAX_ICONS size="50"]</b></p>
<p class="a">Here we using the attribute <b>"size"</b> to define the icon size (Make Sure you specifying size which is not more than "55" which is the maximum icon support of this plugin, DO NOT ADD px, Just Add the Size in Numerical)</p>

<p class="a">So if you use a shortcode <b>[DISPLAY_ACURAX_ICONS theme="10" size="45"]</b></p>
<p class="a">It will show the Social Media Icon with Icon Theme 10 and Icon size will be 45px width and height.</p>


<p class="q">How can i use the plugin widgets?</p>

<p class="a">We have widgets also with almost same features of the shortcodes, You can have many number of widgets where on each widget you can configure the Social Media Icons size and Icon Design/Style.</p>

<p class="a">To add a widget to your sidebar.. you theme must support sidebars. Go to Apperance >> Widgets,to add "Acx Social Icons" widget to your sidebar.</p>

<p class="q">How can i help the development of this plugin?</p>
<p class="a">Acurax Provide Most of all the wordpress related services like website design and development including plugin development, theme design and coding, Graphics Design like header image designing etc. we can do your projects. So here you get what u needs to get done and we getting business so a part of that can be used for the time that we spend to develop plugins like this </p>

<p class="q">There are a lot of other social icons plugins, but why this plugin?</p>
<p class="a">Most of all the plugins have more and more options which is only easly understandable by advanced users, those have a bunch of social media profile integrations. But in our case we choosen the must to have icons and made it perfect animation and position styling.. More icons on website make it look bad.. So use the essentials with sexy display.</p>

<p class="q">Can i add my own icons for the social media profiles?</p>
<p class="a">Sorry, Its not supported in this version, but we will be releasing a premium version which support a lot more easy options with in few weeks, we are on its development.</p>

<p class="q">After Upgrading Plugin, Icons are not showing. why?</p>
<p class="a">You need to visit the plugin settings page once after upgrading to complete the upgrade process.Only after that it will show the icon.</p>

<p class="q">Will upgrade change any of my settings or configuration?</p>
<p class="a">No, It will not.. :)</p>

<p class="a">Have more questions ? <a href="http://www.acurax.com/contact.php" target="_blank">Drop a mail</a> and we shall get back to you with the answers.</p>

<?php acurax_optin(); ?>

</div> <!-- acx_help_page -->