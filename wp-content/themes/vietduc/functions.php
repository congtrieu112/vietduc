<?php
include"widget/widget.php";
include "menu/menu.php";
include"mails/mail.php";
include "includes/taomenu.php";
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


add_action('wp_ajax_nopriv_sentmail', 'sentmail');
add_action('wp_ajax_sentmail', 'sentmail');
function sentmail(){
    $option = array(
        'email'=> $_POST['email'],
        'note'=>$_POST['message'],
        'fullname'=>$_POST['name'],
        'phone'=>$_POST['phone'],
        );
   sent_mail($option); 
}


function pn_get_attachment_id_from_url( $attachment_url = '' ) {

    global $wpdb;
    $attachment_id = false;

    // If there is no url, return.
    if ( '' == $attachment_url )
        return;

    // Get the upload directory paths
    $upload_dir_paths = wp_upload_dir();

    // Make sure the upload path base directory exists in the attachment URL, to verify that we're working with a media library image
    if ( false !== strpos( $attachment_url, $upload_dir_paths['baseurl'] ) ) {

        // If this is the URL of an auto-generated thumbnail, get the URL of the original image
        $attachment_url = preg_replace( '/-\d+x\d+(?=\.(jpg|jpeg|png|gif)$)/i', '', $attachment_url );

        // Remove the upload path base directory from the attachment URL
        $attachment_url = str_replace( $upload_dir_paths['baseurl'] . '/', '', $attachment_url );

        // Finally, run a custom database query to get the attachment ID from the modified attachment URL
        $attachment_id = $wpdb->get_var( $wpdb->prepare( "SELECT wposts.ID FROM $wpdb->posts wposts, $wpdb->postmeta wpostmeta WHERE wposts.ID = wpostmeta.post_id AND wpostmeta.meta_key = '_wp_attached_file' AND wpostmeta.meta_value = '%s' AND wposts.post_type = 'attachment'", $attachment_url ) );

    }

    return $attachment_id;
}

