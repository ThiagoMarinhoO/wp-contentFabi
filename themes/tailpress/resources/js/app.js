// Navigation toggle
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