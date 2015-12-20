var myAppModule = angular.module('myApp', []);
myAppModule.controller('TestController', function($scope){
	$scope.message = "it's working";
});