<?php

namespace App\Http\Controllers\Admin\AddProduct;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class AddProductController extends Controller
{
    public $path = 'images/';
    public function __construct()
    {
    }

    public function index()
    {
        return view('admin.dashboard.add-product');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'price' => 'required|numeric',
            'imageOne' => 'required|mimes:jpg,png,jpeg|max:10240',
            'imageTwo' => 'sometimes|mimes:jpg,png,jpeg|max:10240',
            'imageThree' => 'sometimes|mimes:jpg,png,jpeg|max:10240',
            'category' => 'required|string',
            'type' => 'sometimes|string',
        ]);

        $data = $request->all();

        $fileName =
            $this->path .
            \Str::random(10) .
            '.' .
            $data['imageOne']->extension();

        Storage::disk('public')->put(
            $fileName,
            file_get_contents($data['imageOne'])
        );

        $data['imageOne'] = $fileName;

        if ($data['imageTwo']) {
            $fileName =
                $this->path .
                \Str::random(10) .
                '.' .
                $data['imageTwo']->extension();

            Storage::disk('public')->put(
                $fileName,
                file_get_contents($data['imageTwo'])
            );

            $data['imageTwo'] = $fileName;
        }

        if ($data['imageThree']) {
            $fileName =
                $this->path .
                \Str::random(10) .
                '.' .
                $data['imageThree']->extension();

            Storage::disk('public')->put(
                $fileName,
                file_get_contents($data['imageThree'])
            );

            $data['imageThree'] = $fileName;
        }

        $category = Category::where('title', $data['category'])->first();

        $product = new Product($data);

        $product->category()->associate($category);

        $product->save();

        return back()->with('success', 'Successfully add new Product');
    }
}
