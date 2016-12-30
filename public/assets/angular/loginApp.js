angular.module('loginApp', [])
.controller('LoginController', ['$scope', function($scope,$elm) {
  var login = this;
    $scope.submit = function() {
      console.log('submit');
    };
    login.foo = 'asdxxxf';
    /*$scope.hasError = function(){
      return false;
    };*/
    $scope.hasError = function(){return false;};
}])
.directive('validateuser', function($q, $timeout) {
  return {
    require: 'ngModel',
    link: function(scope, elm, attrs, ctrl) {
      var usernames = ['Jim', 'John', 'Jill', 'Jackie'];
      var foo = true;
      ctrl.$asyncValidators.result = function(modelValue, viewValue) {

        if (ctrl.$isEmpty(modelValue)) {
          // consider empty model valid
          return $q.when();
        }

        var def = $q.defer();

        $timeout(function() {
          // Mock a delayed response
          if (usernames.indexOf(modelValue) === -1) {
            // The username is available
            scope.hasError = function(){return false;};
            def.resolve();
          } else {
            scope.hasError = function(){return true;};
            def.reject();
          }
          
        }, 500);
        return def.promise;
      };
    }
  };
});
