<?php
function dang_ky_widget_voi_admin()
{
    register_sidebar(array(
        'name' => __('contact', 'sanphamweb'),
        'id' => 'contact-page',
        'description' => __('thong tin contact ', 'sanphamweb'),
        'before_widget' => '',
        'after_widget' => '',
        'before_title' => '',
        'after_title' => '',
        ));
    register_sidebar(array(
        'name' => __('footer', 'sanphamweb'),
        'id' => 'footer-page',
        'description' => __('thong tin footer ', 'sanphamweb'),
        'before_widget' => '',
        'after_widget' => '',
        'before_title' => '',
        'after_title' => '',
    ));



}

add_action('widgets_init', 'dang_ky_widget_voi_admin');
