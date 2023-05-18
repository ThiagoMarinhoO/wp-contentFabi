jQuery(document).ready(function($) {
      $('#modal').on('click', function() {
        $(this).addClass('hidden');
        $('#videoDep').attr('src', '');
      });

      $('.open-video').on('click', function() {
          var depID = $(this).attr('depID')
          console.log('depID: '+depID)
          let modalContents = $(".deps-card").find(".video-url");
          let numModalContents = modalContents.length;
          for (var i = 0; i < numModalContents; i++) {
                let modalPostID = modalContents.eq(i).attr("data-id");
                console.log('modalPostID: ' + modalPostID)
                console.log(modalContents === modalPostID)
                if (modalPostID === depID) {
                      let url = $('.video-url[data-id="'+modalPostID+'"]').val()
                      $('#videoDep').attr('src' , url+'?autoplay=1')
                      $('#modal').removeClass('hidden');
                      console.log('to no if')
                }
          }
      });

      $('.faq').click(function() {
        $(this).next("p").toggleClass('hidden');
        if ($(this).next("p").hasClass('hidden')) {
              $(this).find('svg').attr('class', 'w-6 h-6');
        } else {
              $(this).find('svg').attr('class', 'w-6 h-6 transform rotate-45');
              $(this).next("p").removeClass('opacity-0').addClass('opacity-100').fadeIn();
        }
      });

      var mySwiper = new Swiper('.swiper', {
            slidesPerView: 1,
            spaceBetween: 0,
            loop: true,
            autoplay: {
                  delay: 5000,
            },
            navigation: {
                  nextEl: '.swiper-button-next',
                  prevEl: '.swiper-button-prev',
            },
            breakpoints: {
                  767: {
                  slidesPerView: 4,
                  spaceBetween: 10,
                  },
            },
      });
      var swiper = new Swiper('.swiper-deps', {
            slidesPerView: 'auto',
            spaceBetween: 20,
            navigation: {
                  nextEl: '.swiper-button-next',
                  prevEl: '.swiper-button-prev',
            },
      });
      var novoSwiper = new Swiper('.swiperProfissional', {
            slidesPerView: 'auto',
            spaceBetween: 72,
            navigation: {
                  nextEl: '.swiper-button-next',
                  prevEl: '.swiper-button-prev',
            },
            // breakpoints: {
            //       767: {
            //       slidesPerView: 1,
            //       spaceBetween: 0,
            //       },
            // },
      });

      // $(".accordion-open-heading").each(function(index) {
      //       $(this).click(function(event) {
      //         $(this).children(":first").toggleClass("rounded-xl rounded-t-xl");
      //         $(this).children(":first").children(":eq(1)").toggleClass("rotate-180");
      //         $(this).next(".accordion-open-body").toggleClass("hidden");
      //       });
      // });
});

window.addEventListener('DOMContentLoaded', function () {
    let main_navigation = document.querySelector('#primaryNavContent');
    document.querySelector('#hamburguerButton')?.addEventListener('click', function (e) {
          e.preventDefault();
          main_navigation.classList.toggle('hidden');
    });
});

window.addEventListener('DOMContentLoaded', function () {
    let main_navigation = document.querySelector('#secondaryNavContent');
    const hamburguerButton = document.querySelector('#secondaryHamburguerButton')
    document.querySelector('#secondaryHamburguerButton')?.addEventListener('click', function (e) {
          e.preventDefault();
          main_navigation.classList.toggle('hidden');
    const swiper = new Swiper('.swiper', {
          direction: 'horizontal',
          loop: true,
          slidesPerView: 4,
          spaceBetween: 10,
          navigation: {
            nextEl: '.swiper-button-next',
            prevEl: '.swiper-button-prev',
          },
        });
    })
});

window.addEventListener('DOMContentLoaded', function () {
      const accordionItemHeaders = document.querySelectorAll("#accordion-open-heading");
      accordionItemHeaders.forEach((accordionItemHeader,index) => {
            accordionItemHeader.addEventListener("click", event => {

            accordionItemHeader.children[0].classList.toggle("rounded-xl");
            accordionItemHeader.children[0].classList.toggle("rounded-t-xl");
            accordionItemHeader.children[0].children[1].classList.toggle("rotate-180");
            document.querySelectorAll('#accordion-open-body')[index].classList.toggle('hidden')
                  
            });
      });
  })
