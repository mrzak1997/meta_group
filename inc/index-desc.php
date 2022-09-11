<br>
<hr class="wrapper">
<br>
<div class="w-100"></div>
<main class="row d-flex justify-content-center">
    <div class="col-lg-11">
        <div class="row">
            <div class="col-lg-5 col-md-12 desc">
                <img src="<?php echo get_template_directory_uri(); ?>/images/desc-img3.jpeg" alt="desc-img" class="img-fluid img-thumbnail">
                <h5 class="desc_group_name">گروه نرم افزاری متا</h5>
                <span>با زیباترین و به صرفه ترین طراحی در ایران!</span>
                <?php
                if (is_active_sidebar("theme_desc")) {
                    dynamic_sidebar("theme_desc");
                }
                ?>
            </div>