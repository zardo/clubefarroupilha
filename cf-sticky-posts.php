
<?php 
$args = array(
    'posts_per_page'      => 6,
    'post__in'            => get_option( 'sticky_posts' ),
    'ignore_sticky_posts' => 1,
);
$carousel_posts = new WP_Query( $args );
?>

<div class="row">
    <div class="col-xs-12 col-sm-8">
        <div class="row">
            <div class="col-xs-12">
                <?php $carousel_posts->the_post(); $post_img = wp_get_attachment_image_src( get_post_thumbnail_id(), 'large' ); ?>
                <a href="<?php the_permalink() ?>" class="cf-sticky cf-sticky-main-left">
                    <div style="background:url(<?= $post_img[0] ?>) center center; background-size:cover;" class="cf-sticky-cover">
                        <div class="cf-sticky-overlay"></div>
                        <div class="cf-sticky-title">
                            <h3><?php the_title() ?></h3>
                            <h5><?php the_date() ?></h5>
                        </div>
                    </div>
                </a>
            </div>
        </div>

        <div class="row">
            <div class="col-xs-4">
                <?php $carousel_posts->the_post(); $post_img = wp_get_attachment_image_src( get_post_thumbnail_id(), 'large' ); ?>
                <a href="<?php the_permalink() ?>" class="cf-sticky cf-sticky-sub-left">
                    <div style="background:url(<?= $post_img[0] ?>) center center; background-size:cover;" class="cf-sticky-cover">
                        <div class="cf-sticky-overlay"></div>
                        <div class="cf-sticky-title">
                            <h3><?php the_title() ?></h3>
                            <h5><?php the_date() ?></h5>
                        </div>
                    </div>
                </a>
            </div>

            <div class="col-xs-4">
                <?php $carousel_posts->the_post(); $post_img = wp_get_attachment_image_src( get_post_thumbnail_id(), 'large' ); ?>
                <a href="<?php the_permalink() ?>" class="cf-sticky cf-sticky-sub-left">
                    <div style="background:url(<?= $post_img[0] ?>) center center; background-size:cover;" class="cf-sticky-cover">
                        <div class="cf-sticky-overlay"></div>
                        <div class="cf-sticky-title">
                            <h3><?php the_title() ?></h3>
                            <h5><?php the_date() ?></h5>
                        </div>
                    </div>
                </a>
            </div>

            <div class="col-xs-4">
                <?php $carousel_posts->the_post(); $post_img = wp_get_attachment_image_src( get_post_thumbnail_id(), 'large' ); ?>
                <a href="<?php the_permalink() ?>" class="cf-sticky cf-sticky-sub-left">
                    <div style="background:url(<?= $post_img[0] ?>) center center; background-size:cover;" class="cf-sticky-cover">
                        <div class="cf-sticky-overlay"></div>
                        <div class="cf-sticky-title">
                            <h3><?php the_title() ?></h3>
                            <h5><?php the_date() ?></h5>
                        </div>
                    </div>
                </a>
            </div>
        </div>
    </div>

    <div class="col-xs-12 col-sm-4">
        <div class="row">
            <div class="col-xs-12">
                <?php $carousel_posts->the_post(); $post_img = wp_get_attachment_image_src( get_post_thumbnail_id(), 'large' ); ?>
                <a href="<?php the_permalink() ?>" class="cf-sticky cf-sticky-main-right">
                    <div style="background:url(<?= $post_img[0] ?>) center center; background-size:cover;" class="cf-sticky-cover">
                        <div class="cf-sticky-overlay"></div>
                        <div class="cf-sticky-title">
                            <h3><?php the_title() ?></h3>
                            <h5><?php the_date() ?></h5>
                        </div>
                    </div>
                </a>
            </div>
        </div>

        <div class="row">
            <div class="col-xs-12">
                <?php $carousel_posts->the_post(); $post_img = wp_get_attachment_image_src( get_post_thumbnail_id(), 'large' ); ?>
                <a href="<?php the_permalink() ?>" class="cf-sticky cf-sticky-main-right">
                    <div style="background:url(<?= $post_img[0] ?>) center center; background-size:cover;" class="cf-sticky-cover">
                        <div class="cf-sticky-overlay"></div>
                        <div class="cf-sticky-title">
                            <h3><?php the_title() ?></h3>
                            <h5><?php the_date() ?></h5>
                        </div>
                    </div>
                </a>
            </div>
        </div>
    </div>
</div>