var myApp = angular.module('myApp', []); // No dependencies, hence the empty array

// A factory is a service you can inject into a controller
// You could add an ajax/http call get an json encoded array from php, or call to mongodb using nodejs server.
// This would be good for building api's
myApp.factory('Data', function(){
	return { fname: "Richard", lname: "Keller" };
});


// Filters are awesome
myApp.filter('reverse', function(Data){
	return function( text ) {
		return text.split("").reverse().join("");
	}
})



function firstCtrl( $scope, Data ){
	$scope.data = Data;
}
function secondCtrl( $scope, Data ){
	$scope.data = Data;
}

