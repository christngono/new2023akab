<?php

namespace App\Http\Controllers\Admin;

use App\Models\Shop;
use App\Models\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\ShopFormRequest;

class ShopController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('admin.shops.index', [
            'shops'=>Shop::orderBy('created_at', 'desc')->paginate(15)
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.shops.form', [
            'shop'=>new Shop()
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(ShopFormRequest $request)
    {
        // Storage::disk('local')->put('imagearticle', $request->image);

        Shop::create($request->validated());
        return to_route('admin.shop.index')->with('success', 'la boutique a été crée');
    }

    /**
     * Display the specified resource.
     */

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Shop $shop)
    {
        dd(Category::pluck('name', 'id'));
        return view('admin.shops.form', [
            'shop'=> $shop
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(ShopFormRequest $request, Shop $shop)
    {
        $shop->update($request->validated());
        return to_route('admin.shop.index')->with('success', 'la boutique a été bien modifié');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Shop $shop)
    {
        $shop->delete();
        return to_route('admin.shop.index')->with('success', 'la boutique a été bien supprimé');
    }

}
