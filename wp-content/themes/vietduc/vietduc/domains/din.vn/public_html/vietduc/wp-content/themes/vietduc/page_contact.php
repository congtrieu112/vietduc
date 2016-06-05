<?php
/**
 * Template Name: contact
 *
 * @package WordPress
 * @subpackage Twenty_Fourteen
 * @since Twenty Fourteen 1.0
 */
?>
<?php get_header(); ?>
<section id="vd-content-contact" class="container vd-container ">

    <iframe width="100%" height="400px" frameborder="0" scrolling='no' src="<?php print get_template_directory_uri() ?>/maps.php?latitude=<?php print get_field('longit',$post->ID); ?>&longitude=<?php print get_field('longitude',$post->ID); ?>" align="right"></iframe>
</section>
<section id="vd-content-three" class="container vd-container ">
    <div class="vd-title"><h1><i class="icon-line-1 glyphicon glyphicon-leaf"></i> Liên hệ</h1></div>
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

<?php get_footer(); ?>