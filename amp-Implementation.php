<?php
/*
Plugin Name: AMP Implementation
Plugin URI: https://github.com/benyanke/amp-Implementation
Description: Implements google amp in conjunction with AUTOMATIC's AMP plugin (required).
Author: Ben Yanke
Version: 1.0
Author URI: https://github.com/benyanke
 */

/********** Backend **********/

// If it is a post, add code to header
function AddAmpTagsForHeader($buffer) {
	if (! is_page() ) {
		echo '<link rel="amphtml" href="' . get_permalink() . '/amp" />\n\n';
	}
}

// Add hook
add_action('wp_head', 'AddAmpTagsForHeader', 99);


?>
