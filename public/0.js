(window["webpackJsonp"] = window["webpackJsonp"] || []).push([[0],{

/***/ "./resources/js/objects/tab-menu.js":
/*!******************************************!*\
  !*** ./resources/js/objects/tab-menu.js ***!
  \******************************************/
/*! exports provided: default */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony export (binding) */ __webpack_require__.d(__webpack_exports__, "default", function() { return Tabmenu; });
function _classCallCheck(instance, Constructor) { if (!(instance instanceof Constructor)) { throw new TypeError("Cannot call a class as a function"); } }

function _defineProperties(target, props) { for (var i = 0; i < props.length; i++) { var descriptor = props[i]; descriptor.enumerable = descriptor.enumerable || false; descriptor.configurable = true; if ("value" in descriptor) descriptor.writable = true; Object.defineProperty(target, descriptor.key, descriptor); } }

function _createClass(Constructor, protoProps, staticProps) { if (protoProps) _defineProperties(Constructor.prototype, protoProps); if (staticProps) _defineProperties(Constructor, staticProps); return Constructor; }

var Tabmenu = /*#__PURE__*/function () {
  /**
   * @param   {Element} element
   */
  function Tabmenu(element) {
    _classCallCheck(this, Tabmenu);

    /**
     * @type {Element}
     * @private
     */
    this._container = element;
    /**
     * @type {NodeListOf<Element>}
     */

    this.tab = this._container.querySelectorAll('.tab');
  }

  _createClass(Tabmenu, [{
    key: "init",
    value: function init() {
      console.log(this.tab);
    }
  }]);

  return Tabmenu;
}();



/***/ })

}]);