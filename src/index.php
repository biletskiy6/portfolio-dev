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
    <body class="home">
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
        <header class="page-container">
            <div class="page-back"></div>
            <div class="main-header__wrapper">
                <div class="top-line top-line--row animate">
                    <a href="/">
            <svg width="70" height="40" viewbox="0 0 70 40" class="logo" >
                <use xlink:href="static/img/svg/sprite.svg#logo" />
            </svg>
                    </a>
                    <a href="works.php">
                             <svg width="35" height="35" viewbox="0 0 35 35" class="next-page-arrow" >
                <use xlink:href="static/img/svg/sprite.svg#next" />
            </svg>
                    </a>
                </div>
                <div class="main-block animate">
                    <input id="session-value" type="hidden" value="<?php echo $_SESSION['lang']; ?>">
                    <div class="main-block__content main-block__content--green">
                        <figure class="main-photo">
                            <img src="static/img/content/about/myphoto_cropped.jpg" alt=""></figure>
                        <h1><?php echo $lang['hero-title']; ?></h1>
                        <p><?php echo $lang['hero-subtitle']; ?></p>
                        <ul class="socials socials--index">
                            <li>
                                <a href="#" class="social-animate">
                                    <i class="fab fa-vk"></i>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="social-animate">
                                    <i class="fab fa-github"></i>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="social-animate">
                                    <i class="fab fa-instagram"></i>
                                </a>
                            </li>
                        </ul>

                        <ul class="language-switcher">
                             <li class="active">
                                <a href="index.php?lang=ru">
                                    <svg width="25" height="15" viewbox="0 0 25 15" class="" >
                <use xlink:href="static/img/svg/sprite.svg#ru" />
            </svg>
                                </a>
                            </li>
                            <li>
                                <a href="index.php?lang=en">
                                    <svg width="25" height="15" viewbox="0 0 25 15" class="" >
                <use xlink:href="static/img/svg/sprite.svg#en_GB" />
            </svg>
                                </a>
                            </li>
                           
                        </ul>
                    </div>
                    <nav class="main-navigation">
                        <ul class="main-menu">
                            <li>
                                <a href="works.php" class="animate-menu"><?php echo $lang['menu']['works']; ?></a>
                            </li>
                            <li>
                                <a href="about.php" class="animate-menu"><?php echo $lang['menu']['about']; ?></a>
                            </li>
                            <li>
                                <a href="blog.php" class="animate-menu"><?php echo $lang['menu']['blog']; ?></a>
                            </li>
                        </ul>
                    </nav>
                </div>
                <div class="bottom-line animate">
                    <span class="creator">&copy; <?php echo $lang['footer']['name']; ?>
                    </span>
                    <span class="delimeter delimeter--hidden">|</span>
                    <span class="profession"><?php echo $lang['footer']['profession']; ?></span>
                    <span class="delimeter">|</span>
                    <span class="year"><?php echo date('Y'); ?></span>
                </div>
                
            </div>
        </header>
        
        <script src="static/js/scripts.min.js"></script>
    </body>
</html>