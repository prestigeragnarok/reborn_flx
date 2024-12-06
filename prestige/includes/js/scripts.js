function updatePreferredServer(sel){
  var preferred = sel.options[sel.selectedIndex].value;
  document.preferred_server_form.preferred_server.value = preferred;
  document.preferred_server_form.submit();
}

function updatePreferredTheme(sel){
  var preferred = sel.options[sel.selectedIndex].value;
  document.preferred_theme_form.preferred_theme.value = preferred;
  document.preferred_theme_form.submit();
}

function updatePreferredLanguage(sel){
  var preferred = sel.options[sel.selectedIndex].value;
  setCookie('language', preferred);
  reload();
}

function updatePreferredTheme(sel){
  var preferred = sel.options[sel.selectedIndex].value;
  document.preferred_theme_form.preferred_theme.value = preferred;
  document.preferred_theme_form.submit();
}

function toggleSearchForm() {
  $('.search-form').slideToggle('fast');
}

function setCookie(key, value) {
  var expires = new Date();
  expires.setTime(expires.getTime() + expires.getTime()); // never expires
  document.cookie = key + '=' + value + ';expires=' + expires.toUTCString();
}

function pad(num, size) {
  var s = num+"";
  while (s.length < size) s = "0" + s;
  return s;
}

$(function() {
  var inputs = 'input[type=text],input[type=password],input[type=file]';
  $(inputs).focus(function(){
    $(this).css({
      'background-color': '#f9f5e7',
      'border-color': '#dcd7c7',
      'color': '#726c58'
    });
  });
  $(inputs).blur(function(){
    $(this).css({
      'backgroundColor': '#ffffff',
      'borderColor': '#dddddd',
      'color': '#444444'
    }, 500);
  });
  $('.menuitem a').hover(
    function(){
      $(this).fadeTo(200, 0.85);
      $(this).css('cursor', 'pointer');
    },
    function(){
      $(this).fadeTo(150, 1.00);
      $(this).css('cursor', 'normal');
    }
  );

  // In: js/flux.datefields.js
  processDateFields();

  $('#back2top').hide();
  //Check to see if the window is top if not then display button
  $(window).scroll(function(){
    if ($(this).scrollTop() > 200) {
      $('#back2top').stop().fadeIn('fast');
    } else {
      $('#back2top').stop().fadeOut('fast');
    }
  });

});

$(window).on('load', function(){
  if($('.loader-box').length > 0) {
    $('.loader-box').fadeOut('slow');
  }
  AOS.init({
    'offset': -200,
  });

  var swiper1 = new Swiper("#articles-content .swiper", {
    // Default parameters
    slidesPerView: 1,
    spaceBetween: 0,

    // Responsive breakpoints
    breakpoints: {
      768: {
        slidesPerView: 2,
        spaceBetween: 20
      },
      1200: {
        slidesPerView: 3,
        spaceBetween: 20
      },
      1600: {
        slidesPerView: 4,
        spaceBetween: 20
      }
    },

    // Optional parameters
    direction: 'horizontal',
    loop: true,

    // If we need pagination
    pagination: {
      el: '#articles-content .swiper-pagination',
    },

    // Navigation arrows
    navigation: {
      nextEl: '#articles-content .swiper-button-next',
      prevEl: '#articles-content .swiper-button-prev',
    },

    // And if we need scrollbar
    // scrollbar: {
    //   el: '.swiper-scrollbar',
    // },
  });
  var swiper2 = new Swiper("#staff-swiper .swiper", {
    slidesPerView: 1,
    spaceBetween: 0,

    // Responsive breakpoints
    breakpoints: {
      // when window width is >= 320px
      320: {
        slidesPerView: 1,
        spaceBetween: 20
      },
      // when window width is >= 480px
      480: {
        slidesPerView: 2,
        spaceBetween: 20
      },
      // when window width is >= 640px
      640: {
        slidesPerView: 3,
        spaceBetween: 20
      }
    },
    direction: 'horizontal',
    loop: true,
    pagination: {
      el: '#staff-swiper .swiper-pagination',
    },
    navigation: {
      nextEl: '#staff-swiper .swiper-button-next',
      prevEl: '#staff-swiper .swiper-button-prev',
    },
  });
  var swiper3 = new Swiper("#guild-ranks .swiper", {
    // Default parameters
    slidesPerView: 3,
    spaceBetween: 0,

    breakpoints: {
      500: {
        slidesPerView: 4,
        slidesPerGroup: 4,
        spaceBetween: 20
      },
      540: {
        slidesPerView: 5,
        slidesPerGroup: 5,
        spaceBetween: 20
      },
      1600: {
        slidesPerView: 5,
        slidesPerGroup: 5,
        spaceBetween: 20
      }
    },
    direction: 'horizontal',
    loop: true,
    pagination: {
      el: '#guild-ranks .swiper-pagination',
    },
    navigation: {
      nextEl: '#guild-ranks .swiper-button-next',
      prevEl: '#guild-ranks .swiper-button-prev',
    },
  });

  $("#articles-buttons .articles-btn").on("click", function () {
    var filter = $(this).attr('data-filter-val');
    $("#articles-buttons .articles-btn");
    $("#articles-buttons .articles-btn").removeClass("active");
    $(this).addClass("active");

    if (filter == "all") {
      $("[data-filter]")
        .removeClass("non-swiper-slide")
        .addClass("swiper-slide")
        .show();

      // swiper.destroy();
      // swiper = new Swiper("#articles-content .swiper", swiper_config);

    } else {
      $(".swiper-slide")
        .not("[data-filter='" + filter + "']")
        .addClass("non-swiper-slide")
        .removeClass("swiper-slide")
        .hide();

      $("[data-filter='" + filter + "']")
        .removeClass("non-swiper-slide")
        .addClass("swiper-slide")
        .attr("style", null)
        .show();

      // swiper.destroy();
      // swiper = new Swiper("#articles-content .swiper", swiper_config);
    }

    swiper1.updateSize();
    swiper1.updateSlides();
    swiper1.updateProgress();
    swiper1.updateSlidesClasses();
    swiper1.slideTo(0);
    swiper1.scrollbar.updateSize();
  });

});