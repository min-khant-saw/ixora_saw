<?php

namespace App\Http\Controllers\Product;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function __construct()
    {
    }

    public function fashion(Request $request)
    {
        $users = User::paginate(10);
        return view("pages.fashion")->with('users', $users);
    }
    public function accessories(Request $request)
    {
        $users = User::paginate(10);

        return view('pages.accessories')->with('users', $users);
    }
    public function homeDecor(Request $request)
    {
        $users = User::paginate(10);

        return view('pages.home-decor')->with('users', $users);
    }
    public function education()
    {
        $users = User::paginate(10);

        return view('pages.education')->with('users', $users);
    }
    public function sale()
    {
        return view('pages.sale');
    }
}
