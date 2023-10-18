<?php

namespace App\Http\Controllers\Admin\Product;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Product;
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
            $products = Product::with('category')
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

            $products = Product::with('category')
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

        $fashionCount = Product::with('category')
            ->whereHas('category', function ($query) {
                $query->where('title', 'Fashion');
            })
            ->count();

        $accessorieCount = Product::with('category')
            ->whereHas('category', function ($query) {
                $query->where('title', 'Accessorie');
            })
            ->count();

        $homeDecorCount = Product::with('category')
            ->whereHas('category', function ($query) {
                $query->where('title', 'Home Decor');
            })
            ->count();

        $educationCount = Product::with('category')
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
        $deleteFashion = Product::find($id);

        Storage::disk('public')->delete($deleteFashion->image);

        $deleteFashion->delete();

        return redirect()->route('admin.product');
    }
    public function edit($id)
    {
        $product = Product::with('category')->find($id);
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
            'imageOne' => 'sometimes|mimes:jpg,png,jpeg|max:10240',
            'imageTwo' => 'sometimes|mimes:jpg,png,jpeg|max:10240',
            'imageThree' => 'sometimes|mimes:jpg,png,jpeg|max:10240',
            'category' => 'string',
            'discount' => 'numeric|sometimes',
        ]);

        $data = $request->all();
        $category = Category::where('title', $data['category'])->first();
        $product = Product::find($id);

        // Check and process 'imageOne'
        if (
            $request->hasFile('imageOne') &&
            $request->file('imageOne')->isValid()
        ) {
            Storage::disk('public')->delete($product->imageOne);

            $fileName =
                $this->path .
                \Str::random(10) .
                '.' .
                $request->file('imageOne')->extension();

            Storage::disk('public')->put(
                $fileName,
                file_get_contents($request->file('imageOne'))
            );

            $data['imageOne'] = $fileName;
        }

        // Check and process 'imageTwo'
        if (
            $request->hasFile('imageTwo') &&
            $request->file('imageTwo')->isValid()
        ) {
            Storage::disk('public')->delete($product->imageTwo);

            $fileName =
                $this->path .
                \Str::random(10) .
                '.' .
                $request->file('imageTwo')->extension();

            Storage::disk('public')->put(
                $fileName,
                file_get_contents($request->file('imageTwo'))
            );

            $data['imageTwo'] = $fileName;
        }

        // Check and process 'imageThree'
        if (
            $request->hasFile('imageThree') &&
            $request->file('imageThree')->isValid()
        ) {
            Storage::disk('public')->delete($product->imageThree);

            $fileName =
                $this->path .
                \Str::random(10) .
                '.' .
                $request->file('imageThree')->extension();

            Storage::disk('public')->put(
                $fileName,
                file_get_contents($request->file('imageThree'))
            );

            $data['imageThree'] = $fileName;
        }

        $product->fill($data);
        $product->category()->associate($category);
        $product->save();

        return back()->with('success', 'Successfully edit Product');
    }
}
