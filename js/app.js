(function(){
    var app = angular.module('keneticfitness', []);

    app.controller("LoginController", ['$http', function($http){
        this.email = "";
        this.password = "";
        this.firstName = "";
        this.lastName = "";
        this.phoneNumber = "";

        this.invalidLogin = false;
        this.invalidLoginMessage = "";
        this.login = function(){
            $http.get('login.php', {params : {email : this.email, password : this.password}})
                 .success(function(data, status, headers, config){
                 }) 
                 .error(function(data, status, headers, config){
                 });
        };
        this.signup = function() {
            $http.get('signup.php', {params : {firstName : this.firstName, lastName : this.lastName, phoneNumber : this.phoneNumber, email : this.email, password : this.password}})
                 .success(function(data, status, headers, config){
                 }) 
                 .error(function(data, status, headers, config){
                 });
        }
    }]);
})();    
