<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
class MainController extends Controller
{
    public function main() {
        return view('main');
    }
    public function Contacts() {
        return view('Contacts');
    }

    public function search(Request $Request) {
        $s = $Request->s;
        $product = Product::where('name','like',"%{$s}%")->orderBy('name')->paginate(10);
        return view('main', compact('product'));
    }
}
