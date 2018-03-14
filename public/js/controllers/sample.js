'use strict';

angular.module("controllers.sample", [])
.controller("sample", ["$rootScope", "$scope", "$window", "$location",
	function($rootScope, $scope, $window, $location){
		console.log("Hello wowrld");
	}	
]);
