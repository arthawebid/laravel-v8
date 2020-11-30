<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class prak9Controller extends Controller
{
    //menampilkan jumlah data: count()
    	public function QB_tgs1()
    	{
    		
    		$produk = DB::table('produks')->count();
    		$prak7 = DB::table('prak7')->count();

    		return view ('prak91', compact('produk','prak7'));
    	}
    	public function QB_tgs2()
    	{
    		$id_kategori=3;
    		$pdata = DB::table('prak7')->where('id_kategori','id_kategori')->get();
    		$rek = DB::table('prak7')->where('id_kategori','id_kategori')->count();

    		return view ('prak92', compact('pdata','rek','id_kategori'));
    	}
    	public function QB_tgs3()
    	{
    		
    		$pdata = DB::table('prak7')
    		->join('kategori','prak7.id_kategori','=','kategori.id_kategori')
    		->get();
			$rek = DB::table('prak7')
    		->join('kategori','prak7.id_kategori','=','kategori.id_kategori')
    		->get();
    		

    		return view ('prak93', compact('pdata','rek')) ;
    	}
}
