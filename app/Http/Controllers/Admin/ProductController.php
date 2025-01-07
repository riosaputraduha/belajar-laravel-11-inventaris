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
        $products = Product::with('category')->latest()->paginate(10);

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
        $validated = $request->validate([
            "name" => "required|min:3",
            "description" => "nullable",
            "price" => "required",
            "stock" => "required",
            "category_id" => "required",
            "sku" => "required",
        ], [
            "name.required" => "Nama produk perlu di isi!",
            "name.unique" => "Nama produk sudah ada.",
            "name.minlength" => "Minimal 3 karakter!",
            "price.required" => "Harga produk perlu di isi!",
            "stock.required" => "Stok produk perlu di isi!",
            "category_id.required" => "Kategori produk perlu di isi!",
            "sku.required" => "Kode produk perlu di isi!"
        ]);
        
        Product::create($validated);
        
        return redirect('/products')->with('success', 'Berhasil menambahkan produk.');
    }

    public function edit($id)
    {
        $categories = Category::all();
        $product = Product::findOrFail($id);

        return view('pages.products.edit', [
            "categories" => $categories,
            "product" => $product,
        ]);
    }

    public function update(Request $request, $id)
    {
        $validated = $request->validate([
            "name" => "required|min:3",
            "description" => "nullable",
            "price" => "required",
            "stock" => "required",
            "category_id" => "required",
            "sku" => "required",
        ], [
            "name.required" => "Nama produk perlu di isi!",
            "name.unique" => "Nama produk sudah ada.",
            "name.min" => "Minimal 3 karakter!",
            "price.required" => "Harga produk perlu di isi!",
            "stock.required" => "Stok produk perlu di isi!",
            "category_id.required" => "Kategori produk perlu di isi!",
            "sku.required" => "Kode produk perlu di isi!"
        ]);
        
        Product::where('id', $id)->update($validated);
        
        return redirect('/products')->with('success', 'Berhasil mengubah produk.');
    }

    public function delete($id)
    {
        $product = Product::where('id', $id);
        $product->delete();

        return redirect('/products')->with('success', 'Berhasil menghapus produk.');
    }
}
