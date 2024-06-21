<?php

namespace App\Http\Controllers\Admin;

use App\Models\Admin\Category;
use App\Http\Requests\StoreCategoryRequest;
use App\Http\Requests\UpdateCategoryRequest;
use App\Http\Controllers\Controller;
use App\Http\Requests\CatRequest;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $categories = Category::all();
        return view('Admin.Catalogue.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categories = Category::all();
        // dd($categories->toArray());
        return view('Admin.Catalogue.create', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(CatRequest $request)
    {
        $request->input('parent_id') ?: 0;
        dd($request->all());
        Category::query()->create($request->all());
        return redirect()->route('cat.create')->with('message', 'Thêm danh mục thành công');
    }

    /**
     * Display the specified resource.
     */
    public function show(Category $category)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Category $category)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateCategoryRequest $request, Category $category)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Category $category)
    {
        //
    }
}
