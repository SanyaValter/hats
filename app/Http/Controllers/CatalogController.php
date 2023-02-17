<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CatalogController extends Controller
{
    public function catalog(request $r) {
        if (!empty($r->all())) {
            $table =DB::table('products');

            isset($r->category) ? $table->where('category',$r->category) : null;


            $products = $table->get();
        } else {
            $products = Product::orderBy('created_at')->get();
        }

        return view('catalog', compact('products'));
    }

    public function details($product_id)
    {
        $product = Product::find($product_id);
        return view('product', compact('product'));
    }
}
