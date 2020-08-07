<?php

function theme_add_theme_support() {
	add_theme_support( 'custom-header' );
	add_theme_support( 'automatic-feed-links' );
	add_theme_support( 'title-tag' );
	add_theme_support( 'post-formats', array(
		'aside',
		'link',
		'gallery',
		'status',
		'quote',
		'image',
		'video',
		'audio',
		'chat'
	) );
	add_theme_support( 'html5', array(
		'comment-list',
		'comment-form',
		'search-form',
		'gallery',
		'caption',
	) );
	add_theme_support( 'post-thumbnails' );
}
add_action( 'after_setup_theme', 'theme_add_theme_support' );

function wp_custom_new_menu() {
	register_nav_menu('wpblog-custom-menu', __( 'WP Blog Menu' ));
}
add_action( 'init', 'wp_custom_new_menu' );

// TEMP: Enable update check on every request. Normally you don't need this! This is for testing only!
set_site_transient('update_themes', null);
#set_site_transient(array('WPThemeUpdateClass', 'check_for_update'), null);

require 'k1-updater.php';
new K1Updater();