<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\CategoryRequest;
use App\Http\Resources\CategoryResource;
use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $categories = Category::with(['children', 'parent'])->get();
        return CategoryResource::collection($categories);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(CategoryRequest $request)
    {
        $category = Category::create($request->validated());
        return new CategoryResource($category->fresh(['parent', 'children']));
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $category = Category::with(['children', 'parent'])->findOrFail($id);
        return new CategoryResource($category);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(CategoryRequest $request, string $id)
    {
        $category = Category::findOrFail($id);
        $category->update($request->validated());
        return new CategoryResource($category->fresh(['parent', 'children']));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $category = Category::findOrFail($id);
        return $category->delete();
    }
}
