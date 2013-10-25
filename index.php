<!DOCtype html>
<html lang="EN">
<head>
	<title>Richards Public Html Folder</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<link rel="stylesheet" type="text/css" href="css/foundation.min.css" media="all" />
	<link rel="stylesheet" type="text/css" href="css/normalize.css" media="all" />
	<style>
		.wrap {
			width: 60%;
			margin: 2em auto;
		}

	</style>
	<script src="js/angular.js"></script>
	<script src="js/app.js"></script>

</head>
	<body ng-controller="projects">
		<div class="wrap" ng-app="myApp">
				
				<label>Controller name: firstCtrl</label>
				<div ng-controller="firstCtrl">
						<input type="text" ng-model="data.fname" /><input type="text" ng-model="data.lname" />
						<!-- <label>This is data from a service called the a factory: </label> -->
						<!-- <br> -->
						<strong>Look, and object with two way data binding!</strong> : {{data}}
						<strong><h1> My name: {{data.fname}}, {{data.lname}}</h1></strong>

						<h1 style="color:red">My name reversed: {{data.fname|reverse}}, {{data.lname|reverse}}</h1>

				</div>
				<script>
					console.log( "length".length )
					console.log( "length".split("") );
				</script>
			<!-- 	<label>secondCtrl</label>
				<div ng-controller="secondCtrl">
						<input type="text" ng-model="data.message" />
						{{data.message}}
				</div> -->

		</div>
	</body>
</html>
