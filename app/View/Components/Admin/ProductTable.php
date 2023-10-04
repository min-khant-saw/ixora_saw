<?php

namespace App\View\Components\Admin;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class ProductTable extends Component
{
    /**
     * Create a new component instance.
     */
    public $title;
    public $price;
    public $image;
    public $id;

    public function __construct($title,$price,$image,$id)
    {
        $this->title = $title;
        $this->price = $price;
        $this->image = $image;
        $this->id = $id;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.admin.product-table');
    }
}
