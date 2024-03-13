<?php
add_action('wp_enqueue_scripts', 'theme_enqueue_styles');
// création d'une fonction pour appeler le style.css du thème parent
// get_template_directory_uri() renvoi l'URL du thème parent
function theme_enqueue_styles() {
    // Chargement du style.css du thème parent Twenty Twenty
    wp_enqueue_style('parent-style', get_template_directory_uri() . '/style.css');
    // Chargement du css/theme.css pour nos personnalisations
    wp_enqueue_style('theme-style', get_stylesheet_directory_uri() . '/style.css', array(), filemtime(get_stylesheet_directory() . '/style.css'));
	
	// Supprimer les balises p rajoutées par Contact Form7
	add_filter('wpcf7_autop_or_not', '__return_false');
}


//Ajouter Admin au menu si l'utilisateur est connecté
	add_filter( 'wp_nav_menu_items', 'add_extra_item_to_nav_menu', 10, 2 );
	function add_extra_item_to_nav_menu( $items, $args ) {
		if (is_user_logged_in()) {
			if ($args->theme_location == 'primary' || $args->theme_location == 'mobile_menu') {
			$items .= '<li class="MenuColorNousRencontrer" id="menu-item-42"><a href="../planty/wp-Admin/">Admin</a></li>';
			}
		}
		return $items;
	}
?>