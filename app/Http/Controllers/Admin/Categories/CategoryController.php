<?php

namespace App\Http\Controllers\Admin\Categories;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\TitleCategory;
use Illuminate\Support\Facades\Storage;

class CategoryController extends Controller
{
    public $path = 'CategoryTitleImages/';
    public function index()
    {
    }

    public function adminIndex()
    {
        return view('admin.dashboard.category');
    }

    public function create(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'image' => 'required|mimes:jpg,png,jpeg|max:10240',
        ]);

        $findOldImage = TitleCategory::where('title', $request->title)->get();

        if ($findOldImage->count()) {
            Storage::disk('public')->delete($findOldImage[0]->image);
            $findOldImage->each->delete();
        }

        $fileName =
            $this->path .
            \Str::random(10) .
            '.' .
            $request['image']->extension();

        Storage::disk('public')->put(
            $fileName,
            file_get_contents($request['image'])
        );

        TitleCategory::create([
            'title' => $request->title,
            'image' => $fileName,
        ]);

        return back()->with('success', 'Successfully add new Category');
    }
}
