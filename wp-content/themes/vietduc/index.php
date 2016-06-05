<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <link rel="profile" href="http://gmpg.org/xfn/11">
    <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title><?php
        global $page, $paged;
        wp_title('|', true, 'right');
        bloginfo('name');
        $site_description = get_bloginfo('description', 'display');
        if ($site_description && (is_home() || is_front_page()))
            echo " | $site_description";
        if ($paged >= 2 || $page >= 2)
            echo ' | ' . sprintf(__('Page %s', 'noithat'), max($paged, $page));
        ?></title>

    <!-- Bootstrap -->
    <link href="<?php print get_template_directory_uri() ?>/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="<?php bloginfo("stylesheet_url") ?>"/>
    <link rel="stylesheet" href="<?php print get_template_directory_uri() ?>/css/responsive.css"/>
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->

<?php wp_head();?>
</head>
<body <?php body_class(); ?>>
<header>
    <nav class="navbar navbar-inverse vd-menu">
        <div class="container vd-container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".vd-nava-menu-header">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand vd-logo" href="<?php print home_url('/'); ?>"><img src="<?php print get_template_directory_uri() ?>/images/logo.png" alt=""/></a>
            </div>
            <div class="navbar-collapse collapse vd-nava-menu-header">
                <ul class="nav navbar-nav">
                    <?php

                    if($menu =  get_menu("main-menu")):
                    if(is_home()){
                        $curent = home_url('/');
                    }else{
                        $curent = get_page_link($post->ID);
                    }
                    foreach($menu as $value):
                        $active = ($value->url==$curent) ? "class='active'":"";
                    ?>
                    <li <?php print $active; ?> ><a href="<?php print $value->url; ?>"><?php print $value->title; ?></a></li>
                    <?php endforeach;endif; ?>


                </ul>
            </div><!--/.nav-collapse -->
        </div>
    </nav>
    <div id="carousel-example-generic" class="carousel slide vd-slide" data-ride="carousel">
        <!-- Indicators -->


        <!-- Wrapper for slides -->
        <div class="carousel-inner" role="listbox">
            <div class="item active" >
                <img src="http://templates.cms-guide.com/50466/images/slide.jpg" alt="..." width="100%">
                <div class="carousel-caption">
                    <h1> Green </h1>
                    <h3>Healthy building</h3>
                    <p>Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat,vel illum dolore eu feugiat nulla. <br/>Facilisis at vero eros et accumsan et iusto</p>
                    <button type="button" class="btn btn-success btn-lg vd-button">More infomation</button>
                </div>
            </div>
            <div class="item">
                <img src="http://templates.cms-guide.com/50466/images/slide1.jpg" alt="..." width="100%">
                <div class="carousel-caption">
                    <h1> Green </h1>
                    <h3>Healthy building</h3>
                    <p>Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat,vel illum dolore eu feugiat nulla. <br/>Facilisis at vero eros et accumsan et iusto</p>
                    <button type="button" class="btn btn-success btn-lg vd-button">More infomation</button>
                </div>
            </div>
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
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".vd-dropdown">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>

            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse vd-dropdown" >
                <ul class="nav navbar-nav">
                    <li class="active"><a href="#"><i class="glyphicon glyphicon-home"></i>	&#32;Construction</a></li>
                    <li><a href="#"><i class="glyphicon glyphicon-user"></i>	&#32;Consulting</a></li>
                    <li><a href="#"><i class="glyphicon glyphicon-tags"></i>	&#32;Renovations</a></li>
                    <li><a href="#"><i class="glyphicon glyphicon-usd"></i>	&#32;Assistance</a></li>
                </ul>


            </div><!-- /.navbar-collapse -->
        </div><!-- /.container-fluid -->
    </nav>
</header>
<section id="vd-content-one" class="container vd-container ">
    <div class="vd-title"><h1><i class="icon-line-1 glyphicon glyphicon-th-large"></i> Dự án nổi bật</h1></div>
    <hr/>
    <div class="row ">
        <div class="col-md-3 col-sm-6 col-xs-6">
            <img class="vd-img-lock" src="<?php print get_template_directory_uri() ?>/images/page1_img1.jpg" alt=""/>
            <h2 class="title-lock">CLARITAS EST ETIAM</h2>
            <p class="vd-description">Lorem ipsum dolor sit amet coec tetuer adipiscing elised dia nonu</p>
            <a class="vd-info" href="#">more info</a>

        </div>
        <div class="col-md-3 col-sm-6 col-xs-6">
            <img class="vd-img-lock" src="<?php print get_template_directory_uri() ?>/images/page1_img2.jpg" alt=""/>
            <h2 class="title-lock">CLARITAS EST ETIAM</h2>
            <p class="vd-description">Lorem ipsum dolor sit amet coec tetuer adipiscing elised dia nonu</p>
            <a class="vd-info" href="#">more info</a>
        </div>
        <div class="col-md-3 col-sm-6 col-xs-6">
            <img class="vd-img-lock" src="<?php print get_template_directory_uri() ?>/images/page1_img3.jpg" alt=""/>
            <h2 class="title-lock">CLARITAS EST ETIAM</h2>
            <p class="vd-description">Lorem ipsum dolor sit amet coec tetuer adipiscing elised dia nonu</p>
            <a class="vd-info" href="#">more info</a>
        </div>
        <div class="col-md-3 col-sm-6 col-xs-6">
            <img class="vd-img-lock" src="<?php print get_template_directory_uri() ?>/images/page1_img4.jpg" alt=""/>
            <h2 class="title-lock">CLARITAS EST ETIAM</h2>
            <p class="vd-description">Lorem ipsum dolor sit amet coec tetuer adipiscing elised dia nonu</p>
            <a class="vd-info" href="#">more info</a>
        </div>
    </div>
</section>
<section id="vd-content-two" class="container vd-container ">
    <div class="row">
        <div class="col-md-6 vd-mobile-add-l">
            <div class="vd-title"><h1><i class="icon-line-1 glyphicon glyphicon-leaf"></i> Giới Thiệu</h1></div>
            <hr/>
            <ul class="vd-ul-number">
                <li>Piacilisis at vero eros et accumsan et iusto odio dignissim qui bla ndit praesent luptatum zzril delenit
                    augue duis dolore te feugait nulla facilisi.
                </li>
                <li>Vero eros et accumsan et iusto odio dignissim qui blandit praesent luptatum zzril delenit augue duis
                    dolore te feugait nulla facilisi. Nam liber tempor cum soluta nobis eleifend option congue nihil
                </li>
                <li>Et accumsan et iusto odio dignissim qui blandit praesent luptatum zzril delenit augue duis dolore te feugait nulla facilisi. Nam liber tempor cum soluta nobis eleifend option congue nihil imperdiet</li>
            </ul>
        </div>

        <div class="col-md-3 clear-r">
            <div class="vd-title"><h1><i class="icon-line-1 glyphicon glyphicon-leaf"></i> Hình Ảnh</h1></div>
            <hr/>
            <div class="vd-list-galegry">
                <p>
                    <a class="fancybox-thumbs" data-fancybox-group="thumb" href="<?php print get_template_directory_uri() ?>/js/plugins/fancybox/demo/4_b.jpg"><img src="<?php print get_template_directory_uri() ?>/js/plugins/fancybox/demo/4_s.jpg" alt=""></a>

                    <a class="fancybox-thumbs" data-fancybox-group="thumb" href="<?php print get_template_directory_uri() ?>/js/plugins/fancybox/demo/3_b.jpg"><img src="<?php print get_template_directory_uri() ?>/js/plugins/fancybox/demo/3_s.jpg" alt=""></a>

                    <a class="fancybox-thumbs" data-fancybox-group="thumb" href="<?php print get_template_directory_uri() ?>/js/plugins/fancybox/demo/2_b.jpg"><img src="<?php print get_template_directory_uri() ?>/js/plugins/fancybox/demo/2_s.jpg" alt=""></a>

                    <a class="fancybox-thumbs" data-fancybox-group="thumb" href="<?php print get_template_directory_uri() ?>/js/plugins/fancybox/demo/1_b.jpg"><img src="<?php print get_template_directory_uri() ?>/js/plugins/fancybox/demo/1_s.jpg" alt=""></a>
                    <a class="fancybox-thumbs" data-fancybox-group="thumb" href="<?php print get_template_directory_uri() ?>/js/plugins/fancybox/demo/4_b.jpg"><img src="<?php print get_template_directory_uri() ?>/js/plugins/fancybox/demo/4_s.jpg" alt=""></a>

                    <a class="fancybox-thumbs" data-fancybox-group="thumb" href="<?php print get_template_directory_uri() ?>/js/plugins/fancybox/demo/3_b.jpg"><img src="<?php print get_template_directory_uri() ?>/js/plugins/fancybox/demo/3_s.jpg" alt=""></a>

                    <a class="fancybox-thumbs" data-fancybox-group="thumb" href="<?php print get_template_directory_uri() ?>/js/plugins/fancybox/demo/2_b.jpg"><img src="<?php print get_template_directory_uri() ?>/js/plugins/fancybox/demo/2_s.jpg" alt=""></a>

                    <a class="fancybox-thumbs" data-fancybox-group="thumb" href="<?php print get_template_directory_uri() ?>/js/plugins/fancybox/demo/1_b.jpg"><img src="<?php print get_template_directory_uri() ?>/js/plugins/fancybox/demo/1_s.jpg" alt=""></a>
                    <a class="fancybox-thumbs" data-fancybox-group="thumb" href="<?php print get_template_directory_uri() ?>/js/plugins/fancybox/demo/1_b.jpg"><img src="<?php print get_template_directory_uri() ?>/js/plugins/fancybox/demo/1_s.jpg" alt=""></a>

                </p>
            </div>

        </div>
        <div class="col-md-3 clear-r vd-mobile-add-r">
            <div class="vd-lock-left">
                <p></p>
                <div class="vd-title"><h1>Tin tức</h1></div>
                <p>Piacilisis at vero eros et accu msan et iusto odio dignissim qui bla ndit praesent. lup
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer rhoncus sollicitudin ipsum vitae volutpat. Aenean varius quam quis porta consequat.</p>
            </div>
        </div>
    </div>
</section >
<section id="vd-content-three" class="container vd-container ">
    <div class="vd-title"><h1><i class="icon-line-1 glyphicon glyphicon-leaf"></i> Liên hệ</h1></div>
    <hr/>
    <div class="row">
        <div class="col-md-3">
            <P class="vd-contact-address" >ADDRESS:</P>
            <P class="vd-contact-address-nd">8901 Marmora Road, Glasgow</P>
            <P class="vd-contact-address">TELEPHONE:</P>
            <P class="vd-contact-address-nd">+1 959 603 6035</P>
            <P class="vd-contact-address">EMAIL:</P>
            <P class="vd-contact-address-nd">mail@demolink.org</P>

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
                        <button type="submit" class="btn btn-success btn-lg btn-block vd-submit-form">Submit</button>
                    </div>

                </div>

            </form>
        </div>
    </div>
</section>
<footer>
    <div class="vd-footer container vd-container">
        <div class="row">
            <div class="col-md-6">
                <P class="vd-footer-left">Green Healthy Home For You © 2014 | <A HREF="event:switchPage;page=34" TARGET="">Privacy Policy</A></P>
            </div>
            <div class="col-md-4 clear-all">
                <form class="navbar-form navbar-left clear-all vd-mobile-add-l vd-mobile-add-r" role="search"> <div class="form-group"> <input type="text" class="form-control" placeholder="Search"> </div> <button type="submit" class="btn btn-default vd-submit-footer">Submit</button> </form>
            </div>
            <div class="col-md-2 clear-all vd-h60">
                <a href="" target="_blank"  class="vd-icon-face"></a><a target="_blank" href=" " class="vd-icon-twitter"></a><a target="_blank" href="" class="vd-icon-pinterest"></a>
            </div>
        </div>
    </div>
</footer>

<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script src="<?php print get_template_directory_uri() ?>/js/bootstrap.min.js"></script>
<script src="<?php print get_template_directory_uri() ?>/js/process.js"></script>
<!--pouup fanbox-->

<script type="text/javascript" src="<?php print get_template_directory_uri() ?>/js/plugins/fancybox/lib/jquery.mousewheel-3.0.6.pack.js"></script>

<!-- Add fancyBox main JS and CSS files -->
<script type="text/javascript" src="<?php print get_template_directory_uri() ?>/js/plugins/fancybox/source/jquery.fancybox.js?v=2.1.5"></script>
<link rel="stylesheet" type="text/css" href="<?php print get_template_directory_uri() ?>/js/plugins/fancybox/source/jquery.fancybox.css?v=2.1.5" media="screen" />

<!-- Add Button helper (this is optional) -->
<link rel="stylesheet" type="text/css" href="<?php print get_template_directory_uri() ?>/js/plugins/fancybox/source/helpers/jquery.fancybox-buttons.css?v=1.0.5" />
<script type="text/javascript" src="<?php print get_template_directory_uri() ?>/js/plugins/fancybox/source/helpers/jquery.fancybox-buttons.js?v=1.0.5"></script>

<!-- Add Thumbnail helper (this is optional) -->
<link rel="stylesheet" type="text/css" href="<?php print get_template_directory_uri() ?>/js/plugins/fancybox/source/helpers/jquery.fancybox-thumbs.css?v=1.0.7" />
<script type="text/javascript" src="<?php print get_template_directory_uri() ?>/js/plugins/fancybox/source/helpers/jquery.fancybox-thumbs.js?v=1.0.7"></script>

<!-- Add Media helper (this is optional) -->
<script type="text/javascript" src="<?php print get_template_directory_uri() ?>/js/plugins/fancybox/source/helpers/jquery.fancybox-media.js?v=1.0.6"></script>
<!--end fanbox poup-->
<script type="text/javascript">
    $(document).ready(function() {


        /*
         *  Thumbnail helper. Disable animations, hide close button, arrows and slide to next gallery item if clicked
         */

        $('.fancybox-thumbs').fancybox({
            prevEffect : 'none',
            nextEffect : 'none',

            closeBtn  : false,
            arrows    : false,
            nextClick : true,

            helpers : {
                thumbs : {
                    width  : 50,
                    height : 50
                }
            }
        });



    });
</script>
<?php wp_footer(); ?>
</body>
</html>