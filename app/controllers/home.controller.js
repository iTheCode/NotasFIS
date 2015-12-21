(function () {
	'use strict';

	angular.module('myApp').controller('HomeController', ['$scope', function ($scope) {
		// Here should be an api rest request, in a service method
		$scope.students = [
			{
				name : "Luis Uculmana Lara",
				grade : "II",
				code : "20143406"
			},
			{
				name : "Luis Uculmana Lara",
				grade : "II",
				code : "20143406"
			},
			{
				name : "Luis Uculmana Lara",
				grade : "II",
				code : "20143406"
			}
		];
	}]);
})();