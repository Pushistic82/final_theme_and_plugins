<?php

/**
 *
 * Jax Lite Theme Functions
 *
 * functions.php file.
 *
 * @author  Alessandro Vellutini
 *
*/

	require_once dirname(__FILE__) . '/core/functions.php';

	function my_init() {
	if (!is_admin()) {
		wp_enqueue_script('jquery');
	}
}
add_action('init', 'my_init');

?>
