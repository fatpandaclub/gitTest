<?php
/**
 * @package Hello Doge
 * @version 1.6
 */
/*
Plugin Name: Hello Doge
Description: Happy doge on your screen
Author: Nina Cecilie Højholdt
Version: 1.0
*/

function get_doge() {
	/** These are the lyrics to Hello Dolly */
	$doges = array(
				'<img src="' . WP_PLUGIN_URL . '/gitTest/img/shiba01.jpg' . '"/>',
				'<img src="' . WP_PLUGIN_URL . '/gitTest/img/shiba02.jpg' . '"/>',
				'<img src="' . WP_PLUGIN_URL . '/gitTest/img/shiba03.jpg' . '"/>',
				'<img src="' . WP_PLUGIN_URL . '/gitTest/img/shiba04.jpg' . '"/>',
			);

	shuffle($doges);
	$ranDoge = $doges[0];

	// And then randomly choose a line
	return $ranDoge;
}

// This just echoes the chosen line, we'll position it later
function doge() {
	$chosenDoge = get_doge();
	echo '<div class="doge">' . $chosenDoge . '</div>';
}

// Now we set that function up to execute when the admin_notices action is called
add_action( 'admin_notices', 'doge' );

// We need some CSS to position the paragraph
function doge_css() {
	// This makes sure that the positioning is also good for right-to-left languages
	echo "
	<style type='text/css'>
	.doge img {
		float: right;
		padding: 15px;
		margin: 0;
		width: 200px;
		height: auto!important;
	}
	</style>
	";
}

add_action( 'admin_head', 'doge_css' );

?>