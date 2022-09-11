<?php
function theme_setup(){
    add_theme_support("title-tag");
    add_theme_support("widgets");
    add_theme_support("post-thumbnails");
    add_theme_support("custom-logo");
    register_nav_menus(array(
        "Main_Menu"=>"منوی اصلی",
        "Footer_Menu2"=>"منوی فوتر 2",
        "Footer_Menu1"=>"منوی فوتر 1",
    ));
}
add_action("after_setup_theme","theme_setup");

?>