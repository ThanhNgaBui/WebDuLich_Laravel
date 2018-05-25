@extends('backend.layout')
@section('controller')
<div class="col-md-10 col-xs-offset-1">
	<h3 style="text-align:center; margin-bottom: 20px;">Danh sách quản trị viên</h3>
	<div style="margin-bottom: 5px;">
		<a href="{{ url('admin/user/add') }}" class="btn btn-primary">Add</a>
	</div>
	<div class="panel panel-primary">
		<div class="panel-heading">User</div>
		<div class="panel-body">
			<table class="table table-hover table-bordered">
				<tr>
					<th>Name</th>
					<th>Email</th>
					<th style="width: 100px;">Manage</th>
				</tr>
				<?php
					foreach ($arr as $rows)
					{
				?>
					<tr>
						<td>{{ $rows->name }}</td>
						<td>{{ $rows->email }}</td>
						<td style="text-align: center;">
							<a href="{{ url('admin/user/edit/'.$rows->id) }}">Edit</a>&nbsp;&nbsp;
							<a onclick="return window.confirm('Are you sure?');" href="{{ url('admin/user/delete/'.$rows->id) }}">Delete</a>
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