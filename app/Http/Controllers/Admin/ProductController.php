<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProductController extends Controller
{
    public function index()
    {
        /**
         * cara 1
         * $products = DB::table('products')->get();
         * cara 2
         */
        $products = Product::with('category')->get();

        return view('pages.products.index', [
            "products" => $products,
        ]);
    }

    public function create()
    {
        $categories = Category::all();

        return view('pages.products.create', [
            "categories" => $categories,
        ]);
    }

    public function store(Request $request)
    {
        Product::create([
            "name" => $request->input('name'),
            "price" => $request->input('price'),
            "stock" => $request->input('stock'),
            "description" => $request->input('description'),
            "sku" => $request->input('sku'),
            "category_id" => $request->input('category_id'),
        ]);

        return redirect('/products');
    }
}
