<!DOCTYPE html>
<html>
    <head>
        <?php wp_head(); ?>
        <meta charset="utf-8">
        <title><?php wp_title('');?></title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="description" content="">
        <link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/images/favicon.png">
		<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/bootstrap-grid.min.css">
        <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/main.css">
        <link href="https://fonts.googleapis.com/css?family=Montserrat:900|Work+Sans:400,700&display=swap&subset=latin-ext" rel="stylesheet">
    </head>
    <body>
        <header>
            <div class="top-bar">
                <div class="container">
                    <div class="row">
                        <div class="col">
                            <div class="top-bar__social-media">
                            <p>Follow us:</p>
                                <a href="#">A</a>
                                <a href="#">B</a>
                                <a href="#">C</a>
                                <a href="#">D</a>
                            </div>
                            <div class="top-bar__contact">
                                <a href="tel:+000000000000">(+000) 0 000 0000</a>
                                <a href="mailto:info@scoobie-diving.com">info@scoobie-diving.com</a>
                                <a href="#">D. S. Amet Lorem 26, IP</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="main-bar">
                <div class="container">
                    <div class="row">
                        <div class="col-6 col-md-4">
                            <a href="#" class="logo main-bar__logo">
                                <img src="<?php echo get_template_directory_uri(); ?>/images/logo.png" alt="<?php wp_title('');?>">
                            </a>
                        </div>
                        <div class="col-6 col-md-8 d-none d-md-block">
                            <nav class="main-nav">
                                <ul class="main-nav__list">
                                    <li class="main-nav__list-item">
                                        <a href="" class="main-nav-link">Home</a>
                                    </li>
                                    <li class="main-nav__list-item">
                                        <a href="" class="main-nav-link">Shop</a>
                                    </li>
                                    <li class="main-nav__list-item">
                                        <a href="" class="main-nav-link">News</a>
                                    </li>
                                    <li class="main-nav__list-item">
                                        <a href="" class="main-nav-link">About us</a>
                                    </li>
                                    <li class="main-nav__list-item">
                                        <a href="" class="main-nav-link">Contant</a>
                                    </li>
                                </ul>
                            </nav>
                            <div class="main-bar__search">
                                <a href="" class="main-bar-search-icon">
                                    <img src="<?php echo get_template_directory_uri(); ?>/images/icons/search.svg">
                                </a>
                            </div>                            
                        </div>
                        <div class="col-6 d-md-none">
                            <div class="nav-toggle">
                                <div></div>
                                <div style="margin: 7px 0;"></div>
                                <div></div>
                            </div>
                        </div>
                        <div class="col d-md-none">
                            <nav class="mobile-nav">
                                <ul class="mobile-nav__list">
                                    <li class="mobile-nav__list-item">
                                        <a href="" class="mobile-nav-link">Home</a>
                                    </li>
                                    <li class="mobile-nav__list-item">
                                        <a href="" class="mobile-nav-link">Shop</a>
                                    </li>
                                    <li class="mobile-nav__list-item">
                                        <a href="" class="mobile-nav-link">News</a>
                                    </li>
                                    <li class="mobile-nav__list-item">
                                        <a href="" class="mobile-nav-link">About us</a>
                                    </li>
                                    <li class="mobile-nav__list-item">
                                        <a href="" class="mobile-nav-link">Contant</a>
                                    </li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </header>
