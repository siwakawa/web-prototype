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
/******/ 	__webpack_require__.p = "";
/******/
/******/ 	// Load entry module and return exports
/******/ 	return __webpack_require__(__webpack_require__.s = 0);
/******/ })
/************************************************************************/
/******/ ([
/* 0 */
/***/ (function(module, exports, __webpack_require__) {

__webpack_require__(1);
(function webpackMissingModule() { throw new Error("Cannot find module \"D:\\Dropbox\\Santi\\localhost\\casatoken\\resources\\assets\\sass\\app.scss\""); }());


/***/ }),
/* 1 */
/***/ (function(module, exports) {

throw new Error("Module build failed: Error: Couldn't find preset \"env\" relative to directory \"D:\\\\Dropbox\\\\Santi\\\\localhost\\\\casatoken\\\\resources\\\\assets\\\\js\"\n    at D:\\Dropbox\\Santi\\localhost\\casatoken\\node_modules\\babel-core\\lib\\transformation\\file\\options\\option-manager.js:293:19\n    at Array.map (native)\n    at OptionManager.resolvePresets (D:\\Dropbox\\Santi\\localhost\\casatoken\\node_modules\\babel-core\\lib\\transformation\\file\\options\\option-manager.js:275:20)\n    at OptionManager.mergePresets (D:\\Dropbox\\Santi\\localhost\\casatoken\\node_modules\\babel-core\\lib\\transformation\\file\\options\\option-manager.js:264:10)\n    at OptionManager.mergeOptions (D:\\Dropbox\\Santi\\localhost\\casatoken\\node_modules\\babel-core\\lib\\transformation\\file\\options\\option-manager.js:249:14)\n    at OptionManager.init (D:\\Dropbox\\Santi\\localhost\\casatoken\\node_modules\\babel-core\\lib\\transformation\\file\\options\\option-manager.js:368:12)\n    at File.initOptions (D:\\Dropbox\\Santi\\localhost\\casatoken\\node_modules\\babel-core\\lib\\transformation\\file\\index.js:212:65)\n    at new File (D:\\Dropbox\\Santi\\localhost\\casatoken\\node_modules\\babel-core\\lib\\transformation\\file\\index.js:135:24)\n    at Pipeline.transform (D:\\Dropbox\\Santi\\localhost\\casatoken\\node_modules\\babel-core\\lib\\transformation\\pipeline.js:46:16)\n    at transpile (D:\\Dropbox\\Santi\\localhost\\casatoken\\node_modules\\babel-loader\\lib\\index.js:50:20)\n    at D:\\Dropbox\\Santi\\localhost\\casatoken\\node_modules\\babel-loader\\lib\\fs-cache.js:118:18\n    at ReadFileContext.callback (D:\\Dropbox\\Santi\\localhost\\casatoken\\node_modules\\babel-loader\\lib\\fs-cache.js:31:21)\n    at FSReqWrap.readFileAfterOpen [as oncomplete] (fs.js:367:13)");

/***/ })
/******/ ]);