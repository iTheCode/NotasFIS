var myAppModule = angular.module('myApp', ['ui.router']);
myAppModule.config(['$stateProvider', '$urlRouterProvider', '$locationProvider', function ($stateProvider, $urlRouterProvider, $locationProvider) {
	$stateProvider
	.state('home', {
		url: '/',
		templateUrl: '../views/general/home.html',
		controller: 'HomeController'
	})
	.state('login', {
		url: '/login',
		templateUrl: '../views/admin/login.html',
		controller: 'LoginController'
	})
	.state('options', {
		url: '/admin/opciones',
		templateUrl: '../views/admin/options.html',
		controller: 'OptionsController'
	})
	.state('upload', {
		url: '/admin/upload',
		templateUrl: '../views/admin/upload.html',
		controller: 'UploadController'
	});



	$urlRouterProvider.otherwise('/');
}])