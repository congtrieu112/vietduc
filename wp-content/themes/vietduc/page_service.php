<?php
/**
 * Template Name: service
 *
 * @package WordPress
 * @subpackage Twenty_Fourteen
 * @since Twenty Fourteen 1.0
 */
?>
<?php get_header(); ?>
<section id="vd-content-one" class="container vd-container vd-projet-content">

    <div class="row ">
    <?php
    $array = array(
        'post_type' => 'service',
        'post_status' => 'publish',
        'orderby' => 'date',
        'order' => 'DESC',
    );
    $query = new WP_Query($array);
    while($query->have_posts()):$query->the_post();
        $img = $image = wp_get_attachment_image_src(get_post_thumbnail_id(get_the_ID()), "full")[0];
    ?>
        <div class="col-md-4 col-sm-6 col-xs-6">
            <div class="vd-project-item">
                <img class="vd-project-img" src="<?php print get_bfithumb(220,180,$img); ?>" alt=""/>
                <div class="vd-project-surrounded">
                    <p class="vd-project-title"><?php the_title(); ?>
                    </p>
                    <p class="vd-project-description"><?php print custom_excerpt(get_the_content(),8,''); ?>
                    </p>
                    <a class="vd-info vd-projcet-info fancybox" href="#<?php echo $post->ID; ?>">More info</a>
                    <div style="display: none;">
                        <div id="<?php echo $post->ID;  ?>">
                            <h2 class="title-lock"><?php the_title(); ?></h2>
                            <p class="vd-description"><?php the_content(); ?></p>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    <?php endwhile;wp_reset_postdata(); ?>

    </div>
</section>
<?php get_footer(); ?>