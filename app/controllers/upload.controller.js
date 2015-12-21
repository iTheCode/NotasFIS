(function () {
	'use strict';

	angular.module('myApp').controller('UploadController', ['$scope', function ($scope) {
		$scope.message = "upload zone";
		$scope.upload = function(){
			// Some upload code with services, important responses for errors
			console.log('Correct ng-submit upload');
		}
	}]);
})();