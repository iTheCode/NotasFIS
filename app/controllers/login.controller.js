(function () {
	'use strict';

	angular.module('myApp').controller('LoginController', ['$scope', '$state', function ($scope, $state) {
		$scope.message = "testing";
		$scope.login = function(){
			// Some login code with services
			console.log('Correct ng-submit');
			$state.go('options');
		}
	}]);
})();