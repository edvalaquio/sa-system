'use strict';
var filesLog = angular.module("controllers.filesLogController", ['ui.bootstrap'])

filesLog.controller("filesLogController", ["$rootScope", "$scope", "$window", "$location", "$http",
	function($rootScope, $scope, $window, $location, $http){
		console.log("Here in filesLogController");

		if(!$window.localStorage['filesData']){
			$http({
				'method'	: 'GET', 
				'url'		: '/js/transactions.json',
			}).then(function(res){
				console.log(res.data);
				$window.localStorage['filesData'] = JSON.stringify(res.data);
			}, function(error){
				console.log(error);
			});
		}
		$scope.filesData = JSON.parse($window.localStorage['filesData']);

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

filesLog.controller("fileModalController", ["$rootScope", "$scope", "$window", "$location", "$http",
	function($rootScope, $scope, $window, $location, $http){
		console.log("Here in fileModalController");
		var $documents = this;

		$documents.addDocument = function($ctrl){
			var tempJSON = JSON.parse($window.localStorage['filesData']);
			var newID = tempJSON.length;
			$documents.tags = $documents.tags.split(',');
			tempJSON.push({
				'id'			: newID,
				'date'			: new Date(),
				'label'			: $documents.label,
				'receiver'		: $documents.receiver,
				'sender'		: $documents.sender,
				'particulars'	: $documents.particulars,
				'location'		: 'Maricar',
				'tags'			: $documents.tags,
				'status'		: 'Pending'
			});
			$window.localStorage['filesData'] = JSON.stringify(tempJSON);
    		$ctrl.ok();
    		$window.location.href = "#!/filesLog/"
   		}

   		$documents.editDocument = function($ctrl){
   			console.log($ctrl.items);
   		}
	}	
]);