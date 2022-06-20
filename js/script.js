/* Sticky Header */
function sticky() {
    if ($(this).scrollTop() > 1) {
        $('header').addClass("sticky_header");
        $('.home').css("margin-top", "80px");
    } else {
        $('header').removeClass("sticky_header");
        $('.home').css("margin-top", "0px");
    }
}
$(window).scroll(function () {
    sticky();
});

$(document).ready(function () {
    sticky();

    /*$(".preloader").addClass("active");

    setTimeout(function () {
        $(".preloader").fadeOut("slow");
    }, 2000);*/

    // Portfolio
    $('.filters ul li').click(function () {
        $('.filters ul li').removeClass('active');
        $(this).addClass('active');

        var data = $(this).attr('data-filter');
        $grid.isotope({
            filter: data
        })
    });

    var $grid = $(".grid").isotope({
        itemSelector: ".all",
        percentPosition: true,
        masonry: {
            columnWidth: ".all"
        }
    })

    //   popup 
    $(".gallery").magnificPopup({
        delegate: "a",
        type: "image",
        tLoading: "Loading image #%curr%...",
        mainClass: "mfp-img-mobile",
        gallery: {
            enabled: true,
            navigateByImgClick: true,
            preload: [0, 1] // Will preload 0 - before current, and 1 after the current image
        },
        image: {
            tError: '<a href="%url%">The image #%curr%</a> could not be loaded.'
        }
    });

    var years = new Date().getFullYear() - 2007;
    $('.years').text(years);

    var year = new Date().getFullYear()
    $('.currentyear').text(year);

    $(window).resize(function () {
        clickNav();
    })

    clickNav();

});


function clickNav() {
    if ($(window).width() < 1200) {
        $("nav ul li a").click(function () {
            $('.navigation').removeClass('active');
            $('.menu--close5').removeClass('open');
        });
    } else {
        $('.navigation').removeClass('active');
        $('.menu--close5').removeClass('open');
    }
}

// Navigation
$(document).on('click', 'a[href^="#"]', function (event) {
    event.preventDefault();

    $('html, body').animate({
        scrollTop: $($.attr(this, 'href')).offset().top - 80
    }, 0);
});

// Scroll Bar Progress

function progressBarScroll() {
    let winScroll = document.body.scrollTop || document.documentElement.scrollTop,
        height = document.documentElement.scrollHeight - document.documentElement.clientHeight,
        scrolled = (winScroll / height) * 100;
    document.getElementById("progressBar").style.width = scrolled + "%";
}

window.onscroll = function () {
    progressBarScroll();
};

// Hamburger Menu
$('body').on('click', '.menu', function () {
    $(this).toggleClass('open');
    $(".navigation").toggleClass("active");
});

/* Forbidden Sign */
/*
  $("body").contextmenu(function () {
    event.preventDefault();
    $(this).addClass("active");
    setTimeout(function() {
        $("body").removeClass("active");
    }, 820);
});

document.onkeydown = function (event) {
    event = (event || window.event);
    if (event.keyCode == 123) {
        $("body").addClass("active");
        setTimeout(function() {
            $("body").removeClass("active");
        }, 820);
        return false;
    } else if ((event.ctrlKey && event.shiftKey && event.keyCode == 73) || (event.ctrlKey && event.shiftKey && event.keyCode == 74)) {
        $("body").addClass("active");
        
        setTimeout(function() {
            $("body").removeClass("active");
        }, 820);
        return false;
    }
}*/

// Contact Validation Form
function validateForm() {
    var name =  document.getElementById('name').value;
    if (name == "") {
        document.querySelector('.status').innerHTML = "Name cannot be empty";
        return false;
    }
    var email =  document.getElementById('email').value;
    if (email == "") {
        document.querySelector('.status').innerHTML = "Email cannot be empty";
        return false;
    } else {
        var re = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
        if(!re.test(email)){
            document.querySelector('.status').innerHTML = "Email format invalid";
            return false;
        }
    }
    var subject =  document.getElementById('subject').value;
    if (subject == "") {
        document.querySelector('.status').innerHTML = "Subject cannot be empty";
        return false;
    }
    var message =  document.getElementById('message').value;
    if (message == "") {
        document.querySelector('.status').innerHTML = "Message cannot be empty";
        return false;
    }
    document.querySelector('.status').innerHTML = "Sending...";
  }