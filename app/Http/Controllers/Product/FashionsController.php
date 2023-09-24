<?php

namespace App\Http\Controllers\Product;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class FashionsController extends Controller
{
    public function __construct()
    {
    }
    public function index()
    {
        return view('pages.fashion');
    }
}
