<?php

namespace App\Http\Controllers\backend;

//use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;
use App\thongtindulichModel;
use Request;

class c_thongtindulichController extends Controller
{
    //Lấy tất cả các bản ghi thông tin du lịch
    public function list_thongtindulich(){
    	$thongtindulich["arr"] = thongtindulichModel::paginate(5);
    	return view("backend.thongtindulich", $thongtindulich);
    }
    //edit thông tin du lịch
    public function edit_thongtindulich($id){
    	$thongtindulich["arr"] = DB::table("thong_tin_du_lich")->where("id","=",$id)->first();
    	return view("backend.add_edit_thongtindulich", $thongtindulich);
    }
    // public function do_add_thongtindulich($id){
    // 	$noi_du_lich = Request::get("noi_du_lich");
    // 	$hot = Request::get("hot")=="on"?1:0;
    // 	$ten = Request::get("ten");
    // 	$dia_diem_du_lich_trong_nuoc = Request::get("dia_diem_du_lich_trong_nuoc");
    // 	$dia_diem_du_lich_nuoc_ngoai = Request::get("dia_diem_du_lich_nuoc_ngoai");
    // 	$thoi_gian = Request::get("thoi_gian");
    // 	$khoi_hanh = Request::get("khoi_hanh");
    // 	$ngay_khoi_hanh = Request::get("ngay_khoi_hanh");
    // 	$gia_cu = Request::get("gia_cu");
    // 	$gia_moi = Request::get("gia_moi");
    // 	$tim_kiem_gia = Request::get("tim_kiem_gia");
    // 	$giam_gia = Request::get("giam_gia");
    // 	$so_cho_ngoi = Request::get("so_cho_ngoi");
    // 	$lich_trinh = Request::get("lich_trinh");
    // 	$mau_nen = Request::get("mau_nen");

    // 	$thongtindulich = thongtindulichModel::find($id);

    // 	$thongtindulich->$noi_du_lich = $noi_du_lich;
    // 	$thongtindulich->$hot =  $hot;
    // 	$thongtindulich->$ten =  $ten;
    // 	$thongtindulich->$dia_diem_du_lich_trong_nuoc =  $dia_diem_du_lich_trong_nuoc;
    // 	$thongtindulich->$dia_diem_du_lich_nuoc_ngoai = $dia_diem_du_lich_nuoc_ngoai;
    // 	$thongtindulich->$thoi_gian = $thoi_gian;
    // 	$thongtindulich->$khoi_hanh = $khoi_hanh;
    // 	$thongtindulich->$ngay_khoi_hanh = $ngay_khoi_hanh;
    // 	$thongtindulich->$gia_cu = $gia_cu;
    // 	$thongtindulich->$gia_moi = $gia_moi;
    // 	$thongtindulich->$tim_kiem_gia = $tim_kiem_gia;
    // 	$thongtindulich->$giam_gia =  $giam_gia;
    // 	$thongtindulich->$so_cho_ngoi =  $so_cho_ngoi;
    // 	$thongtindulich->$lich_trinh =  $lich_trinh;
    // 	$thongtindulich->$mau_nen =  $mau_nen;

    // 	$thongtindulich->save();
    // 	return redirect(url('admin/thongtindulich'));
    // }
}
