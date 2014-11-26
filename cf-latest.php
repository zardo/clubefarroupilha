<div class="row">
    <div class="col-xs-12 cf-latest">
        <h3>Recentes</h3>
        <?php if ( have_posts() ) : ?>

            <?php while ( have_posts() ) : the_post(); ?>
            <?php $post_img = wp_get_attachment_image_src( get_post_thumbnail_id(), 'large' ); ?>
                <div class="row cf-section-post">
                    <div class="col-xs-3 cf-home-post-img">
                        <a style="background:url(<?= $post_img[0] ?>) center center; background-size:cover;" class="cf-sticky-cover"></a>
                    </div>
                    <div class="col-xs-9 cf-home-post-content">
                        <h4><a href="<?php the_permalink() ?>"><?php the_title() ?></a></h4>
                        <h5><a href="<?php the_author_url(); ?>"><?php the_author() ?></a></h5>
                        <p><?php the_excerpt() ?></p>
                    </div>
                </div>
            <?php endwhile; ?>

            <?php //twentythirteen_paging_nav(); ?>

        <?php endif; ?>
    </div>
</div>