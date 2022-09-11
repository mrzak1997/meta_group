<?php get_header(); ?>
<div class="col-lg-11">
    <main class="page-content single-content">

        <div class="row">
            <div class="col-12 col-lg-8 col-md-7 col-sm-12">
                <div class="post-contents">
                    <?php while (have_posts()) {
                        the_post(); ?>
                        <h1 class="post-title"><?php echo get_the_title(); ?></h1>
                        <hr>
                        <?php if (has_post_thumbnail()) { ?>
                            <img class="img-fluid img-thumbnail post_thumbnail" src="<?php echo get_the_post_thumbnail_url(); ?>" alt="<?php the_title(); ?>">
                        <?php } ?>
                        <div class="meta">
                            <span><i class="fa-solid fa-calendar"></i> <?php echo get_the_date(); ?></span>
                            <span><i class="fa-solid fa-comment"></i> <?php echo get_comments_number(); ?> نظر</span>
                            <span><i class="fa-solid fa-archive"></i> <?php the_category(" , "); ?></span>
                        </div>

                        <hr>
                        <div class="single_text">
                            <?php the_content(); ?>
                        </div>
                        <div class="tags-box">
                            <?php
                            if (has_tag()) {
                                the_tags("# ", " ");
                            } else {
                                echo "# تگی برای این نوشته وجود ندارد";
                            }
                            ?>
                        </div>
                    <?php }
                    wp_reset_query(); ?>
                    <?php get_template_part("inc/single", "releated_posts") ?>
                    <h3 id="comment-title">دیدگاه ها</h3>
                    <?php comments_template();?>
                </div>
            </div>
            <?php get_template_part("inc/single", "sidebar"); ?>

        </div>
    </main>
</div>
</div>

</div>
<?php get_footer(); ?>