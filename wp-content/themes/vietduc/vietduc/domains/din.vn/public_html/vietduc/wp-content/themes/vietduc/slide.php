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
                <button type="button" class="btn btn-success btn-lg vd-button">More infomation</button>
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
<!--
<nav class="navbar navbar-default vd-menu-bottom">
    <div class="container vd-container">
        Brand and toggle get grouped for better mobile display
       <div class="navbar-header">
           <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".vd-dropdown">
                <span class="sr-only">Toggle navigation</span>
               <span class="icon-bar"></span>
               <span class="icon-bar"></span>
               <span class="icon-bar"></span>
            </button>

        </div>

        <!-- Collect the nav links, forms, and other content for toggling
        <div class="collapse navbar-collapse vd-dropdown" >
            <ul class="nav navbar-nav">
                <li class="active"><a href="#"><i class="glyphicon glyphicon-home"></i>	&#32;Construction</a></li>
                <li><a href="#"><i class="glyphicon glyphicon-user"></i>	&#32;Consulting</a></li>
                <li><a href="#"><i class="glyphicon glyphicon-tags"></i>	&#32;Renovations</a></li>
                <li><a href="#"><i class="glyphicon glyphicon-usd"></i>	&#32;Assistance</a></li>
            </ul>


        </div><!-- /.navbar-collapse
    </div><!-- /.container-fluid
</nav>-->