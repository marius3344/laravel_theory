<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Brand;
use App\Models\Category;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [
      'title',
      'brand_id',
      'price'
    ];

    public function brand()
    {
      return $this->belongsTo(Brand::class);
    }

    public function categories()
    {
      return $this->belongsToMany(Category::class)->withTimestamps();
    }
}
