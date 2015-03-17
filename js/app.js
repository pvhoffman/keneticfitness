(function(){
    var app = angular.module('keneticfitness', []);

    app.controller("LoginController", ['$http', function($http){
        this.email = "";
        this.password = "";
        this.invalidLogin = false;
        this.invalidLoginMessage = "";
        this.existingLogin = function(){
            // alert(this.email);
            // alert(this.password);
            $http.get('/login', {'email' : this.email, 'password' : this.password})
                .success(function(data, status, headers, config){
                }) 
                .error(function(data, status, headers, config){
                });
        };
    }]);
})();    
