// app.js
// create our angular app and inject ngAnimate and ui-router 
// =============================================================================
angular.module('adminApp', ['ngRoute'])


// our controller for the form
// =============================================================================
.controller('formController', function($scope, $http, $routeParams) {

    
    $scope.Options = null;
    // we will store all of our form data in this object
    $scope.formData = {}; 

    //Calling the function to load the data on pageload
    $scope.fillStateList();
    
    // function to process the form
    $scope.processForm = function() {
        $http.post("/admin/field/uupdate/")
        .success(function(response){
           // $scope.Options = response.dropdown;
           // alert(response.dropdown);
        });
    };


});

