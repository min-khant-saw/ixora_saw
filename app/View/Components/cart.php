<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class cart extends Component
{
    public $image;
    public $title;
    public $price;
    public $category;
    public $id;
    public $discount;
    public $discountPrice;
    public $totalProduct;
    public $productId;
    public $ids;

    /**
     * Create a new component instance.
     */
    
    public function __construct($image, $title, $price, $category, $id, $discount = 0, $discountPrice = 0, $totalProduct = 1,$productId,$ids)
    {
        $this->image = $image;
        $this->title = $title;
        $this->price = $price;
        $this->category = $category;
        $this->id = $id;
        $this->discount = $discount;
        $this->discountPrice = $discountPrice;
        $this->totalProduct = $totalProduct;
        $this->productId = $productId;
        $this->ids = $ids;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.cart');
    }
}
