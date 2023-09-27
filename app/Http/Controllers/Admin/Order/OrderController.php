<?php

namespace App\Http\Controllers\Admin\Order;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function __construct()
    {
    }

    public function index()
    {
        return view('admin.dashboard.order');
    }
}
