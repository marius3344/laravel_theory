<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::with(['brand'])->get();

        foreach ($products as $product) {
            echo 'Product name: '. $product->title . '<br>';
            echo 'Brand Name: '. $product->brand->brand_name . '<br>';
            echo '---------------------------------------------------<br>';
        }
    }


    public function store()
    {
        $category_id = [2, 3];
        $brand_id = 2;
        $product = Product::create([
            'title' => 'Coat',
            'price' => 99,
            'brand_id' => $brand_id
        ]);

        $product->categories()->sync($category_id);
    }

    public function showData()
    {
        $products = Product::with(['categories'])->get();

        echo '<table>';

        echo '<tr>
        <th>Product</th>
        <th>Categories</th>
        <th>Categories count</th>
        </tr>';

        foreach($products as $product){
            echo '<tr>
            <td>'.$product->title.'</td>
            <td>';
            foreach($product->categories as $category){
                echo $category->title;
            }
            echo '</td>
            <td>'.$product->categories->count().'</td>
            </tr>';
            
        }
        echo '</table>';

    }
    
    
}
