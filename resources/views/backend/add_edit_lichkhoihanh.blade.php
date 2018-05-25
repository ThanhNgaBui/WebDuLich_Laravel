@extends('backend.layout')
@section('controller')
<div class="col-md-10 col-xs-offset-1">
	<div class="panel panel-primary">
		<div class="panel-heading">Thêm, chỉnh sửa lịch khởi hành</div>
		<div class="panel-body">
			<form method="post" action="">
				<input type="hidden" name="_token" value="{{ csrf_token() }}">
				<!-- row -->
				<div class="form-group">
					<div class="row">
						<div class="col-md-2">Tên tiêu đề</div>
						<div class="col-md-10">
							<input type="text" name="ten" value="<?php echo isset($arr->ten)?$arr->ten:""; ?>" class="form-control">
						</div>
					</div>
				</div>
				<!-- end row -->
				
				<div class="form-group">
					<div class="row">
						<div class="col-md-2">Giới thiệu</div>
						<div class="col-md-10">
							<textarea name="gioi_thieu" class="form-control">
								{{ isset($arr->gioi_thieu)?$arr->gioi_thieu:"" }}
							</textarea>
							<script type="text/javascript">
								CKEDITOR.replace("gioi_thieu")
							</script>
						</div>
					</div>
				</div>
				<!-- end row -->

				<div class="form-group">
					<div class="row">
						<div class="col-md-2">Chi tiết</div>
						<div class="col-md-10">
							<textarea name="chi_tiet" class="form-control">
								{{ isset($arr->chi_tiet)?$arr->chi_tiet:"" }}
							</textarea>
							<script type="text/javascript">
								CKEDITOR.replace("chi_tiet")
							</script>
						</div>
					</div>
				</div>
				<!-- end row -->

				<!-- row -->
				<div class="form-group">
					<div class="row">
						<div class="col-md-2">Ảnh</div>
						<div class="col-md-10">
							<input type="file" name="anh">
						</div>
					</div>
				</div>
				<!-- end row -->

				<!-- row -->
				<div class="form-group">
					<div class="row">
						<div class="col-md-2">Tin nổi bật</div>
						<div class="col-md-10">
							<input type="checkbox" {{ isset($arr->hot)&&$arr->hot==1?"checked":"" }} name="hot" id="hot"> <label for="hot">Tin nổi bật</label>
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