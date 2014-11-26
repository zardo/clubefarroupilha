<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <title><?php wp_title('|', true, 'right'); ?></title>
    <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">

    <link href="<?= get_stylesheet_directory_uri() ?>/cf.css" rel="stylesheet">

    <link rel="shortcut icon" type="image/x-icon" href="<?= get_stylesheet_directory_uri() ?>/favicon.ico" sizes="16x16" />
    <link rel="icon" type="image/x-icon" href="<?= get_stylesheet_directory_uri() ?>/favicon.ico" sizes="16x16" />

    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

    <header>
        <div class="container brand-container">
            <div class="row">
                <div class="col-xs-2">
                    <a href="<?= home_url() ?>">
                        <img class="img-responsive" src="<?= get_stylesheet_directory_uri() ?>/images/cf.png"/>
                    </a>
                </div>
                <div class="col-xs-7">
                    <h1><?php bloginfo('description') ?></h1>
                    <h2>O Clube Farroupilha é o <i>Chapter</i> da organização internacional Students For Liberty/Estudantes Pela Liberdade (SFL/EPL) para a região central do Estado do Rio Grande do Sul.</h2>
                </div>
            </div>
        </div>
    </header>

    <div class="container">
        <div class="row">
            <div class="col-xs-12">
                <nav class="navbar navbar-inverse" role="navigation">

                    <div class="navbar-header">
                        <a href="<?php bloginfo('url') ?>" class="navbar-brand"></a>
                        <button class="navbar-toggle" type="button" data-toggle="collapse" data-target="#navbar-main">
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                    </div>

                    <?php wp_nav_menu( array(
                        'menu'              => 'primary',
                        'theme_location'    => 'primary',
                        'depth'             => 3,
                        'container'         => 'div',
                        'container_class'   => 'collapse navbar-collapse',
                        'container_id'      => 'cf-main-menu',
                        'menu_class'        => 'nav navbar-nav',
                        'fallback_cb'       => 'wp_bootstrap_navwalker::fallback',
                        'walker'            => new wp_bootstrap_navwalker())
                    ); ?>

                </nav>
            </div>
        </div>
    </div>
