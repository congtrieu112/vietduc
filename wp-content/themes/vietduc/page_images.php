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
        <div class="vd-title vd-ab-title-promotion"><h1><i class="icon-line-1 fa fa-file-image-o"></i> Hình ảnh</h1></div>
        <hr/>


        <!--        $content = get_posts(array( 'page_id' => 2));-->
        <?php
        $page_content = get_post(42);
        $list_image = $page_content->post_content;
        $list_image = get_all_image($list_image);
        $dem = 0;
        ?>

        <?php foreach($list_image as $item): $i++; ?>
            <!--                <a class="fancybox-thumbs" data-fancybox-group="thumb" href="--><?php //print $item; ?><!--"><img src="--><?php //print get_bfithumb(220,180,$item); ?><!--" alt=""></a>-->



            <div class="col-md-4 col-sm-6 col-xs-6">
                <div class="vd-project-item">
                    <a class="fancybox-thumbs" data-fancybox-group="thumb"  href="<?php print $item; ?>"  ><img class="vd-project-img" src="<?php print get_bfithumb(220,180,$item); ?>" alt=""/></a>


                </div>
            </div>
            <?php if($i%3==0): ?>
                <div class="clearfix"></div>
            <?php else :?>
                <div class="clear-b-mobile"></div>
            <?php endif; ?>
        <?php  endforeach; ?>
        </div>
    </section>
<?php get_footer(); ?>