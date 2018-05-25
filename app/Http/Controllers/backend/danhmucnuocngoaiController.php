<?php

namespace App\Http\Controllers\backend;

//use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\danhmucnuocngoaiModel;
use Request;

class danhmucnuocngoaiController extends Controller
{
	//Lấy tất cả các bản ghi
    public function danhmucnuocngoai(){
    	$danhmucnuocngoai["arr"] = danhmucnuocngoaiModel::paginate(5);
    	return view("backend.danhmucnuocngoai", $danhmucnuocngoai);
    }
    //Sửa
    public function edit_danhmucnuocngoai($id){
    	$danhmucnuocngoai["arr"] = danhmucnuocngoaiModel::find($id);
    	return view("backend.add_edit_danhmucnuocngoai", $danhmucnuocngoai);
    }
    public function do_edit_danhmucnuocngoai($id){
    	$ten = Request::get("ten");
    	$danhmucnuocngoai = danhmucnuocngoaiModel::find($id);
    	$danhmucnuocngoai->ten = $ten;
    	$danhmucnuocngoai->save();
    	return redirect(url('admin/danhmucnuocngoai'));
    }
    //Thêm
    public function add_danhmucnuocngoai(){
    	return view("backend.add_edit_danhmucnuocngoai");
    }
    public function do_add_danhmucnuocngoai(){
    	$ten = Request::get("ten");
    	$danhmucnuocngoai = new danhmucnuocngoaiModel();
    	$danhmucnuocngoai->ten = $ten;
    	$danhmucnuocngoai->save();
    	return redirect(url('admin/danhmucnuocngoai'));
    }
    //Xóa
    public function delete_danhmucnuocngoai($id){
    	$danhmucnuocngoai = danhmucnuocngoaiModel::find($id);
    	$danhmucnuocngoai->delete();
    	return redirect(url('admin/danhmucnuocngoai'));
    }
}
