<?php
/**
 * Plugin Name:cc-make-defaultimagelink
 * Plugin URI:https://ccdragon.cc
 * Version:0.1
 * Author: ccdragon
 * Author URI:https://ccdragon.cc
 * Description:wordpress make gutenberg's imageblock link to media file by default
 * 
 * 
 */
wp_enqueue_script( 'makeDefaultImageLink_js',
    plugins_url( '/js/cc-make-defaultimagelink.js', __FILE__ ),
    array('wp-blocks')
);