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
    <div class="vd-title"><h1><i class="icon-line-1 glyphicon glyphicon-th-large"></i><?php print __('Dự án nổi bật','sanphamweb'); ?> </h1></div>
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
            <img class="vd-img-lock" src="<?php print $img; ?>" alt=""/>
            <h2 class="title-lock"><?php the_title(); ?></h2>
            <p class="vd-description"><?php print custom_excerpt(get_the_content(),20,''); ?></p>
            <a class="vd-info" href="<?php the_permalink(); ?>">more info</a>

        </div>
        <?php endwhile;wp_reset_postdata(); ?>

    </div>
</section>
<section id="vd-content-two" class="container vd-container ">
    <div class="row">
        <div class="col-md-6 vd-mobile-add-l">
            <div class="vd-title"><h1><i class="icon-line-1 glyphicon glyphicon-leaf"></i> <a href="<?php print get_page_link(10); ?>"><?php print __('Giới Thiệu','sanphamweb') ?></a> </h1></div>
            <hr/>
            <?php
            $about_content = get_post(10);
            print $about_content->post_content;

            ?>
        </div>

        <div class="col-md-3 clear-r">
            <div class="vd-title"><h1><i class="icon-line-1 glyphicon glyphicon-leaf"></i><a href="<?php print get_page_link(42); ?>"><?php print __('&nbsp;Hình Ảnh','sanphamweb') ?></a> </h1></div>
            <hr/>
            <div class="vd-list-galegry">
                <?php
                $page_content = get_post(42);
                $list_image = $page_content->post_content;
                $list_image = get_all_image($list_image);
                $dem = 0;
                ?>
                <p>
                    <?php foreach($list_image as $item): if($dem<9): ?>
                        <a class="fancybox-thumbs" data-fancybox-group="thumb" href="<?php print $item; ?>"><img src="<?php print get_bfithumb(300,300,$item); ?>" alt=""></a>
                    <?php $dem++;endif; endforeach; ?>
                </p>
            </div>

        </div>
        <div class="col-md-3 clear-r vd-mobile-add-r">
            <div class="vd-lock-left">
                <p></p>
                <div class="vd-title"><h1><a href="<?php print get_page_link(6); ?>"><?php print __('Tin tức','sanphamweb'); ?></a></h1></div>
                <?php
                $content_news= get_post(6);
                $content_news = $content_news->post_content;
                ?>

                <p><?php print $content_news; ?></p>
            </div>
        </div>
    </div>
</section >
<section id="vd-content-three" class="container vd-container ">
    <div class="vd-title"><h1><i class="icon-line-1 glyphicon glyphicon-leaf"></i> <a href="<?php print get_page_link(79); ?>"><?php print __(' Liên hệ','sanphamweb'); ?></a></h1></div>
    <hr/>
    <div class="row">
        <div class="col-md-3">

            <?php
            if (is_active_sidebar('contact-page')) {
                dynamic_sidebar("contact-page");
            }
            ?>

        </div>
        <div class="col-md-9">
            <form role="form">
                <div class="row">
                    <div class="col-md-4">
                        <div class="form-group">
                            <input type="email" class="form-control" id="email">
                        </div>

                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <input type="password" class="form-control" id="pwd">
                        </div>
                    </div>
                    <div class="col-md-4 clear-r vd-mobile-add-r">
                        <div class="form-group">
                            <input type="password" class="form-control" id="pwd">
                        </div>
                    </div>
                    <div class="col-md-8">
                        <div class="form-group">
                            <textarea class="form-control" rows="2"></textarea>
                        </div>
                    </div>
                    <div class="col-md-4 clear-r vd-mobile-add-r">
                        <button type="submit" class="btn btn-success btn-lg btn-block vd-submit-form"><?php print __('Gửi','sanphamweb'); ?></button>
                    </div>

                </div>

            </form>
        </div>
    </div>
</section>
<?php
get_footer();
?>