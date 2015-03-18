(function(){
    var app = angular.module("keneticfitness", []);

    app.directive("loginSignup", ["$http", function($http){
        return {
                restrict       : "E"
                , templateUrl  : "login-signup.html"
                , controllerAs : "loginCtrl"
                , controller   : function(){
                    this.loginEmail = "";
                    this.loginPassword = "";
                    this.signupFirstName = "";
                    this.signupLastName = "";
                    this.signupPhoneNumber = "";
                    this.signupPassword = "";

                    this.invalidLogin = false;
                    this.invalidLoginMessage = "";

                    this.invalidSignup = false;
                    this.invalidSignupMessage = "";

                    this.login = function(){
                        var ctrl = this;
                        $http.get('login.php', {params : {email : this.loginEmail, password : this.loginPassword}})
                            .success(function(data, status, headers, config){
                                if(data.errors){
                                        ctrl.invalidLogin = true;
                                        ctrl.invalidLoginMessage = data.errors;
                                }
                            }) 
                        .error(function(data, status, headers, config){
                        });
                    };
                    this.signup = function() {
                        $http.get('signup.php', {params : {firstName : this.signupFirstName, lastName : this.signupLastName, phoneNumber : this.signupPhoneNumber, email : this.signupEmail, password : this.signupPassword}})
                            .success(function(data, status, headers, config){
                            }) 
                        .error(function(data, status, headers, config){
                        });
                    }
                }
        };
    }]);

})();    

