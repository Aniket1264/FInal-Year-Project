<?php
  session_start();
  $_SESSION['phone'];
  $_SESSION['rndno'];
  ?>
<!DOCTYPE html>

<html>
<head>
  <title>OTP Input Directive</title>
  <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
  <style>
      body{
          font-family: 'Roboto', sans-serif;
      }
      .otpBox{
          width:250px;margin:0 auto;margin-top: 150px;padding: 20px;background: #f5f5f5;border: 1px solid #d4d4d4;height: 150px;
      }
  </style>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/angular.js/1.5.3/angular.min.js"></script>
  <script src="otpInputDirective.min.js"></script>
  <script>
    'use strict';
     var app = angular.module('exampleApp', ["otpInputDirective"]);
      app.controller('appCtrl',function($scope) {
        $scope.otpInput={
            size:4,
            type:"text",
            onDone: function(value){
                console.log(value);
            },
            onChange: function(value){
                console.log(value);
            }
        }
      });
	 
  </script>
 </head>
 
 <body ng-app="exampleApp" ng-controller="appCtrl">

  <div class="otpBox">
    <form  action="succ.php"   method="post">
    <h4 style="text-align: center">Enter One Time Password</h4>
    <div otp-input-directive options="otpInput"></div>
    <div style="margin-top:20px;text-align: center">
      
	    <input type="hidden" id="btnClickedValue" name="otp" value="{{otpInput.value}}" />
       <div class="button">
          <input type="submit"  name="submit"  value="submit" ">
       
    </div>
  </div>
  </form>
 <body>
   
 </html>
