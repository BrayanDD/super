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

/***/ "./resources/js/seccion_select.js":
/*!****************************************!*\
  !*** ./resources/js/seccion_select.js ***!
  \****************************************/
/***/ (() => {

eval("function showProductDetails(productId) {\n  $.ajax({\n    url: '/products/' + productId,\n    type: 'GET',\n    success: function success(response) {\n      $('#productModalBody').html(response); // Actualizar el contenido del modal\n      $('#productModal').modal('show'); // Mostrar el modal después de cargar los datos\n    },\n    error: function error(xhr, status, _error) {\n      console.error('Error al obtener detalles del producto:', _error);\n    }\n  });\n}//# sourceURL=[module]\n//# sourceMappingURL=data:application/json;charset=utf-8;base64,eyJ2ZXJzaW9uIjozLCJuYW1lcyI6WyJzaG93UHJvZHVjdERldGFpbHMiLCJwcm9kdWN0SWQiLCIkIiwiYWpheCIsInVybCIsInR5cGUiLCJzdWNjZXNzIiwicmVzcG9uc2UiLCJodG1sIiwibW9kYWwiLCJlcnJvciIsInhociIsInN0YXR1cyIsImNvbnNvbGUiXSwic291cmNlcyI6WyJ3ZWJwYWNrOi8vLy4vcmVzb3VyY2VzL2pzL3NlY2Npb25fc2VsZWN0LmpzP2JkM2QiXSwic291cmNlc0NvbnRlbnQiOlsiXHJcblxyXG4gICAgZnVuY3Rpb24gc2hvd1Byb2R1Y3REZXRhaWxzKHByb2R1Y3RJZCkge1xyXG4gICAgICAgICQuYWpheCh7XHJcbiAgICAgICAgICAgIHVybDogJy9wcm9kdWN0cy8nICsgcHJvZHVjdElkLFxyXG4gICAgICAgICAgICB0eXBlOiAnR0VUJyxcclxuICAgICAgICAgICAgc3VjY2VzczogZnVuY3Rpb24ocmVzcG9uc2UpIHtcclxuICAgICAgICAgICAgICAgICQoJyNwcm9kdWN0TW9kYWxCb2R5JykuaHRtbChyZXNwb25zZSk7IC8vIEFjdHVhbGl6YXIgZWwgY29udGVuaWRvIGRlbCBtb2RhbFxyXG4gICAgICAgICAgICAgICAgJCgnI3Byb2R1Y3RNb2RhbCcpLm1vZGFsKCdzaG93Jyk7IC8vIE1vc3RyYXIgZWwgbW9kYWwgZGVzcHXDqXMgZGUgY2FyZ2FyIGxvcyBkYXRvc1xyXG4gICAgICAgICAgICB9LFxyXG4gICAgICAgICAgICBlcnJvcjogZnVuY3Rpb24oeGhyLCBzdGF0dXMsIGVycm9yKSB7XHJcbiAgICAgICAgICAgICAgICBjb25zb2xlLmVycm9yKCdFcnJvciBhbCBvYnRlbmVyIGRldGFsbGVzIGRlbCBwcm9kdWN0bzonLCBlcnJvcik7XHJcbiAgICAgICAgICAgIH1cclxuICAgICAgICB9KTtcclxuICAgIH1cclxuXHJcbiAgIl0sIm1hcHBpbmdzIjoiQUFFSSxTQUFTQSxrQkFBa0JBLENBQUNDLFNBQVMsRUFBRTtFQUNuQ0MsQ0FBQyxDQUFDQyxJQUFJLENBQUM7SUFDSEMsR0FBRyxFQUFFLFlBQVksR0FBR0gsU0FBUztJQUM3QkksSUFBSSxFQUFFLEtBQUs7SUFDWEMsT0FBTyxFQUFFLFNBQUFBLFFBQVNDLFFBQVEsRUFBRTtNQUN4QkwsQ0FBQyxDQUFDLG1CQUFtQixDQUFDLENBQUNNLElBQUksQ0FBQ0QsUUFBUSxDQUFDLENBQUMsQ0FBQztNQUN2Q0wsQ0FBQyxDQUFDLGVBQWUsQ0FBQyxDQUFDTyxLQUFLLENBQUMsTUFBTSxDQUFDLENBQUMsQ0FBQztJQUN0QyxDQUFDO0lBQ0RDLEtBQUssRUFBRSxTQUFBQSxNQUFTQyxHQUFHLEVBQUVDLE1BQU0sRUFBRUYsTUFBSyxFQUFFO01BQ2hDRyxPQUFPLENBQUNILEtBQUssQ0FBQyx5Q0FBeUMsRUFBRUEsTUFBSyxDQUFDO0lBQ25FO0VBQ0osQ0FBQyxDQUFDO0FBQ04iLCJpZ25vcmVMaXN0IjpbXSwiZmlsZSI6Ii4vcmVzb3VyY2VzL2pzL3NlY2Npb25fc2VsZWN0LmpzIiwic291cmNlUm9vdCI6IiJ9\n//# sourceURL=webpack-internal:///./resources/js/seccion_select.js\n");

/***/ })

/******/ 	});
/************************************************************************/
/******/ 	
/******/ 	// startup
/******/ 	// Load entry module and return exports
/******/ 	// This entry module can't be inlined because the eval-source-map devtool is used.
/******/ 	var __webpack_exports__ = {};
/******/ 	__webpack_modules__["./resources/js/seccion_select.js"]();
/******/ 	
/******/ })()
;