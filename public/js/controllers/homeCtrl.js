'use strict';

angular.module("controllers.homeCtrl", [])
.controller("homeCtrl", ["$rootScope", "$scope", "$window", "$location", "$http",
	function($rootScope, $scope, $window, $location, $http){
		console.log("Here in accountsCtrl");
		$http.post('home').then(function(response){
			console.log(response.data);
		});
	}
]);
