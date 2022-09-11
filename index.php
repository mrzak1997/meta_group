<?php get_header(); ?>
<div class="col-lg-11">
    <main class="page-content blog-content">
        <div class="contents">
            <div class="bx-container">

                <div class="row">
                    <h1><i class="fa-solid fa-angle-left"><i class="fa-solid fa-angle-left"></i></i>
                        <?php
                        if (is_home()) {
                            echo "صفحه اصلی";
                        } elseif (is_category()) {
                            echo single_cat_title();
                        } elseif (is_tag()) {
                            echo single_tag_title();
                        } elseif (is_search()) {
                            echo "نتایج جستجو کلمه : ";
                            echo $_GET["s"];
                        } elseif (is_single() || is_page()) {
                            echo get_the_title();
                        }

                        ?>
                    </h1>
                    <hr>
                    <?php if (have_posts()) { ?>
                        <?php while (have_posts()) {
                            the_post(); ?>
                            <div class="post-bx col-9  col-lg-2 col-sm-2">
                                <?php if (has_post_thumbnail()) { ?>
                                    <img src="<?php echo get_the_post_thumbnail_url(); ?>" class="img-fluid" alt="<?php the_title(); ?>">
                                <?php } ?>
                                <span class="post-title"><?php echo get_the_title(); ?></span>
                                <?php the_excerpt(); ?>
                                <button type="button">
                                    <a href="<?php echo get_permalink(); ?>">بیشتر</a>
                                </button>
                            </div>
                    <?php }
                    wp_reset_postdata();
                    } else {
                        echo "نتیجه ای یافت نشد";
                    } ?>
                </div>

            </div>
            <div class="row">
                <div class="pagination-bx d-flex justify-content-center">
                    <?php echo paginate_links();?>
                </div>
            </div>
        </div>
    </main>
</div>
</div>

</div>
<?php get_footer(); ?>