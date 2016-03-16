/**
 * Created by vrigzlinuxmint13 on 3/16/16.
 */
angular.module('mainController', [])
	.controller('RegisterController', function($scope, $http, Register, Country) {
		$scope.required = true;
		$scope.registerData = {};
		Country.get()
			.success(function(data) {
				$scope.countries = data;
			});

		$scope.submitRegister = function(isValid) {

			// check to make sure the form is completely valid
			if (isValid) {
				Register.create( $scope.registerData )
					.success( function( data ) {
						$scope.registrationForm.$setPristine();
						$scope.registerData = {};
						console.log(data);
					} );
			}

		};
	});