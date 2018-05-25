@extends('backend.layout')
@section('controller')
<div class="col-md-10 col-md-offset-1">
	<div class="panel panel-primary">
		<div class="panel-heading">Thêm, chỉnh sửa thông tin du lịch</div>
		<div class="panel-body">
			<form method="post" action="" enctype="multipart/form-data">
				<input type="hidden" name="_token" value="{{ csrf_token() }}">
				<!-- row -->
				<div class="form-group">
					<div class="row">
						<div class="col-md-2">Tên tiêu đề</div>
						<div class="col-md-10">
							<input type="text" name="ten" class="form-control" value="<?php echo isset($arr->ten)?$arr->ten:""; ?>">
						</div>
					</div>
				</div>
				<!-- end row -->

				<!-- row -->
				<div class="form-group">
					<div class="row">
						<div class="col-md-2">Nơi du lịch</div>
						<div class="col-md-10">
							<input type="radio" name="parent" value="Du lịch trong nước" id="du_lich_trong_nuoc"><label for="du_lich_trong_nuoc">&nbsp;Du lịch trong nước</label>
							<br>
							<input type="radio" name="parent" value="Du lịch ngoài nước" id="du_lich_ngoai_nuoc"><label for="du_lich_ngoai_nuoc">&nbsp;Du lịch ngoài nước</label>
						</div>
					</div>
				</div>
				<!-- end row -->
				
				<!-- row -->
				<div class="form-group">
					<div class="row">
						<div class="col-md-2">Danh mục du lịch trong nước</div>
						<div class="col-md-10">
							<select name="dia_diem_du_lich_trong_nuoc" class="form-control">
								<option></option>
								<?php
									// $danh_muc_trong_nuoc["arr"] = danhmuctrongnuocModel::all();
									$danh_muc_trong_nuoc = DB::select("select * from danh_muc_trong_nuoc");
									foreach($danh_muc_trong_nuoc as $rows)
									{
								?>
									<option {{ isset($arr->dia_diem_du_lich_trong_nuoc)&& $arr->dia_diem_du_lich_trong_nuoc==$rows->ten?"selected":"" }} value="">{{ $rows->ten }}</option>
								<?php } ?>
							</select>
						</div>
					</div>
				</div>
				<!-- end row -->

				<!-- row -->
				<div class="form-group">
					<div class="row">
						<div class="col-md-2">Danh mục du lịch nước ngoài</div>
						<div class="col-md-10">
							<select name="dia_diem_du_lich_nuoc_ngoai" class="form-control">
								<option></option>
								<?php
									// $danh_muc_nuoc_ngoai["arr"] = danhmucnuocngoaiModel::all();
									$danh_muc_trong_nuoc = DB::select("select * from danh_muc_nuoc_ngoai");
									 foreach($danh_muc_trong_nuoc as $rows)
									 {
									
								?>
									<option {{ isset($arr->dia_diem_du_lich_nuoc_ngoai)&& $arr->dia_diem_du_lich_nuoc_ngoai==$rows->ten?"selected":"" }} value="{{ isset($arr->dia_diem_du_lich_nuoc_ngoai)?$arr->dia_diem_du_lich_nuoc_ngoai:"" }}">{{ $rows->ten }}</option>
								<?php } ?>
							</select>
						</div>
					</div>
				</div>
				<!-- end row -->

				<!-- row -->
				<div class="form-group">
					<div class="row">
						<div class="col-md-2">Thời gian</div>
						<div class="col-md-10">
							<input type="text" name="thoi_gian" class="form-control" value="<?php echo isset($arr->thoi_gian)?$arr->thoi_gian:""; ?>">
						</div>
					</div>
				</div>
				<!-- end row -->

				<!-- row -->
				<div class="form-group">
					<div class="row">
						<div class="col-md-2">Lịch khởi hành</div>
						<div class="col-md-10">
							<input type="text" name="khoi_hanh" class="form-control" value="<?php echo isset($arr->khoi_hanh)?$arr->khoi_hanh:""; ?>">
						</div>
					</div>
				</div>
				<!-- end row -->

				<!-- row -->
				<div class="form-group">
					<div class="row">
						<div class="col-md-2">Ngày khởi hành</div>
						<div class="col-md-10">
							<input type="text" name="ngay_khoi_hanh" class="form-control" value="<?php echo isset($arr->ngay_khoi_hanh)?$arr->ngay_khoi_hanh:""; ?>">
						</div>
					</div>
				</div>
				<!-- end row -->

				<!-- row -->
				<div class="form-group">
					<div class="row">
						<div class="col-md-2">Giá cũ</div>
						<div class="col-md-10">
							<input type="text" name="gia_cu" class="form-control" value="<?php echo isset($arr->gia_cu)?$arr->gia_cu:""; ?>">
						</div>
					</div>
				</div>
				<!-- end row -->

				<!-- row -->
				<div class="form-group">
					<div class="row">
						<div class="col-md-2">Giá mới</div>
						<div class="col-md-10">
							<input type="text" name="gia_moi" class="form-control" value="<?php echo isset($arr->gia_moi)?$arr->gia_moi:""; ?>">
						</div>
					</div>
				</div>
				<!-- end row -->

				<!-- row -->
				<div class="form-group">
					<div class="row">
						<div class="col-md-2">Tìm kiếm giá</div>
						<div class="col-md-10">
							<input type="text" name="tim_kiem_gia" class="form-control" value="{{ <?php echo isset($arr->tim_kiem_gia)?$arr->tim_kiem_gia:""; ?>">
						</div>
					</div>
				</div>
				<!-- end row -->

				<!-- row -->
				<div class="form-group">
					<div class="row">
						<div class="col-md-2">Giảm giá</div>
						<div class="col-md-10">
							<input type="text" name="giam_gia" class="form-control" value="<?php echo isset($arr->giam_gia)?$arr->giam_gia:""; ?>">
						</div>
					</div>
				</div>
				<!-- end row -->

				<!-- row -->
				<div class="form-group">
					<div class="row">
						<div class="col-md-2">Số chỗ ngồi</div>
						<div class="col-md-10">
							<input type="text" name="so_cho_ngoi" class="form-control" value="<?php echo isset($arr->so_cho_ngoi)?$arr->so_cho_ngoi:""; ?>">
						</div>
					</div>
				</div>
				<!-- end row -->
				
				<!-- row -->
				<div class="form-group">
					<div class="row">
						<div class="col-md-2">Màu nền</div>
						<div class="col-md-10">
							<input type="text" name="mau_nen" class="form-control" value="<?php echo isset($arr->mau_nen)?$arr->mau_nen:""; ?>">
						</div>
					</div>
				</div>
				<!-- end row -->

				<!-- row -->
				<div class="form-group">
					<div class="row">
						<div class="col-md-2">Lịch trình</div>
						<div class="col-md-10">
							<textarea name="lich_trinh" class="form-control">
								{{ isset($arr->lich_trinh)?$arr->lich_trinh:"" }}
							</textarea>
							<script type="text/javascript">
								CKEDITOR.replace("lich_trinh")
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
						<div class="col-md-2">Tour hot nhất</div>
						<div class="col-md-10">
							<input type="checkbox" {{ isset($arr->hot)&&$arr->hot==1?"checked":"" }} name="hot" id="hot"> <label for="hot">Tour hot</label>
						</div>
					</div>
				</div>
				<!-- end row -->

				<!-- row -->
				<div class="form-group">
					<div class="row">
						<div class="col-md-2"></div>
						<div class="col-md-10">
							<input type="submit" value="Process" name="process" class="btn btn-primary">
							<input type="reset" value="Reset" class="btn btn-danger">
						</div>
					</div>
				</div>
				<!-- end row -->
			</form>
		</div>
	</div>
</div>
@endsection