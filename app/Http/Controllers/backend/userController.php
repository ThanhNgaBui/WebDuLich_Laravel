<?php

namespace App\Http\Controllers\backend;

//use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\listUser;
use DB;
use Request;
use Hash;

class userController extends Controller
{
    public function list_user(){
    	$data["arr"] = listUser::paginate(5);
    	return view("backend.list_user", $data);
    }
    public function delete_user($id){
    	//DB::delete("delete from users where id = $id");
    	$user = listUser::find($id);
    	$user->delete();
    	return redirect(url('admin/user'));
    }
    public function edit_user($id){
    	$data["arr"] = listUser::find($id);
    	return view("backend.add_edit_user",$data);
    }
    public function do_edit_user($id){
    	$name = Request::get("name");
    	$password = Request::get("password");

    	$user = listUser::find($id);
    	$user->name = $name;
    	//kiểm tra, nếu password không rỗng thì update password
    	if($password !=""){
    		$password = Hash::make($password);
    		$user->password = $password;
    	}
    	$user->save();
    	return redirect(url('admin/user'));
    }
    public function add_user(){
    	return view("backend.add_edit_user");
    }
    public function do_add_user(){
    	$name = Request::get("name");
    	$password = Request::get("password");
    	$email = Request::get("email");
    	$password = Hash::make($password);

    	$user = new listUser();
    	$user->name = $name;
    	$user->password = $password;
    	$user->email = $email;
    	$user->save();
    	return redirect(url('admin/user'));
    }
}
