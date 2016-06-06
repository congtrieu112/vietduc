<?php get_header(); ?>
<section id="vd-content-one" class="container vd-container vd-projet-content">
    <h1>
        <i class="icon-line-1 fa fa-archive"></i> <?php print $post->post_title; ?>
    </h1>
    <div class="vd-content-full">
        <div class="col-md-8 content-full-vd">
            <?php the_content(); ?>

        </div>
        <div class="col-md-4 vd-resent-post">
            <?php
            $args = array(
                'orderby' => 'post_date',
                'order' => 'DESC',
                'post_type' => 'project',
                'numberposts' => 5,
            );
            $recent_posts = wp_get_recent_posts( $args );
            if($recent_posts):
            foreach ($recent_posts as $item):
                $img = wp_get_attachment_image_src(get_post_thumbnail_id($item['ID']), "full")[0];
            ?>
                <a href="<?php the_permalink($item['ID']); ?>" class="relate-post">
                    <img class="img-responsive" src="<?php print  $img;?>" alt="">
                </a>
                <h1 class="related-h1 clear-all">
                    <a href="<?php the_permalink($item['ID']); ?>"><?php print $item['post_title'] ?></a>
                </h1>
                <p class="related-p">
                    <?php print custom_excerpt($item['post_content'],20,'...'); ?>
                </p>

            <?php  endforeach;endif; ?>

        </div>
    </div>

</section>

<?php get_footer(); ?>
