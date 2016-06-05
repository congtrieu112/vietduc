<?php
/**
 * Template Name: home
 *
 * @package WordPress
 * @subpackage Twenty_Fourteen
 * @since Twenty Fourteen 1.0
 */
?>
<?php
get_header();
?>
<section id="vd-content-one" class="container vd-container ">
    <div class="vd-title"><h1><i class="icon-line-1 glyphicon glyphicon-th-large"></i>&nbsp;<?php print __('Dự án nổi bật','sanphamweb'); ?> </h1></div>
    <hr/>
    <div class="row ">
        <?php
        $number =4;
        $list_idcat = array(3);
        $project_params = array(
            'posts_per_page' => $number,
            'post_type' => 'project',
            'post_status' => 'publish',
            'orderby' => 'date',
            'order' => 'DESC',
            'tax_query' => array(
                array(
                    'taxonomy' => 'project_list',
                    'field' => 'id',
                    'terms' => $list_idcat
                ),
            ),
        );
        $query = new WP_Query($project_params);
        while($query->have_posts()):$query->the_post();
            $img = $image = wp_get_attachment_image_src(get_post_thumbnail_id(get_the_ID()), "full")[0];
        ?>
        <div class="col-md-3 col-sm-6 col-xs-6">
            <img class="vd-img-lock" src="<?php print get_bfithumb(220,180,$img); ?>" alt=""/>
            <h2 class="title-lock"><?php the_title(); ?></h2>
            <p class="vd-description"><?php print custom_excerpt(get_the_content(),20,''); ?></p>
            <a class="vd-info fancybox" href="#<?php echo $post->ID; ?>">more info</a>
            <div style="display: none;">
                <div id="<?php echo $post->ID;  ?>">
                    <h2 class="title-lock"><?php the_title(); ?></h2>
                    <p class="vd-description"><?php the_content(); ?></p>
                </div>
            </div>
        </div>
        <?php endwhile;wp_reset_postdata(); ?>
    </div>
</section>
<section id="vd-content-two" class="container vd-container ">
    <div class="row">
        <div class="col-md-6 vd-mobile-add-l">
            <div class="vd-title">
                <h1><i class="icon-line-1 glyphicon glyphicon-leaf"></i> <a href="<?php print get_page_link(10); ?>"><?php print __('Tại sao là chúng tôi?','sanphamweb') ?></a> </h1>
            </div>
            <hr/>
            <?php
                $i = 1;
                $array = array(
                    'post_type' => 'why_us',
                    'post_status' => 'publish',
                    'orderby' => 'date',
                    'order' => 'DESC',
                );
                $query = new WP_Query($array);
                while($query->have_posts()):$query->the_post();
            ?>
            <div class="col-md-12 why-us">
                <span class="title-lock vd-ab-why-title"><?php print $i++; ?>.</span>
                <span class="vd-description vd-ab-why-description"><?php print $post->post_content; ?></span>
            </div>
            <?php endwhile;wp_reset_postdata(); ?>
        </div>

        <div class="col-md-6 clear-r">
            <div class="vd-title"><h1><i class="icon-line-1 glyphicon glyphicon-picture"></i><a href="<?php print get_page_link(42); ?>"><?php print __('&nbsp;Hình Ảnh','sanphamweb') ?></a> </h1></div>
            <hr/>
            <div class="vd-list-galegry">
                <?php
                $page_content = get_post(42);
                $list_image = $page_content->post_content;
                $list_image = get_all_image($list_image);
                $dem = 0;
                ?>
                <p>
                    <?php foreach($list_image as $item): if($dem<12): ?>
                        <a class="fancybox-thumbs" data-fancybox-group="thumb" href="<?php print $item; ?>"><img src="<?php print get_bfithumb(300,300,$item); ?>" alt=""></a>
                    <?php $dem++;endif; endforeach; ?>
                </p>
            </div>

        </div>

    </div>
</section >

<?php
get_footer();
?>