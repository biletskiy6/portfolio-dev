var preloader = (function () {
    var percentsTotal = 0,
    preloader = $('.preloader');

    var imgPath = $('*').map(function (ndx, element) {
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

    var setPercents = function (total, current) {
        var persents = Math.ceil(current / total * 100);

        $('.preloader__percents').text(persents + '%');

        if (persents >= 100) {
            preloader.fadeOut();
        }
    }

    var loadImages = function (images) {

        if (!images.length) preloader.fadeOut();

            images.forEach(function (img, i, images) {
                var fakeImage = $('<img>', {
                    attr: {
                        src: img
                    }
                });

                fakeImage.on('load error', function () {
                    percentsTotal++;
                    setPercents(images.length, percentsTotal);
                });
            });
        }

        return {
            init: function () {
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
                var transformString = 'translate3d(0,' + strafe +',0)';
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

                    if(checkDistanse(scrollTop, $this)) {
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
    var items =  $('.slider__item', container);
    activeItem = items.filter(".active"),
    direction = direction == 'down' ? 100 : -100,
    path = activeItem.find("img")[0].src,
    display = $(".slideshow .slideshow__display-pic");
    if(counter >= items.length) counter = 0;
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
        $span = $("<span>" + this +  "</span>");
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

            if(!inProcess) {
                inProcess = true;
                var reqItems = $(this).closest('.slider').find(".slider__item").filter(".active");
                var reqHeader = reqItems.data("title");
                var reqSkills = reqItems.data("skills");
                var reqHref = reqItems.data("href");
                var reqSrc = reqItems.find("img")[0].src;

                createAnimation(reqHeader, $(".works-description .subheader"), 30);
                createAnimation(reqSkills, $(".technologies"), 200);

                moveSlide.call($(".slider__first"), $(".slider__first") , 'down');
                moveSlide.call($(".slider__opposite"), $(".slider__opposite"), 'up');
                counter++;
               
               
                $(".slider__item").removeClass("active");   
                $(".works-description a").attr('href', reqHref);

                display.fadeOut(function() {                 
                    display.attr('src', reqSrc).on('load', function() {
                        $(".works-description__span").addClass('active');
                        display.fadeIn('slow', function() {
                        });     
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
    $(".bg-image").mousemove(function(e){
          var pageX = e.pageX - ($(window).width() / 2);
          var pageY = e.pageY - ($(window).height() / 2);
          var newvalueX = width * pageX * -1 - 25;
          var newvalueY = height * pageY * -1 - 50;
          $('.bg-image').css("background-position", newvalueX+"px     "+newvalueY+"px");
});
}

$(function(){
	svg4everybody();
    slider.init();
    animateCss.init();
    preloader.init();
    var mqlForBg = window.matchMedia("(min-width: 1000px)");
    if(mqlForBg.matches) {
     moveBg();
    }
    $(".toggle-menu").on("click", function() {
      $(this).toggleClass("toggle-menu--active");
      $(".toggle-navigation").toggleClass('toggle-navigation--active');
  });

    $(".toggle-navigation li a").on("click", function() {
      $(".toggle-navigation").removeClass('toggle-navigation--active');
      $(".toggle-menu").removeClass('toggle-menu--active');

  });

    var mql = window.matchMedia("(max-width: 992px)");
    var target = $(".works-description");
    var replaced = $(".slideshow__display");
    mediaqueryresponse(mql);
    mql.addListener(mediaqueryresponse);
    function mediaqueryresponse(mql){
     if (mql.matches){ 
       //target.swap(replaced);
    } else {
       //$(".works").append(target);
       //$(".works-examples .slideshow").append(replaced);
    }
}
});

jQuery.fn.swap = function(b) {
    b = jQuery(b)[0];
    var a = this[0],
        a2 = a.cloneNode(true),
        b2 = b.cloneNode(true),
        stack = this;

    a.parentNode.replaceChild(b2, a);
    b.parentNode.replaceChild(a2, b);

    stack[0] = a2;
    return this.pushStack( stack );
};




function resetBlocks(target, replaced) {
   target.replaceWith(replaced.clone());
    replaced.replaceWith(target);
}
function swapBlocks(target, replaced) {
    target.replaceWith(replaced.clone());
    replaced.replaceWith(target);
}

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
  if(mapTarget){
    var marker_url = {
      url: 'static/img/svg/map_marker.svg',
      scaledSize: new google.maps.Size(40, 40),

  };
}
//var marker_url =
var main_color = '#4e8839',
saturation_value = 0,
brightness_value = 0;
var style = 
[
{
    "featureType": "water",
    "elementType": "geometry",
    "stylers": [
    {
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
    "stylers": [
    {
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
    "stylers": [
    {
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
    "stylers": [
    {
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
    "stylers": [
    {
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
    "stylers": [
    {
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
    "stylers": [
    {
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
    "stylers": [
    {
        "color": "#dedede"
    },
    {
        "lightness": 21
    }
    ]
},
{
    "elementType": "labels.text.stroke",
    "stylers": [
    {
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
    "stylers": [
    {
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
    "stylers": [
    {
        "visibility": "off"
    }
    ]
},
{
    "featureType": "transit",
    "elementType": "geometry",
    "stylers": [
    {
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
    "stylers": [
    {
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
    "stylers": [
    {
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
if(mapTarget) {
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

if(mapTarget) {
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