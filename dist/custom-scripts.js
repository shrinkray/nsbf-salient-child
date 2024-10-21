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

eval("jQuery(document).ready(function ($) {\n  /* Add random images functionality to slider */\n\n  var sliderLength = $('.randomize-slides .n2-ss-slide-backgrounds > div').length;\n  var randomSlider = Math.floor(Math.random() * sliderLength);\n  var sliderTransformStyle = 'matrix3d(1, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1, 0, -100000, 0, 0, 1)';\n  $('.randomize-slides .n2-ss-slide-backgrounds > div').each(function () {\n    $(this).css('transform', sliderTransformStyle);\n  });\n  console.log(randomSlider);\n  jQuery(window).on('load', function () {\n    setTimeout(function () {\n      $('.randomize-slides .n2-ss-slide-backgrounds > div').eq(randomSlider).css('transform', 'initial');\n    }, 1000);\n  });\n\n  /* End */\n\n  /* Script to hide all newsletters except for the latest year */\n\n  var firstIteration = true;\n  $('.newsletter-inner > .nsbf-newsletter').each(function () {\n    if (firstIteration) {\n      firstIteration = false;\n    } else {\n      $(this).hide();\n    }\n  });\n\n  /* Show newsletters by the year that is clicked */\n\n  $('.newsletter-inner .newsletter-header').click(function () {\n    $('.nsbf-newsletter').hide();\n    $('.newsletter-header').css('background', '#f0f0f0');\n    $('.newsletter-header > *').css('color', '#006b94');\n    $(this).next().show();\n    $(this).css('background', '#dba510');\n    $('*', this).css('color', '#fff');\n    $('html, body').animate({\n      scrollTop: $(this).offset().top - 130\n    }, 1000);\n  });\n\n  /* End */\n\n  /* Show error message of MemberPress if user \"Set Password\" has expired */\n\n  if ($('#mepr_jump')[0] && $('.mepr_error')[0]) {\n    $('#link-expired').show();\n  }\n\n  /* End */\n\n  /**\n   * Secondary menu is assigning colors to tab backgrounds\n   * The next two scripts addresses the issue.\n   *\n   * First adds a classname to the last item\n   * If another button is added this will fail\n   * Second resets the color pattern for all the secondary buttons\n   */\n\n  function addClassFirst(element, newClass) {\n    // Check if the class is already present\n    if (!element.classList.contains(newClass)) {\n      // Set the new class to be first followed by existing classes\n      element.className = newClass + ' ' + element.className;\n    }\n  }\n\n  // Select all <li> elements within the specified parent\n  var allLis = document.querySelectorAll('#header-secondary-outer nav ul.sf-menu li');\n\n  // Loop through all <li> elements and ensure the 'secondary-nav-button' class is at the beginning of the class list\n  allLis.forEach(function (li) {\n    addClassFirst(li, 'secondary-nav-button');\n  });\n\n  /**\n   * Resets colors for each of the buttons\n   * Using ForEach loop\n   */\n  // Define the array of classes to cycle through\n  var buttonClasses = ['gold-button', 'rust-button', 'green-button', 'blue-button'];\n\n  // Select all <li> elements within the specified parent\n  var lis = document.querySelectorAll('#header-secondary-outer nav ul.sf-menu li');\n\n  // Loop through the <li> elements and assign classes from the array in order\n  lis.forEach(function (li, index) {\n    // Remove any existing color-button classes\n    buttonClasses.forEach(function (className) {\n      li.classList.remove(className);\n    });\n\n    // Add the next class in the array, cycling back to the start if necessary\n    var classToAdd = buttonClasses[index % buttonClasses.length];\n    li.classList.add(classToAdd);\n  });\n});//# sourceURL=[module]\n//# sourceMappingURL=data:application/json;charset=utf-8;base64,eyJ2ZXJzaW9uIjozLCJuYW1lcyI6WyJqUXVlcnkiLCJkb2N1bWVudCIsInJlYWR5IiwiJCIsInNsaWRlckxlbmd0aCIsImxlbmd0aCIsInJhbmRvbVNsaWRlciIsIk1hdGgiLCJmbG9vciIsInJhbmRvbSIsInNsaWRlclRyYW5zZm9ybVN0eWxlIiwiZWFjaCIsImNzcyIsImNvbnNvbGUiLCJsb2ciLCJ3aW5kb3ciLCJvbiIsInNldFRpbWVvdXQiLCJlcSIsImZpcnN0SXRlcmF0aW9uIiwiaGlkZSIsImNsaWNrIiwibmV4dCIsInNob3ciLCJhbmltYXRlIiwic2Nyb2xsVG9wIiwib2Zmc2V0IiwidG9wIiwiYWRkQ2xhc3NGaXJzdCIsImVsZW1lbnQiLCJuZXdDbGFzcyIsImNsYXNzTGlzdCIsImNvbnRhaW5zIiwiY2xhc3NOYW1lIiwiYWxsTGlzIiwicXVlcnlTZWxlY3RvckFsbCIsImZvckVhY2giLCJsaSIsImJ1dHRvbkNsYXNzZXMiLCJsaXMiLCJpbmRleCIsInJlbW92ZSIsImNsYXNzVG9BZGQiLCJhZGQiXSwic291cmNlcyI6WyJ3ZWJwYWNrOi8vbnNiZi1zYWxpZW50LWNoaWxkLy4vanMvY3VzdG9tLXNjcmlwdHMuanM/YmQyZiJdLCJzb3VyY2VzQ29udGVudCI6WyJqUXVlcnkoZG9jdW1lbnQpLnJlYWR5KGZ1bmN0aW9uICgkKSB7XG4gICAgLyogQWRkIHJhbmRvbSBpbWFnZXMgZnVuY3Rpb25hbGl0eSB0byBzbGlkZXIgKi9cblxuICAgIHZhciBzbGlkZXJMZW5ndGggPSAkKFxuICAgICAgICAnLnJhbmRvbWl6ZS1zbGlkZXMgLm4yLXNzLXNsaWRlLWJhY2tncm91bmRzID4gZGl2JyxcbiAgICApLmxlbmd0aDtcbiAgICB2YXIgcmFuZG9tU2xpZGVyID0gTWF0aC5mbG9vcihNYXRoLnJhbmRvbSgpICogc2xpZGVyTGVuZ3RoKTtcbiAgICB2YXIgc2xpZGVyVHJhbnNmb3JtU3R5bGUgPVxuICAgICAgICAnbWF0cml4M2QoMSwgMCwgMCwgMCwgMCwgMSwgMCwgMCwgMCwgMCwgMSwgMCwgLTEwMDAwMCwgMCwgMCwgMSknO1xuXG4gICAgJCgnLnJhbmRvbWl6ZS1zbGlkZXMgLm4yLXNzLXNsaWRlLWJhY2tncm91bmRzID4gZGl2JykuZWFjaChmdW5jdGlvbiAoKSB7XG4gICAgICAgICQodGhpcykuY3NzKCd0cmFuc2Zvcm0nLCBzbGlkZXJUcmFuc2Zvcm1TdHlsZSk7XG4gICAgfSk7XG5cbiAgICBjb25zb2xlLmxvZyhyYW5kb21TbGlkZXIpO1xuXG4gICAgalF1ZXJ5KHdpbmRvdykub24oJ2xvYWQnLCBmdW5jdGlvbiAoKSB7XG4gICAgICAgIHNldFRpbWVvdXQoZnVuY3Rpb24gKCkge1xuICAgICAgICAgICAgJCgnLnJhbmRvbWl6ZS1zbGlkZXMgLm4yLXNzLXNsaWRlLWJhY2tncm91bmRzID4gZGl2JylcbiAgICAgICAgICAgICAgICAuZXEocmFuZG9tU2xpZGVyKVxuICAgICAgICAgICAgICAgIC5jc3MoJ3RyYW5zZm9ybScsICdpbml0aWFsJyk7XG4gICAgICAgIH0sIDEwMDApO1xuICAgIH0pO1xuXG4gICAgLyogRW5kICovXG5cbiAgICAvKiBTY3JpcHQgdG8gaGlkZSBhbGwgbmV3c2xldHRlcnMgZXhjZXB0IGZvciB0aGUgbGF0ZXN0IHllYXIgKi9cblxuICAgIHZhciBmaXJzdEl0ZXJhdGlvbiA9IHRydWU7XG5cbiAgICAkKCcubmV3c2xldHRlci1pbm5lciA+IC5uc2JmLW5ld3NsZXR0ZXInKS5lYWNoKGZ1bmN0aW9uICgpIHtcbiAgICAgICAgaWYgKGZpcnN0SXRlcmF0aW9uKSB7XG4gICAgICAgICAgICBmaXJzdEl0ZXJhdGlvbiA9IGZhbHNlO1xuICAgICAgICB9IGVsc2Uge1xuICAgICAgICAgICAgJCh0aGlzKS5oaWRlKCk7XG4gICAgICAgIH1cbiAgICB9KTtcblxuICAgIC8qIFNob3cgbmV3c2xldHRlcnMgYnkgdGhlIHllYXIgdGhhdCBpcyBjbGlja2VkICovXG5cbiAgICAkKCcubmV3c2xldHRlci1pbm5lciAubmV3c2xldHRlci1oZWFkZXInKS5jbGljayhmdW5jdGlvbiAoKSB7XG4gICAgICAgICQoJy5uc2JmLW5ld3NsZXR0ZXInKS5oaWRlKCk7XG4gICAgICAgICQoJy5uZXdzbGV0dGVyLWhlYWRlcicpLmNzcygnYmFja2dyb3VuZCcsICcjZjBmMGYwJyk7XG4gICAgICAgICQoJy5uZXdzbGV0dGVyLWhlYWRlciA+IConKS5jc3MoJ2NvbG9yJywgJyMwMDZiOTQnKTtcblxuICAgICAgICAkKHRoaXMpLm5leHQoKS5zaG93KCk7XG4gICAgICAgICQodGhpcykuY3NzKCdiYWNrZ3JvdW5kJywgJyNkYmE1MTAnKTtcbiAgICAgICAgJCgnKicsIHRoaXMpLmNzcygnY29sb3InLCAnI2ZmZicpO1xuXG4gICAgICAgICQoJ2h0bWwsIGJvZHknKS5hbmltYXRlKFxuICAgICAgICAgICAge1xuICAgICAgICAgICAgICAgIHNjcm9sbFRvcDogJCh0aGlzKS5vZmZzZXQoKS50b3AgLSAxMzAsXG4gICAgICAgICAgICB9LFxuICAgICAgICAgICAgMTAwMCxcbiAgICAgICAgKTtcbiAgICB9KTtcblxuICAgIC8qIEVuZCAqL1xuXG4gICAgLyogU2hvdyBlcnJvciBtZXNzYWdlIG9mIE1lbWJlclByZXNzIGlmIHVzZXIgXCJTZXQgUGFzc3dvcmRcIiBoYXMgZXhwaXJlZCAqL1xuXG4gICAgaWYgKCQoJyNtZXByX2p1bXAnKVswXSAmJiAkKCcubWVwcl9lcnJvcicpWzBdKSB7XG4gICAgICAgICQoJyNsaW5rLWV4cGlyZWQnKS5zaG93KCk7XG4gICAgfVxuXG4gICAgLyogRW5kICovXG5cbiAgICAvKipcbiAgICAgKiBTZWNvbmRhcnkgbWVudSBpcyBhc3NpZ25pbmcgY29sb3JzIHRvIHRhYiBiYWNrZ3JvdW5kc1xuICAgICAqIFRoZSBuZXh0IHR3byBzY3JpcHRzIGFkZHJlc3NlcyB0aGUgaXNzdWUuXG4gICAgICpcbiAgICAgKiBGaXJzdCBhZGRzIGEgY2xhc3NuYW1lIHRvIHRoZSBsYXN0IGl0ZW1cbiAgICAgKiBJZiBhbm90aGVyIGJ1dHRvbiBpcyBhZGRlZCB0aGlzIHdpbGwgZmFpbFxuICAgICAqIFNlY29uZCByZXNldHMgdGhlIGNvbG9yIHBhdHRlcm4gZm9yIGFsbCB0aGUgc2Vjb25kYXJ5IGJ1dHRvbnNcbiAgICAgKi9cblxuICAgIGZ1bmN0aW9uIGFkZENsYXNzRmlyc3QoZWxlbWVudCwgbmV3Q2xhc3MpIHtcbiAgICAgICAgLy8gQ2hlY2sgaWYgdGhlIGNsYXNzIGlzIGFscmVhZHkgcHJlc2VudFxuICAgICAgICBpZiAoIWVsZW1lbnQuY2xhc3NMaXN0LmNvbnRhaW5zKG5ld0NsYXNzKSkge1xuICAgICAgICAgICAgLy8gU2V0IHRoZSBuZXcgY2xhc3MgdG8gYmUgZmlyc3QgZm9sbG93ZWQgYnkgZXhpc3RpbmcgY2xhc3Nlc1xuICAgICAgICAgICAgZWxlbWVudC5jbGFzc05hbWUgPSBuZXdDbGFzcyArICcgJyArIGVsZW1lbnQuY2xhc3NOYW1lO1xuICAgICAgICB9XG4gICAgfVxuXG4gICAgLy8gU2VsZWN0IGFsbCA8bGk+IGVsZW1lbnRzIHdpdGhpbiB0aGUgc3BlY2lmaWVkIHBhcmVudFxuICAgIHZhciBhbGxMaXMgPSBkb2N1bWVudC5xdWVyeVNlbGVjdG9yQWxsKFxuICAgICAgICAnI2hlYWRlci1zZWNvbmRhcnktb3V0ZXIgbmF2IHVsLnNmLW1lbnUgbGknLFxuICAgICk7XG5cbiAgICAvLyBMb29wIHRocm91Z2ggYWxsIDxsaT4gZWxlbWVudHMgYW5kIGVuc3VyZSB0aGUgJ3NlY29uZGFyeS1uYXYtYnV0dG9uJyBjbGFzcyBpcyBhdCB0aGUgYmVnaW5uaW5nIG9mIHRoZSBjbGFzcyBsaXN0XG4gICAgYWxsTGlzLmZvckVhY2goZnVuY3Rpb24gKGxpKSB7XG4gICAgICAgIGFkZENsYXNzRmlyc3QobGksICdzZWNvbmRhcnktbmF2LWJ1dHRvbicpO1xuICAgIH0pO1xuXG4gICAgLyoqXG4gICAgICogUmVzZXRzIGNvbG9ycyBmb3IgZWFjaCBvZiB0aGUgYnV0dG9uc1xuICAgICAqIFVzaW5nIEZvckVhY2ggbG9vcFxuICAgICAqL1xuICAgIC8vIERlZmluZSB0aGUgYXJyYXkgb2YgY2xhc3NlcyB0byBjeWNsZSB0aHJvdWdoXG4gICAgdmFyIGJ1dHRvbkNsYXNzZXMgPSBbXG4gICAgICAgICdnb2xkLWJ1dHRvbicsXG4gICAgICAgICdydXN0LWJ1dHRvbicsXG4gICAgICAgICdncmVlbi1idXR0b24nLFxuICAgICAgICAnYmx1ZS1idXR0b24nLFxuICAgIF07XG5cbiAgICAvLyBTZWxlY3QgYWxsIDxsaT4gZWxlbWVudHMgd2l0aGluIHRoZSBzcGVjaWZpZWQgcGFyZW50XG4gICAgdmFyIGxpcyA9IGRvY3VtZW50LnF1ZXJ5U2VsZWN0b3JBbGwoXG4gICAgICAgICcjaGVhZGVyLXNlY29uZGFyeS1vdXRlciBuYXYgdWwuc2YtbWVudSBsaScsXG4gICAgKTtcblxuICAgIC8vIExvb3AgdGhyb3VnaCB0aGUgPGxpPiBlbGVtZW50cyBhbmQgYXNzaWduIGNsYXNzZXMgZnJvbSB0aGUgYXJyYXkgaW4gb3JkZXJcbiAgICBsaXMuZm9yRWFjaChmdW5jdGlvbiAobGksIGluZGV4KSB7XG4gICAgICAgIC8vIFJlbW92ZSBhbnkgZXhpc3RpbmcgY29sb3ItYnV0dG9uIGNsYXNzZXNcbiAgICAgICAgYnV0dG9uQ2xhc3Nlcy5mb3JFYWNoKGZ1bmN0aW9uIChjbGFzc05hbWUpIHtcbiAgICAgICAgICAgIGxpLmNsYXNzTGlzdC5yZW1vdmUoY2xhc3NOYW1lKTtcbiAgICAgICAgfSk7XG5cbiAgICAgICAgLy8gQWRkIHRoZSBuZXh0IGNsYXNzIGluIHRoZSBhcnJheSwgY3ljbGluZyBiYWNrIHRvIHRoZSBzdGFydCBpZiBuZWNlc3NhcnlcbiAgICAgICAgdmFyIGNsYXNzVG9BZGQgPSBidXR0b25DbGFzc2VzW2luZGV4ICUgYnV0dG9uQ2xhc3Nlcy5sZW5ndGhdO1xuICAgICAgICBsaS5jbGFzc0xpc3QuYWRkKGNsYXNzVG9BZGQpO1xuICAgIH0pO1xufSk7XG4iXSwibWFwcGluZ3MiOiJBQUFBQSxNQUFNLENBQUNDLFFBQVEsQ0FBQyxDQUFDQyxLQUFLLENBQUMsVUFBVUMs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SUFDMUQ7RUFDSjs7RUFFQTtFQUNBLElBQUlDLE1BQU0sR0FBR2pDLFFBQVEsQ0FBQ2tDLGdCQUFnQixDQUNsQywyQ0FDSixDQUFDOztFQUVEO0VBQ0FELE1BQU0sQ0FBQ0UsT0FBTyxDQUFDLFVBQVVDLEVBQUUsRUFBRTtJQUN6QlQsYUFBYSxDQUFDUyxFQUFFLEVBQUUsc0JBQXNCLENBQUM7RUFDN0MsQ0FBQyxDQUFDOztFQUVGO0FBQ0o7QUFDQTtBQUNBO0VBQ0k7RUFDQSxJQUFJQyxhQUFhLEdBQUcsQ0FDaEIsYUFBYSxFQUNiLGFBQWEsRUFDYixjQUFjLEVBQ2QsYUFBYSxDQUNoQjs7RUFFRDtFQUNBLElBQUlDLEdBQUcsR0FBR3RDLFFBQVEsQ0FBQ2tDLGdCQUFnQixDQUMvQiwyQ0FDSixDQUFDOztFQUVEO0VBQ0FJLEdBQUcsQ0FBQ0gsT0FBTyxDQUFDLFVBQVVDLEVBQUUsRUFBRUcsS0FBSyxFQUFFO0lBQzdCO0lBQ0FGLGFBQWEsQ0FBQ0YsT0FBTyxDQUFDLFVBQVVILFNBQVMsRUFBRTtNQUN2Q0ksRUFBRSxDQUFDTixTQUFTLENBQUNVLE1BQU0sQ0FBQ1IsU0FBUyxDQUFDO0lBQ2xDLENBQUMsQ0FBQzs7SUFFRjtJQUNBLElBQUlTLFVBQVUsR0FBR0osYUFBYSxDQUFDRSxLQUFLLEdBQUdGLGFBQWEsQ0FBQ2pDLE1BQU0sQ0FBQztJQUM1RGdDLEVBQUUsQ0FBQ04sU0FBUyxDQUFDWSxHQUFHLENBQUNELFVBQVUsQ0FBQztFQUNoQyxDQUFDLENBQUM7QUFDTixDQUFDLENBQUMiLCJpZ25vcmVMaXN0IjpbXSwiZmlsZSI6Ii4vanMvY3VzdG9tLXNjcmlwdHMuanMiLCJzb3VyY2VSb290IjoiIn0=\n//# sourceURL=webpack-internal:///./js/custom-scripts.js\n");

/***/ }),

/***/ "./scss/byways.scss":
/*!**************************!*\
  !*** ./scss/byways.scss ***!
  \**************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

"use strict";
eval("__webpack_require__.r(__webpack_exports__);\n// extracted by mini-css-extract-plugin\n//# sourceURL=[module]\n//# sourceMappingURL=data:application/json;charset=utf-8;base64,eyJ2ZXJzaW9uIjozLCJmaWxlIjoiLi9zY3NzL2J5d2F5cy5zY3NzIiwibWFwcGluZ3MiOiI7QUFBQSIsInNvdXJjZXMiOlsid2VicGFjazovL25zYmYtc2FsaWVudC1jaGlsZC8uL3Njc3MvYnl3YXlzLnNjc3M/NTA4MiJdLCJzb3VyY2VzQ29udGVudCI6WyIvLyBleHRyYWN0ZWQgYnkgbWluaS1jc3MtZXh0cmFjdC1wbHVnaW5cbmV4cG9ydCB7fTsiXSwibmFtZXMiOltdLCJzb3VyY2VSb290IjoiIn0=\n//# sourceURL=webpack-internal:///./scss/byways.scss\n");

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
/******/ 		var chunkLoadingGlobal = self["webpackChunknsbf_salient_child"] = self["webpackChunknsbf_salient_child"] || [];
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