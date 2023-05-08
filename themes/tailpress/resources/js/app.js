// Navigation toggle
// window.addEventListener('load', function () {
//       let main_navigation = document.querySelector('#primary-menu');
//       document.querySelector('#primary-menu-toggle').addEventListener('click', function (e) {
//             e.preventDefault();
//             main_navigation.classList.toggle('hidden');
//       });
// });
jQuery(document).ready(function($) {
      $('#modal').on('click', function() {
          $(this).addClass('hidden');
          $('#player').attr('src', '');
      });
  
      $('.open-video').on('click', function() {
          $('#modal').removeClass('hidden');
      });
  });
  
  
  
  
  
  
  
