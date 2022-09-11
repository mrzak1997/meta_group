<div class="row">
    <?php
    $post_view = new WP_Query(array(
        "post_type" => "post",
        "posts_per_page" => "3",
        "post_status" => "publish",
        "category_name" => "wordpress"
    ));
    if($post_view->have_posts()){
    ?>
    <div class="col-12 col-lg-6 col-md-6 ">
        <div class="posts-boxes">
            <span class="posts-title">مطالب پر بازدید</span>
            <?php while($post_view->have_posts()){ $post_view->the_post();?>
            <div class="row post-box">
                <div class="col-5 col-lg-5">
                    <div class="pic">
                        <img src="<?php echo get_the_post_thumbnail_url(); ?>" alt="<?php echo get_the_title(); ?>" class="img-fluid">
                    </div>
                </div>
                <div class=" col-7 col-lg-7">
                    <div class="desc">
                        <a href="<?php the_permalink(); ?>"><h5><?php echo get_the_title(); ?></h5></a>
                        <p><?php echo get_the_excerpt(); ?></p>
                        <span><i class="fa-regular fa-calendar"></i> <?php echo get_the_date(); ?></span>
                    </div>
                </div>
            </div>
            <?php } ?>
        </div>
    </div>
    <?php } wp_reset_query();?>

    <?php
    $wordpress_posts = new WP_Query(array(
        "post_type" => "post",
        "posts_per_page" => "3",
        "post_status" => "publish",
        "category_name" => "wordpress"
    ));
    if ($wordpress_posts->have_posts()) {
    ?>
        <div class="col-12 col-lg-6 col-md-6 ">
            <div class="posts-boxes">
                <span class="posts-title">مطالب وردپرس</span>
                <?php while ($wordpress_posts->have_posts()) {$wordpress_posts->the_post(); ?>
                    <div class="row post-box">
                        <div class="col-5 col-lg-5">
                            <div class="pic">
                                <img src="<?php echo get_the_post_thumbnail_url(); ?>" alt="" class="img-fluid">
                            </div>
                        </div>
                        <div class=" col-7 col-lg-7">
                            <div class="desc">
                            <a href="<?php the_permalink(); ?>"><h5><?php echo get_the_title(); ?></h5></a>
                                <p><?php echo get_the_excerpt(); ?></p>
                                <span><i class="fa-regular fa-calendar"></i> <?php echo get_the_date(); ?></span>
                            </div>
                        </div>
                    </div>
                <?php } ?>
            </div>
        </div>
    <?php } wp_reset_query();?>

</div>