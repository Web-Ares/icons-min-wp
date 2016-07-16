<?php
//required actions
remove_action('wp_head', 'rsd_link');
remove_action('wp_head', 'wp_generator');
add_filter('xmlrpc_enabled', '__return_false');
remove_action('wp_head', 'wlwmanifest_link');
// close required actions

remove_action('wp_head', 'print_emoji_detection_script', 7);
remove_action('wp_print_styles', 'print_emoji_styles');
remove_action('wp_head', 'feed_links', 2);
remove_action('wp_head', 'feed_links_extra', 3);
remove_action('wp_head', 'rel_canonical');
remove_action('wp_head', 'signuppageheaders');
remove_action('wp_head', 'wp_oembed_add_discovery_links');
remove_action('wp_head', 'wp_oembed_add_host_js');
// Отключаем сам REST API
add_filter('rest_enabled', '__return_false');

// Отключаем фильтры REST API
remove_action('xmlrpc_rsd_apis', 'rest_output_rsd');
remove_action('wp_head', 'rest_output_link_wp_head', 10, 0);
remove_action('template_redirect', 'rest_output_link_header', 11, 0);
remove_action('auth_cookie_malformed', 'rest_cookie_collect_status');
remove_action('auth_cookie_expired', 'rest_cookie_collect_status');
remove_action('auth_cookie_bad_username', 'rest_cookie_collect_status');
remove_action('auth_cookie_bad_hash', 'rest_cookie_collect_status');
remove_action('auth_cookie_valid', 'rest_cookie_collect_status');
remove_filter('rest_authentication_errors', 'rest_cookie_check_errors', 100);

// Отключаем события REST API
remove_action('init', 'rest_api_init');
remove_action('rest_api_init', 'rest_api_default_filters', 10, 1);
remove_action('parse_request', 'rest_api_loaded');

// Отключаем Embeds связанные с REST API
remove_action('rest_api_init', 'wp_oembed_register_route');
remove_filter('rest_pre_serve_request', '_oembed_rest_pre_serve_request', 10, 4);

remove_action('wp_head', 'wp_oembed_add_discovery_links');
// если собираетесь выводить вставки из других сайтов на своем, то закомментируйте след. строку.
//remove_action('wp_head', 'wp_oembed_add_host_js');
add_filter('the_content', 'do_shortcode');
add_filter('wpcf7_form_elements', 'do_shortcode');

if (function_exists('acf_add_options_page')) {
    acf_add_options_page();
}

add_action('wp_enqueue_scripts', 'add_js');

/* styles and scripts*/
function add_js()
{

    wp_deregister_script('jquery');

    wp_register_script('jquery',get_template_directory_uri().'/dist/js/vendors/jquery-2.2.1.min.js');
    wp_enqueue_script('jquery');

    wp_register_script('nicescroll',get_template_directory_uri().'/dist/js/vendors/jquery.nicescroll.min.js');
    wp_enqueue_script('nicescroll');
    wp_register_script('main',get_template_directory_uri().'/dist/js/main.min.js');

    wp_enqueue_script('main');

    if (is_page_template('page-home.php')){

        wp_enqueue_style('swiper', get_template_directory_uri().'/dist/css/swiper.min.css');

        wp_enqueue_style('index', get_template_directory_uri().'/dist/css/index.css');
        wp_enqueue_style('twenty_c', get_template_directory_uri().'/dist/css/twentytwenty.css');

        wp_register_script('swiper',get_template_directory_uri().'/dist/js/vendors/swiper.jquery.min.js');

        wp_enqueue_script('swiper');

        wp_register_script('event',get_template_directory_uri().'/dist/js/vendors/jquery.event.move.js');

        wp_enqueue_script('event');


        wp_register_script('twenty',get_template_directory_uri().'/dist/js/vendors/jquery.twentytwenty.js');

        wp_enqueue_script('twenty');

        


        wp_register_script('index',get_template_directory_uri().'/dist/js/index.min.js');
        wp_enqueue_script('index');

    }

    elseif(is_home() && !is_front_page()) {

        wp_enqueue_style('blog-page', get_template_directory_uri() . '/dist/css/blog-page.css');
        wp_enqueue_style('content', get_template_directory_uri() . '/dist/css/content-page.css');
    }
    elseif(is_page_template('page-about.php')){
        wp_enqueue_style('content', get_template_directory_uri() . '/dist/css/content-page.css');
        wp_enqueue_style('about_us', get_template_directory_uri() . '/dist/css/about.css');
    }
    elseif(is_singular('post')){
        wp_enqueue_style('content', get_template_directory_uri() . '/dist/css/content-page.css');
        wp_enqueue_style('blog', get_template_directory_uri() . '/dist/css/blog-page.css');
    }
    elseif(is_page_template(array('page-free-down.php','page-all-icons.php'))){
        wp_enqueue_style('free', get_template_directory_uri() . '/dist/css/free-icons-page.css');
    }
    elseif(is_page_template('page-privacy.php')){
        wp_enqueue_style('basic', get_template_directory_uri() . '/dist/css/basic.css');
        wp_enqueue_style('content', get_template_directory_uri() . '/dist/css/content-page.css');
    }
    elseif(is_page_template('page-pricing.php')){
        wp_enqueue_style('pricing', get_template_directory_uri() . '/dist/css/pricing.css');
    }
    elseif(is_page_template('page-support.php')){
        wp_enqueue_style('support', get_template_directory_uri() . '/dist/css/support.css');
    }
    elseif(is_page_template(array('page-thx-down.php','page-thx-buy.php'))){
        wp_enqueue_style('thnx', get_template_directory_uri() . '/dist/css/thanks.css');
    }
    else {
        wp_enqueue_style('content', get_template_directory_uri() . '/dist/css/content-page.css');
    }
  
    
}
wp_enqueue_style('style', get_template_directory_uri().'/style.css');


if ( function_exists( 'add_theme_support' ) ) add_theme_support( 'post-thumbnails' );
register_nav_menus(); ?>