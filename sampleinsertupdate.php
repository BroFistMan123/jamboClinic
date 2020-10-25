<?php






?>


<!DOCTYPE html>
<html>
<head>
	<title>sample</title>
	  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>


	<div class="container">
		<div class="row">
			<div class="col-md-6">
				<!-- login -->
				<form action="register_login.php" method="POST">
					<div class="form-group">
						<span>Enter username</span>
						<input type="text" class="form-control" name="usern">
					</div>
					<div class="form-group">
						<span>Enter Password</span>
						<input type="password" class="form-control" name="userp">
					</div>
					<button class="btn btn-primary" name="login">login</button>
				</form>
				
			</div>
				<!-- register -->	
			<div class="col-md-6">

				<form action="register_login.php" method="POST">
					<div class="form-group">
						<span>Register username</span>
						<input type="text" class="form-control" name="usern1">
					</div>
					<div class="form-group">
						<span>Register Password</span>
						<input type="password" class="form-control" name="userp1">
					</div>
					<button class="btn btn-primary"  name="signup">Sign up</button>
				</form>
				
			</div>
		</div>
	</div>

</body>
</html>