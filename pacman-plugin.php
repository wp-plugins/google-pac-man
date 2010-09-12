<?php
/*
Plugin Name: Google Pac-Man
Plugin URI: http://themergency.com
Description: Add Google's mini Pac-Man game to your blog
Version: 0.1
Author: Brad Vincent
Author URI: http://themergency.com
License: GPL2
*/

class GooglePacMan {
	
	//constructor
	function GooglePacMan() {
	
		define('PACMAN_ABSPATH', WP_PLUGIN_DIR.'/'.plugin_basename( dirname(__FILE__) ).'/' );
		define('PACMAN_URLPATH', WP_PLUGIN_URL.'/'.plugin_basename( dirname(__FILE__) ).'/' );

		if (!is_admin()) {
			add_shortcode("pacman", array(&$this, "shortcode"));
		}
	}
	
	function shortcode($atts) {
		$url = PACMAN_URLPATH . "pacman-frame.php";
		return "<iframe frameborder=0 marginheight=0 marginwidth=0 scrolling=0 width=600 height=220 src='$url'></iframe>";
	}
}

add_action("init", create_function('', 'global $GooglePacMan; $GooglePacMan = new GooglePacMan();'));

?>