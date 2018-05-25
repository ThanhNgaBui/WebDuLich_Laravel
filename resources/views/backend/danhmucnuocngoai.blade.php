@extends('backend.layout')
@section('controller')
<div class="col-md-10 col-xs-offset-1">
	<h3 style="text-align:center; margin-bottom: 20px;">Danh mục nước ngoài</h3>
	<div style="margin-bottom: 5px;">
		<a href="{{ url('admin/danhmucnuocngoai/add') }}" class="btn btn-primary">Thêm</a>
	</div>
	<div class="panel panel-primary">
		<div class="panel-heading">Danh mục nước ngoài</div>
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
							<a href="{{ url('admin/danhmucnuocngoai/edit/'.$rows->id) }}">Edit</a>&nbsp;&nbsp;
							<a onclick="return window.confirm('Are you sure?');" href="{{ url('admin/danhmucnuocngoai/delete/'.$rows->id) }}">Delete</a>
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