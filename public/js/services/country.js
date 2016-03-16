/**
 * Created by vrigzlinuxmint13 on 3/16/16.
 */
angular.module('countryService', [])

	.factory('Country', function($http) {
		return {
			get: function() {
				return $http.get('/api/countries');
			}
		};
	});