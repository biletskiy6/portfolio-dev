
var preloader = (function() {
    var percentsTotal = 0,
        preloader = $('.preloader');

    var imgPath = $('*').map(function(ndx, element) {
        var background = $(element).css('background-image'),
            img = $(element).is('img'),
            path = '';

        if (background != 'none') {
            path = background.replace('url("', '').replace('")', '');
        }

        if (img) {
            path = $(element).attr('src');
        }

        if (path) return path

    });

    var setAnimations = function() {
        var timeline = new TimelineMax();

    timeline.to(".main-block img", 1, {
        opacity: 1,
        ease: Expo.easeInOut
    }, 0.2);
    timeline.to(".main-block h3", 1, {
        opacity: 1,
        ease: Expo.easeInOut
    }, 0.4);
    timeline.to(".main-block p", 1, {
        opacity: 0.8,
        ease: Expo.easeInOut
    }, 0.6);

    timeline.to(".bottom-line.animate", 1, {
        opacity: 1,
        ease: Expo.easeInOut
    }, 1);

    timeline.to(".button.animate", 0.5, {
        opacity: 1,
        ease: Expo.easeInOut
    }, 1);

    timeline.to("body.page svg.animate", 1, {
        opacity: 0.13,
        ease: Expo.easeInOut
    }, 0.1);

    timeline.to("body.page .toggle-menu.animate", 1, {
        opacity: 1,
        ease: Expo.easeInOut
    }, 0.6);



    var durationSocials = 0.2;
    $(".social-animate").each(function() {
        var socailAnimate = new TimelineMax();
        socailAnimate.to(this, 1, {
            opacity: 1,
            ease: Expo.easeInOut
        }, durationSocials);
        durationSocials += 0.1;
    });
    var durationMenu = 0.6;
    $(".animate-menu").each(function() {
        var socailAnimate = new TimelineMax();
        socailAnimate.to(this, 1, {
            opacity: 1,
            ease: Expo.easeInOut
        }, durationSocials);
        durationSocials += 0.2;
    });

    }

    var setPercents = function(total, current) {
        var persents = Math.ceil(current / total * 100);

        $('.preloader__percents').text(persents + '%');

        if (persents >= 100) {
            preloader.fadeOut();
            setAnimations();
        }
    }

    var loadImages = function(images) {

        if (!images.length) preloader.fadeOut();

        images.forEach(function(img, i, images) {
            var fakeImage = $('<img>', {
                attr: {
                    src: img
                }
            });

            fakeImage.on('load error', function() {
                percentsTotal++;
                setPercents(images.length, percentsTotal);
            });
        });
    }

    return {
        init: function() {
            var imgs = imgPath.toArray();
            loadImages(imgs);
        }
    }
}());
var parallax = (function() {
    var user = document.querySelector(".main-block"),
        portfolio = document.querySelector(".header-bg-svg");

    return {
        move: function(block, windowScroll, strafeAmount) {
            var strafe = windowScroll / -strafeAmount + '%';
            var transformString = 'translate3d(0,' + strafe + ',0)';
            var style = block.style;

            style.transform = transformString;
            style.webkitTransform = transformString;
        },

        init: function(wScroll) {

            //this.move(portfolio, wScroll, 20);
            //this.move(user, wScroll, 30);
        }
    }

})();
var animateCss = (function() {

    var checkDistanse = function(scrollTop, elem) {
        var offset = elem.offset().top;
        var windowMargin = Math.ceil($(window).height() / 3);
        var topBorder = offset - scrollTop - windowMargin;
        var bottomEdge = elem.outerHeight(true) + offset;
        var bottomBorder = scrollTop + windowMargin - bottomEdge;

        return topBorder <= 0 && bottomBorder <= 0;
    }

    var animationActions = {
        toRight: function() {
            $(this).addClass('toRight');
        },

        toLeft: function() {
            $(this).addClass('toLeft');
        },

    }


    return {
        init: function() {
            $(window).on('scroll', function() {
                var scrollTop = $(window).scrollTop();
                var elems = $(".animate");

                elems.each(function(index, el) {
                    var $this = $(this);

                    if (checkDistanse(scrollTop, $this)) {
                        var animationType = $this.data('animation')
                        animationActions[animationType].call($this);
                    }

                });


            });
        }
    }
})();

var slider = (function() {

    var counter = 1,
        duration = 300,
        inProcess = false,
        preloader = $("#preloader");

    var moveSlide = function(container, direction) {
        var items = $('.slider__item', container);
        activeItem = items.filter(".active"),
            direction = direction == 'down' ? 100 : -100,
            path = activeItem.find("img")[0].src,
            display = $(".slideshow .slideshow__display-pic");
        if (counter >= items.length) counter = 0;
        var reqItem = items.eq(counter);
        activeItem.animate({
            'top': direction + '%'
        }, duration);

        reqItem.animate({
            'top': '0%'
        }, duration, function() {
            activeItem.removeClass('active').css('top', '-' + direction + '%');
            $(this).addClass('active');
            inProcess = false;
        });

    }

    var createAnimation = function(target, paste, duration) {
        var letters = target.split(''); // берем наш текст и в массив


        $str = $(paste).text(''); // делаем пустой див
        $.each(letters, function(index, el) {
            $span = $("<span>" + this + "</span>");
            $span.addClass('works-description__span');
            $span.css({
                'transition': "opacity 70ms linear " + duration + "ms"
            });
            $(paste).append($span);
            duration += 30;
        });


    }
    return {
        init: function() {
            $(".slider__controls-down").on('click', function(e) {
                e.preventDefault();

                if (!inProcess) {
                    inProcess = true;
                    var reqItems = $(this).closest('.slider').find(".slider__item").filter(".active");
                    var reqHeader = reqItems.data("title");
                    var reqSkills = reqItems.data("skills");
                    var reqHref = reqItems.data("href");
                    var reqSrc = reqItems.find("img")[0].src;

                    createAnimation(reqHeader, $(".works-description .subheader"), 30);
                    createAnimation(reqSkills, $(".technologies"), 200);

                    moveSlide.call($(".slider__first"), $(".slider__first"), 'down');
                    moveSlide.call($(".slider__opposite"), $(".slider__opposite"), 'up');
                    counter++;


                    $(".slider__item").removeClass("active");
                    $(".works-description a").attr('href', reqHref);

                    display.fadeOut(function() {
                        display.attr('src', reqSrc).on('load', function() {
                            $(".works-description__span").addClass('active');
                            display.fadeIn('slow', function() {});
                        });
                    });

                }

            });
        }
    }

})();

function moveBg() {
    var movementStrength = 25;
    var height = movementStrength / $(window).height();
    var width = movementStrength / $(window).width();
    $(".bg-image").mousemove(function(e) {
        var pageX = e.pageX - ($(window).width() / 2);
        var pageY = e.pageY - ($(window).height() / 2);
        var newvalueX = width * pageX * -1 - 25;
        var newvalueY = height * pageY * -1 - 50;
        $('.bg-image').css("background-position", newvalueX + "px     " + newvalueY + "px");
    });
}

function scrollMagicPin() {


    var controller = new ScrollMagic.Controller({
        globalSceneOptions: {
            triggerHook: 'onLeave'
        }
    });

    var slides = document.querySelectorAll(".pin");


    for (var i = 0; i < slides.length; i++) {
        new ScrollMagic.Scene({
                triggerElement: slides[i]
            })
            .setPin(slides[i])
            .addIndicators()
            .addTo(controller);
    }

}

function scrollMagic() {
    var controller = new ScrollMagic.Controller();

    var timeline = new TimelineMax();

    $(".animate-on-scroll").each(function() {

    var ourScene = new ScrollMagic.Scene({
        triggerElement: this,
        triggerHook: 0.85,
    })
   
    .setTween(TweenMax.from(this, 0.6, {
        autoAlpha: 0,
        yoyo: true,
        ease: Power0.easeNone
    }))
    .addIndicators()
    .addTo(controller)
    });






    ////////
    var strokeOffset = 35.547;
    var strokeDelay = 0.2;
    $(".circle").each(function(index, el) {
        var circle = new ScrollMagic.Scene({
         triggerElement: this,
         triggerHook: 0.75,
        })
        .setTween(TweenMax.to(this, 1.6, {
        strokeDashoffset: strokeOffset,
    })) 
    .addIndicators()
    .addTo(controller)
    strokeOffset += 5
    });

    // var circle90 = new ScrollMagic.Scene({
    //     triggerElement: ".circle-90",
    //     triggerHook: 0.75,
    // })
   
    // .setTween(TweenMax.to(".circle-90", 1.6, {
    //     strokeDashoffset: 28.2735
    // }))
    // .addIndicators()
    // .addTo(controller)

    //  var circle85 = new ScrollMagic.Scene({
    //     triggerElement: ".circle-85",
    //     triggerHook: 0.75,
    // })
   
    // .setTween(TweenMax.to(".circle-85", 1.6, {
    //     strokeDashoffset: 42.41025
    // }))
    // .addIndicators()
    // .addTo(controller)

    // var circle80 = new ScrollMagic.Scene({
    //     triggerElement: ".circle-80",
    //     triggerHook: 0.75,
    // })
   
    // .setTween(TweenMax.to(".circle-80", 1.6, {
    //     strokeDashoffset: 56.547
    // }))
    // .addIndicators()
    // .addTo(controller)


}


function addSVGAnimation() {

}


function greenSockMenu() {
    var t1 = new TimelineMax({ paused: true });

    t1.to(".toggle-navigation", 0.9, {
        top: 0,
        ease: Expo.easeInOut
    });

    t1.staggerFrom(".toggle-navigation ul li", 1.5, {
        y: 100,
        opacity: 0,
        ease: Expo.easeOut,
    }, 0.1);

    t1.reverse();

    $(document).on("click", '.toggle-menu', function() {
        t1.reversed(!t1.reversed());
    });
    $(document).on("click", '.toggle-navigation li a', function() {
        t1.reversed(!t1.reversed());
    });
}

function swupArticles() {
    var swup = new Swup();
}

$(function() {
    svg4everybody();
    slider.init();
    preloader.init();
    greenSockMenu();
    scrollMagic();
    swupArticles();




var $carousel = $('.skills-items');
function showSliderScreen($widthScreen) {

    if ($widthScreen <= "576") {
        if (!$carousel.hasClass('slick-initialized')) {
            $carousel.slick({
                arrows: false,
                dots: true,
                slidesToShow: 1
            });
        }

    } else {
        if ($carousel.hasClass('slick-initialized')) {
            $carousel.slick('unslick');
        }
    }   
}

var widthScreen = $(window).width();
$(window).ready(showSliderScreen(widthScreen)).resize(function(){
    var widthScreen = $(window).width();
    showSliderScreen(widthScreen);
});


 // Attach listener function on state changes
    //     var text = $(".main-block h3");

    //     var split = new SplitText(text);

    //     function random(min, max){
    //     return (Math.random() * (max - min)) + min;
    // }

    // $(split.chars).each(function(i){
    //     TweenMax.from($(this), 2.5, {
    //         opacity: 0,
    //         x: random(-500, 500),
    //         y: random(-500, 500),
    //         z: random(-500, 500),
    //         scale: .1,
    //         delay: i * .02,
    //         yoyo: true,
    //         repeat: -1,
    //         repeatDelay: 10
    //     });
    // });






$(".blog-navigation li").on("click", function(e) {
    // e.preventDefault();

    // $(".blog-navigation li").removeClass("active");
    // $(this).addClass('active');
});



$(".hidden-menu__toggle").on("click", function() {
    $(this).parent().toggleClass("active");
});











    var mqlForBg = window.matchMedia("only screen and (min-width: 1000px)");
    if (mqlForBg.matches) {
        //moveBg();
    }
    $(".toggle-menu").on("click", function() {
        $(this).toggleClass("toggle-menu--active");
        $(".toggle-navigation").toggleClass('toggle-navigation--active');
    });

    $(".toggle-navigation li a").on("click", function() {
        $(".toggle-navigation").removeClass('toggle-navigation--active');
        $(".toggle-menu").removeClass('toggle-menu--active');

    });

    var mql = window.matchMedia("only screen and (min-width: 1366px)");
    mediaqueryresponse(mql);
    mql.addListener(mediaqueryresponse);

    function mediaqueryresponse(mql) {
        if (mql.matches) {
            if ($(".main-header").hasClass('main-header--page')) {
                scrollMagicPin();
            }
        } else {

        }

    }
});



window.onscroll = function() {
    var wScroll = window.pageYOffset;
    //parallax.init(wScroll);
    //console.log(wScroll);
}

$(window).on('load', function() {


    


    var mapTarget = document.getElementById('map');
    var latitude = 46.991062,
        longitude = 31.956072,
        map_zoom = 14;
    if (mapTarget) {
        var marker_url = {
            url: 'static/img/svg/map_marker.svg',
            scaledSize: new google.maps.Size(40, 40),

        };
    }
    //var marker_url =
    var main_color = '#4e8839',
        saturation_value = 0,
        brightness_value = 0;
    var style = [{
            "featureType": "water",
            "elementType": "geometry",
            "stylers": [{
                    "color": "#86a77a"
                },
                {
                    "lightness": 0
                }
            ]
        },
        {
            "featureType": "landscape",
            "elementType": "geometry",
            "stylers": [{
                    "color": "#f5f5f5"
                },
                {
                    "lightness": 20
                }
            ]
        },
        {
            "featureType": "road.highway",
            "elementType": "geometry.fill",
            "stylers": [{
                    "color": "#ffffff"
                },
                {
                    "lightness": 17
                }
            ]
        },
        {
            "featureType": "road.highway",
            "elementType": "geometry.stroke",
            "stylers": [{
                    "color": "#ffffff"
                },
                {
                    "lightness": 29
                },
                {
                    "weight": 0.2
                }
            ]
        },
        {
            "featureType": "road.arterial",
            "elementType": "geometry",
            "stylers": [{
                    "color": "#ffffff"
                },
                {
                    "lightness": 18
                }
            ]
        },
        {
            "featureType": "road.local",
            "elementType": "geometry",
            "stylers": [{
                    "color": "#ffffff"
                },
                {
                    "lightness": 16
                }
            ]
        },
        {
            "featureType": "poi",
            "elementType": "geometry",
            "stylers": [{
                    "color": "#f5f5f5"
                },
                {
                    "lightness": 21
                }
            ]
        },
        {
            "featureType": "poi.park",
            "elementType": "geometry",
            "stylers": [{
                    "color": "#dedede"
                },
                {
                    "lightness": 21
                }
            ]
        },
        {
            "elementType": "labels.text.stroke",
            "stylers": [{
                    "visibility": "on"
                },
                {
                    "color": "#ffffff"
                },
                {
                    "lightness": 16
                }
            ]
        },
        {
            "elementType": "labels.text.fill",
            "stylers": [{
                    "saturation": 36
                },
                {
                    "color": "#333333"
                },
                {
                    "lightness": 40
                }
            ]
        },
        {
            "elementType": "labels.icon",
            "stylers": [{
                "visibility": "off"
            }]
        },
        {
            "featureType": "transit",
            "elementType": "geometry",
            "stylers": [{
                    "color": "#f2f2f2"
                },
                {
                    "lightness": 19
                }
            ]
        },
        {
            "featureType": "administrative",
            "elementType": "geometry.fill",
            "stylers": [{
                    "color": "#fefefe"
                },
                {
                    "lightness": 20
                }
            ]
        },
        {
            "featureType": "administrative",
            "elementType": "geometry.stroke",
            "stylers": [{
                    "color": "#fefefe"
                },
                {
                    "lightness": 17
                },
                {
                    "weight": 1.2
                }
            ]
        }
    ];
    if (mapTarget) {
        var map_options = {
            center: new google.maps.LatLng(latitude, longitude),
            zoom: map_zoom,
            panControl: false,
            fullscreenControl: false,
            zoomControl: false,
            mapTypeControl: false,
            streetViewControl: false,
            mapTypeId: google.maps.MapTypeId.ROADMAP,
            scrollwheel: false,
            styles: style,
        }
    }

    if (mapTarget) {
        var map = new google.maps.Map(mapTarget, map_options);
        var marker = new google.maps.Marker({
            position: new google.maps.LatLng(latitude, longitude),
            map: map,
            visible: true,
            optimized: false,
            icon: marker_url
        });
        map.panBy(400, 100);
    }

});