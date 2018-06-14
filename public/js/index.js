'use strict';

// angular.module("indexApp",
// 	["ngRoute",
// 	"controllers.accountsCtrl",
// 	"controllers.homeCtrl",
// 	"controllers.filesCtrl",
// 	'ui.materialize',
// 	'ui.materialize.input_date',
// 	'ui.materialize.modal'])
angular.module("indexApp",
	["ngRoute",
	"controllers.accountsCtrl",
	"controllers.homeCtrl",
	"controllers.filesCtrl"])
.config(["$routeProvider", "$locationProvider",
	function($routeProvider, $locationProvider){
		$routeProvider
		.when("/", {
			templateUrl: 	"/templates/home.html",
			controller:		"homeCtrl"
		})
		.when("/sent", {
			templateUrl: 	"/templates/sent.html",
			controller: 	"filesCtrl"
		})
		.when("/received", {
			templateUrl: 	"/templates/received.html",
			controller: 	"filesCtrl"
		})
		.when("/accounts", {
			templateUrl: 	"/templates/accounts.html",
			controller: 	"accountsCtrl"
		})
	}
])
.config(["$interpolateProvider", function($interpolateProvider) {
    $interpolateProvider.startSymbol("[[");
    $interpolateProvider.endSymbol("]]");
}])
// .config(["$qProvider", function($qProvider){
// 	 $qProvider.errorOnUnhandledRejections(false)
// }])

// Add this directive where you keep your directive
