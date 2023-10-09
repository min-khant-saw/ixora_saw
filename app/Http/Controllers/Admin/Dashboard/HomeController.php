<?php

namespace App\Http\Controllers\Admin\Dashboard;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function __construct()
    {
    }
    public function index(Request $request)
    {
        return view('admin.dashboard.home');
    }
}
