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
        <div class="col-md-12 vd-ab-top">
            <div class="vd-title"><h1><i class="icon-line-1 glyphicon glyphicon-th-large"></i> Về chúng tôi</h1></div>
            <hr/>
            <div class="vd-ab-surrounded">
            	<?php
					$post_id = 10;
					$about_post = get_post($post_id);
					$image = wp_get_attachment_image_src(get_post_thumbnail_id(get_the_ID()), "full")[0];
				?>
                <img class="vd-img-lock vd-ab-top-left" src="<?php print $image ?>" alt=""/>
                <h2 class="title-lock"><?php print $about_post->post_title; ?></h2>
                <p class="vd-description">
                	<?php
            			print $about_post->post_content;
            		?>
                </p>
                <!--<a class="vd-info" href="#">More info</a>-->
            </div>

        </div>
        <!--<div class="col-md-4 clear-fix-all">
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
        </div>-->

    </div>
</section>


<?php get_footer(); ?>