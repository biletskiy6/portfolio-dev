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
        <header class="main-header main-header--page pin">
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
            <nav class="toggle-navigation">
                <ul>
                  <li>
                        <a href="index.php"><span><?php echo $lang['menu']['main']; ?></span></a>
                    </li>
                    <li>
                        <a href="works.php"><span><?php echo $lang['menu']['works']; ?></span></a>
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
        <section class="s-about section">
            <div class="s-about__wrapper">
                <div class="about">
                    <div class="header-wrapper">
                        <h3 class="header header--about animate-on-scroll"><?php echo $lang['about-title']; ?></h3>
                        <div class="svg-bg">
                            <svg width="320" height="125" viewbox="0 0 320 125" class="about-header-svg">
                                <use xlink:href="static/img/svg/sprite.svg#about_header" />
                            </svg>
                        </div>
                    </div>
                    <div class="about-information">
                        <div class="about-image animate-on-scroll">
                            <img src="static/img/content/about/myphoto.jpg" alt="">
                        </div>
                        <h3 class="subheader header-bottom-line header-bottom-line--small header-bottom-line--centered animate-on-scroll"><?php echo $lang['who-am-i']; ?></h3>
                        <div class="about-content">
                            <p class="animate-on-scroll">
                                Меня зовут Виктор. Мне 21 год, проживаю в городе Николаев. Пишу хорошо структурированный, валидный,  чистый код с использованием современных технологий.
                            </p>
                            <p class="animate-on-scroll">
                              Люблю работать, развиваться, футбол, workout, велоспорт, путешествия, книги, музыку, бильярд.
                            </p>
                        </div>
                        
                    </div>
                </div>
                <div class="skills">
                    <div class="header-wrapper animate-on-scroll">
                        <h3 class="subheader header-bottom-line header-bottom-line--small header-bottom-line--centered">
                            <?php echo $lang['about-subtitle']['main']; ?>
                        <span class="text-wrap"><?php echo $lang['about-subtitle']['wrap']; ?></span>
                        </h3>
                        
                    </div>
                    <div class="frontend-skills skills-row">
                        <h3 class="skills-header animate-on-scroll">Frontend</h3>
                        <ul class="skills-items">
                            <li class="skill-item animate-on-scroll">
                                <svg class="circles" viewBox='0 0 110 110'>
                                    <circle r="45" cx="50%" cy="50%" fill="none" class="circles__first"/>
                                    <circle r="45" cx="50%" cy="50%"  transform="rotate(-90 55 55)" class="circles__second circle circle-90 animate-svg-circle"/>
                                </svg>
                                <span class="skill-item__text">HTML5</span>
                            </li>
                            <li class="skill-item animate-on-scroll">
                                <svg class="circles" viewBox='0 0 110 110'>
                                    <circle r="45" cx="50%" cy="50%" fill="none" class="circles__first"/>
                                    <circle r="45" cx="50%" cy="50%"  transform="rotate(-90 55 55)" class="circles__second circle circle-85"/>
                                </svg>
                                <span class="skill-item__text">CSS3</span>
                            </li>
                            <li class="skill-item animate-on-scroll">
                                <svg class="circles" viewBox='0 0 110 110'>
                                    <circle r="45" cx="50%" cy="50%" fill="none" class="circles__first"/>
                                    <circle r="45" cx="50%" cy="50%"  transform="rotate(-90 55 55)" class="circles__second circle circle-80"/>
                                </svg>
                                <span class="skill-item__text">JavaScript</span>
                            </li>
                            <li class="skill-item animate-on-scroll">
                                <svg class="circles" viewBox='0 0 110 110'>
                                    <circle r="45" cx="50%" cy="50%" fill="none" class="circles__first"/>
                                    <circle r="45" cx="50%" cy="50%"  transform="rotate(-90 55 55)" class="circles__second circle circle-80"/>
                                </svg>
                                <span class="skill-item__text">SmartGrid</span>
                            </li>
                            <li class="skill-item animate-on-scroll">
                                <svg class="circles" viewBox='0 0 110 110'>
                                    <circle r="45" cx="50%" cy="50%" fill="none" class="circles__first"/>
                                    <circle r="45" cx="50%" cy="50%"  transform="rotate(-90 55 55)" class="circles__second circle circle-80"/>
                                </svg>
                                <span class="skill-item__text">BEM</span>
                            </li>
                            <li class="skill-item animate-on-scroll">
                                <svg class="circles" viewBox='0 0 110 110'>
                                    <circle r="45" cx="50%" cy="50%" fill="none" class="circles__first"/>
                                    <circle r="45" cx="50%" cy="50%"  transform="rotate(-90 55 55)" class="circles__second circle circle-80"/>
                                </svg>
                                <span class="skill-item__text">SVG</span>
                            </li>
                        </ul>
                    </div>
                    <div class="backend-skills skills-row">
                        <h3 class="skills-header animate-on-scroll">Backend</h3>
                        <ul class="skills-items">
                            <li class="skill-item">
                                <svg class="circles" viewBox='0 0 110 110'>
                                    <circle r="45" cx="50%" cy="50%" fill="none" class="circles__first"/>
                                    <circle r="45" cx="50%" cy="50%"  transform="rotate(-90 55 55)" class="circles__second circle"/>
                                </svg>
                                <span class="skill-item__text">PHP</span>
                            </li>
                            <li class="skill-item">
                                <svg class="circles" viewBox='0 0 110 110'>
                                    <circle r="45" cx="50%" cy="50%" fill="none" class="circles__first"/>
                                    <circle r="45" cx="50%" cy="50%"  transform="rotate(-90 55 55)" class="circles__second circle"/>
                                </svg>
                                <span class="skill-item__text">mySQL</span>
                            </li>
                            <li class="skill-item">
                                <svg class="circles" viewBox='0 0 110 110'>
                                    <circle r="45" cx="50%" cy="50%" fill="none" class="circles__first"/>
                                    <circle r="45" cx="50%" cy="50%"  transform="rotate(-90 55 55)" class="circles__second circle"/>
                                </svg>
                                <span class="skill-item__text">YII2</span>
                            </li>
                            <li class="skill-item">
                                <svg class="circles" viewBox='0 0 110 110'>
                                    <circle r="45" cx="50%" cy="50%" fill="none" class="circles__first"/>
                                    <circle r="45" cx="50%" cy="50%"  transform="rotate(-90 55 55)" class="circles__second circle"/>
                                </svg>
                                <span class="skill-item__text">WordPress</span>
                            </li>
                            <li class="skill-item">
                                <svg class="circles" viewBox='0 0 110 110'>
                                    <circle r="45" cx="50%" cy="50%" fill="none" class="circles__first"/>
                                    <circle r="45" cx="50%" cy="50%"  transform="rotate(-90 55 55)" class="circles__second circle"/>
                                </svg>
                                <span class="skill-item__text">Node.js & npm</span>
                            </li>
                            <li class="skill-item">
                                <svg class="circles" viewBox='0 0 110 110'>
                                    <circle r="45" cx="50%" cy="50%" fill="none" class="circles__first"/>
                                    <circle r="45" cx="50%" cy="50%"  transform="rotate(-90 55 55)" class="circles__second circle"/>
                                </svg>
                                <span class="skill-item__text">Mongo.db</span>
                            </li>
                        </ul>
                    </div>
                    <div class="workflow-skills skills-row">
                        <h3 class="skills-header animate-on-scroll">Workflow</h3>
                        <ul class="skills-items">
                            <li class="skill-item">
                                <svg class="circles" viewBox='0 0 110 110'>
                                    <circle r="45" cx="50%" cy="50%" fill="none" class="circles__first"/>
                                    <circle r="45" cx="50%" cy="50%"  transform="rotate(-90 55 55)" class="circles__second circle"/>
                                </svg>
                                <span class="skill-item__text">Git</span>
                            </li>
                            <li class="skill-item">
                                <svg class="circles" viewBox='0 0 110 110'>
                                    <circle r="45" cx="50%" cy="50%" fill="none" class="circles__first"/>
                                    <circle r="45" cx="50%" cy="50%"  transform="rotate(-90 55 55)" class="circles__second circle"/>
                                </svg>
                                <span class="skill-item__text">Gulp</span>
                            </li>
                            <li class="skill-item">
                                <svg class="circles" viewBox='0 0 110 110'>
                                    <circle r="45" cx="50%" cy="50%" fill="none" class="circles__first"/>
                                    <circle r="45" cx="50%" cy="50%"  transform="rotate(-90 55 55)" class="circles__second circle"/>
                                </svg>
                                <span class="skill-item__text">Bower</span>
                            </li>
                        </ul>
                    </div>
                    
                </div>
            </div>
        </section>
        <div class="map-wrapper">
            <div id="map"></div>
            <div class="map-contacts">
                <div class="contacts animate-on-scroll">
                    <h3 class="subheader header-bottom-line header-bottom-line--centered animate-on-scroll"><?php echo $lang['contacts-header']; ?></h3>
                    <ul class="contacts-info">
                        <li class="animate-on-scroll">
                            <span class="contacts-icon"><i class="fab fa-skype"></i></span>
                            
                            <a href="skype:biletskiy6?call">biletskiy6</a>
                        </li>
                        <li class="animate-on-scroll">
                            <span class="contacts-icon"><i class="far fa-envelope"></i></span>
                            <a href="mailto:victorbiletskiy82@gmail.com">victorbiletskiy82@gmail.com</a>
                        </li>
                        <li class="animate-on-scroll">
                            <span class="contacts-icon"><i class="far fa-mobile"></i>    </span>            <a href="tel:+380730262720">+380730262720</a>
                        </li>
                        <li class="animate-on-scroll">
                            <span class="contacts-icon"><i class="far fa-map-marker-alt"></i></span>
                            <span><?php echo $lang['location'] ?></span>
                        </li>
                    </ul>
                </div>
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
                                    <a href="works.php"><?php echo $lang['menu']['works'] ?></a>
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
        </div>
        <script src="static/js/scripts.min.js"></script>
        <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBf86ERXMsj_Tj2mXWAS9GATz9H8ulGxbg&language=<?php echo $lang['map-language']; ?>"></script>
    </body>
</html>