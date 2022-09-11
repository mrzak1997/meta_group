<?php 
 function theme_widget(){
    register_sidebar(array(
        "id"=>"theme_desc",
        "name"=>"ابزارک توضیحات",
        "description"=> "ابزارک درباره گروه در صفحه اصلی"
    ));
    register_sidebar(array(
        "id"=>"single_latest_posts",
        "name"=>"ابزارک آخرین پست ها در صفحه توضیحات",
        "description"=>"ابزارک آخرین پست ها در صفحه توضیحات",
        "before_widget"=>"<div class='left-box'>",
        "after_widget"=>"</div>",
        "before_title"=>"<span>",
        "after_title"=>"</span>"
    ));
    register_sidebar(array(
        "id"=>"single_cats",
        "name"=>"ابزارک دسته بندی در صفحه توضیحات",
        "description"=>"ابزارک دسته بندی در صفحه توضیحات",
        "before_widget"=>"<div class='left-box'>",
        "after_widget"=>"</div>",
        "before_title"=>"<span>",
        "after_title"=>"</span>"
    ));
    register_sidebar(array(
        "id"=>"social_media",
        "name"=>"ابزارک شبکه های اجتماعی در فوتر",
        "description"=>"ابزارک شبکه های اجتماعی در فوتر",
        "before_widget"=>"<div class='social-media-box d-flex justify-content-center'>",
        "after_widget"=>"</div>",
        "before_title"=>"<span>",
        "after_title"=>"</span>"
    ));
}
add_action("widgets_init","theme_widget");
?>