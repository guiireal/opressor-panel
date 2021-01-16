/******/ (function(modules) { // webpackBootstrap
/******/ 	// The module cache
/******/ 	var installedModules = {};
/******/
/******/ 	// The require function
/******/ 	function __webpack_require__(moduleId) {
/******/
/******/ 		// Check if module is in cache
/******/ 		if(installedModules[moduleId]) {
/******/ 			return installedModules[moduleId].exports;
/******/ 		}
/******/ 		// Create a new module (and put it into the cache)
/******/ 		var module = installedModules[moduleId] = {
/******/ 			i: moduleId,
/******/ 			l: false,
/******/ 			exports: {}
/******/ 		};
/******/
/******/ 		// Execute the module function
/******/ 		modules[moduleId].call(module.exports, module, module.exports, __webpack_require__);
/******/
/******/ 		// Flag the module as loaded
/******/ 		module.l = true;
/******/
/******/ 		// Return the exports of the module
/******/ 		return module.exports;
/******/ 	}
/******/
/******/
/******/ 	// expose the modules object (__webpack_modules__)
/******/ 	__webpack_require__.m = modules;
/******/
/******/ 	// expose the module cache
/******/ 	__webpack_require__.c = installedModules;
/******/
/******/ 	// define getter function for harmony exports
/******/ 	__webpack_require__.d = function(exports, name, getter) {
/******/ 		if(!__webpack_require__.o(exports, name)) {
/******/ 			Object.defineProperty(exports, name, { enumerable: true, get: getter });
/******/ 		}
/******/ 	};
/******/
/******/ 	// define __esModule on exports
/******/ 	__webpack_require__.r = function(exports) {
/******/ 		if(typeof Symbol !== 'undefined' && Symbol.toStringTag) {
/******/ 			Object.defineProperty(exports, Symbol.toStringTag, { value: 'Module' });
/******/ 		}
/******/ 		Object.defineProperty(exports, '__esModule', { value: true });
/******/ 	};
/******/
/******/ 	// create a fake namespace object
/******/ 	// mode & 1: value is a module id, require it
/******/ 	// mode & 2: merge all properties of value into the ns
/******/ 	// mode & 4: return value when already ns object
/******/ 	// mode & 8|1: behave like require
/******/ 	__webpack_require__.t = function(value, mode) {
/******/ 		if(mode & 1) value = __webpack_require__(value);
/******/ 		if(mode & 8) return value;
/******/ 		if((mode & 4) && typeof value === 'object' && value && value.__esModule) return value;
/******/ 		var ns = Object.create(null);
/******/ 		__webpack_require__.r(ns);
/******/ 		Object.defineProperty(ns, 'default', { enumerable: true, value: value });
/******/ 		if(mode & 2 && typeof value != 'string') for(var key in value) __webpack_require__.d(ns, key, function(key) { return value[key]; }.bind(null, key));
/******/ 		return ns;
/******/ 	};
/******/
/******/ 	// getDefaultExport function for compatibility with non-harmony modules
/******/ 	__webpack_require__.n = function(module) {
/******/ 		var getter = module && module.__esModule ?
/******/ 			function getDefault() { return module['default']; } :
/******/ 			function getModuleExports() { return module; };
/******/ 		__webpack_require__.d(getter, 'a', getter);
/******/ 		return getter;
/******/ 	};
/******/
/******/ 	// Object.prototype.hasOwnProperty.call
/******/ 	__webpack_require__.o = function(object, property) { return Object.prototype.hasOwnProperty.call(object, property); };
/******/
/******/ 	// __webpack_public_path__
/******/ 	__webpack_require__.p = "/";
/******/
/******/
/******/ 	// Load entry module and return exports
/******/ 	return __webpack_require__(__webpack_require__.s = 0);
/******/ })
/************************************************************************/
/******/ ({

/***/ "./node_modules/cpf-check/dist/index.mjs":
/*!***********************************************!*\
  !*** ./node_modules/cpf-check/dist/index.mjs ***!
  \***********************************************/
/*! exports provided: default, strip, format, validate, generate */
/***/ (function(__webpack_module__, __webpack_exports__, __webpack_require__) {

"use strict";
eval("__webpack_require__.r(__webpack_exports__);\n/* harmony export (binding) */ __webpack_require__.d(__webpack_exports__, \"strip\", function() { return t; });\n/* harmony export (binding) */ __webpack_require__.d(__webpack_exports__, \"format\", function() { return e; });\n/* harmony export (binding) */ __webpack_require__.d(__webpack_exports__, \"validate\", function() { return u; });\n/* harmony export (binding) */ __webpack_require__.d(__webpack_exports__, \"generate\", function() { return a; });\nvar r=/^(\\d{3})(.|-)?(\\d{3})(.|-)?(\\d{3})(.|-)?(\\d{2})$/;function n(r){var n=r.map(function(n,t){return(r.length+1-t)*n}).reduce(function(r,n){return r+n},0)%11;return n<2?0:11-n}function t(r){return(\"\"+r).replace(/\\D/g,\"\")}function e(n){var e=t(n).substr(0,11).replace(r,\"$1.$3.$5-$7\");return 14===e.length?e:\"\"}function u(r){var e=t(r);if(11!==e.length)return!1;var u=e.split(\"\").map(function(r){return parseInt(r,10)});return!u.every(function(r){return r===u[0]})&&u[9]===n(u.slice(0,9))&&u[10]===n(u.slice(0,10))}function a(r){var t=Array(9).fill(0).map(function(){return Math.floor(9*Math.random())}),u=n(t),a=\"\"+t.join(\"\")+u+n(t.concat(u));return r?e(a):a}/* harmony default export */ __webpack_exports__[\"default\"] = ({strip:t,format:e,validate:u,generate:a});\n//# sourceURL=[module]\n//# sourceMappingURL=data:application/json;charset=utf-8;base64,eyJ2ZXJzaW9uIjozLCJzb3VyY2VzIjpbIndlYnBhY2s6Ly8vLi9ub2RlX21vZHVsZXMvY3BmLWNoZWNrL2Rpc3QvaW5kZXgubWpzP2RmODMiXSwibmFtZXMiOltdLCJtYXBwaW5ncyI6IkFBQUE7QUFBQTtBQUFBO0FBQUE7QUFBQTtBQUFBLFlBQVksRUFBRSxXQUFXLEVBQUUsV0FBVyxFQUFFLFdBQVcsRUFBRSxJQUFJLGNBQWMsMEJBQTBCLHVCQUF1Qix1QkFBdUIsV0FBVyxPQUFPLGtCQUFrQixjQUFjLCtCQUErQixjQUFjLGlEQUFpRCwwQkFBMEIsY0FBYyxXQUFXLDBCQUEwQixrQ0FBa0Msc0JBQXNCLEVBQUUsMkJBQTJCLGdCQUFnQixvREFBb0QsY0FBYyxzQ0FBc0MsbUNBQW1DLDBDQUEwQyxnQkFBOEIsZ0VBQUMsdUNBQXVDLEVBQTREIiwiZmlsZSI6Ii4vbm9kZV9tb2R1bGVzL2NwZi1jaGVjay9kaXN0L2luZGV4Lm1qcy5qcyIsInNvdXJjZXNDb250ZW50IjpbInZhciByPS9eKFxcZHszfSkoLnwtKT8oXFxkezN9KSgufC0pPyhcXGR7M30pKC58LSk/KFxcZHsyfSkkLztmdW5jdGlvbiBuKHIpe3ZhciBuPXIubWFwKGZ1bmN0aW9uKG4sdCl7cmV0dXJuKHIubGVuZ3RoKzEtdCkqbn0pLnJlZHVjZShmdW5jdGlvbihyLG4pe3JldHVybiByK259LDApJTExO3JldHVybiBuPDI/MDoxMS1ufWZ1bmN0aW9uIHQocil7cmV0dXJuKFwiXCIrcikucmVwbGFjZSgvXFxEL2csXCJcIil9ZnVuY3Rpb24gZShuKXt2YXIgZT10KG4pLnN1YnN0cigwLDExKS5yZXBsYWNlKHIsXCIkMS4kMy4kNS0kN1wiKTtyZXR1cm4gMTQ9PT1lLmxlbmd0aD9lOlwiXCJ9ZnVuY3Rpb24gdShyKXt2YXIgZT10KHIpO2lmKDExIT09ZS5sZW5ndGgpcmV0dXJuITE7dmFyIHU9ZS5zcGxpdChcIlwiKS5tYXAoZnVuY3Rpb24ocil7cmV0dXJuIHBhcnNlSW50KHIsMTApfSk7cmV0dXJuIXUuZXZlcnkoZnVuY3Rpb24ocil7cmV0dXJuIHI9PT11WzBdfSkmJnVbOV09PT1uKHUuc2xpY2UoMCw5KSkmJnVbMTBdPT09bih1LnNsaWNlKDAsMTApKX1mdW5jdGlvbiBhKHIpe3ZhciB0PUFycmF5KDkpLmZpbGwoMCkubWFwKGZ1bmN0aW9uKCl7cmV0dXJuIE1hdGguZmxvb3IoOSpNYXRoLnJhbmRvbSgpKX0pLHU9bih0KSxhPVwiXCIrdC5qb2luKFwiXCIpK3Urbih0LmNvbmNhdCh1KSk7cmV0dXJuIHI/ZShhKTphfWV4cG9ydCBkZWZhdWx0e3N0cmlwOnQsZm9ybWF0OmUsdmFsaWRhdGU6dSxnZW5lcmF0ZTphfTtleHBvcnR7dCBhcyBzdHJpcCxlIGFzIGZvcm1hdCx1IGFzIHZhbGlkYXRlLGEgYXMgZ2VuZXJhdGV9O1xuIl0sInNvdXJjZVJvb3QiOiIifQ==\n//# sourceURL=webpack-internal:///./node_modules/cpf-check/dist/index.mjs\n");

/***/ }),

/***/ "./resources/js/app.js":
/*!*****************************!*\
  !*** ./resources/js/app.js ***!
  \*****************************/
/*! no exports provided */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
eval("__webpack_require__.r(__webpack_exports__);\n/* harmony import */ var cpf_check__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! cpf-check */ \"./node_modules/cpf-check/dist/index.mjs\");\n\n$(function () {\n  demo.checkFullPageBackgroundImage();\n  setTimeout(function () {\n    $(\".card\").removeClass(\"card-hidden\");\n  }, 700);\n  $(\"#cpf\").mask(\"000.000.000-00\");\n  var $buscar = $(\"#search-document\");\n  $buscar.on(\"click\", function (event) {\n    var $cpf = $(\"#cpf\");\n\n    if (!$cpf.val()) {\n      event.preventDefault();\n      $.notify({\n        icon: \"nc-icon nc-simple-remove\",\n        message: \"Filhão, digita um CPF nessa porra ai!\"\n      }, {\n        type: \"danger\",\n        timer: 3000,\n        placement: {\n          from: \"top\",\n          align: \"right\"\n        }\n      });\n      return;\n    }\n\n    var cpf = $cpf.val();\n\n    if (!Object(cpf_check__WEBPACK_IMPORTED_MODULE_0__[\"validate\"])(cpf)) {\n      event.preventDefault();\n      $.notify({\n        icon: \"nc-icon nc-simple-remove\",\n        message: \"Filhão, esse cpf está incorreto! Arruma essa porra ai!\"\n      }, {\n        type: \"danger\",\n        timer: 3000,\n        placement: {\n          from: \"top\",\n          align: \"right\"\n        }\n      });\n      return;\n    }\n\n    $buscar.empty().append(\"<i class=\\\"fa fa-spinner fa-spin mr-2\\\"></i>Aguarde, consultando CPF...\");\n  });\n});//# sourceURL=[module]\n//# sourceMappingURL=data:application/json;charset=utf-8;base64,eyJ2ZXJzaW9uIjozLCJzb3VyY2VzIjpbIndlYnBhY2s6Ly8vLi9yZXNvdXJjZXMvanMvYXBwLmpzPzZkNDAiXSwibmFtZXMiOlsiJCIsImRlbW8iLCJjaGVja0Z1bGxQYWdlQmFja2dyb3VuZEltYWdlIiwic2V0VGltZW91dCIsInJlbW92ZUNsYXNzIiwibWFzayIsIiRidXNjYXIiLCJvbiIsImV2ZW50IiwiJGNwZiIsInZhbCIsInByZXZlbnREZWZhdWx0Iiwibm90aWZ5IiwiaWNvbiIsIm1lc3NhZ2UiLCJ0eXBlIiwidGltZXIiLCJwbGFjZW1lbnQiLCJmcm9tIiwiYWxpZ24iLCJjcGYiLCJ2YWxpZGF0ZSIsImVtcHR5IiwiYXBwZW5kIl0sIm1hcHBpbmdzIjoiQUFBQTtBQUFBO0FBQUE7QUFFQUEsQ0FBQyxDQUFDLFlBQU07QUFDSkMsTUFBSSxDQUFDQyw0QkFBTDtBQUNBQyxZQUFVLENBQUMsWUFBVztBQUNsQkgsS0FBQyxDQUFDLE9BQUQsQ0FBRCxDQUFXSSxXQUFYLENBQXVCLGFBQXZCO0FBQ0gsR0FGUyxFQUVQLEdBRk8sQ0FBVjtBQUdBSixHQUFDLENBQUMsTUFBRCxDQUFELENBQVVLLElBQVYsQ0FBZSxnQkFBZjtBQUVBLE1BQU1DLE9BQU8sR0FBR04sQ0FBQyxDQUFDLGtCQUFELENBQWpCO0FBRUFNLFNBQU8sQ0FBQ0MsRUFBUixDQUFXLE9BQVgsRUFBb0IsVUFBQUMsS0FBSyxFQUFJO0FBQ3pCLFFBQU1DLElBQUksR0FBR1QsQ0FBQyxDQUFDLE1BQUQsQ0FBZDs7QUFDQSxRQUFJLENBQUNTLElBQUksQ0FBQ0MsR0FBTCxFQUFMLEVBQWlCO0FBQ2JGLFdBQUssQ0FBQ0csY0FBTjtBQUNBWCxPQUFDLENBQUNZLE1BQUYsQ0FDSTtBQUNJQyxZQUFJLEVBQUUsMEJBRFY7QUFFSUMsZUFBTyxFQUFFO0FBRmIsT0FESixFQUtJO0FBQ0lDLFlBQUksRUFBRSxRQURWO0FBRUlDLGFBQUssRUFBRSxJQUZYO0FBR0lDLGlCQUFTLEVBQUU7QUFDUEMsY0FBSSxFQUFFLEtBREM7QUFFUEMsZUFBSyxFQUFFO0FBRkE7QUFIZixPQUxKO0FBY0E7QUFDSDs7QUFDRCxRQUFNQyxHQUFHLEdBQUdYLElBQUksQ0FBQ0MsR0FBTCxFQUFaOztBQUNBLFFBQUksQ0FBQ1csMERBQVEsQ0FBQ0QsR0FBRCxDQUFiLEVBQW9CO0FBQ2hCWixXQUFLLENBQUNHLGNBQU47QUFDQVgsT0FBQyxDQUFDWSxNQUFGLENBQ0k7QUFDSUMsWUFBSSxFQUFFLDBCQURWO0FBRUlDLGVBQU8sRUFDSDtBQUhSLE9BREosRUFNSTtBQUNJQyxZQUFJLEVBQUUsUUFEVjtBQUVJQyxhQUFLLEVBQUUsSUFGWDtBQUdJQyxpQkFBUyxFQUFFO0FBQ1BDLGNBQUksRUFBRSxLQURDO0FBRVBDLGVBQUssRUFBRTtBQUZBO0FBSGYsT0FOSjtBQWVBO0FBQ0g7O0FBQ0RiLFdBQU8sQ0FDRmdCLEtBREwsR0FFS0MsTUFGTDtBQUtILEdBN0NEO0FBOENILENBdkRBLENBQUQiLCJmaWxlIjoiLi9yZXNvdXJjZXMvanMvYXBwLmpzLmpzIiwic291cmNlc0NvbnRlbnQiOlsiaW1wb3J0IHsgdmFsaWRhdGUgfSBmcm9tIFwiY3BmLWNoZWNrXCI7XG5cbiQoKCkgPT4ge1xuICAgIGRlbW8uY2hlY2tGdWxsUGFnZUJhY2tncm91bmRJbWFnZSgpO1xuICAgIHNldFRpbWVvdXQoZnVuY3Rpb24oKSB7XG4gICAgICAgICQoXCIuY2FyZFwiKS5yZW1vdmVDbGFzcyhcImNhcmQtaGlkZGVuXCIpO1xuICAgIH0sIDcwMCk7XG4gICAgJChcIiNjcGZcIikubWFzayhcIjAwMC4wMDAuMDAwLTAwXCIpO1xuXG4gICAgY29uc3QgJGJ1c2NhciA9ICQoXCIjc2VhcmNoLWRvY3VtZW50XCIpO1xuXG4gICAgJGJ1c2Nhci5vbihcImNsaWNrXCIsIGV2ZW50ID0+IHtcbiAgICAgICAgY29uc3QgJGNwZiA9ICQoXCIjY3BmXCIpO1xuICAgICAgICBpZiAoISRjcGYudmFsKCkpIHtcbiAgICAgICAgICAgIGV2ZW50LnByZXZlbnREZWZhdWx0KCk7XG4gICAgICAgICAgICAkLm5vdGlmeShcbiAgICAgICAgICAgICAgICB7XG4gICAgICAgICAgICAgICAgICAgIGljb246IFwibmMtaWNvbiBuYy1zaW1wbGUtcmVtb3ZlXCIsXG4gICAgICAgICAgICAgICAgICAgIG1lc3NhZ2U6IFwiRmlsaMOjbywgZGlnaXRhIHVtIENQRiBuZXNzYSBwb3JyYSBhaSFcIlxuICAgICAgICAgICAgICAgIH0sXG4gICAgICAgICAgICAgICAge1xuICAgICAgICAgICAgICAgICAgICB0eXBlOiBcImRhbmdlclwiLFxuICAgICAgICAgICAgICAgICAgICB0aW1lcjogMzAwMCxcbiAgICAgICAgICAgICAgICAgICAgcGxhY2VtZW50OiB7XG4gICAgICAgICAgICAgICAgICAgICAgICBmcm9tOiBcInRvcFwiLFxuICAgICAgICAgICAgICAgICAgICAgICAgYWxpZ246IFwicmlnaHRcIlxuICAgICAgICAgICAgICAgICAgICB9XG4gICAgICAgICAgICAgICAgfVxuICAgICAgICAgICAgKTtcbiAgICAgICAgICAgIHJldHVybjtcbiAgICAgICAgfVxuICAgICAgICBjb25zdCBjcGYgPSAkY3BmLnZhbCgpO1xuICAgICAgICBpZiAoIXZhbGlkYXRlKGNwZikpIHtcbiAgICAgICAgICAgIGV2ZW50LnByZXZlbnREZWZhdWx0KCk7XG4gICAgICAgICAgICAkLm5vdGlmeShcbiAgICAgICAgICAgICAgICB7XG4gICAgICAgICAgICAgICAgICAgIGljb246IFwibmMtaWNvbiBuYy1zaW1wbGUtcmVtb3ZlXCIsXG4gICAgICAgICAgICAgICAgICAgIG1lc3NhZ2U6XG4gICAgICAgICAgICAgICAgICAgICAgICBcIkZpbGjDo28sIGVzc2UgY3BmIGVzdMOhIGluY29ycmV0byEgQXJydW1hIGVzc2EgcG9ycmEgYWkhXCJcbiAgICAgICAgICAgICAgICB9LFxuICAgICAgICAgICAgICAgIHtcbiAgICAgICAgICAgICAgICAgICAgdHlwZTogXCJkYW5nZXJcIixcbiAgICAgICAgICAgICAgICAgICAgdGltZXI6IDMwMDAsXG4gICAgICAgICAgICAgICAgICAgIHBsYWNlbWVudDoge1xuICAgICAgICAgICAgICAgICAgICAgICAgZnJvbTogXCJ0b3BcIixcbiAgICAgICAgICAgICAgICAgICAgICAgIGFsaWduOiBcInJpZ2h0XCJcbiAgICAgICAgICAgICAgICAgICAgfVxuICAgICAgICAgICAgICAgIH1cbiAgICAgICAgICAgICk7XG4gICAgICAgICAgICByZXR1cm47XG4gICAgICAgIH1cbiAgICAgICAgJGJ1c2NhclxuICAgICAgICAgICAgLmVtcHR5KClcbiAgICAgICAgICAgIC5hcHBlbmQoXG4gICAgICAgICAgICAgICAgYDxpIGNsYXNzPVwiZmEgZmEtc3Bpbm5lciBmYS1zcGluIG1yLTJcIj48L2k+QWd1YXJkZSwgY29uc3VsdGFuZG8gQ1BGLi4uYFxuICAgICAgICAgICAgKTtcbiAgICB9KTtcbn0pO1xuIl0sInNvdXJjZVJvb3QiOiIifQ==\n//# sourceURL=webpack-internal:///./resources/js/app.js\n");

/***/ }),

/***/ "./resources/sass/app.scss":
/*!*********************************!*\
  !*** ./resources/sass/app.scss ***!
  \*********************************/
/*! no static exports found */
/***/ (function(module, exports) {

eval("// removed by extract-text-webpack-plugin//# sourceURL=[module]\n//# sourceMappingURL=data:application/json;charset=utf-8;base64,eyJ2ZXJzaW9uIjozLCJzb3VyY2VzIjpbIndlYnBhY2s6Ly8vLi9yZXNvdXJjZXMvc2Fzcy9hcHAuc2Nzcz8yZGY4Il0sIm5hbWVzIjpbXSwibWFwcGluZ3MiOiJBQUFBIiwiZmlsZSI6Ii4vcmVzb3VyY2VzL3Nhc3MvYXBwLnNjc3MuanMiLCJzb3VyY2VzQ29udGVudCI6WyIvLyByZW1vdmVkIGJ5IGV4dHJhY3QtdGV4dC13ZWJwYWNrLXBsdWdpbiJdLCJzb3VyY2VSb290IjoiIn0=\n//# sourceURL=webpack-internal:///./resources/sass/app.scss\n");

/***/ }),

/***/ "./resources/vendor/sass/light-bootstrap-dashboard.scss":
/*!**************************************************************!*\
  !*** ./resources/vendor/sass/light-bootstrap-dashboard.scss ***!
  \**************************************************************/
/*! no static exports found */
/***/ (function(module, exports) {

eval("// removed by extract-text-webpack-plugin//# sourceURL=[module]\n//# sourceMappingURL=data:application/json;charset=utf-8;base64,eyJ2ZXJzaW9uIjozLCJzb3VyY2VzIjpbIndlYnBhY2s6Ly8vLi9yZXNvdXJjZXMvdmVuZG9yL3Nhc3MvbGlnaHQtYm9vdHN0cmFwLWRhc2hib2FyZC5zY3NzPzM3ZDMiXSwibmFtZXMiOltdLCJtYXBwaW5ncyI6IkFBQUEiLCJmaWxlIjoiLi9yZXNvdXJjZXMvdmVuZG9yL3Nhc3MvbGlnaHQtYm9vdHN0cmFwLWRhc2hib2FyZC5zY3NzLmpzIiwic291cmNlc0NvbnRlbnQiOlsiLy8gcmVtb3ZlZCBieSBleHRyYWN0LXRleHQtd2VicGFjay1wbHVnaW4iXSwic291cmNlUm9vdCI6IiJ9\n//# sourceURL=webpack-internal:///./resources/vendor/sass/light-bootstrap-dashboard.scss\n");

/***/ }),

/***/ 0:
/*!********************************************************************************************************************!*\
  !*** multi ./resources/js/app.js ./resources/vendor/sass/light-bootstrap-dashboard.scss ./resources/sass/app.scss ***!
  \********************************************************************************************************************/
/*! no static exports found */
/***/ (function(module, exports, __webpack_require__) {

__webpack_require__(/*! D:\temp\super-panel\resources\js\app.js */"./resources/js/app.js");
__webpack_require__(/*! D:\temp\super-panel\resources\vendor\sass\light-bootstrap-dashboard.scss */"./resources/vendor/sass/light-bootstrap-dashboard.scss");
module.exports = __webpack_require__(/*! D:\temp\super-panel\resources\sass\app.scss */"./resources/sass/app.scss");


/***/ })

/******/ });