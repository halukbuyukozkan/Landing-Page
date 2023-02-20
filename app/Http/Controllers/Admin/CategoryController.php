<?php

namespace App\Http\Controllers\Admin;

use App\Models\Category;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use App\Http\Requests\CategoryRequest;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categories = Category::paginate();

        return view('admin.category.index',compact('categories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $category = new Category($request->old());
        $categories = Category::all();

        return view('admin.category.form',compact('category','categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CategoryRequest $request)
    {
        $validated = $request->validated();
        if ($request->hasFile('image')) {
            $destinationPath = 'images/categories/';
            $myimage = $request->image->getClientOriginalName();
            $request->image->move(public_path($destinationPath), $myimage);
            $validated['image'] = $myimage;
        }
        
        $category = Category::create($validated);

        return redirect()->route('admin.category.index')->with('success', __('Category created successfully'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function show(Category $category)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function edit(Category $category,Request $request)
    {
        $category->fill($request->old());
        $categories = Category::all();
        return view('admin.category.form', compact('category','categories'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function update(CategoryRequest $request, Category $category)
    {
        $validated = $request->validated();

        if ($request->hasFile('image')) {
            $destinationPath = 'images/categories/';
            $myimage = $request->image->getClientOriginalName();
            $request->image->move(public_path($destinationPath), $myimage);
            $validated['image'] = $myimage;
        }

        $category->update($validated);

        return redirect()->route('admin.category.index')->with('success', 'Category updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function destroy(Category $category)
    {
        if(File::exists(public_path('images/categories/'. $category->image))){
            File::delete(public_path('images/categories/'. $category->image));
            }
        $category->delete();

        return redirect()->route('admin.category.index')->with('success', __('Category deleted successfully'));
    }
}
