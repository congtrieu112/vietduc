<?php
add_action("admin_menu",'config_taomenu');
function config_taomenu(){

		add_menu_page('social', 'Tùy chỉnh', 'edit_themes', "config_slug", "config_option",'dashicons-admin-generic',58	);

    }
function config_option(){
	include "setting.php";
}

?>