<?php

// ===============================

// 			phần backend

//các đường dẫn liên quan đến phần quản trị sẽ có tag chung là admin-> sử dụng tag chung này để nhận biết các trang backend
//Sử dụng middleware có tên "auth" để yêu cầu đăng nhập khi vào đường dẫn có tag chung là admin
//Để yêu cầu đăng nhập khi vào 1 group tag, phải gọi hàm Route::auth()
// Route::auth();
Route::group(array("prefix"=>"admin","middleware"=>"checkLogin"),function(){
	//logout
	Route::get("logout",function(){
		Auth::logout();
		return redirect("login");
	});
	//Để tạo controller, thưc hiện: open cmd, type: php artisan make:controller backend\userController
	Route::get("user","backend\userController@list_user");

	Route::get("user/delete/{id}","backend\userController@delete_user");

	Route::get("user/edit/{id}","backend\userController@edit_user");
	Route::post("user/edit/{id}","backend\userController@do_edit_user");

	Route::get("user/add","backend\userController@add_user");
	Route::post("user/add","backend\userController@do_add_user");

	//danh mục trong nước
	Route::get("danhmuctrongnuoc","backend\danhmuctrongnuocController@danhmuctrongnuoc");

	Route::get("danhmuctrongnuoc/edit/{id}","backend\danhmuctrongnuocController@edit_danhmuctrongnuoc");
	Route::post("danhmuctrongnuoc/edit/{id}","backend\danhmuctrongnuocController@do_edit_danhmuctrongnuoc");

	Route::get("danhmuctrongnuoc/add","backend\danhmuctrongnuocController@add_danhmuctrongnuoc");
	Route::post("danhmuctrongnuoc/add","backend\danhmuctrongnuocController@do_add_danhmuctrongnuoc");

	Route::get("danhmuctrongnuoc/delete/{id}","backend\danhmuctrongnuocController@delete_danhmuctrongnuoc");

	//danh mục nước ngoài
	Route::get("danhmucnuocngoai","backend\danhmucnuocngoaiController@danhmucnuocngoai");

	Route::get("danhmucnuocngoai/edit/{id}","backend\danhmucnuocngoaiController@edit_danhmucnuocngoai");
	Route::post("danhmucnuocngoai/edit/{id}","backend\danhmucnuocngoaiController@do_edit_danhmucnuocngoai");

	Route::get("danhmucnuocngoai/add","backend\danhmucnuocngoaiController@add_danhmucnuocngoai");
	Route::post("danhmucnuocngoai/add","backend\danhmucnuocngoaiController@do_add_danhmucnuocngoai");

	Route::get("danhmucnuocngoai/delete/{id}","backend\danhmucnuocngoaiController@delete_danhmucnuocngoai");

	//Thông tin du lịch
	Route::get("thongtindulich","backend\c_thongtindulichController@list_thongtindulich");

	Route::get("thongtindulich/edit/{id}","backend\c_thongtindulichController@edit_thongtindulich");
	Route::post("thongtindulich/edit/{id}","backend\c_thongtindulichController@do_add_thongtindulich");

	Route::get("thongtindulich/add","backend\c_thongtindulichController@add_thong_tin_du_lich");
	Route::post("thongtindulich/add","backend\c_thongtindulichController@do_add_thongtindulich");

	Route::get("thongtindulich/delete/{id}","backend\c_thongtindulichController@delete_thongtindulich");

	//lịch khởi hành
	Route::get("lichkhoihanh","backend\lichkhoihanhController@lichkhoihanh");

	Route::get("lichkhoihanh/edit/{id}","backend\lichkhoihanhController@edit_lichkhoihanh");
	Route::post("lichkhoihanh/edit/{id}","backend\lichkhoihanhController@do_edit_lichkhoihanh");

	Route::get("lichkhoihanh/add","backend\lichkhoihanhController@add_lichkhoihanh");
	Route::post("lichkhoihanh/add","backend\lichkhoihanhController@do_add_lichkhoihanh");

	Route::get("lichkhoihanh/delete/{id}","backend\lichkhoihanhController@delete_lichkhoihanh");
});
//login
Route::get("login",function(){
	if(isset(Auth::user()->email))
		return redirect(url('admin/user'));
	else
		return view("backend.login");
});
//post login
Route::post("login", function(){
	$email = Request::get("email");
	$password = Request::get("password");
	//Kiểm tra user login bằng hàm attempt trong đối tượng Auth, nếu kết quả trả về 1 có nghĩa là đúng email và password, ngược lại là sai
	if(Auth::attempt(array("email"=>$email, "password"=>$password)) == true){
		return redirect(url('admin/user'));
	}
	else{
		$thongbao["err"]="invalid";
		return view("backend.login","$thongbao");
	}
});
// ===============================

Route::get('/', function () {
    return view('welcome');
});
