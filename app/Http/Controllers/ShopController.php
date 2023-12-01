<?php

namespace App\Http\Controllers;

use App\Models\Shop;
use App\Http\Requests\StoreShopRequest;
use App\Http\Requests\UpdateShopRequest;

class ShopController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

        //add auth
        $shop = Shop::first();
        return view('shop.index', compact('shop'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('shop.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreShopRequest $request)
    {

        //adding user id

        $val_data = $request->validated();

        Shop::create($val_data);

        return to_route('shops.index')->with('message', 'Shop created successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(Shop $shop)
    {
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Shop $shop)
    {
        return view('shop.edit', compact('shop'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateShopRequest $request, Shop $shop)
    {
        $val_data = $request->validated();

        $shop->update($val_data);

        return to_route('shops.index')->with('message', 'Shop updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Shop $shop)
    {
        $shop->delete();
        return to_route('shops.index')->with('message', 'Shop deleted successfully');
    }
}
