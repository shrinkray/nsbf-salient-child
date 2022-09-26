/*
 * ATTENTION: An "eval-source-map" devtool has been used.
 * This devtool is neither made for production nor for readable output files.
 * It uses "eval()" calls to create a separate source file with attached SourceMaps in the browser devtools.
 * If you are trying to read the output file, select a different devtool (https://webpack.js.org/configuration/devtool/)
 * or disable the default devtool with "devtool: false".
 * If you are looking for production-ready output files, see mode: "production" (https://webpack.js.org/configuration/mode/).
 */
/******/ (() => { // webpackBootstrap
/******/ 	var __webpack_modules__ = ({

/***/ "./js/custom-scripts.js":
/*!******************************!*\
  !*** ./js/custom-scripts.js ***!
  \******************************/
/***/ (() => {

eval("jQuery(document).ready(function ($) {\n  /* Add random images functionality to slider */\n  var sliderLength = $('.randomize-slides .n2-ss-slide-backgrounds > div').length;\n  var randomSlider = Math.floor(Math.random() * sliderLength);\n  var sliderTransformStyle = 'matrix3d(1, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1, 0, -100000, 0, 0, 1)';\n  $('.randomize-slides .n2-ss-slide-backgrounds > div').each(function () {\n    $(this).css('transform', sliderTransformStyle);\n  });\n  console.log(randomSlider);\n  jQuery(window).on(\"load\", function () {\n    setTimeout(function () {\n      $('.randomize-slides .n2-ss-slide-backgrounds > div').eq(randomSlider).css('transform', 'initial');\n    }, 1000);\n  });\n  /* End */\n\n  /* Script to hide all newsletters except for the latest year */\n\n  var firstIteration = true;\n  $('.newsletter-inner > .nsbf-newsletter').each(function () {\n    if (firstIteration) {\n      firstIteration = false;\n    } else {\n      $(this).hide();\n    }\n  });\n  /* Show newsletters by the year that is clicked */\n\n  $('.newsletter-inner .newsletter-header').click(function () {\n    $('.nsbf-newsletter').hide();\n    $('.newsletter-header').css('background', '#f0f0f0');\n    $('.newsletter-header > *').css('color', '#006b94');\n    $(this).next().show();\n    $(this).css('background', '#dba510');\n    $('*', this).css('color', '#fff');\n    $('html, body').animate({\n      scrollTop: $(this).offset().top - 130\n    }, 1000);\n  });\n  /* End */\n\n  /* Show error message of MemberPress if user \"Set Password\" has expired */\n\n  if ($('#mepr_jump')[0] && $('.mepr_error')[0]) {\n    $('#link-expired').show();\n  }\n  /* End */\n\n});//# sourceURL=[module]\n//# sourceMappingURL=data:application/json;charset=utf-8;base64,eyJ2ZXJzaW9uIjozLCJzb3VyY2VzIjpbIndlYnBhY2s6Ly9zYWxpZW50LWNoaWxkLy4vanMvY3VzdG9tLXNjcmlwdHMuanM/ZjgxNiJdLCJuYW1lcyI6WyJqUXVlcnkiLCJkb2N1bWVudCIsInJlYWR5IiwiJCIsInNsaWRlckxlbmd0aCIsImxlbmd0aCIsInJhbmRvbVNsaWRlciIsIk1hdGgiLCJmbG9vciIsInJhbmRvbSIsInNsaWRlclRyYW5zZm9ybVN0eWxlIiwiZWFjaCIsImNzcyIsImNvbnNvbGUiLCJsb2ciLCJ3aW5kb3ciLCJvbiIsInNldFRpbWVvdXQiLCJlcSIsImZpcnN0SXRlcmF0aW9uIiwiaGlkZSIsImNsaWNrIiwibmV4dCIsInNob3ciLCJhbmltYXRlIiwic2Nyb2xsVG9wIiwib2Zmc2V0IiwidG9wIl0sIm1hcHBpbmdzIjoiQUFBQUEsTUFBTSxDQUFDQyxRQUFELENBQU4sQ0FBaUJDLEtBQWpCLENBQXVCLFVBQVNDLENBQVQsRUFBVztBQUU5QjtBQUVBLE1BQUlDLFlBQVksR0FBR0QsQ0FBQyxDQUFDLGtEQUFELENBQUQsQ0FBc0RFLE1BQXpFO0FBQ0EsTUFBSUMsWUFBWSxHQUFHQyxJQUFJLENBQUNDLEtBQUwsQ0FBWUQsSUFBSSxDQUFDRSxNQUFMLEtBQWdCTCxZQUE1QixDQUFuQjtBQUNBLE1BQUlNLG9CQUFvQixHQUFHLGdFQUEzQjtBQUVBUCxFQUFBQSxDQUFDLENBQUMsa0RBQUQsQ0FBRCxDQUFzRFEsSUFBdEQsQ0FBMkQsWUFBVTtBQUNqRVIsSUFBQUEsQ0FBQyxDQUFDLElBQUQsQ0FBRCxDQUFRUyxHQUFSLENBQVksV0FBWixFQUF5QkYsb0JBQXpCO0FBQ0gsR0FGRDtBQUlBRyxFQUFBQSxPQUFPLENBQUNDLEdBQVIsQ0FBWVIsWUFBWjtBQUVBTixFQUFBQSxNQUFNLENBQUNlLE1BQUQsQ0FBTixDQUFlQyxFQUFmLENBQWtCLE1BQWxCLEVBQXlCLFlBQVU7QUFFL0JDLElBQUFBLFVBQVUsQ0FBQyxZQUFVO0FBQ2pCZCxNQUFBQSxDQUFDLENBQUMsa0RBQUQsQ0FBRCxDQUFzRGUsRUFBdEQsQ0FBeURaLFlBQXpELEVBQXVFTSxHQUF2RSxDQUEyRSxXQUEzRSxFQUF3RixTQUF4RjtBQUNILEtBRlMsRUFFUCxJQUZPLENBQVY7QUFJSCxHQU5EO0FBUUE7O0FBRUE7O0FBRUEsTUFBSU8sY0FBYyxHQUFHLElBQXJCO0FBRUFoQixFQUFBQSxDQUFDLENBQUMsc0NBQUQsQ0FBRCxDQUEwQ1EsSUFBMUMsQ0FBK0MsWUFBVTtBQUVyRCxRQUFHUSxjQUFILEVBQWtCO0FBQ2RBLE1BQUFBLGNBQWMsR0FBRyxLQUFqQjtBQUNILEtBRkQsTUFFTTtBQUNGaEIsTUFBQUEsQ0FBQyxDQUFDLElBQUQsQ0FBRCxDQUFRaUIsSUFBUjtBQUNIO0FBQ0osR0FQRDtBQVNBOztBQUVBakIsRUFBQUEsQ0FBQyxDQUFDLHNDQUFELENBQUQsQ0FBMENrQixLQUExQyxDQUFnRCxZQUFVO0FBRXREbEIsSUFBQUEsQ0FBQyxDQUFDLGtCQUFELENBQUQsQ0FBc0JpQixJQUF0QjtBQUNBakIsSUFBQUEsQ0FBQyxDQUFDLG9CQUFELENBQUQsQ0FBd0JTLEdBQXhCLENBQTRCLFlBQTVCLEVBQTBDLFNBQTFDO0FBQ0FULElBQUFBLENBQUMsQ0FBQyx3QkFBRCxDQUFELENBQTRCUyxHQUE1QixDQUFnQyxPQUFoQyxFQUF5QyxTQUF6QztBQUVBVCxJQUFBQSxDQUFDLENBQUMsSUFBRCxDQUFELENBQVFtQixJQUFSLEdBQWVDLElBQWY7QUFDQXBCLElBQUFBLENBQUMsQ0FBQyxJQUFELENBQUQsQ0FBUVMsR0FBUixDQUFZLFlBQVosRUFBMEIsU0FBMUI7QUFDQVQsSUFBQUEsQ0FBQyxDQUFDLEdBQUQsRUFBTSxJQUFOLENBQUQsQ0FBYVMsR0FBYixDQUFpQixPQUFqQixFQUEwQixNQUExQjtBQUVBVCxJQUFBQSxDQUFDLENBQUMsWUFBRCxDQUFELENBQWdCcUIsT0FBaEIsQ0FBd0I7QUFDcEJDLE1BQUFBLFNBQVMsRUFBR3RCLENBQUMsQ0FBQyxJQUFELENBQUQsQ0FBUXVCLE1BQVIsR0FBaUJDLEdBQWpCLEdBQXVCO0FBRGYsS0FBeEIsRUFFRyxJQUZIO0FBR0gsR0FiRDtBQWVBOztBQUVBOztBQUVBLE1BQUl4QixDQUFDLENBQUMsWUFBRCxDQUFELENBQWdCLENBQWhCLEtBQXNCQSxDQUFDLENBQUMsYUFBRCxDQUFELENBQWlCLENBQWpCLENBQTFCLEVBQStDO0FBQzNDQSxJQUFBQSxDQUFDLENBQUMsZUFBRCxDQUFELENBQW1Cb0IsSUFBbkI7QUFDSDtBQUVEOztBQUVILENBaEVEIiwic291cmNlc0NvbnRlbnQiOlsialF1ZXJ5KGRvY3VtZW50KS5yZWFkeShmdW5jdGlvbigkKXtcclxuXHJcbiAgICAvKiBBZGQgcmFuZG9tIGltYWdlcyBmdW5jdGlvbmFsaXR5IHRvIHNsaWRlciAqL1xyXG5cclxuICAgIHZhciBzbGlkZXJMZW5ndGggPSAkKCcucmFuZG9taXplLXNsaWRlcyAubjItc3Mtc2xpZGUtYmFja2dyb3VuZHMgPiBkaXYnKS5sZW5ndGg7XHJcbiAgICB2YXIgcmFuZG9tU2xpZGVyID0gTWF0aC5mbG9vcigoTWF0aC5yYW5kb20oKSAqIHNsaWRlckxlbmd0aCkpO1xyXG4gICAgdmFyIHNsaWRlclRyYW5zZm9ybVN0eWxlID0gJ21hdHJpeDNkKDEsIDAsIDAsIDAsIDAsIDEsIDAsIDAsIDAsIDAsIDEsIDAsIC0xMDAwMDAsIDAsIDAsIDEpJztcclxuXHJcbiAgICAkKCcucmFuZG9taXplLXNsaWRlcyAubjItc3Mtc2xpZGUtYmFja2dyb3VuZHMgPiBkaXYnKS5lYWNoKGZ1bmN0aW9uKCl7XHJcbiAgICAgICAgJCh0aGlzKS5jc3MoJ3RyYW5zZm9ybScsIHNsaWRlclRyYW5zZm9ybVN0eWxlKTtcclxuICAgIH0pOyAgICBcclxuICAgIFxyXG4gICAgY29uc29sZS5sb2cocmFuZG9tU2xpZGVyKTtcclxuICAgIFxyXG4gICAgalF1ZXJ5KHdpbmRvdykub24oXCJsb2FkXCIsZnVuY3Rpb24oKXsgICAgICAgIFxyXG5cclxuICAgICAgICBzZXRUaW1lb3V0KGZ1bmN0aW9uKCl7XHJcbiAgICAgICAgICAgICQoJy5yYW5kb21pemUtc2xpZGVzIC5uMi1zcy1zbGlkZS1iYWNrZ3JvdW5kcyA+IGRpdicpLmVxKHJhbmRvbVNsaWRlcikuY3NzKCd0cmFuc2Zvcm0nLCAnaW5pdGlhbCcpO1xyXG4gICAgICAgIH0sIDEwMDApO1xyXG5cclxuICAgIH0pO1xyXG5cclxuICAgIC8qIEVuZCAqL1xyXG4gICAgXHJcbiAgICAvKiBTY3JpcHQgdG8gaGlkZSBhbGwgbmV3c2xldHRlcnMgZXhjZXB0IGZvciB0aGUgbGF0ZXN0IHllYXIgKi9cclxuXHJcbiAgICB2YXIgZmlyc3RJdGVyYXRpb24gPSB0cnVlXHJcblxyXG4gICAgJCgnLm5ld3NsZXR0ZXItaW5uZXIgPiAubnNiZi1uZXdzbGV0dGVyJykuZWFjaChmdW5jdGlvbigpe1xyXG5cclxuICAgICAgICBpZihmaXJzdEl0ZXJhdGlvbil7XHJcbiAgICAgICAgICAgIGZpcnN0SXRlcmF0aW9uID0gZmFsc2U7XHJcbiAgICAgICAgfSBlbHNle1xyXG4gICAgICAgICAgICAkKHRoaXMpLmhpZGUoKTtcclxuICAgICAgICB9XHJcbiAgICB9KTtcclxuXHJcbiAgICAvKiBTaG93IG5ld3NsZXR0ZXJzIGJ5IHRoZSB5ZWFyIHRoYXQgaXMgY2xpY2tlZCAqL1xyXG4gICAgXHJcbiAgICAkKCcubmV3c2xldHRlci1pbm5lciAubmV3c2xldHRlci1oZWFkZXInKS5jbGljayhmdW5jdGlvbigpe1xyXG5cclxuICAgICAgICAkKCcubnNiZi1uZXdzbGV0dGVyJykuaGlkZSgpOyAgICAgICAgXHJcbiAgICAgICAgJCgnLm5ld3NsZXR0ZXItaGVhZGVyJykuY3NzKCdiYWNrZ3JvdW5kJywgJyNmMGYwZjAnKTtcclxuICAgICAgICAkKCcubmV3c2xldHRlci1oZWFkZXIgPiAqJykuY3NzKCdjb2xvcicsICcjMDA2Yjk0Jyk7XHJcblxyXG4gICAgICAgICQodGhpcykubmV4dCgpLnNob3coKTtcclxuICAgICAgICAkKHRoaXMpLmNzcygnYmFja2dyb3VuZCcsICcjZGJhNTEwJyk7XHJcbiAgICAgICAgJCgnKicsIHRoaXMpLmNzcygnY29sb3InLCAnI2ZmZicpO1xyXG5cclxuICAgICAgICAkKCdodG1sLCBib2R5JykuYW5pbWF0ZSh7XHJcbiAgICAgICAgICAgIHNjcm9sbFRvcDogKCQodGhpcykub2Zmc2V0KCkudG9wIC0gMTMwKVxyXG4gICAgICAgIH0sIDEwMDApO1xyXG4gICAgfSk7XHJcblxyXG4gICAgLyogRW5kICovXHJcblxyXG4gICAgLyogU2hvdyBlcnJvciBtZXNzYWdlIG9mIE1lbWJlclByZXNzIGlmIHVzZXIgXCJTZXQgUGFzc3dvcmRcIiBoYXMgZXhwaXJlZCAqL1xyXG5cclxuICAgIGlmKCAkKCcjbWVwcl9qdW1wJylbMF0gJiYgJCgnLm1lcHJfZXJyb3InKVswXSApe1xyXG4gICAgICAgICQoJyNsaW5rLWV4cGlyZWQnKS5zaG93KCk7XHJcbiAgICB9XHJcblxyXG4gICAgLyogRW5kICovXHJcblxyXG59KTsiXSwiZmlsZSI6Ii4vanMvY3VzdG9tLXNjcmlwdHMuanMuanMiLCJzb3VyY2VSb290IjoiIn0=\n//# sourceURL=webpack-internal:///./js/custom-scripts.js\n");

/***/ }),

/***/ "./scss/byways.scss":
/*!**************************!*\
  !*** ./scss/byways.scss ***!
  \**************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

"use strict";
eval("__webpack_require__.r(__webpack_exports__);\n// extracted by mini-css-extract-plugin\n//# sourceURL=[module]\n//# sourceMappingURL=data:application/json;charset=utf-8;base64,eyJ2ZXJzaW9uIjozLCJzb3VyY2VzIjpbIndlYnBhY2s6Ly9zYWxpZW50LWNoaWxkLy4vc2Nzcy9ieXdheXMuc2Nzcz8zNmY0Il0sIm5hbWVzIjpbXSwibWFwcGluZ3MiOiI7QUFBQSIsImZpbGUiOiIuL3Njc3MvYnl3YXlzLnNjc3MuanMiLCJzb3VyY2VzQ29udGVudCI6WyIvLyBleHRyYWN0ZWQgYnkgbWluaS1jc3MtZXh0cmFjdC1wbHVnaW5cbmV4cG9ydCB7fTsiXSwic291cmNlUm9vdCI6IiJ9\n//# sourceURL=webpack-internal:///./scss/byways.scss\n");

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
/******/ 			"/dist/custom-scripts": 0,
/******/ 			"dist/byways": 0
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
/******/ 			for(moduleId in moreModules) {
/******/ 				if(__webpack_require__.o(moreModules, moduleId)) {
/******/ 					__webpack_require__.m[moduleId] = moreModules[moduleId];
/******/ 				}
/******/ 			}
/******/ 			if(runtime) var result = runtime(__webpack_require__);
/******/ 			if(parentChunkLoadingFunction) parentChunkLoadingFunction(data);
/******/ 			for(;i < chunkIds.length; i++) {
/******/ 				chunkId = chunkIds[i];
/******/ 				if(__webpack_require__.o(installedChunks, chunkId) && installedChunks[chunkId]) {
/******/ 					installedChunks[chunkId][0]();
/******/ 				}
/******/ 				installedChunks[chunkIds[i]] = 0;
/******/ 			}
/******/ 			return __webpack_require__.O(result);
/******/ 		}
/******/ 		
/******/ 		var chunkLoadingGlobal = self["webpackChunksalient_child"] = self["webpackChunksalient_child"] || [];
/******/ 		chunkLoadingGlobal.forEach(webpackJsonpCallback.bind(null, 0));
/******/ 		chunkLoadingGlobal.push = webpackJsonpCallback.bind(null, chunkLoadingGlobal.push.bind(chunkLoadingGlobal));
/******/ 	})();
/******/ 	
/************************************************************************/
/******/ 	
/******/ 	// startup
/******/ 	// Load entry module and return exports
/******/ 	// This entry module depends on other loaded chunks and execution need to be delayed
/******/ 	__webpack_require__.O(undefined, ["dist/byways"], () => (__webpack_require__("./js/custom-scripts.js")))
/******/ 	var __webpack_exports__ = __webpack_require__.O(undefined, ["dist/byways"], () => (__webpack_require__("./scss/byways.scss")))
/******/ 	__webpack_exports__ = __webpack_require__.O(__webpack_exports__);
/******/ 	
/******/ })()
;