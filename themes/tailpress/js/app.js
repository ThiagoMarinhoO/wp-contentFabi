/******/ (() => { // webpackBootstrap
/******/ 	var __webpack_modules__ = ({

/***/ "./resources/js/app.js":
/*!*****************************!*\
  !*** ./resources/js/app.js ***!
  \*****************************/
/***/ (() => {

jQuery(document).ready(function ($) {
  $('#modal').on('click', function () {
    $(this).addClass('hidden');
    $('#videoDep').attr('src', '');
  });
  $('.open-video').on('click', function () {
    var depID = $(this).attr('depID');
    console.log('depID: ' + depID);
    var modalContents = $(".deps-card").find(".video-url");
    var numModalContents = modalContents.length;
    for (var i = 0; i < numModalContents; i++) {
      var modalPostID = modalContents.eq(i).attr("data-id");
      console.log('modalPostID: ' + modalPostID);
      console.log(modalContents === modalPostID);
      if (modalPostID === depID) {
        var url = $('.video-url[data-id="' + modalPostID + '"]').val();
        $('#videoDep').attr('src', url + '?autoplay=1');
        $('#modal').removeClass('hidden');
        console.log('to no if');
      }
    }
  });
  $('.faq').click(function () {
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
      delay: 5000
    },
    navigation: {
      nextEl: '.swiper-button-next',
      prevEl: '.swiper-button-prev'
    },
    breakpoints: {
      767: {
        slidesPerView: 4,
        spaceBetween: 10
      }
    }
  });
  var swiper = new Swiper('.swiper-deps', {
    slidesPerView: 'auto',
    spaceBetween: 20,
    navigation: {
      nextEl: '.swiper-button-next',
      prevEl: '.swiper-button-prev'
    }
  });
  var novoSwiper = new Swiper('.swiperProfissional', {
    slidesPerView: 'auto',
    spaceBetween: 72,
    navigation: {
      nextEl: '.swiper-button-next',
      prevEl: '.swiper-button-prev'
    }
    // breakpoints: {
    //       767: {
    //       slidesPerView: 1,
    //       spaceBetween: 0,
    //       },
    // },
  });
  // Esconder todos os itens de conteúdo das abas, exceto o primeiro
  $(".tabcontent:not(:first)").hide();

  // Manipular o evento de clique nos botões de abas
  $(".tablinks").click(function () {
    // Obter o índice do botão de aba clicado
    var tabIndex = $(this).index();

    // Esconder todos os itens de conteúdo das abas
    $(".tabcontent").hide();
    $(".tablinks").removeClass('bg-gray-900 text-white');

    // Mostrar o item de conteúdo da aba selecionada
    $(".tabcontent").eq(tabIndex).show();
    $(".tablinks").eq(tabIndex).addClass('bg-gray-900 text-white');
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
  var _document$querySelect;
  var main_navigation = document.querySelector('#primaryNavContent');
  (_document$querySelect = document.querySelector('#hamburguerButton')) === null || _document$querySelect === void 0 ? void 0 : _document$querySelect.addEventListener('click', function (e) {
    e.preventDefault();
    main_navigation.classList.toggle('hidden');
  });
});
window.addEventListener('DOMContentLoaded', function () {
  var _document$querySelect2;
  var main_navigation = document.querySelector('#secondaryNavContent');
  var hamburguerButton = document.querySelector('#secondaryHamburguerButton');
  (_document$querySelect2 = document.querySelector('#secondaryHamburguerButton')) === null || _document$querySelect2 === void 0 ? void 0 : _document$querySelect2.addEventListener('click', function (e) {
    e.preventDefault();
    main_navigation.classList.toggle('hidden');
    var swiper = new Swiper('.swiper', {
      direction: 'horizontal',
      loop: true,
      slidesPerView: 4,
      spaceBetween: 10,
      navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev'
      }
    });
  });
});
window.addEventListener('DOMContentLoaded', function () {
  var accordionItemHeaders = document.querySelectorAll("#accordion-open-heading");
  accordionItemHeaders.forEach(function (accordionItemHeader, index) {
    accordionItemHeader.addEventListener("click", function (event) {
      accordionItemHeader.children[0].classList.toggle("rounded-xl");
      accordionItemHeader.children[0].classList.toggle("rounded-t-xl");
      accordionItemHeader.children[0].children[1].classList.toggle("rotate-180");
      document.querySelectorAll('#accordion-open-body')[index].classList.toggle('hidden');
    });
  });
});

/***/ }),

/***/ "./resources/css/app.css":
/*!*******************************!*\
  !*** ./resources/css/app.css ***!
  \*******************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

"use strict";
__webpack_require__.r(__webpack_exports__);
// extracted by mini-css-extract-plugin


/***/ }),

/***/ "./resources/css/editor-style.css":
/*!****************************************!*\
  !*** ./resources/css/editor-style.css ***!
  \****************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

"use strict";
__webpack_require__.r(__webpack_exports__);
// extracted by mini-css-extract-plugin


/***/ })

/******/ 	});
/************************************************************************/
/******/ 	// The module cache
/******/ 	var __webpack_module_cache__ = {};
/******/ 	
/******/ 	// The require function
/******/ 	function __webpack_require__(moduleId) {
/******/ 		// Check if module is in cache
/******/ 		var cachedModule = __webpack_module_cache__[moduleId];
/******/ 		if (cachedModule !== undefined) {
/******/ 			return cachedModule.exports;
/******/ 		}
/******/ 		// Create a new module (and put it into the cache)
/******/ 		var module = __webpack_module_cache__[moduleId] = {
/******/ 			// no module.id needed
/******/ 			// no module.loaded needed
/******/ 			exports: {}
/******/ 		};
/******/ 	
/******/ 		// Execute the module function
/******/ 		__webpack_modules__[moduleId](module, module.exports, __webpack_require__);
/******/ 	
/******/ 		// Return the exports of the module
/******/ 		return module.exports;
/******/ 	}
/******/ 	
/******/ 	// expose the modules object (__webpack_modules__)
/******/ 	__webpack_require__.m = __webpack_modules__;
/******/ 	
/************************************************************************/
/******/ 	/* webpack/runtime/chunk loaded */
/******/ 	(() => {
/******/ 		var deferred = [];
/******/ 		__webpack_require__.O = (result, chunkIds, fn, priority) => {
/******/ 			if(chunkIds) {
/******/ 				priority = priority || 0;
/******/ 				for(var i = deferred.length; i > 0 && deferred[i - 1][2] > priority; i--) deferred[i] = deferred[i - 1];
/******/ 				deferred[i] = [chunkIds, fn, priority];
/******/ 				return;
/******/ 			}
/******/ 			var notFulfilled = Infinity;
/******/ 			for (var i = 0; i < deferred.length; i++) {
/******/ 				var [chunkIds, fn, priority] = deferred[i];
/******/ 				var fulfilled = true;
/******/ 				for (var j = 0; j < chunkIds.length; j++) {
/******/ 					if ((priority & 1 === 0 || notFulfilled >= priority) && Object.keys(__webpack_require__.O).every((key) => (__webpack_require__.O[key](chunkIds[j])))) {
/******/ 						chunkIds.splice(j--, 1);
/******/ 					} else {
/******/ 						fulfilled = false;
/******/ 						if(priority < notFulfilled) notFulfilled = priority;
/******/ 					}
/******/ 				}
/******/ 				if(fulfilled) {
/******/ 					deferred.splice(i--, 1)
/******/ 					var r = fn();
/******/ 					if (r !== undefined) result = r;
/******/ 				}
/******/ 			}
/******/ 			return result;
/******/ 		};
/******/ 	})();
/******/ 	
/******/ 	/* webpack/runtime/hasOwnProperty shorthand */
/******/ 	(() => {
/******/ 		__webpack_require__.o = (obj, prop) => (Object.prototype.hasOwnProperty.call(obj, prop))
/******/ 	})();
/******/ 	
/******/ 	/* webpack/runtime/make namespace object */
/******/ 	(() => {
/******/ 		// define __esModule on exports
/******/ 		__webpack_require__.r = (exports) => {
/******/ 			if(typeof Symbol !== 'undefined' && Symbol.toStringTag) {
/******/ 				Object.defineProperty(exports, Symbol.toStringTag, { value: 'Module' });
/******/ 			}
/******/ 			Object.defineProperty(exports, '__esModule', { value: true });
/******/ 		};
/******/ 	})();
/******/ 	
/******/ 	/* webpack/runtime/jsonp chunk loading */
/******/ 	(() => {
/******/ 		// no baseURI
/******/ 		
/******/ 		// object to store loaded and loading chunks
/******/ 		// undefined = chunk not loaded, null = chunk preloaded/prefetched
/******/ 		// [resolve, reject, Promise] = chunk loading, 0 = chunk loaded
/******/ 		var installedChunks = {
/******/ 			"/js/app": 0,
/******/ 			"css/editor-style": 0,
/******/ 			"css/app": 0
/******/ 		};
/******/ 		
/******/ 		// no chunk on demand loading
/******/ 		
/******/ 		// no prefetching
/******/ 		
/******/ 		// no preloaded
/******/ 		
/******/ 		// no HMR
/******/ 		
/******/ 		// no HMR manifest
/******/ 		
/******/ 		__webpack_require__.O.j = (chunkId) => (installedChunks[chunkId] === 0);
/******/ 		
/******/ 		// install a JSONP callback for chunk loading
/******/ 		var webpackJsonpCallback = (parentChunkLoadingFunction, data) => {
/******/ 			var [chunkIds, moreModules, runtime] = data;
/******/ 			// add "moreModules" to the modules object,
/******/ 			// then flag all "chunkIds" as loaded and fire callback
/******/ 			var moduleId, chunkId, i = 0;
/******/ 			if(chunkIds.some((id) => (installedChunks[id] !== 0))) {
/******/ 				for(moduleId in moreModules) {
/******/ 					if(__webpack_require__.o(moreModules, moduleId)) {
/******/ 						__webpack_require__.m[moduleId] = moreModules[moduleId];
/******/ 					}
/******/ 				}
/******/ 				if(runtime) var result = runtime(__webpack_require__);
/******/ 			}
/******/ 			if(parentChunkLoadingFunction) parentChunkLoadingFunction(data);
/******/ 			for(;i < chunkIds.length; i++) {
/******/ 				chunkId = chunkIds[i];
/******/ 				if(__webpack_require__.o(installedChunks, chunkId) && installedChunks[chunkId]) {
/******/ 					installedChunks[chunkId][0]();
/******/ 				}
/******/ 				installedChunks[chunkId] = 0;
/******/ 			}
/******/ 			return __webpack_require__.O(result);
/******/ 		}
/******/ 		
/******/ 		var chunkLoadingGlobal = self["webpackChunktailpress"] = self["webpackChunktailpress"] || [];
/******/ 		chunkLoadingGlobal.forEach(webpackJsonpCallback.bind(null, 0));
/******/ 		chunkLoadingGlobal.push = webpackJsonpCallback.bind(null, chunkLoadingGlobal.push.bind(chunkLoadingGlobal));
/******/ 	})();
/******/ 	
/************************************************************************/
/******/ 	
/******/ 	// startup
/******/ 	// Load entry module and return exports
/******/ 	// This entry module depends on other loaded chunks and execution need to be delayed
/******/ 	__webpack_require__.O(undefined, ["css/editor-style","css/app"], () => (__webpack_require__("./resources/js/app.js")))
/******/ 	__webpack_require__.O(undefined, ["css/editor-style","css/app"], () => (__webpack_require__("./resources/css/app.css")))
/******/ 	var __webpack_exports__ = __webpack_require__.O(undefined, ["css/editor-style","css/app"], () => (__webpack_require__("./resources/css/editor-style.css")))
/******/ 	__webpack_exports__ = __webpack_require__.O(__webpack_exports__);
/******/ 	
/******/ })()
;