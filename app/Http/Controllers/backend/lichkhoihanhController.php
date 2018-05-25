<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\lichkhoihanhModel;
use Request;
use DB;

class lichkhoihanhController extends Controller
{
    public function lichkhoihanh(){
    	$lichkhoihanh["arr"] = lichkhoihanhModel::paginate(5);
    	return view("backend.lichkhoihanh", $lichkhoihanh);
    }
     public function edit_lichkhoihanh($id){
    	$lichkhoihanh["arr"] = lichkhoihanhModel::find($id);
    	return view("backend.add_edit_lichkhoihanh", $lichkhoihanh);
    }
    public function do_edit_lichkhoihanh($id){
    	$ten = Request::get("ten");
    	$gioi_thieu = Request::get("gioi_thieu");
    	$chi_tiet = Request::get("chi_tiet");
    	$hot = Request::get("hot")=="on"?1:0;

    	// $lichkhoihanh = lichkhoihanhModel::find($id);

    	// $lichkhoihanh->ten = $ten;
    	// $lichkhoihanh->gioi_thieu = $gioi_thieu;
    	// $lichkhoihanh->chi_tiet = $chi_tiet;
    	// $lichkhoihanh->hot = $hot;

    	// $lichkhoihanh->save();
    	DB::update("update lich_khoi_hanh set ten='$ten', gioi_thieu='$gioi_thieu', chi_tiet='$chi_tiet', hot='$hot' where id = $id");
    	//Kiểm tra nếu có file upload thì thực hiện upload
    	\Log::info($ten);
    	if(Request::hasFile("anh")){
    		\Log::info(1111);
    		$anh = Request::file("anh")->getClientOriginalName();
    		Request::file("anh")->move("upload/lichkhoihanh",$anh);
    	    DB::update("update lich_khoi_hanh set anh = '$anh' where id= $id");
    		//$anh = Request::get("anh");
    		//$lichkhoihanh->anh = $anh;
    		//$lichkhoihanh->save();
    	}
    	return redirect(url('admin/lichkhoihanh'));
    }
}
