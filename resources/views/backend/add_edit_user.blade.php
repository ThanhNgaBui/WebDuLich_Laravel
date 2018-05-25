@extends('backend.layout')
@section('controller')
<div class="col-md-10 col-xs-offset-1">
	<div class="panel panel-primary">
		<div class="panel-heading">Add edit user</div>
		<div class="panel-body">
			<form method="post" action="">
				<input type="hidden" name="_token" value="{{ csrf_token() }}">
				<!-- row -->
				<div class="form-group">
					<div class="row">
						<div class="col-md-2">Name</div>
						<div class="col-md-10">
							<input type="text" name="name" value="<?php echo isset($arr->name)?$arr->name:""; ?>" class="form-control">
						</div>
					</div>
				</div>
				<!-- end row -->

				<!-- row -->
				<div class="form-group">
					<div class="row">
						<div class="col-md-2">Email</div>
						<div class="col-md-10">
							<input type="email" name="email" value="<?php echo isset($arr->email)?$arr->email:""; ?>" <?php echo isset($arr->email)?"disabled":"required";?> class="form-control">
						</div>
					</div>	
				</div>
				<!-- end row -->

				<!-- row -->
				<div class="form-group">
					<div class="row">
						<div class="col-md-2">Password</div>
						<div class="col-md-10">
							<input type="password" name="password" <?php echo isset($arr->email)?"placeholder='Nếu thay đổi mật khẩu, xin mời nhập mật khẩu mới'":"required";?> class="form-control">
						</div>
					</div>	
				</div>
				<!-- end row -->

				<!-- row -->
				<div class="form-group">
					<div class="row">
						<div class="col-md-2"></div>
						<div class="col-md-10">
							<input type="submit" name="" value="Process" class="btn btn-primary">
							<input type="reset" name="" value="Reset" class="btn btn-danger">
						</div>
					</div>	
				</div>
				<!-- end row -->
			</form>
		</div>
	</div>
</div>
@endsection