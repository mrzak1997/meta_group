<!DOCTYPE html>
<html <?php echo get_language_attributes(); ?>>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <link rel="icon" href="<?php echo get_template_directory_uri(); ?>/images/logo.png">
    
    <!-- JavaScript Bundle with Popper -->

    <?php wp_head(); ?>
</head>
<body dir="rtl">
    
    <header >
            <div class="row">
                <div class="col-6 d-flex justify-content-start">
                    <i class="fas fa-bars menu_icon"></i>
                    <div class="logo">
                        <img src="<?php echo get_template_directory_uri(); ?>/images/logo.png" alt="logo">
                        گروه نرم افزاری متا
                    </div>
                </div>
                <div class="col-6 d-flex justify-content-end align-items-center">
                   <form action="#" class="searchbox">
                       <input type="text" class="search-textbox" placeholder="جستجو...">
                        <button type="submit" class="fa-solid fa-magnifying-glass"></button>
                    </form>
                </div>
            </div>
        
    </header> 
    <div class="middle-section">
        
            <div class="row d-flex justify-content-center">
                <nav class="col-11 d-flex align-items-center floating-menu">
                    <ul>
                        <li><a href="">خانه</a></li>
                        <li><a href="#customers">مشتریان</a></li>
                        <li><a href="">نمونه کار ها</a></li>
                        <li><a href="">تماس با ما</a></li>
                        <li><a href="#about">درباره ما</a></li>
                    </ul>
                    <div class="logo">
                        <img src="<?php echo get_template_directory_uri(); ?>/images/logo.png" alt="logo">
                        گروه نرم افزاری متا
                    </div>
                </nav> 
            </div>