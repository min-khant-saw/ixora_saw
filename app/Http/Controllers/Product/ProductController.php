<?php

namespace App\Http\Controllers\Product;

use App\Http\Controllers\Controller;
use App\Models\Product;
use App\Models\User;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function __construct()
    {
    }

    public function home()
    {
        /* $latestProduct = Product::with('category') */
        /*     ->latest() */
        /*     ->chunk(4) */
        /*     ->inRandomOrder(); */
    }

    public function fashion(Request $request, string $type = null)
    {
        $fashions = Product::with('category')
            ->whereHas('category', function ($query) use ($type) {
                if (!is_null($type)) {
                    $query->where('title', 'Fashion')->where('type', $type);
                }
                $query->where('title', 'Fashion');
            })
            ->paginate(20);
        return view('pages.fashion')->with('fashions', $fashions);
    }
    public function accessories(Request $request, string $type = null)
    {
        $accessories = Product::with('category')
            ->whereHas('category', function ($query) use ($type) {
                if (!is_null($type)) {
                    $query->where('title', 'Accessorie')->where('type', $type);
                }
                $query->where('title', 'Accessorie');
            })
            ->paginate(20);

        return view('pages.accessories')->with('accessories', $accessories);
    }
    public function homeDecor(Request $request)
    {
        $homeDecors = Product::with('category')
            ->whereHas('category', function ($query) {
                $query->where('title', 'Home Decor');
            })
            ->paginate(20);

        return view('pages.home-decor')->with('homeDecors', $homeDecors);
    }
    public function education()
    {
        $educations = Product::with('category')
            ->whereHas('category', function ($query) {
                $query->where('title', 'Education');
            })
            ->paginate(20);

        return view('pages.education')->with('educations', $educations);
    }
    public function sale()
    {
        return view('pages.sale');
    }

    public function singleProduct($id)
    {
        $product = Product::with('category')->find($id);

        return view('pages.product')->with('product', $product);
    }
}
