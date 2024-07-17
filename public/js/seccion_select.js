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

eval("function showProductDetails(productId) {\n  $.ajax({\n    url: '/products/' + productId,\n    type: 'GET',\n    success: function success(response) {\n      $('#productModalBody').html(response); // Actualizar el contenido del modal\n      $('#productModal').modal('show'); // Mostrar el modal después de cargar los datos\n    },\n    error: function error(xhr, status, _error) {\n      console.error('Error al obtener detalles del producto:', _error);\n    }\n  });\n}//# sourceURL=[module]\n//# sourceMappingURL=data:application/json;charset=utf-8;base64,eyJ2ZXJzaW9uIjozLCJmaWxlIjoiLi9yZXNvdXJjZXMvanMvc2VjY2lvbl9zZWxlY3QuanMiLCJuYW1lcyI6WyJzaG93UHJvZHVjdERldGFpbHMiLCJwcm9kdWN0SWQiLCIkIiwiYWpheCIsInVybCIsInR5cGUiLCJzdWNjZXNzIiwicmVzcG9uc2UiLCJodG1sIiwibW9kYWwiLCJlcnJvciIsInhociIsInN0YXR1cyIsImNvbnNvbGUiXSwic291cmNlUm9vdCI6IiIsInNvdXJjZXMiOlsid2VicGFjazovLy8uL3Jlc291cmNlcy9qcy9zZWNjaW9uX3NlbGVjdC5qcz9iZDNkIl0sInNvdXJjZXNDb250ZW50IjpbIlxyXG5cclxuICAgIGZ1bmN0aW9uIHNob3dQcm9kdWN0RGV0YWlscyhwcm9kdWN0SWQpIHtcclxuICAgICAgICAkLmFqYXgoe1xyXG4gICAgICAgICAgICB1cmw6ICcvcHJvZHVjdHMvJyArIHByb2R1Y3RJZCxcclxuICAgICAgICAgICAgdHlwZTogJ0dFVCcsXHJcbiAgICAgICAgICAgIHN1Y2Nlc3M6IGZ1bmN0aW9uKHJlc3BvbnNlKSB7XHJcbiAgICAgICAgICAgICAgICAkKCcjcHJvZHVjdE1vZGFsQm9keScpLmh0bWwocmVzcG9uc2UpOyAvLyBBY3R1YWxpemFyIGVsIGNvbnRlbmlkbyBkZWwgbW9kYWxcclxuICAgICAgICAgICAgICAgICQoJyNwcm9kdWN0TW9kYWwnKS5tb2RhbCgnc2hvdycpOyAvLyBNb3N0cmFyIGVsIG1vZGFsIGRlc3B1w6lzIGRlIGNhcmdhciBsb3MgZGF0b3NcclxuICAgICAgICAgICAgfSxcclxuICAgICAgICAgICAgZXJyb3I6IGZ1bmN0aW9uKHhociwgc3RhdHVzLCBlcnJvcikge1xyXG4gICAgICAgICAgICAgICAgY29uc29sZS5lcnJvcignRXJyb3IgYWwgb2J0ZW5lciBkZXRhbGxlcyBkZWwgcHJvZHVjdG86JywgZXJyb3IpO1xyXG4gICAgICAgICAgICB9XHJcbiAgICAgICAgfSk7XHJcbiAgICB9XHJcblxyXG4gICJdLCJtYXBwaW5ncyI6IkFBRUksU0FBU0Esa0JBQWtCQSxDQUFDQyxTQUFTLEVBQUU7RUFDbkNDLENBQUMsQ0FBQ0MsSUFBSSxDQUFDO0lBQ0hDLEdBQUcsRUFBRSxZQUFZLEdBQUdILFNBQVM7SUFDN0JJLElBQUksRUFBRSxLQUFLO0lBQ1hDLE9BQU8sRUFBRSxTQUFBQSxRQUFTQyxRQUFRLEVBQUU7TUFDeEJMLENBQUMsQ0FBQyxtQkFBbUIsQ0FBQyxDQUFDTSxJQUFJLENBQUNELFFBQVEsQ0FBQyxDQUFDLENBQUM7TUFDdkNMLENBQUMsQ0FBQyxlQUFlLENBQUMsQ0FBQ08sS0FBSyxDQUFDLE1BQU0sQ0FBQyxDQUFDLENBQUM7SUFDdEMsQ0FBQztJQUNEQyxLQUFLLEVBQUUsU0FBQUEsTUFBU0MsR0FBRyxFQUFFQyxNQUFNLEVBQUVGLE1BQUssRUFBRTtNQUNoQ0csT0FBTyxDQUFDSCxLQUFLLENBQUMseUNBQXlDLEVBQUVBLE1BQUssQ0FBQztJQUNuRTtFQUNKLENBQUMsQ0FBQztBQUNOIiwiaWdub3JlTGlzdCI6W119\n//# sourceURL=webpack-internal:///./resources/js/seccion_select.js\n");

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