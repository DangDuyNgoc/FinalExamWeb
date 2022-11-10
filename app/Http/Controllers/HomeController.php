<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    // public function index(){
    //     return view('home');
    // }

    public function showProducts()
    {
        $products = DB::table('sanphams')->get();
        //$products = DB::table('productsanphams')->paginate(5);
        return view('home', compact(var_name: 'products'));
    }
}