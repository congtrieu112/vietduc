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
<?php if(is_page_template("page_video.php")): ?>
    <script type="text/javascript">
        function addyoutube(idyoutube,title){
            $("html, body").animate({ scrollTop: "200px"});

            $(".vd-video-title").html(title);
            $('#youtube').attr('src','https://www.youtube.com/embed/'+idyoutube+'?autoplay=1&rel=0');
        }
    </script>
<?php endif; ?>
<?php wp_footer(); ?>
</body>
</html>