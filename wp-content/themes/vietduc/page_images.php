<?php
/**
 * Template Name: images
 *
 * @package WordPress
 * @subpackage Twenty_Fourteen
 * @since Twenty Fourteen 1.0
 */
?>

<?php get_header(); ?>

    <section id="vd-content-one" class="container vd-container vd-projet-content">
        <div class="vd-title vd-ab-title-promotion">
            <h1>
                <i class="icon-line-1 fa fa-file-image-o"></i> Hình ảnh
            </h1>
            <ul class="nav nav-tabs vd-tab-album" id="myTab">
                <?php
                $number =10;
                $project_params = array(
                    'posts_per_page' => $number,
                    'post_type' => 'album',
                    'post_status' => 'publish',
                    'orderby' => 'date',
                    'order' => 'DESC',

                );
                $i = 0;
                $query = new WP_Query($project_params);
                while($query->have_posts()):$query->the_post();
                $array[] = $post;
                    $active = ($i==0) ? "class='active'":"";
                ?>



                <li <?php print $active; ?>><a data-target="#<?php print $post->post_name; ?>" data-toggle="tab"><?php the_title(); ?></a></li>
                <?php $i++; endwhile;wp_reset_postdata(); ?>

            </ul>

            <div class="tab-content">
                <?php
                if($array):
                    $dem = 0;
                foreach ($array as $item):
                    $active = ($dem==0) ? "active":"";
                ?>
                <div class="tab-pane <?php print  $active;?>" id="<?php print $item->post_name; ?>">
                    <?php

                    $list_image = get_all_image($item->post_content);
                    $list = 0;
                    ?>

                    <?php
                    foreach($list_image as $item): $list++;
                        $id_image = pn_get_attachment_id_from_url($item);
                        $title = get_post($id_image)->post_title; //The
                        ?>
                        <!--                <a class="fancybox-thumbs" data-fancybox-group="thumb" href="--><?php //print $item; ?><!--"><img src="--><?php //print get_bfithumb(220,180,$item); ?><!--" alt=""></a>-->


                        <div class="col-md-4 col-sm-6 col-xs-6">
                            <div class="vd-project-item">
                                <a class="fancybox" href="<?php print $item; ?>" data-fancybox-group="gallery" title="<?php print $title; ?>"><img class="img-responsive full-img" src="<?php print get_bfithumb(271,221,$item); ?>" alt=""></a>


                            </div>
                        </div>
                        <?php if($list%3==0): ?>
                            <div class="clearfix"></div>
                        <?php else :?>
                            <div class="clear-b-mobile"></div>
                        <?php endif; ?>
                    <?php  endforeach; ?>
                </div>
                <?php $dem++; endforeach; endif; ?>

            </div>


        </div>
        <hr/>


        <!--        $content = get_posts(array( 'page_id' => 2));-->

    </section>
<?php get_footer(); ?>
