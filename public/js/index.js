'use strict';

angular.module("indexApp",
	["ngRoute",
	"controllers.userController",
	"controllers.filesLogController", 
	"controllers.modalController"])
.config(["$routeProvider", "$locationProvider",
	function($routeProvider, $locationProvider){
		$routeProvider
		.when("/", {
			templateUrl: 	"/partials/home.html"
		})
		.when("/sent", {
			templateUrl: 	"/partials/sent.html",
			controller: 	"filesController"
		})
		.when("/received", {
			templateUrl: 	"/partials/received.html",
			controller: 	"filesController"	
		})
		.when("/users", {
			templateUrl: 	"/partials/users.html",
			controller: 	"userController"
		})
	}
])
.config(["$interpolateProvider", function($interpolateProvider) {
    $interpolateProvider.startSymbol("[[");
    $interpolateProvider.endSymbol("]]");
}]);

// Add this directive where you keep your directive
