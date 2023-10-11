<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $guarded = ['category'];

    public function category()
    {
        return $this->belongsTo(Category::class, 'category_id');
    }

    public function cartUser()
    {
        return $this->belongsToMany(User::class)->withPivot('id');
    }
}
