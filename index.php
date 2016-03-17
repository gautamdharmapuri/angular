<html ng-app="myApp">
    <head>
        
        <title>My Angular</title>
    </head>
    <body ng-controller="myController">
        <div>
            <p>Name: <input type="text" ng-model="fullName"></p>
            <p>By Default : {{fullName}}</p>
            Now you typing this <b ng-bind="fullName"></b>
        </div>
    </body>
    <script src="js/jQuery.min.js"></script>
    <script src="js/angular.min.js"></script>
    <script src="js/index.js"></script>
</html>