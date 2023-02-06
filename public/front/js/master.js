$('.master-menu-axtar').on('click', function(event) {
    event.stopPropagation();
    $('.master-axtar-area').toggleClass('visible-search');
});
$('body').on('click', function() {
    $('.master-axtar-area').removeClass('visible-search');
});
$('#header-search').on('click', function(event) {
    event.stopPropagation();
});


/* Scroll to top ucun custom js */
$(document).ready(function() {
    var scrollTop = $("#yuxari");
    yuxari
    $(window).scroll(function() {
        var topPos = $(this).scrollTop();

        if (topPos > 100) {
            $(scrollTop).css({ "opacity": "1", "transition": ".3s" });
        } else {
            $(scrollTop).css({ "opacity": "0", "transition": ".3s" });
        }
    });

    $(scrollTop).click(function() {
        $('html, body').animate({
            scrollTop: 0
        }, 800);
        return false;
    });
});


/* Mobile menu ucun custom js */
$('.mobil-menu-line-ikon').click(function(event) {
    event.stopPropagation();
    $('.mobile-menu-area').addClass('active-mobile-menu');
    $('.master-overlay').show();
});
$('.mobile-menu-close-icon').click(function() {
    $('.mobile-menu-area').removeClass('active-mobile-menu');
    $('.master-overlay').hide();
});
$('body').on('click', function() {
    $('.mobile-menu-area').removeClass('active-mobile-menu');
    $('.master-overlay').hide();
});
$('.mobile-menu-area').on('click', function(event) {
    event.stopPropagation();
});
$(window).on('resize', function() {
    var win = $(this);
    if (win.width() > 959) {
        $('.master-overlay').hide();
    }
});


/* Social share ucun custom js */
function share(link) {
    var ozellikler = "width=650px,height=700px,left=20px,top=20px";
    window.open(link, "Google", ozellikler);
}


/* Mobile menu ucun custom js */
$('#mobile-sidebar-menu .menu-item-has-children > a').append('<span class="mobil-menu-children-icon"><i class="fa fa-angle-down" aria-hidden="true"></i></span>');
$('#mobile-sidebar-menu .mobil-menu-children-icon').click(function(event) {
    event.preventDefault();
    var menu = $(this).parent().parent();
    menu.find('.sub-menu').eq(0).slideToggle(300);
});


/* Wordpress gallery lightbox */
$(".gallery-icon a").fancybox().attr('data-fancybox', 'gallery');
$('.gallery').each(function() {
    $(this).find(".gallery-icon a").attr('data-fancybox', 'group-' + jQuery(this).attr('id'));
});


/* Sual cavab ucun custom js */
$(document).ready(function() {
    $(".master-accordion-title").on("click", function() {
        if ($(this).hasClass("active")) {
            $(this).removeClass("active");
            $(this).siblings(".master-accordion-content").slideUp(200);
        } else {
            $(".master-accordion-title").removeClass("active");
            $(this).addClass("active");
            $(".master-accordion-content").slideUp(200);
            $(this).siblings(".master-accordion-content").slideDown(200);
        }
    });
});


/* Instagram ucun custom js */
$('.instagram-feed-page .owl-carousel').owlCarousel({
    loop: true,
    margin: 0,
    nav: true,
    dots: false,
    animateOut: 'fadeOut',
    animateIn: 'fadeIn',
    navText: [
        "<i class='fa fa-angle-left'></i>",
        "<i class='fa fa-angle-right'></i>"
    ],
    autoplay: false,
    autoplayHoverPause: true,
    autoplayTimeout: 4000,
    responsive: {
        0: {
            items: 1
        }
    }
})

function instagram(next) {

    $.ajax({
        url: '/wp-content/themes/masterstudio/instagram/feed.php',
        type: 'post',
        data: { "next": next },
        beforeSend: function() {
            $('.novbeti-sekil-button').text('Yüklənilir...');
        },
        success: function(data) {
            $('.novbeti-sekiller').remove();
            $('.instagram-feed-page').append(data);
        }
    })
}


/* Youtube ucun custom js */
function video(id) {
    $('.youtube-iframe').html('');
    $('.loading-area').css('opacity', '0');
    $('.youtube-ikon-area').show();
    $('#youtube-' + id + ' .loading-area').css('opacity', '1');
    $('#youtube-' + id + ' .youtube-iframe').html('<iframe src="https://youtube.com/embed/' + id + '?autoplay=1&rel=0" frameborder="0" allowfullscreen></iframe>');
    $('#youtube-' + id + ' .youtube-ikon-area').hide();
}

function youtube(next, page) {

    $.ajax({
        url: '/wp-content/themes/masterstudio/youtube/channel.php',
        type: 'post',
        data: { "next": next, "page": page },
        beforeSend: function() {
            $('.novbeti-button').text('Yüklənilir...');
        },
        success: function(data) {
            $('.novbeti-videolar').remove();
            $('.youtube-videolar').append(data);
        }
    })
}


/* Elaqe ucun custom js */
$('#contact #submit-btn').on('click', function() {

    var button = $(this);

    $.ajax({
        url: '/wp-content/themes/masterstudio/mailer/sendmail.php',
        type: 'POST',
        data: $('#contact').serialize(),
        beforeSend: function() {
            button.text('Göndərilir...');
            $("#submit-btn").prop('disabled', true);
        },
        success: function(data) {
            $('#contact-form-result').html(data);
            $('#contact-form-result').show();
            $("#submit-btn").prop('disabled', false);
            button.text('Göndər');
        }
    })

});


/* Post embed ucun custom js */
$('.yazi-metn p').has('iframe').addClass('master-embed');


/* Mobile menu ucun custom js */
$('.mobile-menu-area .menu-item-has-children').click(function(e) {
    event.stopPropagation();
    $(this).find('.sub-menu').slideToggle();
});

$('.mobile-menu-area .sub-menu').on('click', function(e) {
    event.stopPropagation();
});


/* Reyler ucun custom js */
$('.reyler.owl-carousel').owlCarousel({
    loop: true,
    margin: 50,
    nav: true,
    navText: [
        "<i class='fa fa-angle-left'></i>",
        "<i class='fa fa-angle-right'></i>"
    ],
    autoplay: true,
    autoplayHoverPause: true,
    autoplayTimeout: 4000,
    responsive: {
        0: {
            items: 1
        },
        650: {
            items: 2
        },
        1000: {
            items: 3
        }
    }
})


/* Sertifikatlar ucun custom js */
$('.esas-sertifikatlar.owl-carousel').owlCarousel({
    loop: true,
    margin: 30,
    nav: true,
    dots: true,
    navText: [
        "<i class='fa fa-angle-left'></i>",
        "<i class='fa fa-angle-right'></i>"
    ],
    autoplay: false,
    autoplayHoverPause: true,
    autoplayTimeout: 4000,
    responsive: {
        0: {
            items: 1
        },
        350: {
            items: 2,
            margin: 15,
        },
        650: {
            items: 3
        },
        959: {
            items: 5
        }
    }
})


/* Xerite ucun custom js */
function google_maps_init() {
    'use strict'
    var data_lat = $('#map').attr('data-lat');
    var data_lng = $('#map').attr('data-lng');
    var roemerberg = { lat: parseFloat(data_lat), lng: parseFloat(data_lng) }

    var map = new google.maps.Map(document.getElementById('map'), {
        zoom: 15,
        center: roemerberg
    })

    var marker = new google.maps.Marker({
        position: roemerberg,
        map: map
    })
}

function google_maps_lazyload(api_key) {
    'use strict'

    if (api_key) {
        var options = {
            rootMargin: '100px',
            threshold: 0
        }

        var map = document.getElementById('map')

        if (map != null) {

            var observer = new IntersectionObserver(
                function(entries, self) {
                    var isIntersecting = typeof entries[0].isIntersecting === 'boolean' ? entries[0].isIntersecting : entries[0].intersectionRatio > 0
                    if (isIntersecting) {
                        var mapsJS = document.createElement('script')
                        mapsJS.src = 'https://maps.googleapis.com/maps/api/js?callback=google_maps_init&key=' + api_key
                        document.getElementsByTagName('head')[0].appendChild(mapsJS)
                        self.unobserve(map)
                    }
                },
                options
            )

            observer.observe(map)

        }
    }
}

google_maps_lazyload("AIzaSyCCBrbjM9gtFIKIxoBetJjxFZYF0HXp0I8");