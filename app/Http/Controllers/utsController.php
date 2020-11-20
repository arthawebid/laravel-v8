<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class utsController extends Controller
{
    public function index(){
    	$produk = DB::table('produks')->get();
    	return view ('produk.vproduk', compact('produk'));
    }
}
