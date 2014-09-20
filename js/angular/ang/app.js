'use strict';


// Declare app level module which depends on filters, and services
angular.module('myApp', [
  'ui.router',
  'myApp.filters',
  'myApp.services',
  'myApp.directives',
  'myApp.controllers'
]).
config(function($stateProvider, $urlRouterProvider) {
  //$urlRouterProvider.otherwise('newsfeed');
  $stateProvider
  .state('index', {
      url: "",
      templateUrl: "views/home"
  })
  .state('home', {
      url: "/home",
      templateUrl: "views/home"
  })
  .state('unload', {
      url: "/unload",
      template: ""
  });
});