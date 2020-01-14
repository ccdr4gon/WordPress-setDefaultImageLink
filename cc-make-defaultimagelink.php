<?php
/**
 * Plugin Name:cc-make-defaultimagelink
 * Plugin URI:https://ccdragon.cc
 * Version:0.1
 * Author: ccdragon
 * Author URI:https://ccdragon.cc
 * Description: make image block a default value of attribute linkto
 * 
 * 
 */
wp_enqueue_script( 'makeDefaultImageLink_js',
    plugins_url( '/js/makeDefaultImageLink.js', __FILE__ ),
    array('wp-blocks')
);