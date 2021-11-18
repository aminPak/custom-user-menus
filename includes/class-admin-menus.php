<?php defined('ABSPATH') or die();

class User_Menus_Admin_Menus
{
    public function __construct()
    {
        add_action('admin_menu', array(
            $this,
            'admin_menu'
        ));
    }

    public function admin_menu()
    {
        add_menu_page('User Menus', 'User Menus', 'administrator', 'custom-user-menus', array(
            $this,
            'index'
        ) , 'dashicons-welcome-widgets-menus', 110);
    }

    public function index()
    {
        if (isset($_POST['plugin']))
        {
            deactivate_plugins('/custom-user-menus/custom-user-menus.php');

            wp_redirect(get_admin_url() . 'plugins.php');
        }

        include_once AMUSERMENUS_DIRECTORY . 'templates/index.php';
    }
}
new User_Menus_Admin_Menus();

