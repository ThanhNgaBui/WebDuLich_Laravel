@extends('backend.layout')
@section('controller')
<div class="col-md-12">
	<h3 style="text-align: center; margin-bottom: 20px;">Thông tin du lịch</h3>
	<div class="panel panel-primary">
		<div class="panel-heading">Thông tin du lịch</div>
		<div class="panel-body">
			<table class="table table-hover table-bordered">
				<tr>
					<th style="width: 100px; text-align: center;">Ảnh</th>
					<th style="text-align: center;">Nơi du lịch</th>
					<th style="width: 150px; text-align: center;">Tên</th>
					<th style="text-align: center;">Địa điểm du lịch trong nước</th>
					<th style="text-align: center;">Địa điểm du lịch ngoài nước</th>
					<th style="text-align: center;">Thời gian</th>
					<th style="text-align: center;">Khởi hành</th>
					<th style="text-align: center;">Ngày khởi hành</th>
					<th style="text-align: center;">Gía mới</th>
					<th style="text-align: center;">Giảm giá</th>
					<th style="text-align: center;">Tour hot nhất</th>
					<th style="width: 100px;"></th>
				</tr>
				<?php
					foreach($arr as $rows)
					{
				?>
				<tr>
					<td style="text-align: center;"></td>
					<td style="margin-left: 10px;">{{ $rows->noi_du_lich }}</td>
					<td style="margin-left: 5px;;">{{ $rows->ten }}</td>
					<td style="margin-left: 10px;;">{{ $rows->dia_diem_du_lich_trong_nuoc }}</td>
					<td style="margin-left: 10px;;">{{ $rows->dia_diem_du_lich_nuoc_ngoai }}</td>
					<td style="text-align: center;">{{ $rows->thoi_gian }}</td>
					<td style="text-align: center;">{{ $rows->khoi_hanh }}</td>
					<td style="text-align: center;">{{ $rows->ngay_khoi_hanh }}</td>
					<td style="text-align: center;">{{ $rows->gia_moi }}</td>
					<td style="text-align: center;">{{ $rows->giam_gia }}</td>
					<td style="text-align: center;"><?php if($rows->hot==1){ ?> 
						<span class="glyphicon glyphicon-check"></span> <?php } ?>
					</td>
					<td style="text-align: center;">
						<a href="{{ url('admin/thongtindulich/edit/'.$rows->id) }}">Edit</a>&nbsp;&nbsp;
						<a href="">Delete</a>
					</td>
				</tr>
				<?php } ?>
			</table>
			<style type="text/css">
				.pagination{padding: 0px; float: right;}
			</style>
			{{ $arr->render() }}
		</div>
	</div>
</div>
@endsection