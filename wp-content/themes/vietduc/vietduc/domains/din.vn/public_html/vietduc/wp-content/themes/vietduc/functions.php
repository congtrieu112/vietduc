<?php
include"widget/widget.php";
include "menu/menu.php";
add_theme_support( 'post-thumbnails' );
add_action('init', 'create_taxonomy');
function create_taxonomy()
{
    register_taxonomy('project_list', 'project', array(
            'labels' => array(
                'name' => _x('Danh mục dự án', 'taxonomy general name', 'executive'),
                'add_new_item' => __('Add category', 'executive'),
                'new_item_name' => __('New category', 'executive'),
            ),
            'exclude_from_search' => true,
            'has_archive' => true,
            'hierarchical' => true,
            'rewrite' => array('slug' => 'danh-muc-du-an', 'with_front' => false),
            'show_ui' => true,
            'show_tagcloud' => false,
        )
    );
}

function get_bfithumb($w, $h, $url)
{
    include_once 'includes/bfithumb.php';
    $params = array('width' => $w, 'height' => $h, 'crop' => true);
    $image = bfi_thumb($url, $params);
    return $image;
}

function custom_excerpt($string = "", $limitword = "", $kytu = "")
{
    $string = strip_tags($string);
    $string = preg_replace('/\n/', ' ', trim($string));
    $array = explode(' ', $string, $limitword);
    $string = "";
    for ($i = 0; $i <= (count($array) - 2); $i++):
        $string .= $array[$i] . " ";
    endfor;
    return $string . $kytu;
}
function get_all_image($content)
{
    global $post, $posts;
    $first_img = '';
    ob_start();
    ob_end_clean();
    preg_match_all('/src="(.*?)"/i', $content, $matches);
    $first_img = $matches [1];
    if (empty($first_img)) { //Defines a default image
        $first_img = '';
    }
    return $first_img;
}
add_filter( 'pre_option_image_default_size', 'my_set_default_image_size' );
function my_set_default_image_size () {
    return 'full';
}

function get_id_youtube($url){
    parse_str( parse_url( $url, PHP_URL_QUERY ), $my_array_of_vars );
    return $my_array_of_vars['v'];
}


