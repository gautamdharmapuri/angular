<html ng-app="myApp">
    <head>
        <style type="text/css">
			.module-div{
				clear:both;
				float:left;
				border-bottom:2px black solid;
				padding-top:40px;
				padding-bottom:40px;
			}
			.module-span{
				font-weight:bold;
				clear:both;
				float:left;
			}
			.module-output {
				clear:both;
				float:left;
				padding-top:10px;
			}
		</style>
        <title>My Angular</title>
    </head>
    <body ng-controller="myController">
        <div>
		
			<div ng-init="myArr=[0,1,2,3,4,5,6,7,8,9]" class="module-div">
				<span class="module-span"> With multiple ng-init array : </span>
				<span class="module-output" ng-clock>{{myArr[2]}}</span>
			</div>
			<br><br>
			
			
			<div ng-init="person={firstCall:'Hey',secondCall:'Hello'}" class="module-div">
				<span class="module-span"> With multiple ng-init Object variables : </span>
				<span class="module-output" ng-clock>{{person.firstCall + "  &&  " + person.secondCall}}</span>
			</div>
			<br><br>
		
			<div ng-init="firstVar='This is First';secondVar='This is Second'" class="module-div">
				<span class="module-span"> With multiple ng-init variables : </span>
				<span class="module-output" ng-clock>{{firstVar + "  &&  " + secondVar}}</span>
			</div>
			<br><br>
			
			
			<div ng-init="lastName='Dharmapuri'" class="module-div">
				<span class="module-span">with "ng-init" :</span> 
				<span class="module-output" ng-clock>{{lastName}} is my last name</span>
			</div>
			
			<br><br>
			
			<div class="module-div">
				<span class="module-span">with "ng-model" and "ng-bind" :</span>
				<span class="module-output" ng-clock>
				Name: <input type="text" ng-model="fullName">
				<p>By Default : {{fullName}}</p>
				Now you typing this <b ng-bind="fullName"></b>
				</span>
			</div>
        </div>
    </body>
    <script src="js/jQuery.min.js"></script>
    <script src="js/angular.min.js"></script>
    <script src="js/index.js"></script>
</html>