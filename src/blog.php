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

<body class="page blog-page">
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
    <header class="main-header">
        <div class="main-header__wrapper main-header__wrapper--page">
            <div class="top-line top-line--row">
                <a href="index.php" class="animate">
                    <svg width="70" height="40" viewbox="0 0 70 40" class="logo">
                        <use xlink:href="static/img/svg/sprite.svg#logo" />
                    </svg>
                </a>
                <div class="toggle-menu animate">
                    <div class="toggle-menu__row"></div>
                    <div class="toggle-menu__row"></div>
                    <div class="toggle-menu__row"></div>
                </div>
            </div>
            <div class="main-block main-block--blog animate">
                <div class="main-block__content">
                    <figure class="main-photo">
                        <img src="static/img/content/about/myphoto_cropped.jpg" alt=""></figure>
                        <h1> <?php echo $lang['blog-header'] ?></h1>
                        <p> <?php echo $lang['blog-descr'] ?></p>
                    </div>
                </div>
                <div class="bottom-line">
                    <span class="arrow-down"></span>
                </div>
            </div>
            <nav class="toggle-navigation">
                <ul>
                 <li>
                    <a href="index.php"><?php echo $lang['menu']['main'] ?></a>
                </li>
                <li>
                    <a href="works.php"><?php echo $lang['menu']['works'] ?></a>
                </li>
                <li>
                    <a href="about.php"><?php echo $lang['menu']['about'] ?></a>
                </li>
            </ul>
        </nav>
    </header>
    <div class="blog">
        <div class="hidden-menu">
            <div class="hidden-menu__toggle"></div>
        </div>
        <div class="container">
            <div class="blog-wrapper">
                <aside class="aside">
                    <nav class="blog-navigation">
                        <ul>
                            <li class="active">
                                <a href="posts/post-1.php">
                                    <?php echo $lang['articles']['first']['title']; ?></a>
                                </li>
                                <li><a href="posts/post-2.php">
                                    <?php echo $lang['articles']['second']['title']; ?></a></li>
                                    <li><a href="posts/post-3.php">
                                        <?php echo $lang['articles']['third']['title']; ?></a></li>
                                        <li><a href="posts/post-4.php">
                                            <?php echo $lang['articles']['fourth']['title']; ?></a></li>
                                        </ul>
                                    </nav>
                                    <div class="aside__circle"></div>
                                </aside>
                                <main class="main">
                                    <div class="blog-content">
                                    </div>
                                </main>
                            </div>
                        </div>
                    </div>
                    <footer class="footer">
                        <div class="container">
                            <div class="footer__wrapper">
                                <div class="footer-info">
                                    <blockquote>
                                        <p>
                                            <?php echo $lang['first-blockquote']['text']; ?>
                                        </p>
                                        <p>
                                            &ndash;
                                            <?php echo $lang['first-blockquote']['author']; ?>
                                        </p>
                                    </blockquote>
                                </div>
                                <div class="footer-nav">
                                    <ul class="footer-menu">
                                        <li>
                                            <a href="index.php">
                                                <?php echo $lang['menu']['main'] ?></a>
                                            </li>
                                            <li>
                                                <a href="about.php">
                                                    <?php echo $lang['menu']['about'] ?></a>
                                                </li>
                                                <li>
                                                    <a href="blog.php">
                                                        <?php echo $lang['menu']['blog'] ?></a>
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
                                                        &ndash;
                                                        <?php echo $lang['second-blockquote']['author']; ?>
                                                    </p>
                                                </blockquote>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="footer-text">
                                        <span class="creator">&copy;
                                            <?php echo $lang['footer']['name']; ?>
                                        </span>
                                        <span class="delimeter delimeter--hidden">|</span>
                                        <span class="profession">
                                            <?php echo $lang['footer']['profession']; ?></span>
                                            <span class="delimeter">|</span>
                                            <span class="year">
                                                <?php echo date("Y"); ?></span>
                                            </div>
                                        </footer>
                                        <script src="static/js/scripts.min.js"></script>
                                        <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBf86ERXMsj_Tj2mXWAS9GATz9H8ulGxbg"></script>
                                    </body>

                                    </html>