<?php

namespace App\Http\Controllers\Product;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function __construct()
    {
    }

    public function fashion(Request $request)
    {
        return view("pages.fashion");
    }
    public function accessories(Request $request)
    {
        return view('pages.accessories');
    }
    public function homeDecor(Request $request)
    {
        return view('pages.home-decor');
    }
    public function education()
    {
        return view('pages.education');
    }
    public function sale()
    {
        return view('pages.sale');
    }
}
