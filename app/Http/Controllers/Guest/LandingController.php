<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class LandingController extends Controller
{
    public function __construct()
    {
    }

    public function index(Request $request)
    {
        return view('guest.landing');
    }
}
