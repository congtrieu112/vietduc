<?php
/**
 * Template Name: news
 *
 * @package WordPress
 * @subpackage Twenty_Fourteen
 * @since Twenty Fourteen 1.0
 */
?>
<?php get_header(); ?>
<section id="vd-content-one" class="container vd-container vd-ab-content">
    <div class="vd-title"><h1><i class="icon-line-1 glyphicon glyphicon-th-large"></i> Tin tức</h1></div>
    <hr/>
    <div class="row ">
        <?php
        $array = array(
            'post_type' => 'post',
            'post_status' => 'publish',
            'orderby' => 'date',
            'order' => 'DESC',
        );
        $query = new WP_Query($array);
        $i=0;
        while($query->have_posts()):$query->the_post();
            $img = $image = wp_get_attachment_image_src(get_post_thumbnail_id(get_the_ID()), "full")[0];
            $i++;
            ?>
        <div class="col-md-6 vd-ab-top">

            <div class="vd-ab-surrounded">
                <img class="vd-img-lock vd-ab-top-left" src="<?php print $img ?>" alt=""/>

                <h2 class="title-lock"><?php the_title(); ?></h2>
                <p class="vd-description"><?php print $post->post_content; ?>
                </p>
                <a class="vd-info" href="<?php  the_permalink();?>">More info</a>

            </div>

        </div>
            <?php if($i%2==0): ?>
                <div class="clearfix"></div>
                <?php else :?>
        <div class="clear-b-mobile"></div>
                <?php endif; ?>
            <?php  endwhile; wp_reset_postdata(); ?>



    </div>
</section>

<?php get_footer(); ?>