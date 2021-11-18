<?php
/*
Plugin Name: AM User Menus
Description: AM User Menus show and hide the menu items depending on user roles
Version:     1.0
Author:      Amin Pak
Author URI: mailto:amin.apk008@gmail.com
*/
defined('ABSPATH') or die();

define('AMUSERMENUS_DIRECTORY', plugin_dir_path(__FILE__));

define('AMUSERMENUS_URL', plugin_dir_url(__FILE__));

require 'includes/init.php';

// Hide Menus Start HERE
function hide_mnu()
{
	//Shows even menus for subscribers
    $user = wp_get_current_user();
    if (in_array('subscriber', (array)$user->roles))
    {
?>
	<script type="text/JavaScript">
	var ids = [];
	var lis = document.getElementsByClassName('menu-item');
	for(var i = 0; i < lis.length; i++ ){
	 ids.push(lis[i].id);
	}
	for(var i = 0; i < ids.length;  i += 2 ){
	    if (!(ids[i] == '')){
	    document.getElementById(ids[i]).remove();
	}
	}
	</script>
	<?php
    }
	//Shows odd menus for customers
    if (in_array('customer', (array)$user->roles))
    {
?>
	<script type="text/JavaScript">
	var ids = []
	var lis = document.getElementsByClassName('menu-item');
	for(var i = 0; i < lis.length; i++ ){
	 ids.push(lis[i].id);
	}
	for(var i = 1; i < ids.length;  i += 2 ){
	    if (!(ids[i] == '')){
	    document.getElementById(ids[i]).remove();
	}
	}
	</script>  
	<?php
    }
}
//Hide Menus End
add_action('wp_footer', 'hide_mnu');

