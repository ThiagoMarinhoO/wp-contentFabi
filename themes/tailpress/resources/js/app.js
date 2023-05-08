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

      $('button').click(function() {
            $(this).next("p").toggleClass('hidden');
            if ($(this).next("p").hasClass('hidden')) {
                  $(this).find('svg').attr('class', 'w-6 h-6');
            } else {
                  $(this).find('svg').attr('class', 'w-6 h-6 transform rotate-45');
                  $(this).next("p").removeClass('opacity-0').addClass('opacity-100').fadeIn();
            }
      });
  });
