<?php
if($_GET['td'] == 'hide') 
{
update_option('acx_si_td', "hide");
?>
<style type='text/css'>
#acx_td
{
display:none;
}
</style>
<div class="error" style="background: none repeat scroll 0pt 0pt infobackground; border: 1px solid inactivecaption; padding: 5px;line-height:16px;">
Thanks again for using the plugin. we will never show the mesage again.
</div>
<?php
}
?>
<div id="acx_help_page">
<?php 
socialicons_comparison();
socialicons_comparison(1);
acurax_optin(); ?>
</div>