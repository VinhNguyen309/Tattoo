<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\DB;

class MyController extends Controller
{
    public function postForm(Request $request)
    {
	if($nguoi=\DB::table('Nguoi')->where([['TenDangNhap', $request->uname], ['MatKhau', $request->psw]])->get())
		echo 'thanh cong';
	else echo 'that bai';
	// $nguoi=DB::table('Nguoi')->where([['TenDangNhap', '1000'], ['MatKhau', '1000']])->get();
    }
}
