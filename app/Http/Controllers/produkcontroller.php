<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class produkcontroller extends Controller
{
    //property untuk index
    public function index()
    {
    	$isi = "ini merupakan isi index dalam controller produkController";
    	return $isi;
    }
}
