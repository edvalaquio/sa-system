'use strict';
var filesLog = angular.module("controllers.filesLogController", ['ui.bootstrap'])

filesLog.controller("filesLogController", ["$rootScope", "$scope", "$window", "$location",
	function($rootScope, $scope, $window, $location){
		console.log("Here in filesLogController");

		$scope.status = {
			isopen: false
		};

		$scope.toggleDropdown = function($event) {
			$event.preventDefault();
			$event.stopPropagation();
			$scope.status.isopen = !$scope.status.isopen;
		};

		$scope.appendToEl = angular.element(document.querySelector('#dropdown-long-content'));
	}	
]);