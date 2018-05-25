@extends('backend.layout')
@section('controller')
<div class="col-md-10 col-xs-offset-1">
	<div class="panel panel-primary">
		<div class="panel-heading">Thêm, chỉnh sửa danh mục nước ngoài</div>
		<div class="panel-body">
			<form method="post" action="">
				<input type="hidden" name="_token" value="{{ csrf_token() }}">
				<!-- row -->
				<div class="form-group">
					<div class="row">
						<div class="col-md-2">Tên danh mục</div>
						<div class="col-md-10">
							<input type="text" name="ten" value="<?php echo isset($arr->ten)?$arr->ten:""; ?>" class="form-control">
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