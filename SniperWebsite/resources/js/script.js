const btn = document.getElementById('menu-btn')
const nav = document.getElementById('menu')

btn.addEventListener('click', () => {
  btn.classList.toggle('open')
  nav.classList.toggle('flex')
  nav.classList.toggle('hidden')
})
// testimonails js

function initParadoxWay() {
    "use strict";
   
    if ($(".testimonials-carousel").length > 0) {
        var j2 = new Swiper(".testimonials-carousel .swiper-container", {
            preloadImages: false,
            slidesPerView: 1,
            spaceBetween: 20,
            loop: true,
            grabCursor: true,
            mousewheel: false,
            centeredSlides: true,
            pagination: {
                el: '.tc-pagination',
                clickable: true,
                dynamicBullets: true,
            },
            navigation: {
                nextEl: '.listing-carousel-button-next',
                prevEl: '.listing-carousel-button-prev',
            },
            breakpoints: {
                1024: {
                    slidesPerView: 3,
                },
                
            }
        });
    }
    
  // bubbles -----------------
    
    
    setInterval(function () {
        var size = randomValue(sArray);
        $('.bubbles').append('<div class="individual-bubble" style="left: ' + randomValue(bArray) + 'px; width: ' + size + 'px; height:' + size + 'px;"></div>');
        $('.individual-bubble').animate({
            'bottom': '100%',
            'opacity': '-=0.7'
        }, 4000, function () {
            $(this).remove()
        });
    }, 350);
    
  }
  
  //   Init All ------------------
  $(document).ready(function () {
    initParadoxWay();
  });
  

  // clients

  var swiper = new Swiper(".mySwiper", {
    loop: false,
    loopFillGroupWithBlank: false,
    navigation: {
      nextEl: ".swiper-button-next",
      prevEl: ".swiper-button-prev",
    },
    breakpoints: {
      // when window width is >= 320px
      320: {
        slidesPerView: "2",
        spaceBetween: 16,
      },
      // when window width is >= 480px
      480: {
        slidesPerView: "2",
        spaceBetween: 16,
      },
      // when window width is >= 640px
      768: {
        slidesPerView: "3",
        spaceBetween: 24,
      },
      1024: {
        slidesPerView: "3",
        spaceBetween: 32,
      },
      1336: {
        slidesPerView: "5",
        spaceBetween: 32,
      },
    },
  });
  
   