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


<?php get_footer(); ?>