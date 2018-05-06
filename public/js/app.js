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
/******/ 			Object.defineProperty(exports, name, {
/******/ 				configurable: false,
/******/ 				enumerable: true,
/******/ 				get: getter
/******/ 			});
/******/ 		}
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
/******/ 	// Load entry module and return exports
/******/ 	return __webpack_require__(__webpack_require__.s = 0);
/******/ })
/************************************************************************/
/******/ ([
/* 0 */
/***/ (function(module, exports, __webpack_require__) {

__webpack_require__(1);
module.exports = __webpack_require__(3);


/***/ }),
/* 1 */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
Object.defineProperty(__webpack_exports__, "__esModule", { value: true });
/* harmony import */ var __WEBPACK_IMPORTED_MODULE_0__MouseParallax__ = __webpack_require__(2);


new __WEBPACK_IMPORTED_MODULE_0__MouseParallax__["a" /* default */]('Face', 'Home', true, false, 40);
new __WEBPACK_IMPORTED_MODULE_0__MouseParallax__["a" /* default */]('Logotipo', 'Home', true, false, 20);
new __WEBPACK_IMPORTED_MODULE_0__MouseParallax__["a" /* default */]('Player', 'Home', true, false, 50);

/***/ }),
/* 2 */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
var _createClass = function () { function defineProperties(target, props) { for (var i = 0; i < props.length; i++) { var descriptor = props[i]; descriptor.enumerable = descriptor.enumerable || false; descriptor.configurable = true; if ("value" in descriptor) descriptor.writable = true; Object.defineProperty(target, descriptor.key, descriptor); } } return function (Constructor, protoProps, staticProps) { if (protoProps) defineProperties(Constructor.prototype, protoProps); if (staticProps) defineProperties(Constructor, staticProps); return Constructor; }; }();

function _classCallCheck(instance, Constructor) { if (!(instance instanceof Constructor)) { throw new TypeError("Cannot call a class as a function"); } }

var MouseParallax = function () {
    function MouseParallax(id, content) {
        var is_mouseX = arguments.length > 2 && arguments[2] !== undefined ? arguments[2] : true;
        var is_mouseY = arguments.length > 3 && arguments[3] !== undefined ? arguments[3] : true;
        var speed = arguments.length > 4 && arguments[4] !== undefined ? arguments[4] : 5;

        _classCallCheck(this, MouseParallax);

        this.parallaxBox = document.getElementById(content);
        this.el = document.getElementById(id);
        this.id = id;
        this.left = this.el.offsetLeft;
        this.top = this.el.offsetTop;
        this.is_mouseX = is_mouseX;
        this.is_mouseY = is_mouseY;
        this.speed = speed;
        this.mouseMove();
    }

    _createClass(MouseParallax, [{
        key: 'mouseMove',
        value: function mouseMove() {
            var _self = this;
            this.parallaxBox.addEventListener('mousemove', function (event) {
                event = event || window.event;
                _self.mouseX = event.clientX - _self.parallaxBox.offsetLeft;
                _self.mouseY = event.clientY - _self.parallaxBox.offsetTop;
                _self.mouseParallaxMove();
            });
        }
    }, {
        key: 'mouseParallaxMove',
        value: function mouseParallaxMove() {
            var obj = this.el;
            var parentObj = obj.parentNode,
                containerWidth = parseInt(parentObj.offsetWidth),
                containerHeight = parseInt(parentObj.offsetHeight);

            if (this.is_mouseX) {
                obj.style.left = this.left - (this.mouseX - (parseInt(obj.offsetWidth) / 2 + this.left)) / containerWidth * this.speed + 'px';
            }
            if (this.is_mouseY) {
                obj.style.top = this.top - (this.mouseY - (parseInt(obj.offsetHeight) / 2 + this.top)) / containerHeight * this.speed + 'px';
            }
        }
    }]);

    return MouseParallax;
}();

/* harmony default export */ __webpack_exports__["a"] = (MouseParallax);

/***/ }),
/* 3 */
/***/ (function(module, exports) {

// removed by extract-text-webpack-plugin

/***/ })
/******/ ]);