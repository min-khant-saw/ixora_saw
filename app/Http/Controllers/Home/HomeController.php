<?php

namespace App\Http\Controllers\Home;

use App\Http\Controllers\Controller;
use App\Models\Fashion;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function __construct()
    {
    }

    public function index()
    {
        $latestProducts = Fashion::with('category')
            ->latest()
            ->take(4)
            ->get();

        return view('home', [
            'latest' => $latestProducts,
        ]);
    }
}
