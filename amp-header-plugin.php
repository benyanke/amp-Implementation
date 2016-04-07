<?php
/*
Plugin Name: AMP Implementation
Plugin URI: http://benyanke.com
Description: Implements google amp in conjunction with Automatic's AMP plugin (required).
Author: Ben Yanke
Version: 1.0
Author URI: http://benyanke.com
 */

/********* Backend *********/


/********** Frontend **********/

function AddAmpTagsForHeader($buffer) {

	echo '<link rel="amphtml" href="' . get_permalink() . 'amp/" />' . "\n";

}

add_action('wp_head', 'AddAmpTagsForHeader', 99);


?>