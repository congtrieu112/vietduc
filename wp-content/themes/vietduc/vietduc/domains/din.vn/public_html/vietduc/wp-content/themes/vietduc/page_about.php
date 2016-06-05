<?php
/**
 * Template Name: about
 *
 * @package WordPress
 * @subpackage Twenty_Fourteen
 * @since Twenty Fourteen 1.0
 */
?>
<?php get_header(); ?>
<section id="vd-content-one" class="container vd-container vd-ab-content">

    <div class="row ">
        <div class="col-md-8 vd-ab-top">
            <div class="vd-title"><h1><i class="icon-line-1 glyphicon glyphicon-th-large"></i> Về chúng tôi</h1></div>
            <hr/>
            <div class="vd-ab-surrounded">
                <img class="vd-img-lock vd-ab-top-left" src="<?php print get_template_directory_uri() ?>/images/page2_img.jpg" alt=""/>
                <h2 class="title-lock">CRAS INTERDUM SODALES FELIS, AUCTOR USTO CURSUS EU. QUISQUE SIT.</h2>
                <p class="vd-description">Ut risus nunc, sollicitudin a accumsan sit amet, faucibus sit amet lectus. Ut luctus leo dolor, sit amet vehicula orci facilisis vitae. Etiam suscipit, erat ac euismod tincidunt, purus felis imperdiet augue, ut euismod diam odio nec nibh. Donec et elit condimentum, vehicula leo vitae, consequat erat.
                </p>
                <a class="vd-info" href="#">More info</a>
            </div>

        </div>
        <div class="col-md-4 clear-fix-all">
            <div class="vd-title vd-ab-title-promotion"><h1><i class="icon-line-1 glyphicon glyphicon-th-large"></i> Khuyến mãi</h1></div>
            <hr/>
            <ul class="vd-ab-list vd-ab-surrounded">
                <li><a href="">Piacilisis at vero eros et accumsan</a></li>
                <li><a href="">Piacilisis at vero eros et accumsan</a></li>
                <li><a href="">Piacilisis at vero eros et accumsan</a></li>
                <li><a href="">Piacilisis at vero eros et accumsan</a></li>
                <li><a href="">Piacilisis at vero eros et accumsan</a></li>
                <li><a href="">Piacilisis at vero eros et accumsan</a></li>
                <li><a href="">Piacilisis at vero eros et accumsan</a></li>
                <li><a href="">Piacilisis at vero eros et accumsan</a></li>

            </ul>
        </div>

    </div>
</section>
<section id="vd-content-two" class="container vd-container ">
    <div class="vd-title"><h1><i class="icon-line-1 glyphicon glyphicon-th-large"></i> <?php print __('Nhóm chúng tôi','sanphamweb'); ?></h1></div>
    <hr/>
    <div class="row">
        <?php
        $array = array(
            'post_type' => 'team',
            'post_status' => 'publish',
            'orderby' => 'date',
            'order' => 'DESC',
        );
        $query = new WP_Query($array);
        while($query->have_posts()):$query->the_post();
            $img = $image = wp_get_attachment_image_src(get_post_thumbnail_id(get_the_ID()), "full")[0];
        ?>
        <div class="col-md-3 col-sm-6 col-xs-6">
            <img class="vd-img-lock" src="<?php print $img; ?>" alt=""/>
            <h2 class="title-lock vd-ab-team-title"><?php the_title(); ?></h2>
            <p class="vd-description vd-ab-team-description"><?php print $post->post_content; ?></p>


        </div>
            <?php endwhile;wp_reset_postdata(); ?>

    </div>
</section >
<section id="vd-content-three" class="container vd-container vd-ab-reviews">
    <div class="vd-title"><h1><i class="icon-line-1 glyphicon glyphicon-leaf"></i><?php print __('Đánh giá khách hàng','sanphamweb'); ?> </h1></div>
    <hr/>
    <div class="row">
        <?php
        $array = array(
            'post_type' => 'client',
            'post_status' => 'publish',
            'orderby' => 'date',
            'order' => 'DESC',
        );
        $query = new WP_Query($array);
        while($query->have_posts()):$query->the_post();
         ?>
        <div class="col-md-6">
            <p class="vd-ab-title-views"><?php print  $post->post_title."-".get_the_date('d/m/Y' ); ?> </p>
            <p class="vd-ab-reviews-content"><?php print $post->post_content; ?></p>
        </div>
        <?php endwhile;wp_reset_postdata(); ?>
    </div>
</section>
<?php get_footer(); ?>