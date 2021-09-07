<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index(){
        return "Selamat Datang";
    }
    public function about(){
        return "NIM : 2031710048<BR> NAMA : CANDRA APRIDITA PUTRI";
    }
    public function articles($id){
        return "Halaman artikel dengan ID ".$id;
    }
}
