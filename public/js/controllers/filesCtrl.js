'use strict';
var files = angular.module("controllers.filesCtrl", [])

files.controller("filesCtrl", ["$rootScope", "$scope", "$window", "$location", "$http", "apiUrl",
	function($rootScope, $scope, $window, $location, $http, apiUrl){
		$('.modal').modal();
        $('.chips').chips()

		console.log(apiUrl);
		$scope.submitTransaction = function(type){
			$http({
				method 	: 'POST',
				url 	: '/' + type + '/createSample',
				data 	: {
					'data' : $scope.transaction
				}
			}).then(function(res){	
				console.log(res);
			}, function(err){
				console.log(err);
			});
		}
	}	
]);