<?php

namespace App\Http\Controllers\Home;

use App\Http\Controllers\Controller;
use App\Models\Product;
use App\Models\TitleCategory;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function __construct()
    {
    }

    public function index()
    {
        $latestProducts = Product::with('category')
            ->latest()
            ->take(2)
            ->get();

        $discountProducts = Product::with('category')
            ->where('discount', '>', 0)
            ->latest()
            ->take(2)
            ->get();

        $category = TitleCategory::all();

        return view('home', [
            'latest' => $latestProducts,
            'discount' => $discountProducts,
            'category' => $category,
        ]);
    }
}
