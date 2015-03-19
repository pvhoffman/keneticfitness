(function(){
    var app = angular.module("keneticfitness", []);

    app.factory("UserService", [function(){
        return {
                userId : -1
                , userEmail : ""
                , isLoggedIn : function() {
                        return !(this.userId === -1);      
                  }
        };
    }]);

    app.controller("NavbarClientController", ["UserService", function(User){
       this.isLoggedIn = function(){
                return User.isLoggedIn();  
       }; 
       this.userEmail = function() {
                return User.userEmail;
       }
       this.logout = function() {
                User.userId = -1;
                User.userEmail = "";
       }
    }]);

    app.directive("loginSignup", ["$http", "UserService", function($http, User){
        return {
                restrict       : "E"
                , templateUrl  : "login-signup.html"
                , controllerAs : "loginCtrl"
                , controller   : function(){
                    this.loginEmail           = "";
                    this.loginPassword        = "";
                    this.signupFirstName      = "";
                    this.signupLastName       = "";
                    this.signupPhoneNumber    = "";
                    this.signupPassword       = "";
                    this.invalidLogin         = false;
                    this.invalidLoginMessage  = "";
                    this.invalidSignup        = false;
                    this.invalidSignupMessage = "";
                    this.login = function(){
                        var ctrl = this;
                        ctrl.invalidLogin = false;
                        ctrl.invalidLoginMessage = "";
                        $http.get('login.php', {params : {email : this.loginEmail, password : this.loginPassword}})
                            .success(function(data, status, headers, config){
                                if(data.errors){
                                        ctrl.invalidLogin        = true;
                                        ctrl.invalidLoginMessage = data.errors;
                                } else {
                                    // the login was valid
                                }
                            }) 
                            .error(function(data, status, headers, config){
                                        ctrl.invalidLogin        = true;
                                        ctrl.invalidLoginMessage = data;
                            });
                    };
                    this.signup = function() {
                        $http.get('signup.php', {params : {firstName : this.signupFirstName, lastName : this.signupLastName, phoneNumber : this.signupPhoneNumber, email : this.signupEmail, password : this.signupPassword}})
                            .success(function(data, status, headers, config){
                            }) 
                            .error(function(data, status, headers, config){
                            });
                    };
                }
        };
    }]);

})();    

