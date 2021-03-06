<?php 
include "languages/config.php";
 ?>
<!DOCTYPE html>
<html lang="ru">
    <head>
        <meta charset="utf-8">
        <title>Victor Biletskiy | Portoflio</title>
        <meta name="description" content="">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
        <meta property="og:image" content="path/to/image.jpg">
        <meta name="theme-color" content="#4e8839">
        <meta name="msapplication-navbutton-color" content="#4e8839">
        <meta name="apple-mobile-web-app-status-bar-style" content="#4e8839">
        <link rel="icon" href="static/img/favicon/fav_forest.png">
        <link rel="stylesheet" href="static/css/main.css">
    </head>
    <body class="page">
        <div class="preloader">
            <div class="sk-cube-grid">
                <div class="sk-cube sk-cube-1"></div>
                <div class="sk-cube sk-cube-2"></div>
                <div class="sk-cube sk-cube-3"></div>
                <div class="sk-cube sk-cube-4"></div>
                <div class="sk-cube sk-cube-5"></div>
                <div class="sk-cube sk-cube-6"></div>
                <div class="sk-cube sk-cube-7"></div>
                <div class="sk-cube sk-cube-8"></div>
                <div class="sk-cube sk-cube-9"></div>
            </div>
        </div>
        <header class="main-header main-header--page pin" data-scrollax-parent="true" >
            <div class="main-header__wrapper">
                <div class="top-line top-line--row">
                    <a href="index.php" class="animate">
                        <svg width="70" height="40" viewbox="0 0 70 40" class="logo" >
                            <use xlink:href="static/img/svg/sprite.svg#logo" />
                        </svg>
                    </a>
                    <div class="toggle-menu animate">
                        <div class="toggle-menu__row"></div>
                        <div class="toggle-menu__row"></div>
                        <div class="toggle-menu__row"></div>
                    </div>
                </div>
                <div class="main-block animate">
                    <div class="main-block__content">

                       <figure class="main-photo">
                            <img src="static/img/content/about/myphoto_cropped.jpg" alt=""></figure>
                      <h1><?php echo $lang['hero-title']; ?></h1>
                        <p><?php echo $lang['hero-subtitle']; ?></p>
                    </div>
                </div>
                <div class="bottom-line">
                    <span class="arrow-down"></span>
                </div>
            </div>
            <nav class="toggle-navigation cl-hover-effect">
                <ul>
                    <li>
                        <a href="index.php"><span><?php echo $lang['menu']['main']; ?></span></a>
                    </li>
                    <li>
                        <a href="about.php"><span><?php echo $lang['menu']['about']; ?></span></a>
                    </li>
                    <li>
                        <a href="blog.php"><span><?php echo $lang['menu']['blog']; ?></span></a>
                    </li>
                </ul>
            </nav>
            <svg width="1170" height="313" viewbox="0 0 1170 313" class="header-bg-svg">
                <use xlink:href="static/img/svg/sprite.svg#portfolio_header" />
            </svg>
        </header>
        <section class="s-works section">
            <div class="header-wrapper">
                <h3 class="header header-bottom-line header-bottom-line--centered animate-on-scroll"><?php echo $lang['works-header']; ?></h3>
                <div class="svg-bg">
                    <svg class="about-header-svg">
                        <use xlink:href="static/img/svg/sprite.svg#works_header" />
                    </svg>
                </div>
            </div>
            <div class="works">
                <div class="works-description">
                    <div class="works-description__content animate-on-scroll">
                        <h3 class="subheader header-bottom-line header-bottom-line--small">
                        <?php echo $lang['portfolio']['first']; ?>
                        </h3>
                        <div class="technologies">
                            <span>Html, css, javascript</span>
                        </div>
                        <a href="https://biletskiy6.github.io/pink-project/" target="_blank" class="button button--inverse button--inline">
                            <i class="far fa-link"></i>
                            <?php echo $lang['view-site']; ?>
                        </a>
                    </div>
                </div>
                <div class="works-examples">
                    <div class="slideshow">
                        <div class="slideshow__display animate-on-scroll">
                            <img src="static/img/slider/1.jpg" alt="" class="slideshow__display-pic">
                        </div>
                    </div>
                </div>
                <div class="slider-wrapper">
                    <div class="slider slider__first">
                        <div class="slider__display">
                            <ul class="slider__list">
                                <li class="slider__item active" data-title=" <?php echo $lang['portfolio']['second']; ?>" data-skills="html,css,javascript" data-href="https://biletskiy6.github.io/bear/">
                                    <img src="static/img/slider/2.jpg" alt="">
                                </li>
                                <li class="slider__item" data-title="<?php echo $lang['portfolio']['third']; ?>" data-skills="html,css,javascript" data-href="https://biletskiy6.github.io/invest/">
                                    <img src="static/img/slider/3.jpg" alt="">
                                </li>
                                  <li class="slider__item" data-title="<?php echo $lang['portfolio']['first']; ?>" data-skills="html,css,javascript" data-href="https://biletskiy6.github.io/pink-project/">
                                    <img src="static/img/slider/1.jpg" alt="">
                                </li>
                            </ul>
                        </div>
                        <div class="slider__controls">
                            <a href="#" class="slider__controls-down slider__controls-first">
                                <svg class="portf-arrow" xmlns="http://www.w3.org/2000/svg" width="25.18px" height="16.164px" viewBox="0 0 25.18 16.164" >
                                    <use xlink:href="static/img/svg/sprite.svg#portf_arrow_down" />
                                </svg>
                            </a>
                        </div>
                    </div>
                    <div class="slider slider__opposite">
                        <div class="slider__display">
                            <ul class="slider__list">
                                <li class="slider__item active" data-title="<?php echo $lang['portfolio']['fourth']; ?>" data-skills="html,css,javascript,php" data-href="http://vbblog.zzz.com.ua/" >
                                    <img src="static/img/slider/4.jpg" alt="">
                                </li>
                                <li class="slider__item" data-title="<?php echo $lang['portfolio']['fifth']; ?>" data-skills="html,css,javascript,wordpress" data-href=https://watersecurityproject.info/">
                                    <img src="static/img/slider/5.jpg" alt="">
                                </li>
                                <li class="slider__item" data-title="<?php echo $lang['portfolio']['sixth']; ?>" data-skills="html,css,javascript, wordpress" data-href="http://ecolab-plus.zzz.com.ua/">
                                    <img src="static/img/slider/6.jpg" alt="">
                                </li>
                            </ul>
                        </div>
                        <div class="slider__controls">
                            <a href="#" class="slider__controls-down slider__controls-oppsite">
                                <svg class="portf-arrow" xmlns="http://www.w3.org/2000/svg" width="25.18px" height="16.164px" viewBox="0 0 25.18 16.164" >
                                    <use xlink:href="static/img/svg/sprite.svg#portf_arrow_up" />
                                </svg>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="s-contacts section">
            <div class="contacts-wrapper">
                <img src="static/img/content/contacts/list1.png" alt="" class="leafs leafs--left animate-on-scroll">
                <img src="static/img/content/contacts/list3.png" alt="" class="leafs leafs--right animate-on-scroll">
                <form class="contacts-form animate-on-scroll" method="post" action="ajax/mail.php">
                    <div class="contacts-form__content">
                        <h3 class="subheader header-bottom-line header-bottom-line--centered">
                        <?php echo $lang['form']['header']; ?>    
                        </h3>
                        <div class="contacts-form__fields">
                            <input id="contacts-form__name" name="name" type="text" class="contacts-form__input" placeholder="<?php echo $lang['form']['name']; ?>">
                            <input id="contacts-form__email" type="text" name="email" class="contacts-form__input" placeholder="<?php echo $lang['form']['email']; ?>">
                            <textarea name="message" id="contacts-form__message" rows="5" class="contacts-form__textarea
                            сontacts-form__input-textarea" placeholder="<?php echo $lang['form']['message']; ?>"></textarea>
                        </div>
                        
                    </div>
                    <div class="lds-css ng-scope">
                        <div class="lds-dual-ring">
                            <div>
                            </div>
                        </div>
                    </div>
                    <div class="contacts-form__controls">
                        <input type="submit" value="<?php echo $lang['form']['submit']; ?>">
                        <input type="reset" value="<?php echo $lang['form']['reset']; ?>">
                    </div>
                </form>
            </div>
            <footer class="footer">
                <div class="container">
                    <div class="footer__wrapper">
                        <div class="footer-info">
                           <blockquote>
                                <p><?php echo $lang['first-blockquote']['text']; ?>
                                </p>
                                <p>
                                    &ndash; <?php echo $lang['first-blockquote']['author']; ?>
                                </p>
                            </blockquote>
                        </div>
                        <div class="footer-nav">
                            <ul class="footer-menu">
                                <li>
                                    <a href="index.php"><?php echo $lang['menu']['main'] ?></a>
                                </li>
                                <li>
                                    <a href="about.php"><?php echo $lang['menu']['about'] ?></a>
                                </li>
                                <li>
                                    <a href="blog.php"><?php echo $lang['menu']['blog'] ?></a>
                                </li>
                            </ul>
                            
                            <ul class="socials socials--footer">
                                <li>
                                    <a href="#">
                                        <i class="fab fa-vk"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="fab fa-github"></i>
                                    </a>
                                </li>
                                <li>
                                    
                                    <a href="#">
                                        <i class="fab fa-instagram"></i>
                                    </a>
                                </li>
                            </ul>
                            
                        </div>
                        <div class="footer-blockquote">
                            <blockquote>
                                <p>
                                    <?php echo $lang['second-blockquote']['text']; ?>
                                </p>
                                <p>
                                    &ndash; <?php echo $lang['second-blockquote']['author']; ?>
                                </p>
                            </blockquote>
                        </div>
                    </div>
                </div>
                <div class="footer-text">
                    <span class="creator">&copy; <?php echo $lang['footer']['name']; ?>
                    </span>
                    <span class="delimeter delimeter--hidden">|</span>
                    <span class="profession"><?php echo $lang['footer']['profession']; ?></span>
                    <span class="delimeter">|</span>
                    <span class="year"><?php echo date("Y"); ?></span>
                </div>
            </footer>
        </section>
        <div class="success-popup">
            <div class="popup">
                <div class="popup__content">
                    <svg width="120" version="1.1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 150 150">
                        <circle class="path circle" fill="none" stroke="#fff" stroke-width="6" stroke-miterlimit="10" cx="65.1" cy="65.1" r="62.1"></circle>
                    <polyline class="path check" fill="none" stroke="#fff" stroke-width="6" stroke-linecap="round" stroke-miterlimit="10" points="100.2,40.2 51.5,88.8 29.8,67.5 "></polyline>
                </svg>
                <h4 class="popup__header"><?php echo $lang['popup']['success']; ?></h4>
                <a href="#" class="popup__close"><?php echo $lang['popup']['close']; ?></a>
            </div>
        </div>
    </div>
    <script src="static/js/scripts.min.js"></script>
    <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBf86ERXMsj_Tj2mXWAS9GATz9H8ulGxbg"></script>
</body>
</html>