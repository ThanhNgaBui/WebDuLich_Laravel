<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
Route::get("password/{string}", function($string){
	if($string !="")
	{
		$password = Hash::make($string);
		echo "$password";
	}
});
//Truy vấn cơ sở dữ liệu
Route::get("csdl/get", function(){
	//Lấy tất cả các bản ghi
	$arr = DB::table("users")->get();
	foreach($arr as $rows){
		echo "<h1>".$rows->name."</h1>";
	}
});
//Hiển thị tất cả các bản ghi sử dụng model
Route::get("model/all",function(){
	$arr = App\user_model::all();
	foreach ($arr as $rows) {
		echo "<h1>".$rows->name."</h1>";
	}
});
//Lấy bản ghi đầu tiên có sử dụng where
Route::get("model/first", function(){
	$arr = App\user_model::where("email","=","thanhnga@gmail.com")->first();
	echo isset($arr->email)?$arr->email:"";
});
//insert bản ghi sử dụng model
Route::get("model/insert",function(){
	$vidu = new App\user_model();
	$vidu->name = "Nguyễn Văn A";
	$vidu->email = "nva@gmail.com";
	$vidu->password = Hash::make("123");
	//insert bản ghi
	$vidu->save();
	//di chuyển về trang chủ
	return redirect('');
});
//Muốn chạy qua cổng mặc định 8000, sử dụng câu lệnh::php artisan serve