@extends('backend.layout')
@section('controller')
<div class="col-md-10 col-xs-offset-1">
	<h3 style="text-align:center; margin-bottom: 20px;">Danh mục trong nước</h3>
	<div style="margin-bottom: 5px;">
		<a href="{{ url('admin/danhmuctrongnuoc/add') }}" class="btn btn-primary">Thêm</a>
	</div>
	<div class="panel panel-primary">
		<div class="panel-heading">Danh mục trong nước</div>
		<div class="panel-body">
			<table class="table table-hover table-bordered">
				<tr>
					<th style="text-align: center;">Tên danh mục</th>
					<th style="width: 100px; text-align: center;">Manage</th>
				</tr>
				<?php
					foreach ($arr as $rows)
					{
				?>
					<tr>
						<td>{{ $rows->ten }}</td>
						<td style="text-align: center;">
							<a href="{{ url('admin/danhmuctrongnuoc/edit/'.$rows->pk_id) }}">Edit</a>&nbsp;&nbsp;
							<a onclick="return window.confirm('Are you sure?');" href="{{ url('admin/danhmuctrongnuoc/delete/'.$rows->pk_id) }}">Delete</a>
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