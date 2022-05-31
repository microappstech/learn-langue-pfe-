/*

Template: Booksto:
Author: iqonicthemes.in
Version: 1.0

*/

/*----------------------------------------------
Index Of Script
------------------------------------------------

Page Loader
Back To Top
Header
Scrolling
counter
Owl Carousel
Progress Bar
Parallax
Wow Animation

------------------------------------------------
Index Of Script
----------------------------------------------*/

$(document).ready(function() {

    /*------------------------
         Page Loader
        --------------------------*/
        jQuery("#load").fadeOut();
        jQuery("#loading").delay(0).fadeOut("slow");


        $(".navbar a").on("click", function(event) {
            if (!$(event.target).closest(".nav-item.dropdown").length) {
                $(".navbar-collapse").collapse('hide');
            }
        });

        /*------------------------
         Back To Top
        --------------------------*/
        $('#back-to-top').fadeOut();
        $(window).on("scroll", function() {
            if ($(this).scrollTop() > 250) {
                $('#back-to-top').fadeIn(1400);
            } else {
                $('#back-to-top').fadeOut(400);
            }
        });
        // scroll body to 0px on click
        $('#top').on('click', function() {
            $('top').tooltip('hide');
            $('body,html').animate({
                scrollTop: 0
            }, 800);
            return false;
        });
    /*------------------------
    Header
    --------------------------*/
     $('.navbar-nav li a').on('click', function(e) {
        var anchor = $(this);
        $('html, body').stop().animate({
            scrollTop: $(anchor.attr('href')).offset().top - 0
        }, 1500);
        e.preventDefault();
    });
    $(window).on('scroll', function() {
        if ($(this).scrollTop() > 70) {
            $('header').addClass('menu-sticky');
        } else {
            $('header').removeClass('menu-sticky');
        }
    });

$(document).ready(function(){
    $('.our-info ul.about-us li a').on('click',function() {
    $('.our-info ul.about-us li a.active').removeClass('active');
    $(this).addClass('active');
});
});

    /*------------------------
    Owl Carousel
    --------------------------*/
    $('.owl-carousel').each(function() {
        var $carousel = $(this);
        $carousel.owlCarousel({
            items: $carousel.data("items"),
            loop: $carousel.data("loop"),
            margin: $carousel.data("margin"),
            nav: $carousel.data("nav"),
            dots: $carousel.data("dots"),
            autoplay: $carousel.data("autoplay"),
            autoplayTimeout: $carousel.data("autoplay-timeout"),
             navText: ['<i class="fa fa-angle-left" aria-hidden="true"></i>', '<i class="fa fa-angle-right" aria-hidden="true"></i>'],
            responsiveClass: true,
            responsive: {
                // breakpoint from 0 up
                0: {
                    items: $carousel.data("items-mobile-sm")
                },
                // breakpoint from 480 up
                480: {
                    items: $carousel.data("items-mobile")
                },
                // breakpoint from 786 up
                786: {
                    items: $carousel.data("items-tab")
                },
                // breakpoint from 1023 up
                1023: {
                    items: $carousel.data("items-laptop")
                },
                1199: {
                    items: $carousel.data("items")
                }
            }
        });
    });

    /*------------------------
        Wow Animation
    --------------------------*/
        var wow = new WOW({
            boxClass: 'wow',
            animateClass: 'animated',
            offset: 0,
            mobile: false,
            live: true
        });
        wow.init();
/*--------------
animation
---------------------*/
var canvas    = document.getElementById('canvas'),
    ctx       = canvas.getContext('2d'),
      perlin    = new ClassicalNoise(),
    variation = .0025,
    amp       = 300,
    variators = [],
    max_lines = (navigator.userAgent.toLowerCase().indexOf('firefox') > -1) ? 25 : 40,
    canvasWidth,
    canvasHeight,
    start_y;

for (var i = 0, u = 0; i < max_lines; i++, u+=.02) {
  variators[i] = u;
}

function draw(){
  ctx.shadowColor = "rgba(43, 205, 255, 1)";
  ctx.shadowBlur = 0;
  
  for (var i = 0; i <= max_lines; i++){
    ctx.beginPath();
    ctx.moveTo(0, start_y);
    for (var x = 0; x <= canvasWidth; x++) {
      var y = perlin.noise(x*variation+variators[i], x*variation, 0);
      ctx.lineTo(x, start_y + amp*y);
    }
    var color = Math.floor(300*Math.abs(y));
    var alpha = Math.min(Math.abs(y)+0.05, .05);
    ctx.strokeStyle = "rgba(255,255,255,"+alpha+")";
    ctx.stroke();
    ctx.closePath();

    variators[i] += .005;
  }
}

(function init() {
    resizeCanvas();
    animate();
    window.addEventListener('resize', resizeCanvas);
})();

function animate() {
  ctx.clearRect(0, 0, canvasWidth, canvasHeight);
  draw();
  requestAnimationFrame(animate);
}

function resizeCanvas(){
    canvasWidth = document.documentElement.clientWidth,
    canvasHeight = document.documentElement.clientHeight; 

    canvas.setAttribute("width", canvasWidth);
    canvas.setAttribute("height", canvasHeight);

    start_y = canvasHeight/2;
}

    
});

