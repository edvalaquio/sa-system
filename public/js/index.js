'use strict';

angular.module("indexApp",
	["ngRoute",
	"controllers.userController",
	"controllers.filesLogController"])
.config(["$routeProvider", "$locationProvider",
	function($routeProvider, $locationProvider){
		$routeProvider
		.when("/", {
			templateUrl: "/partials/home.html"
		})
		.when("/filesLog", {
			templateUrl: "/partials/filesLog.html",
			controller: "filesLogController"
		})
		.when("/users", {
			templateUrl: "/partials/users.html",
			controller: "userController"
		})
		.when("/login", {
			templateUrl: "/partials/login.html"
		})
		.when("/staff", {
			templateUrl: "/partials/staff_home.html"
		});

		// .when("/", {
		// 	templateUrl: "/partials/home.php",
		// 	controller: "sample"
		// })
	}
])

// Add this directive where you keep your directive
