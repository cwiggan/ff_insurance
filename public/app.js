// app.js
// create our angular app and inject ngAnimate and ui-router 
// =============================================================================
angular.module('formApp', ['ngAnimate', 'ui.router'])

// configuring our routes 
// =============================================================================
.config(function($stateProvider, $urlRouterProvider) {
    
    $stateProvider
    
        // route to show our basic form (/form)
        .state('form', {
            url: '/form',
            templateUrl: 'form.html',
            controller: 'formController'
        })
        
        // nested states 
        // each of these sections will have their own view
        // url will be nested (/form/profile)
        .state('form.profile', {
            url: '/profile',
            templateUrl: 'form-profile.html'
        })
        
        // url will be /form/interests
        .state('form.interests', {
            url: '/interests',
            templateUrl: 'form-interests.html'
        })
        // url will be /form/activity
        .state('form.activity', {
            url: '/activity',
            templateUrl: 'form-activity.html'
        })  
        // url will be /form/activity
        .state('form.alcohol', {
            url: '/alcohol',
            templateUrl: 'form-alcohol.html'
        })   
        // url will be nested (/form/profile)
        .state('form.security', {
            url: '/security',
            templateUrl: 'form-security.html'
        })  
        // url will be nested (/form/profile)
        .state('form.waiver', {
            url: '/waiver',
            templateUrl: 'form-app.html'
        })     
        // url will be /form/payment
        .state('form.payment', {
            url: '/payment',
            templateUrl: 'form-site.html'
        });
        
    // catch all route
    // send users to the form page 
    $urlRouterProvider.otherwise('/form/profile');
})




// our controller for the form
// =============================================================================
.controller('formController', function($scope, $http) {

    
    $scope.StateList = null;
    $scope.CatList = null;
    $scope.DataList = null;

    // we will store all of our form data in this object
    $scope.formData = {};
    $scope.formData.ioptions = {
        ids: {30: true}
    };
    //Declaring the function to load data from database
    $scope.fillStateList = function () {
        $http.get("api/states")
        .success(function(response){
            $scope.StateList = response.states;
            $scope.CatList = response.cats;
            $scope.DataList = response.dataform;
            $scope.ConstructionType = response.dropdowns[0].options;
            $scope.LocationType = response.dropdowns[1].options;
            $scope.Security = response.dropdowns[2].options;
            $scope.Railings = response.dropdowns[5].options;
            $scope.Options = response.InsureOptions;
            $scope.Wedding = response.WebOptions;
            
           //default values
            $scope.formData.location_guest = $scope.DataList.guests;
            $scope.formData.start_time = $scope.DataList.start_time;
            $scope.formData.end_time = $scope.DataList.end_time;
            $scope.formData.event_type = {id: parseInt($scope.DataList.eventtype)};
            $scope.formData.subtotal = $scope.DataList.estimate;

           // alert($scope.Security[0].name);

        });
    };  

    //Calling the function to load the data on pageload
    $scope.fillStateList();
    
    // function to process the form
    $scope.processForm = function() {
        alert('awesome!');
    };


});

