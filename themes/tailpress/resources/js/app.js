// Navigation toggle
<<<<<<< HEAD
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
  
  
  
  
  
  
  
=======
window.addEventListener('DOMContentLoaded', function () {
      let main_navigation = document.querySelector('#primaryNavContent');
      document.querySelector('#hamburguerButton').addEventListener('click', function (e) {
            e.preventDefault();
            main_navigation.classList.toggle('hidden');
      });
});

window.addEventListener('DOMContentLoaded', function () {
      let main_navigation = document.querySelector('#secondaryNavContent');
      document.querySelector('#secondaryHamburguerButton').addEventListener('click', function (e) {
            e.preventDefault();
            main_navigation.classList.toggle('hidden');
      });
});
>>>>>>> 6c3972be2a6740375c69be870c6838e349a13280
