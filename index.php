<!DOCTYPE html>
<html ng-app="store" lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Mitchel Blais</title>
    
	<!-- Google Fonts -->

    <!-- Bootstrap -->
    <link href="components/bootstrap/bootstrap-3.3.5/css/bootstrap.min.css" rel="stylesheet">
    <link href="css/main.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
    <div class="row-fluid wrapper">
      <div class="col-md-6">
      	<header>
      		<h1>Employee Form</h1>
      	</header>
      	<form action="submit.php" method="post">
      		<input type="text" class="form-control" name="firstname" placeholder="First Name..." aria-describedby="basic-addon2" required>
      		<input type="text" class="form-control" name="lastname" placeholder="Last Name..." aria-describedby="basic-addon2" required>
      		<input type="number" class="form-control" name="age" placeholder="Age..." aria-describedby="basic-addon2" required>
      		<div class="form-group">
			    <label for="gender">Select Gender:</label>
			    <select class="form-control" id="gender" name="gender">
			      <option>Male</option>
			      <option>Female</option>
			    </select>
		    </div>
		    <button type="submit" class="btn btn-default" >Submit</button>
      	</form>
      </div>
      <div class="col-md-6">
      	<table class="table table-striped">
      		<thead>
		      <tr>
		        <th>Firstname</th>
		        <th>Lastname</th>
		        <th>Age</th>
		        <th>Gender</th>
		      </tr>
		    </thead>
		    <tbody id="results"></tbody>
      	</table>
      	<div id="formData"></div>
      </div>
    </div>
  	
  <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
  <script src="components/jquery/jquery-2.1.4.min.js"></script>
  <script src="js/main.js"></script>
  </body>
</html>