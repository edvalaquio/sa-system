'use strict';

angular.module("controllers.homeCtrl", [])
.controller("homeCtrl", ["$rootScope", "$scope", "$window", "$location", "$http",
	function($rootScope, $scope, $window, $location, $http){
		console.log("Here in HomeCtrl");
		$http.post('home').then(function(response){
			console.log(response.data);
		});
	    $('.datepicker').datepicker();
		// $scope.openPicker = function(){
		// 	$scope.pickerF
		// 	$('.datepicker').pickadate();
		// }
		// $(document).ready(function(){
		// var picker = $('.datepicker').pickadate();
		// console.log(M);
		// });
		// document.addEventListener('DOMContentLoaded', function() {
		// var elems = document.querySelectorAll('.datepicker');
		// console.log(elems);
		// console.log(M);
		// var instance = M.Datepicker.init(elems, options);
			// console.log(instance);
			// console.log("Hello");
			// $scope.openPicker = instance.open;
		// });
	}
]);
