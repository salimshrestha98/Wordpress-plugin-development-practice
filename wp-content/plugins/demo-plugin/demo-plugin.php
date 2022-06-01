<?php

/*
* Plugin Name: Demo Plugin
* Author: Salim Shrestha
* Author URI: https://salim.com.np
* Description: Simple Post Like Dislike System
*/


/* 

Hooks are the places where we can add our own code or change default actions of Wordpress. Two types of hooks are:
1. Actions => allows us to perform certain actions
2. Filters => allows us to modify data during execution

*/

function print_random_number_callback() {
    echo rand(1,9);
}

add_action('init', 'print_random_number_callback');

function return_inverse($text) {
    return "Inverse text ".strrev($text);
}

add_filter('the_title', 'return_inverse');