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
	$doges = array(
				'<img src="' . WP_PLUGIN_URL . '/gitTest/img/shiba01.jpg' . '"/>',
				'<img src="' . WP_PLUGIN_URL . '/gitTest/img/shiba02.jpg' . '"/>',
				'<img src="' . WP_PLUGIN_URL . '/gitTest/img/shiba03.jpg' . '"/>',
				'<img src="' . WP_PLUGIN_URL . '/gitTest/img/shiba04.jpg' . '"/>',
			);

	shuffle($doges);
	$ranDoge = $doges[0];

	return $ranDoge;
}

function doge() {
	$chosenDoge = get_doge();
	echo '<div class="doge">' . $chosenDoge . '</div>';
}

add_action( 'admin_notices', 'doge' );

function doge_css() {
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