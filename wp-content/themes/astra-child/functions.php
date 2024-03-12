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


//Si l'utilisateur se connecte
    function check_login( $user_login, $user ) {
        
		
		echo "<script type='text/javascript'>alert('test');</script>";
        
    }
    add_action('wp_login', 'check_login', 10, 2);


//Si l'utilisateur se déconnecte
    function unlog( $user_login, $user ) {
        
        
    }
    add_action('wp_logout', 'unlog', 10, 2);


?>