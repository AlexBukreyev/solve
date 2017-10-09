<!DOCTYPE html>
<html>
    <head>
        <meta charset='utf-8'>
        <meta content='yes' name='apple-mobile-web-app-capable'>
        <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
        <meta content='SKYPE_TOOLBAR_PARSER_COMPATIBLE' name='SKYPE_TOOLBAR'>
        <title>Home</title>
        <link href="<?php echo esc_url( get_template_directory_uri() );?>/css/screen.css" rel='stylesheet' type='text/css'>
        <link href='<?php echo esc_url( get_template_directory_uri() );?>/css/style_update.css' rel='stylesheet' type='text/css'>

    </head>
    <body>
        <div class='wrapper'>
            <header>
                <div class='topBlock'>
                    <a class='menuBtn'>
                        <span></span>
                        <span></span>
                        <span></span>
                    </a>
                    <nav class='mainMenu'>

                        <ul class='list'>
                            <nav class="main-menu">
                                <? wp_nav_menu(array('menu' => 'top-menu', 'menu_class' => 'top-menu')); ?>
                            </nav>

                            <li class='item last'>
                                <a class='ic ic1' data-target='#calc' data-toggle='modal'></a>
                                <a class='ic ic2' data-target='#code' data-toggle='modal'></a>
                                <a class='ic ic3 chatBtn'></a>
                            </li>
                        </ul>
                    </nav>
                    <div class='bntBox'>
                        <a data-target='#registration' data-toggle='modal'>Регистрация</a>
                        &sol;
                        <a data-target='#popupLogin' data-toggle='modal'>Вход</a>
                    </div>
                    <a class='regBtn' data-target='#popupLogin' data-toggle='modal'></a>
                    <a class='collBtn'></a>
                    <div class='langBox'>
                        <div class='select'>РУ</div>
                        <ul>
                            <li class='active'>
                                <a>РУ</a>
                            </li>
                            <li>
                                <a>CN</a>
                            </li>
                            <li>
                                <a>EN</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class='head'>
                    <div class='headIn'>
                        <div class='logo'>
                            <a href=''>
                                <div class='logoBox'>
                                    <div class='letter'>
                                        <img alt='' src='<?php echo esc_url( get_template_directory_uri() );?>/img/logo-el1.png'>
                                    </div>
                                    <div class='body'>
                                        <img alt='' src="<?php echo esc_url( get_template_directory_uri() );?>/img/logo-el2.png">
                                        <span>
                      Миг определяет будущее
                    </span>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <ul class='phoneBlock'>
                            <li>
                                <i class='ic1'></i>
                                <?php echo get_post_meta($post->ID, 'contact1', true ); ?>
                            </li>
                            <li>
                                <i class='ic2'></i>
                                <?php echo get_post_meta($post->ID, 'contact2', true ); ?>
                            </li>
                            <li>
                                <i class='ic3'></i>
                                <?php echo get_post_meta($post->ID, 'contact3', true ); ?>
                            </li>
                            <li>
                                <i class='ic4'></i>
                                <?php echo get_post_meta($post->ID, 'contact4', true ); ?>
                            </li>
                            <li>
                                <i class='ic1'></i>
                                <?php echo get_post_meta($post->ID, 'contact5', true ); ?>
                            </li>
                            <li>
                                <i class='ic5'></i>
                                <?php echo get_post_meta($post->ID, 'contact6', true ); ?>
                            </li>
                            <li>
                                <i class='ic6'></i>
                                <?php echo get_post_meta($post->ID, 'contact7', true ); ?>
                            </li>
                            <li>
                                <i class='ic7'></i>
                                <a href=''><?php echo get_post_meta($post->ID, 'contact8', true ); ?></a>
                            </li>
                            <li>
                                <i class='ic8'></i>
                                <?php echo get_post_meta($post->ID, 'contact9', true ); ?>
                            </li>
                            <li>
                                <i class='ic9'></i>
                                <?php echo get_post_meta($post->ID, 'contact10', true ); ?>
                            </li>
                            <li>
                                <i class='ic10'></i>
                                <?php echo get_post_meta($post->ID, 'contact11', true ); ?>
                            </li>
                            <li>
                                <i class='ic7'></i>
                                <a href=''><?php echo get_post_meta($post->ID, 'contact12', true ); ?></a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class='headCarousel'>
                    <div class='item' style='background-image: url(<?php echo esc_url( get_template_directory_uri() );?>/img/slide.jpg);'>
<!--                        <img alt='' src="--><?php //echo esc_url( get_template_directory_uri() );?><!--/img/--><?php //esc_url( the_field( 'slide1' ) );?><!--">-->
                        <img alt='' class='img' src='img/slide.jpg'>
                        <div class='content'>
                            <div class='textBox right'>
                                <h2>
                                    Доставка грузов
                                    <br>
                                    из любых стран
                                    <br>
                                    Азии, Европы и Америки
                                </h2>
                                <h3>
                                    в Россию, Беларусь и Казахстан
                                </h3>
                                <a href=''>Подробнее</a>
                                <a href=''>Рассчитать доставку</a>
                                <a class='last' data-target='#code' data-toggle='modal'>Отследить груз</a>
                            </div>
                        </div>
                    </div>
                    <div class='item' style='background-image: url(<?php echo esc_url( get_template_directory_uri() );?>/img/slide.jpg);'>
                        <img alt='' class='img' src='img/slide.jpg'>
                        <div class='content'>
                            <div class='textBox right'>
                                <h2>
                                    Доставка грузов
                                    <br>
                                    из любых стран
                                    <br>
                                    Азии, Европы и Америки
                                </h2>
                                <h3>
                                    в Россию, Беларусь и Казахстан
                                </h3>
                                <a href=''>Подробнее</a>
                                <a href=''>Рассчитать доставку</a>
                                <a class='last' data-target='#code' data-toggle='modal'>Отследить груз</a>
                            </div>
                        </div>
                    </div>
                    <div class='item' style='background-image: url(<?php echo esc_url( get_template_directory_uri() );?>/img/slide.jpg);'>
                        <img alt='' class='img' src='img/slide.jpg'>
                        <div class='content'>
                            <div class='textBox right'>
                                <h2>
                                    Доставка грузов
                                    <br>
                                    из любых стран
                                    <br>
                                    Азии, Европы и Америки
                                </h2>
                                <h3>
                                    в Россию, Беларусь и Казахстан
                                </h3>
                                <a href=''>Подробнее</a>
                                <a href=''>Рассчитать доставку</a>
                                <a class='last' data-target='#code' data-toggle='modal'>Отследить груз</a>
                            </div>
                        </div>
                    </div>
                    <div class='item' style='background-image: url(<?php echo esc_url( get_template_directory_uri() );?>/img/slide.jpg);'>
                        <img alt='' class='img' src='img/slide.jpg'>
                        <div class='content'>
                            <div class='textBox right'>
                                <h2>
                                    Доставка грузов
                                    <br>
                                    из любых стран
                                    <br>
                                    Азии, Европы и Америки
                                </h2>
                                <h3>
                                    в Россию, Беларусь и Казахстан
                                </h3>
                                <a href=''>Подробнее</a>
                                <a href=''>Рассчитать доставку</a>
                                <a class='last' data-target='#code' data-toggle='modal'>Отследить груз</a>
                            </div>
                        </div>
                    </div>
                </div>
            </header>