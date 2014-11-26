
<?php 
// POSTS DE COLUNISTAS
$dalla_costa_post = new WP_Query(array('posts_per_page' => 1,'ignore_sticky_posts' => 1,'author' => 4));
$mateus_maciel_post = new WP_Query(array('posts_per_page' => 1,'ignore_sticky_posts' => 1,'author' => 9));
$felipe_rosa_post = new WP_Query(array('posts_per_page' => 1,'ignore_sticky_posts' => 1,'author' => 5));
$robert_barricelli_post = new WP_Query(array('posts_per_page' => 1,'ignore_sticky_posts' => 1,'author' => 10));
?>
<div class="row">
    <div class="col-xs-12 cf-columnists">
        <h3>Colunistas</h3>

        <?php $dalla_costa_post->the_post(); $post_img = wp_get_attachment_image_src( get_post_thumbnail_id(), 'large' ); ?>
        <div class="col-xs-6 col-sm-3 cf-section-post">
            <div class="cf-home-post-img">
                <a href="<?php the_permalink() ?>" style="background:url(<?= $post_img[0] ?>) center center; background-size:cover;" class="cf-sticky-cover"></a>
            </div>
            <div class="cf-home-post-content">
                <h5><a href="<?php the_author_url(); ?>"><?php the_author() ?></a></h5>
                <h4><a href="<?php the_permalink() ?>"><?php the_title() ?></a></h4>
            </div>
        </div>

        <?php $mateus_maciel_post->the_post(); $post_img = wp_get_attachment_image_src( get_post_thumbnail_id(), 'large' ); ?>
        <div class="col-xs-6 col-sm-3 cf-section-post">
            <div class="cf-home-post-img">
                <a href="<?php the_permalink() ?>" style="background:url(<?= $post_img[0] ?>) center center; background-size:cover;" class="cf-sticky-cover"></a>
            </div>
            <div class="cf-home-post-content">
                <h5><a href="<?php the_author_url(); ?>"><?php the_author() ?></a></h5>
                <h4><a href="<?php the_permalink() ?>"><?php the_title() ?></a></h4>
            </div>
        </div>

        <?php $felipe_rosa_post->the_post(); $post_img = wp_get_attachment_image_src( get_post_thumbnail_id(), 'large' ); ?>
        <div class="col-xs-6 col-sm-3 cf-section-post">
            <div class="cf-home-post-img">
                <a href="<?php the_permalink() ?>" style="background:url(<?= $post_img[0] ?>) center center; background-size:cover;" class="cf-sticky-cover"></a>
            </div>
            <div class="cf-home-post-content">
                <h5><a href="<?php the_author_url(); ?>"><?php the_author() ?></a></h5>
                <h4><a href="<?php the_permalink() ?>"><?php the_title() ?></a></h4>
            </div>
        </div>

        <?php $robert_barricelli_post->the_post(); $post_img = wp_get_attachment_image_src( get_post_thumbnail_id(), 'large' ); ?>
        <div class="col-xs-6 col-sm-3 cf-section-post">
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