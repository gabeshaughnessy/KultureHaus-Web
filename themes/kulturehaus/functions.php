<?php
define('THEMELOCATION', get_bloginfo('stylesheet_directory'), true);
 wp_enqueue_script( 'jquery' );
wp_enqueue_script('custom_scripts', THEMELOCATION . '/scripts/custom_scripts.js', 'jquery');
?>