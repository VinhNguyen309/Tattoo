<?php
use Illuminate\Http\Request;
/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('model/nguoi/save', function(){
	$nguoi = new App\Nguoi();
	$nguoi->MaNguoi;
	$nguoi->HoTen;
	$nguoi->GioiTinh;
	$nguoi->NgaySinh ;
	$nguoi->Email;
	$nguoi->DienThoai;
	$nguoi->DiaChi;
	$nguoi->loai;
	$nguoi->TenDangNhap;
	$nguoi->MatKhau;
	$nguoi->save();
	echo "Da thuc hien save";
});
Route::post('model/nguoi/all','MyController@postForm');

