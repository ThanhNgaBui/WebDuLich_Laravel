<?php

namespace App\Http\Controllers\backend;

//use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\danhmuctrongnuocModel;
use DB;
use Request;

class danhmuctrongnuocController extends Controller
{
    //lay tat ca du lieu
    public function danhmuctrongnuoc(){
    	$danhmuctrongnuoc["arr"] = danhmuctrongnuocModel::paginate(5);
    	return view("backend.danhmuctrongnuoc", $danhmuctrongnuoc);
    }
    //edit danh mục trong nước
     public function edit_danhmuctrongnuoc($id){
    	$danhmuctrongnuoc["arr"] = DB::table("danh_muc_trong_nuoc")->where("pk_id","=",$id)->first();
    	return view("backend.add_edit_danhmuctrongnuoc",$danhmuctrongnuoc);
    }
    //do edit danh mục trong nước
     public function do_edit_danhmuctrongnuoc($id){
    	$ten = Request::get("ten");
    	DB::update("update danh_muc_trong_nuoc set ten = '$ten' where pk_id = $id");
    	return redirect(url('admin/danhmuctrongnuoc'));
    }
    public function add_danhmuctrongnuoc(){
    	return view("backend.add_edit_danhmuctrongnuoc");
    }
    public function do_add_danhmuctrongnuoc(){
    	$ten = Request::get("ten");
    	DB::insert("insert into danh_muc_trong_nuoc(ten) values('$ten')");
    	return redirect(url('admin/danhmuctrongnuoc'));
    }
    //Xóa danh mục trong nước
    public function delete_danhmuctrongnuoc($id){
    	//$ten = danhmuctrongnuocModel::find($pk_id);
    	//$ten->delete();
    	DB::delete("delete from danh_muc_trong_nuoc where pk_id = $id");
    	return redirect(url('admin/danhmuctrongnuoc'));
    }
}
