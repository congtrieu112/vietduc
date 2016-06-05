<div id="carousel-example-generic" class="carousel slide vd-slide" data-ride="carousel">
    <!-- Indicators -->


    <!-- Wrapper for slides -->
    <div class="carousel-inner" role="listbox">
        <?php
        $slide_params = array(
            'post_type' => 'slide',
            'post_status' => 'publish',
            'orderby' => 'date',
            'order' => 'DESC',
        );
        $query = new WP_Query($slide_params);
        $i =0;
        while($query->have_posts()):$query->the_post();
        $img = $image = wp_get_attachment_image_src(get_post_thumbnail_id(get_the_ID()), "full")[0];
        ?>
        <div class="item <?php print ($i==0)? 'active':''; ?>" >
            <img src="<?php print get_bfithumb(1400,566,$img); ?>" alt="<?php the_title(); ?>" width="100%">
            <div class="carousel-caption">
                <h1> <?php the_title(); ?> </h1>
                <h3><?php print get_field("trich_dan",get_the_ID()) ?></h3>
                <p><?php the_content(); ?></p>
                <button type="button" class="btn btn-success btn-lg vd-button fancybox" href="#<?php echo $post->ID; ?>">More infomation</button>
          
                <div style="display: none;">
                    <div id="<?php echo $post->ID;  ?>">
                        <h2 class="title-lock"><?php the_title(); ?></h2>
                        <p class="vd-description"><?php the_content(); ?></p>
                    </div>
                </div>
            </div>
        </div>
        <?php $i++; endwhile; wp_reset_postdata(); ?>

    </div>
<div class="vd-caption"></div>
    <!-- Controls -->
    <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
        <span class="next" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
        <span class="preview" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
    </a>
</div>

<nav class="navbar navbar-default vd-menu-bottom">
    <div class="container vd-container">
      <div class="navbar-header">
           <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".vd-dropdown">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>

        </div>

        <div class="collapse navbar-collapse vd-dropdown" >
            <ul class="nav navbar-nav">
                <?php
                    $construction_params = array(
                        'post_type' => 'construction',
                        'post_status' => 'publish',
                        'orderby' => 'date',
                        'order' => 'DESC',
                    );
                    $query = new WP_Query($construction_params);
                    $icon = array(
                        '0' => get_page_link(14),
                        '1' => get_page_link(8),
                        '2' => get_page_link(12),
                    );
                    $i = 0;
                    while($query->have_posts()):$query->the_post();
                        if($i<=2){
                            $link = $icon[$i];
                            $class = "";
                        }else{
                            $link = "#".$post->ID;
                            $class = "fancybox";
                        }

                ?>
                <li class="active">
                    <a class="<?php print $class; ?>" href="<?php print $link; ?>">
                        <i class="<?php print $icon[$i]; ?>"></i> &#32;<?php the_title(); ?>
                    </a>
                </li>
                <!--<li class="active">
                    <a class="fancybox" href="#<?php echo $post->ID; ?>">
                        <img src="<?php print get_template_directory_uri() ?>/<?php print $icon[$i]; ?>" style="margin-right: 10px"/> &#32;<?php the_title(); ?>
                    </a>
                </li>-->
                <div style="display: none;">
                    <div id="<?php echo $post->ID;  ?>">
                        <h2 class="title-lock"><?php the_title(); ?></h2>
                        <p class="vd-description"><?php the_content(); ?></p>
                    </div>
                </div>
                <?php $i++; endwhile; wp_reset_postdata(); ?>
            </ul>
        </div><!-- /.navbar-collapse -->
    </div><!-- /.container-fluid-->
</nav>