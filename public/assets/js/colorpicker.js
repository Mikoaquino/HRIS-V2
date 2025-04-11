/******/ (() => { // webpackBootstrap
/*!********************************************!*\
  !*** ./resources/assets/js/colorpicker.js ***!
  \********************************************/
function _slicedToArray(r, e) { return _arrayWithHoles(r) || _iterableToArrayLimit(r, e) || _unsupportedIterableToArray(r, e) || _nonIterableRest(); }
function _nonIterableRest() { throw new TypeError("Invalid attempt to destructure non-iterable instance.\nIn order to be iterable, non-array objects must have a [Symbol.iterator]() method."); }
function _unsupportedIterableToArray(r, a) { if (r) { if ("string" == typeof r) return _arrayLikeToArray(r, a); var t = {}.toString.call(r).slice(8, -1); return "Object" === t && r.constructor && (t = r.constructor.name), "Map" === t || "Set" === t ? Array.from(r) : "Arguments" === t || /^(?:Ui|I)nt(?:8|16|32)(?:Clamped)?Array$/.test(t) ? _arrayLikeToArray(r, a) : void 0; } }
function _arrayLikeToArray(r, a) { (null == a || a > r.length) && (a = r.length); for (var e = 0, n = Array(a); e < a; e++) n[e] = r[e]; return n; }
function _iterableToArrayLimit(r, l) { var t = null == r ? null : "undefined" != typeof Symbol && r[Symbol.iterator] || r["@@iterator"]; if (null != t) { var e, n, i, u, a = [], f = !0, o = !1; try { if (i = (t = t.call(r)).next, 0 === l) { if (Object(t) !== t) return; f = !1; } else for (; !(f = (e = i.call(t)).done) && (a.push(e.value), a.length !== l); f = !0); } catch (r) { o = !0, n = r; } finally { try { if (!f && null != t["return"] && (u = t["return"](), Object(u) !== u)) return; } finally { if (o) throw n; } } return a; } }
function _arrayWithHoles(r) { if (Array.isArray(r)) return r; }
$(function () {
  'use strict';

  var pickrContainer = document.querySelector('.pickr-container');
  var themeContainer = document.querySelector('.theme-container');
  var pickrContainer1 = document.querySelector('.pickr-container1');
  var themeContainer1 = document.querySelector('.theme-container1');
  var pickrContainer2 = document.querySelector('.pickr-container2');
  var themeContainer2 = document.querySelector('.theme-container2');

  // classic
  var themes = [['classic', {
    swatches: ['rgba(244, 67, 54, 1)', 'rgba(233, 30, 99, 0.95)', 'rgba(156, 39, 176, 0.9)', 'rgba(103, 58, 183, 0.85)', 'rgba(63, 81, 181, 0.8)', 'rgba(33, 150, 243, 0.75)', 'rgba(3, 169, 244, 0.7)', 'rgba(0, 188, 212, 0.7)', 'rgba(0, 150, 136, 0.75)', 'rgba(76, 175, 80, 0.8)', 'rgba(139, 195, 74, 0.85)', 'rgba(205, 220, 57, 0.9)', 'rgba(255, 235, 59, 0.95)', 'rgba(255, 193, 7, 1)'],
    components: {
      preview: true,
      opacity: true,
      hue: true,
      interaction: {
        hex: true,
        rgba: true,
        hsva: true,
        input: true,
        clear: true,
        save: true
      }
    }
  }]];
  var buttons = [];
  var pickr = null;
  var _loop = function _loop() {
    var _themes$_i = _slicedToArray(_themes[_i], 2),
      theme = _themes$_i[0],
      config = _themes$_i[1];
    var button = document.createElement('button');
    button.innerHTML = theme;
    buttons.push(button);
    button.addEventListener('click', function () {
      var el = document.createElement('p');
      pickrContainer.appendChild(el);

      // Delete previous instance
      if (pickr) {
        pickr.destroyAndRemove();
      }

      // Apply active class
      for (var _i2 = 0, _buttons = buttons; _i2 < _buttons.length; _i2++) {
        var btn = _buttons[_i2];
        btn.classList[btn === button ? 'add' : 'remove']('active');
      }

      // Create fresh instance
      pickr = new Pickr(Object.assign({
        el: el,
        theme: theme,
        "default": '#6c5ffc'
      }, config));

      // Set events
      pickr.on('init', function (instance) {
        console.log('Event: "init"', instance);
      }).on('hide', function (instance) {
        console.log('Event: "hide"', instance);
      }).on('show', function (color, instance) {
        console.log('Event: "show"', color, instance);
      }).on('save', function (color, instance) {
        console.log('Event: "save"', color, instance);
      }).on('clear', function (instance) {
        console.log('Event: "clear"', instance);
      }).on('change', function (color, source, instance) {
        console.log('Event: "change"', color, source, instance);
      }).on('changestop', function (source, instance) {
        console.log('Event: "changestop"', source, instance);
      }).on('cancel', function (instance) {
        console.log('cancel', pickr.getColor().toRGBA().toString(0));
      }).on('swatchselect', function (color, instance) {
        console.log('Event: "swatchselect"', color, instance);
      });
    });
    themeContainer.appendChild(button);
  };
  for (var _i = 0, _themes = themes; _i < _themes.length; _i++) {
    _loop();
  }
  buttons[0].click();

  // monolith
  var monolithThemes = [['monolith', {
    swatches: ['rgba(244, 67, 54, 1)', 'rgba(233, 30, 99, 0.95)', 'rgba(156, 39, 176, 0.9)', 'rgba(103, 58, 183, 0.85)', 'rgba(63, 81, 181, 0.8)', 'rgba(33, 150, 243, 0.75)', 'rgba(3, 169, 244, 0.7)'],
    defaultRepresentation: 'HEXA',
    components: {
      preview: true,
      opacity: true,
      hue: true,
      interaction: {
        hex: false,
        rgba: false,
        hsva: false,
        input: true,
        clear: true,
        save: true
      }
    }
  }]];
  var monolithButtons = [];
  var monolithPickr = null;
  var _loop2 = function _loop2() {
    var _monolithThemes$_i = _slicedToArray(_monolithThemes[_i3], 2),
      theme = _monolithThemes$_i[0],
      config = _monolithThemes$_i[1];
    var button = document.createElement('button');
    button.innerHTML = theme;
    monolithButtons.push(button);
    button.addEventListener('click', function () {
      var el = document.createElement('p');
      pickrContainer1.appendChild(el);

      // Delete previous instance
      if (monolithPickr) {
        monolithPickr.destroyAndRemove();
      }

      // Apply active class
      for (var _i4 = 0, _monolithButtons = monolithButtons; _i4 < _monolithButtons.length; _i4++) {
        var btn = _monolithButtons[_i4];
        btn.classList[btn === button ? 'add' : 'remove']('active');
      }

      // Create fresh instance
      monolithPickr = new Pickr(Object.assign({
        el: el,
        theme: theme,
        "default": '#fc5296'
      }, config));

      // Set events
      monolithPickr.on('init', function (instance) {
        console.log('Event: "init"', instance);
      }).on('hide', function (instance) {
        console.log('Event: "hide"', instance);
      }).on('show', function (color, instance) {
        console.log('Event: "show"', color, instance);
      }).on('save', function (color, instance) {
        console.log('Event: "save"', color, instance);
      }).on('clear', function (instance) {
        console.log('Event: "clear"', instance);
      }).on('change', function (color, source, instance) {
        console.log('Event: "change"', color, source, instance);
      }).on('changestop', function (source, instance) {
        console.log('Event: "changestop"', source, instance);
      }).on('cancel', function (instance) {
        console.log('cancel', monolithPickr.getColor().toRGBA().toString(0));
      }).on('swatchselect', function (color, instance) {
        console.log('Event: "swatchselect"', color, instance);
      });
    });
    themeContainer1.appendChild(button);
  };
  for (var _i3 = 0, _monolithThemes = monolithThemes; _i3 < _monolithThemes.length; _i3++) {
    _loop2();
  }
  monolithButtons[0].click();

  //nano
  var nanoThemes = [['nano', {
    swatches: ['rgba(244, 67, 54, 1)', 'rgba(233, 30, 99, 0.95)', 'rgba(156, 39, 176, 0.9)', 'rgba(103, 58, 183, 0.85)', 'rgba(63, 81, 181, 0.8)', 'rgba(33, 150, 243, 0.75)', 'rgba(3, 169, 244, 0.7)'],
    defaultRepresentation: 'HEXA',
    components: {
      preview: true,
      opacity: true,
      hue: true,
      interaction: {
        hex: false,
        rgba: false,
        hsva: false,
        input: true,
        clear: true,
        save: true
      }
    }
  }]];
  var nanoButtons = [];
  var nanoPickr = null;
  var _loop3 = function _loop3() {
    var _nanoThemes$_i = _slicedToArray(_nanoThemes[_i5], 2),
      theme = _nanoThemes$_i[0],
      config = _nanoThemes$_i[1];
    var button = document.createElement('button');
    button.innerHTML = theme;
    nanoButtons.push(button);
    button.addEventListener('click', function () {
      var el = document.createElement('p');
      pickrContainer2.appendChild(el);

      // Delete previous instance
      if (nanoPickr) {
        nanoPickr.destroyAndRemove();
      }

      // Apply active class
      for (var _i6 = 0, _nanoButtons = nanoButtons; _i6 < _nanoButtons.length; _i6++) {
        var btn = _nanoButtons[_i6];
        btn.classList[btn === button ? 'add' : 'remove']('active');
      }

      // Create fresh instance
      nanoPickr = new Pickr(Object.assign({
        el: el,
        theme: theme,
        "default": '#05c3fb'
      }, config));

      // Set events
      nanoPickr.on('init', function (instance) {
        console.log('Event: "init"', instance);
      }).on('hide', function (instance) {
        console.log('Event: "hide"', instance);
      }).on('show', function (color, instance) {
        console.log('Event: "show"', color, instance);
      }).on('save', function (color, instance) {
        console.log('Event: "save"', color, instance);
      }).on('clear', function (instance) {
        console.log('Event: "clear"', instance);
      }).on('change', function (color, source, instance) {
        console.log('Event: "change"', color, source, instance);
      }).on('changestop', function (source, instance) {
        console.log('Event: "changestop"', source, instance);
      }).on('cancel', function (instance) {
        console.log('cancel', nanoPickr.getColor().toRGBA().toString(0));
      }).on('swatchselect', function (color, instance) {
        console.log('Event: "swatchselect"', color, instance);
      });
    });
    themeContainer2.appendChild(button);
  };
  for (var _i5 = 0, _nanoThemes = nanoThemes; _i5 < _nanoThemes.length; _i5++) {
    _loop3();
  }
  nanoButtons[0].click();
});
/******/ })()
;