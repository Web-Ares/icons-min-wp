<?php
global $post;

function get_menus($post_id, $menu_name)
{
    $menu_items = wp_get_nav_menu_items($menu_name, array(
        'orderby' => 'menu_order',
        'post_type' => 'nav_menu_item',
        'post_status' => 'publish',
        'output' => ARRAY_A,
        'output_key' => 'menu_order',
        'update_post_term_cache' => false));
    $menu_class = 'drop-menu__menu';

    if ($menu_name == 'middle_menu') {
        $menu_class = 'drop-menu__navigation';
    }
    if ($menu_name == 'bottom_menu') {
        $menu_class = 'drop-menu__legally';
    }

    $menu_list = '<ul class="' . $menu_class . '">';

    foreach ((array)$menu_items as $key => $menu_item) {

        if ($post_id == $menu_item->object_id) {
            $class = "class='active " . $menu_item->classes[0] . "'";
        } else {
            $class = "class = '" . $menu_item->classes[0] . "'";
        }


        $title = $menu_item->title;
        $url = $menu_item->url;

        $menu_list .= '<li><a ' . $class . ' href="' . $url . '">' . $title . '</a></li>';

    }
    return $menu_list . '</ul>';
}

function similar_posts($post_id = false)
{

    $args = array(
        'posts_per_page' => 3,
        'post_type' => 'post',
        'post_status' => 'publish',
        'post__not_in' => array($post_id),
    );
    $q = new WP_Query($args);

 

    $post_list ='';
    if($q->have_posts()){
        $post_list .= '<!-- blog__posts -->
                <div class="blog__posts">
                    <h2 class="blog__posts-title">You might also like ...</h2>
                    <!-- blog__posts-list -->
                    <ol class="blog__posts-list">';
        while ($q->have_posts()) :
            $q->the_post();
            $serv_title = get_the_title();
            $link = get_the_permalink();

            $post_list .='<li><a href="'.$link.'">'.$serv_title.'</a></li>';

        endwhile;
        $post_list .= ' </ol>
                    <!-- /blog__posts-list -->
    
                </div>
                <!-- /blog__posts -->';
    } else {
        $post_list .= 'No related posts yet';
    }



    wp_reset_query();
    return $post_list;

}



add_filter('next_post_link', 'posts_link_next_class');
add_filter('previous_post_link', 'posts_link_prev_class');
add_filter('next_posts_link_attributes', 'posts_link_attributes_1');
add_filter('previous_posts_link_attributes', 'posts_link_attributes_2');

function posts_link_attributes_1()
{
    return 'class="pagination__next"';
}
function posts_link_next_class($format)
{
    $format = str_replace('href=', 'class="pagination__next" href=', $format);
    return $format;
}
function posts_link_attributes_2()
{
    return 'class="pagination__prev"';
}
function posts_link_prev_class($format)
{
    $format = str_replace('href=', 'class="pagination__prev" href=', $format);
    return $format;
}


if (!function_exists('adoric_post_nav')) :

    function adoric_post_nav()
    {
        global $post;

        // Don't print empty markup if there's nowhere to navigate.
        $previous = (is_attachment()) ? get_post($post->post_parent) : get_adjacent_post(false, '', true);
        $next = get_adjacent_post(false, '', false);

        if (!$next && !$previous)
            return;
        ?>
        <div class="pagination">
            <?php previous_post_link('%link', 'older posts'); ?>
            <?php next_post_link('%link', 'newer posts'); ?>
        </div><!-- .navigation -->
        <?php
    }
endif;