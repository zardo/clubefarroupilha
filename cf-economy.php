<?php 
// POSTS DE ECONOMIA
$economy_posts = new WP_Query(array('posts_per_page' => 6, 'ignore_sticky_posts' => 1, 'category_name' => 'economia'));
?>
<div class="row">
    <div class="col-xs-12 cf-economy-section">
        <h3>Economia</h3>

        <div class="col-xs-12 col-sm-6 cf-section-post cf-section-post-lg">
            <?php $economy_posts->the_post(); $post_img = wp_get_attachment_image_src( get_post_thumbnail_id(), 'large' ); ?>
            <div class="cf-home-post-img">
                <a href="<?php the_permalink() ?>" style="background:url(<?= $post_img[0] ?>) center center; background-size:cover;" class="cf-sticky-cover"></a>
            </div>
            <div class="cf-home-post-content cf-home-post-img-separator">
                <h5><a href="<?php the_author_url(); ?>"><?php the_author() ?></a></h5>
                <h4><a href="<?php the_permalink() ?>"><?php the_title() ?></a></h4>
            </div>

            <?php $economy_posts->the_post(); $post_img = wp_get_attachment_image_src( get_post_thumbnail_id(), 'large' ); ?>
            <div class="cf-home-post-img">
                <a href="<?php the_permalink() ?>" style="background:url(<?= $post_img[0] ?>) center center; background-size:cover;" class="cf-sticky-cover"></a>
            </div>
            <div class="cf-home-post-content">
                <h5><a href="<?php the_author_url(); ?>"><?php the_author() ?></a></h5>
                <h4><a href="<?php the_permalink() ?>"><?php the_title() ?></a></h4>
            </div>
        </div>

        <div class="col-xs-6 col-sm-3 cf-section-post">
            <?php $economy_posts->the_post(); $post_img = wp_get_attachment_image_src( get_post_thumbnail_id(), 'large' ); ?>
            <div class="cf-home-post-img">
                <a href="<?php the_permalink() ?>" style="background:url(<?= $post_img[0] ?>) center center; background-size:cover;" class="cf-sticky-cover"></a>
            </div>
            <div class="cf-home-post-content cf-home-post-img-separator">
                <h5><a href="<?php the_author_url(); ?>"><?php the_author() ?></a></h5>
                <h4><a href="<?php the_permalink() ?>"><?php the_title() ?></a></h4>
            </div>

            <?php $economy_posts->the_post(); $post_img = wp_get_attachment_image_src( get_post_thumbnail_id(), 'large' ); ?>
            <div class="cf-home-post-img">
                <a href="<?php the_permalink() ?>" style="background:url(<?= $post_img[0] ?>) center center; background-size:cover;" class="cf-sticky-cover"></a>
            </div>
            <div class="cf-home-post-content">
                <h5><a href="<?php the_author_url(); ?>"><?php the_author() ?></a></h5>
                <h4><a href="<?php the_permalink() ?>"><?php the_title() ?></a></h4>
            </div>
        </div>

        <div class="col-xs-6 col-sm-3 cf-section-post">
            <?php $economy_posts->the_post(); $post_img = wp_get_attachment_image_src( get_post_thumbnail_id(), 'large' ); ?>
            <div class="cf-home-post-img">
                <a href="<?php the_permalink() ?>" style="background:url(<?= $post_img[0] ?>) center center; background-size:cover;" class="cf-sticky-cover"></a>
            </div>
            <div class="cf-home-post-content cf-home-post-img-separator">
                <h5><a href="<?php the_author_url(); ?>"><?php the_author() ?></a></h5>
                <h4><a href="<?php the_permalink() ?>"><?php the_title() ?></a></h4>
            </div>
            
            <?php $economy_posts->the_post(); $post_img = wp_get_attachment_image_src( get_post_thumbnail_id(), 'large' ); ?>
            <div class="cf-home-post-img">
                <a href="<?php the_permalink() ?>" style="background:url(<?= $post_img[0] ?>) center center; background-size:cover;" class="cf-sticky-cover"></a>
            </div>
            <div class="cf-home-post-content">
                <h5><a href="<?php the_author_url(); ?>"><?php the_author() ?></a></h5>
                <h4><a href="<?php the_permalink() ?>"><?php the_title() ?></a></h4>
            </div>
        </div>

    </div>
</div>