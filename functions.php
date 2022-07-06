<?php

    function theme_setup(){
        add_theme_support("title-tag");
    }
    add_action("after_setup_theme","theme_setup");

    function add_css_js(){
        wp_enqueue_style("bootstrap","https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css",[],"1.0.0");
        wp_enqueue_style("style",get_template_directory_uri()."/style.css",[],"1.0.0");
        wp_enqueue_style("fontawsome",get_template_directory_uri()."/styles/all.min.css",[],"1.0.0");

        wp_enqueue_script("bootstrap_js","https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js",[],"1.0.0",true);
        wp_enqueue_script("jquery_me","https://code.jquery.com/jquery-3.6.0.min.js",[],"3.6.0",true);
        wp_enqueue_script("script",get_template_directory_uri()."/scripts/script.js",["jquery_me"],"1.0.0",true);
    }

    add_action("wp_enqueue_scripts","add_css_js");
    
    ?>