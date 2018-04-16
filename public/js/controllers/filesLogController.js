'use strict';
var filesLog = angular.module("controllers.filesLogController", ['ui.bootstrap'])

filesLog.controller("filesLogController", ["$rootScope", "$scope", "$window", "$location",
	function($rootScope, $scope, $window, $location){
		console.log("Here in filesLogController");

		$scope.filesData = [
			{	
				date 		: "1-Feb-18",
				label 		: "Request", 
				receiver	: "Maricar",
				sender 		: "UPV Mathematics Circle", 
				location 	: "Checked Out",
				notes 		: "request to hold Interschool Math Quiz Bee at UPV GCEB on 13-14 February 2018",
				tags 		: ["doc1", "doc2", "doc3"], 
				status 		: "Approved",
				pickup 		: "Ms Isonza", 
				document 	: ":////{filePath}"
			},
			{	
				date 		: "1-Feb-18",
				label 		: "Request", 
				receiver	: "Maricar",
				sender 		: "SEC",
				location 	: "Checked Out",
				notes 		: "reimbursement for payment of digi stamps and ink stamp pad",
				tags 		: ["doc1", "doc2", "doc3"], 
				status 		: "Noted",
				document 	: ":////{filePath}"
			},
			{	
				date 		: "5-Feb-18",
				label 		: "Progress Report", 
				receiver	: "Maricar",
				sender 		: "Chemistry",
				particular 	: "Concepcion Ponce", 
				location 	: "Maricar",
				notes 		: "progress report for the project Highly Luminiscent N-doped etc…",
				tags 		: ["doc1", "doc2", "doc3"], 
				status 		: "Rejected",
				document 	: ":////{filePath}"
			},
			{	
				date 		: "5-Feb-18",
				label 		: "Request", 
				receiver	: "Maricar",
				sender 		: "Jorge Ebay",
				particular 	: "Randy Madrid", 
				location 	: "Susan",
				notes 		: "request TO: Carles on 2-5 February 2018",
				tags 		: ["doc1", "doc2", "doc3"], 
				status 		: "Pending",
			},
		];

		$scope.dropDownStatus = {
			isopen: false
		};

		$scope.toggleDropdown = function($event) {
			$event.preventDefault();
			$event.stopPropagation();
			$scope.status.isopen = !$scope.dropDownStatus.isopen;
		};

		$scope.appendToEl = angular.element(document.querySelector('#dropdown-long-content'));
	}	
]);