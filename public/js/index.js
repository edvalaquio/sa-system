'use strict';

angular.module("indexApp",
	["ngRoute",
	"controllers.userController",
	"controllers.filesCtrl",
	'ui.materialize'])
.config(["$routeProvider", "$locationProvider",
	function($routeProvider, $locationProvider){
		$routeProvider
		.when("/", {
			templateUrl: 	"/templates/home.html" 
		})
		.when("/sent", {
			templateUrl: 	"/templates/sent.html",
			controller: 	"filesCtrl"
		})
		.when("/received", {
			templateUrl: 	"/templates/received.html",
			controller: 	"filesCtrl"	
		})
		.when("/users", {
			templateUrl: 	"/templates/users.html",
			controller: 	"userController"
		})
	}
])
.config(["$interpolateProvider", function($interpolateProvider) {
    $interpolateProvider.startSymbol("[[");
    $interpolateProvider.endSymbol("]]");
}]);

// Add this directive where you keep your directive
