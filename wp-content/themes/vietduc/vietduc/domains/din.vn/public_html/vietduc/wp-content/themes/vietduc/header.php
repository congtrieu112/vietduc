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
    <?php if(is_front_page()) require "slide.php"; ?>
</header>