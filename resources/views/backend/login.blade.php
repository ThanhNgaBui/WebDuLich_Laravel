<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
	<meta charset="utf-8">
	<link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.0.3/css/bootstrap.min.css">
 	<script src="https://code.jquery.com/jquery.js"></script>
 	<script src="//netdna.bootstrapcdn.com/bootstrap/3.0.3/js/bootstrap.min.js"></script>
</head>
<body>
<div class="container" style="margin-top:30px;">
	<div class="col-md-6 col-xs-offset-3">
		<div class="panel panel-primary">
			<div class="panel-heading">Login</div>
			<div class="panel-body">
				<form method="post" action="">
				<input type="hidden" name="_token" value="{{ csrf_token() }}">
					<!-- row -->
					<div class="row" style="margin-top:5px;">
						<div class="col-md-2">Email</div>
						<div class="col-md-9">
							<input type="email" name="email" required class="form-control">
						</div>
					</div>
					<!-- end row -->
					<!-- row -->
					<div class="row" style="margin-top:5px;">
						<div class="col-md-2">Password</div>
						<div class="col-md-9">
							<input type="password" name="password" required class="form-control">
						</div>
					</div>
					<!-- end row -->
					<!-- row -->
					<div class="row" style="margin-top:5px;">
						<div class="col-md-2"></div>
						<div class="col-md-9">
							<input type="submit" class="btn btn-primary" value="Login">
							<input type="reset" class="btn btn-danger" value="Reset">
						</div>
					</div>
					<!-- end row -->
				</form>
			</div>
		</div>
		
		@if(isset($err) && $err == "invalid")
		
		<!-- alert -->
		<div class="alert alert-danger">Sai email hoặc password</div>
		<!-- end alert -->
		@endif
	</div>
</div>
</body>
</html>