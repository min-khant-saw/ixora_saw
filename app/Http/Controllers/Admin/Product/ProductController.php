<?php

namespace App\Http\Controllers\Admin\Product;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Fashion;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ProductController extends Controller
{
    public $path = 'images/';
    public function __construct()
    {
    }

    public function index($productType, $sort = null)
    {
        // dd($productType);

        if (is_null($sort)) {
            $products = Fashion::with('category')
                ->whereHas('category', function ($query) use ($productType) {
                    $query->where(
                        'title',
                        is_null($productType)
                            ? 'Fashion'
                            : ($productType === 'accessorie'
                                ? ucfirst($productType)
                                : ($productType === 'home-decor'
                                    ? 'Home Decor'
                                    : 'Education'))
                    );
                })
                ->latest()
                ->paginate(6);
        } else {
            $request = request();
            $path = $request->path(); // Get the path portion of the URL
            $productType = str_after($path, 'product/'); // Get the part after "product/"

            $products = Fashion::with('category')
                ->whereHas('category', function ($query) use ($productType) {
                    $query->where(
                        'title',
                        $productType === 'product/old'
                            ? 'Fashion'
                            : ($productType === 'accessorie/old'
                                ? 'Accessorie'
                                : ($productType === 'home-decor/old'
                                    ? 'Home Decor'
                                    : 'Education'))
                    );
                })
                ->oldest()
                ->paginate(6);
        }

        $fashionCount = Fashion::with('category')
            ->whereHas('category', function ($query) {
                $query->where('title', 'Fashion');
            })
            ->count();

        $accessorieCount = Fashion::with('category')
            ->whereHas('category', function ($query) {
                $query->where('title', 'Accessorie');
            })
            ->count();

        $homeDecorCount = Fashion::with('category')
            ->whereHas('category', function ($query) {
                $query->where('title', 'Home Decor');
            })
            ->count();

        $educationCount = Fashion::with('category')
            ->whereHas('category', function ($query) {
                $query->where('title', 'Education');
            })
            ->count();

        return view('admin.dashboard.product', [
            'products' => $products,
            'category' =>
                $productType === 'product/old' || is_null($productType)
                    ? 'Fashion'
                    : ($productType === 'accessorie/old' ||
                    $productType === 'accessorie'
                        ? 'Accessorie'
                        : ($productType === 'home-decor/old' ||
                        $productType === 'home-decor'
                            ? 'Home Decor'
                            : 'Education')),
            'fashionCount' => !$fashionCount ? 0 : $fashionCount,
            'accessorieCount' => !$accessorieCount ? 0 : $accessorieCount,
            'homeDecorCount' => !$homeDecorCount ? 0 : $homeDecorCount,
            'educationCount' => !$educationCount ? 0 : $educationCount,
        ]);
    }
    public function delete($id)
    {
        $deleteFashion = Fashion::find($id);

        Storage::disk('public')->delete($deleteFashion->image);

        $deleteFashion->delete();

        return redirect()->route('admin.product');
    }
    public function edit($id)
    {
        $product = Fashion::with('category')->find($id);
        return view('admin.dashboard.edit-product', [
            'product' => $product,
        ]);
    }
    public function update(Request $request, $id)
    {
        $request->validate([
            'title' => 'string|max:255',
            'description' => 'string',
            'price' => 'numeric',
            'image' => 'mimes:jpg,png,jpeg|max:10240',
            'category' => 'string',
        ]);

        $data = $request->all();

        $category = Category::where('title', $data['category'])->first();

        $product = Fashion::find($id);

        if (isset($data['image']) && asset($data['image'])) {
            Storage::disk('public')->delete($product->image);

            $fileName =
                $this->path .
                \Str::random(10) .
                '.' .
                $data['image']->extension();

            Storage::disk('public')->put(
                $fileName,
                file_get_contents($data['image'])
            );

            $data['image'] = $fileName;
        }

        $product->fill($data);

        $product->category()->associate($category);

        $product->save();

        return back()->with('success', 'Successfully edit Product');
    }
}
