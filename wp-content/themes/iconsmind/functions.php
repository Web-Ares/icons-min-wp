<?php

// Define PHP file constants.
define( 'TEMPLATEINC', TEMPLATEPATH . '/inc' );
define( 'TEMPLATEURI', get_template_directory_uri() );
define( 'DIRECT', TEMPLATEURI.'/dist/' );

show_admin_bar( false );


//define('DISALLOW_FILE_MODS',true); // Disable core and plugin updates

function mojFavicon() {
    echo '<link rel="Shortcut Icon" type="image/x-icon" href="'.TEMPLATEURI.'/faviconit/favicon.ico" />';
}
add_action( 'admin_head', 'mojFavicon' );

define( 'COUNT_ICONS', get_field('count_icons', 'options') );
define( 'COUNT_CATEGORIES', get_field('count_categories', 'options') );


// Load library files.
require_once( TEMPLATEINC . '/cpt.php' );
require_once( TEMPLATEINC . '/template.php' );
require_once( TEMPLATEINC . '/actions.php' );
require_once( TEMPLATEINC . '/shortcode.php' );
