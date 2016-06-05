<section id="vd-content-three" class="container vd-container ">
    <div class="vd-title"><h1><i class="icon-line-1 glyphicon glyphicon-earphone"></i> Liên hệ</h1></div>
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
            <form role="form" id="sentmail">
                <div class="row">
                    <div class="col-md-4">
                        <div class="form-group">
                            <input type="text" class="form-control" id="username" placeholder="Họ tên :">
                        </div>

                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <input type="email" class="form-control" id="email" placeholder="Email :">
                        </div>
                    </div>
                    <div class="col-md-4 clear-r vd-mobile-add-r">
                        <div class="form-group">
                            <input type="text" class="form-control" id="phone" placeholder="Phone :">
                        </div>
                    </div>
                    <div class="col-md-8">
                        <div class="form-group">
                            <textarea class="form-control" rows="2" id="message" placeholder="Nội dung :"></textarea>
                        </div>
                    </div>
                    <div class="col-md-4 clear-r vd-mobile-add-r">
                        <button type="submit"  class="btn  vd-submit-form"><?php print __('Gửi','sanphamweb'); ?></button>
                    </div>

                </div>

            </form>
        </div>
    </div>
</section>
<footer>
    <div class="vd-footer container vd-container">
        <div class="row">
            <?php
            if (is_active_sidebar('footer-page')) {
                dynamic_sidebar("footer-page");
            }
            ?>
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

            closeBtn  : true,
            arrows    : true,
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
<script type="text/javascript">
    $(document).ready(function() {
        /*
         *  Thumbnail helper. Disable animations, hide close button, arrows and slide to next gallery item if clicked
         */

        $('.fancybox').fancybox({
            width      : 700,
            height     : 500,
            autoSize   : false,
            prevEffect : 'none',
            nextEffect : 'none',

            closeBtn  : true,
            arrows    : true,
            nextClick : true,
        });
    });
</script>
<?php if(is_page_template("page_video.php")): ?>
    <script type="text/javascript">
        function addyoutube(idyoutube,title){
            $("html, body").animate({ scrollTop: "804px"});

            $(".vd-video-title").html(title);
            $('#youtube').attr('src','https://www.youtube.com/embed/'+idyoutube+'?autoplay=1&rel=0');
        }
    </script>
<?php endif; ?>
<?php wp_footer(); ?>
</body>
</html>