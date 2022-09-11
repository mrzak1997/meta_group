<?php

function wp_settigns($wp_customize)
{
    $wp_customize->add_panel(
        "wp_panel",
        [
            "title" => "تنظیمات قالب",
            "description" => "this is disciption",
            "priority" => 101,
            "description_hidden" => true
        ]
    );
    $wp_customize->add_section(
        "wp_section",
        [
            "title" => "section",
            "desciption" => "",
            "panel" => "wp_panel",
            "priority" => 1,
            "description_hidden" => true
        ]
    );
    $wp_customize->add_setting(
        "settings",
        array(
            "default" => "",
            "transport" => "refresh",
            "sanitize_callback" => ""
        )
    );
    $wp_customize->add_control(
        "settings",
        array(
            "label" => "textbox",
            "desciption" => "control description",
            "section" => "wp_section",
            "priority" => 1,
            "type" => "text",
            "capability" => "edit_theme_options",
            "input_attrs" => array(
                "class" => "inpu_class",
                "style" => "",
                "placeholder" => "helloooo"
            )
        )
    );
}
add_action("customize_register", "wp_settigns");
