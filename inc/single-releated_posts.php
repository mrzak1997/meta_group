<?php
$posts_cat = wp_get_post_categories(get_the_ID(), array('fields' => 'ids'));
$related_posts = new WP_Query(array(
    "post_type" => "post",
    "posts_per_page" => "3",
    "post_status" => "publish",
    "category__in" => $posts_cat,
    "post__not_in" =>array($post->ID),
    "orderby" => "rand"
));

if ($related_posts->have_posts()) {
?>

    <div class="related_postsbx">
        <span class="related_postsbx_title">مطالب مرتبط</span>
        <?php while ($related_posts->have_posts()) {
            $related_posts->the_post(); ?>
            <h6><a href="<?php echo get_permalink(); ?>"><i class="fa-solid fa-angle-left"></i><?php echo get_the_title(); ?></a></h6>
        <?php } wp_reset_query(); ?>
    </div>

<?php } ?>