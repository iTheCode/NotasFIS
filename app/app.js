var myAppModule = angular.module('myApp', ['ui.router']);
myAppModule.config(['$stateProvider', '$urlRouterProvider', '$locationProvider', function ($stateProvider, $urlRouterProvider, $locationProvider) {
	$stateProvider
	.state('home', {
		url: '/',
		templateUrl: '../views/home.html',
		controller: 'HomeController'
	})
	.state('login', {
		url: '/login',
		templateUrl: '../views/login.html',
		controller: 'LoginController'
	})
	.state('upload', {
		url: '/upload',
		templateUrl: '../views/upload.html',
		controller: 'UploadController'
	});



	$urlRouterProvider.otherwise('/');
}])