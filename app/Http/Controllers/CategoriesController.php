<?php

namespace App\Http\Controllers;

use App\Category;
use Illuminate\Http\Request;

class CategoriesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categories = Category::paginate(16);
        return  view('admin.categories.categories')->with(['categories' => $categories]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Category  $categories
     * @return \Illuminate\Http\Response
     */
    public function show(Category $categories)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Category  $categories
     * @return \Illuminate\Http\Response
     */
    public function edit(Category $categories)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Category  $categories
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Category $categories)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Category  $categories
     * @return \Illuminate\Http\Response
     */
    public function destroy(Category $categories)
    {
        //
    }
}
