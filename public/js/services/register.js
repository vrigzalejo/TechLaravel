/**
 * Created by vrigzlinuxmint13 on 3/16/16.
 */
angular.module('registerService', [])

	.factory('Register', function($http) {
		return {
			get: function() {
				return $http.get('/api/register');
			},
			create: function(registerData) {
				return $http.post('/api/register/store', registerData);
			}
		};
	});