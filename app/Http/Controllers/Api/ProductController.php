<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\ProductRequest;
use App\Http\Resources\ProductResource;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $products = Product::with('category')->whereNot('status', 'inactive')->get();
        return ProductResource::collection($products);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(ProductRequest $request)
    {
        $tracking_code = "PRD-" . mt_rand(1000000, 99999999);
        
        $product = Product::create([
            ...$request->validated(),
            'tracking_code' => $tracking_code
        ]);

        return new ProductResource($product->fresh(['category'])); 
    }

    /**
     * Display the specified resource.
     */
    public function show(string $tracking_code)
    {
        $product = Product::with('category')->where('tracking_code', $tracking_code)->firstOrFail();
        return new ProductResource($product);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(ProductRequest $request, string $tracking_code)
    {
        $product = Product::where('tracking_code', $tracking_code)->firstOrFail();
        $product->update($request->validated());

        return new ProductResource($product->fresh(['category']));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $tracking_code)
    {
        $product = Product::where('tracking_code', $tracking_code)->firstOrFail();
        return $product->delete();
    }
}