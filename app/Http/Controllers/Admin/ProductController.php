<?php

namespace App\Http\Controllers\Admin;

use App\Models\Shop;
use App\Models\Product;
use App\Models\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\ProductFormRequest;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('admin.product.index', [
            'products'=>Product::orderBy('created_at', 'desc')->paginate(15)
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {

        return view('admin.product.form', [
            'product'=>new Product(),
            'category'=>Category::pluck('category', 'id'),
            'shop'=>Shop::pluck('name', 'id')
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(ProductFormRequest $request)
    {
        // Storage::disk('local')->put('imagearticle', $request->image);
        $product = Product::create($request->validated());
        $product->category()->sync($request->validated('category'));
        $product->shop()->sync($request->validated('shop'));
        return to_route('admin.product.index')->with('success', 'le produit a été crée');
    }

    /**
     * Display the specified resource.
     */

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Product $product)
    {
        return view('admin.product.form', [
            'product'=> $product,
            'category'=>Category::pluck('category', 'id'),
            'shop'=>Shop::pluck('name', 'id')
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(ProductFormRequest $request, Product $product)
    {
        $product->categories()->sync($request->validated('category'));
        $product->shops()->sync($request->validated('shop'));
        $product->update($request->validated());
        return to_route('admin.product.index')->with('success', 'le produit a été bien modifié');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Product $product)
    {
        $product->delete();
        return to_route('admin.product.index')->with('success', 'le produit a été bien supprimé');
    }

}
