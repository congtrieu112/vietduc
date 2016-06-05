<?php
/**
 * Template Name: video
 *
 * @package WordPress
 * @subpackage Twenty_Fourteen
 * @since Twenty Fourteen 1.0
 */
?>
<?php get_header(); ?>
<section id="vd-content-one" class="container vd-container vd-projet-content">
    <div class="vd-title vd-ab-title-promotion"><h1><i class="icon-line-1 glyphicon glyphicon-th-large"></i> Video</h1></div>
    <hr/>

        <?php
        $array = array(
            'post_type' => 'video',
            'post_status' => 'publish',
            'orderby' => 'date',
            'order' => 'DESC',
        );
        $query = new WP_Query($array);
        $i = 0;
        while($query->have_posts()):$query->the_post();
            $video = get_field('youtube',$post->ID);
            $idvideo = get_id_youtube($video);
        $i++;
           if($i==1):
            ?>
    <div class="vd-video-top" >

        <div class="vd-video-ifram-yotube col-xs-12 col-xs-offset-0 col-md-8 col-md-offset-2">
            <p class="vd-video-title"><?php the_title(); ?></p>
            <iframe class="ifram-responsive" id="youtube" src="https://www.youtube.com/embed/<?php print $idvideo; ?>?autoplay=1&amp;rel=0" frameborder="0" __idm_id__="876545"></iframe>
        </div>
    </div>
    <div class="row vd-video-content">
        <div class="col-md-4 col-sm-6 col-xs-6">
            <div class="vd-project-item">
                <a  href="javascript:void(0)" onclick="addyoutube('<?php print $idvideo; ?>',$('#vd-project-title-1').text());return false;" ><img class="vd-project-img" src="http://img.youtube.com/vi/<?php print $idvideo; ?>/hqdefault.jpg " alt=""/></a>
                <div class="vd-project-surrounded">
                    <p class="vd-project-title" id="vd-project-title-1"><?php the_title(); ?>
                    </p>
                    <p class="vd-project-description"><?php print custom_excerpt(get_the_content(),8,''); ?>
                    </p>
                    <a class="vd-info vd-projcet-info" href="javascript:void(0)" onclick="addyoutube('<?php print $idvideo; ?>',$('#vd-project-title-1').text());return false;">More info</a>
                </div>

            </div>
        </div>
        <!--<?php if($i%3==0): ?>
            <div class="clearfix"></div>
        <?php else :?>
            <div class="clear-b-mobile"></div>
        <?php endif; ?>-->

        <?php else :  ?>
               <div class="col-md-4 col-sm-6 col-xs-6">
                   <div class="vd-project-item">
                       <a  href="javascript:void(0)" onclick="addyoutube('<?php print $idvideo; ?>',$('#vd-project-title-1').text());return false;" ><img class="vd-project-img" src="http://img.youtube.com/vi/<?php print $idvideo; ?>/hqdefault.jpg " alt=""/></a>
                       <div class="vd-project-surrounded">
                           <p class="vd-project-title" id="vd-project-title-1"><?php the_title(); ?>
                           </p>
                           <p class="vd-project-description"><?php print custom_excerpt(get_the_content(),8,''); ?>
                    		</p>
                           <a class="vd-info vd-projcet-info" href="javascript:void(0)" onclick="addyoutube('<?php print $idvideo; ?>',$('#vd-project-title-1').text());return false;">More info</a>
                       </div>

                   </div>
               </div>
            <?php if($i%3==0): ?>
                <div class="clearfix"></div>
            <?php else :?>
                <div class="clear-b-mobile"></div>
            <?php endif; ?>
            <?php  endif; endwhile; wp_reset_postdata(); ?>
    </div>
</section>

<?php get_footer(); ?>