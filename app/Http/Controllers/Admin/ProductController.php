<?php

namespace App\Http\Controllers\Admin;

use App\Models\Image;
use App\Models\Product;
use App\Models\Category;
use App\Models\Property;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use App\Http\Requests\ProductRequest;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = Product::paginate();

        return view('admin.product.index',compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $product = new Product($request->old());

        $categories = Category::all();

        $properties = Property::all();

        return view('admin.product.form',compact('categories','product','properties'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ProductRequest $request)
    {
        $data = $request->validated();
        $product = Product::create($data);

        $product->properties()->sync($data['properties'] ?? []);

        foreach ($request->file('images') as $imagefile) {
            $image = new Image;
            $destinationPath = 'images/products/';
            $image->url = $destinationPath;
            $image->product_id = $product->id;
            $image->name = $imagefile->getClientOriginalName();
            $imagefile->move(public_path($destinationPath), $image->name);
            $image->save();
          }

        return redirect()->route('admin.product.index')->with('success', 'Product created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show(Product $product)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit(Product $product,Request $request)
    {
        $product->fill($request->old());
        $categories = Category::all();
        $properties = Property::all();

        return view('admin.product.form',compact('product','categories','properties'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(ProductRequest $request, Product $product)
    {
        $data = $request->validated();
        $product->update($data);
        $product->properties()->sync($data['properties'] ?? []);

        foreach ($request->file('images') as $imagefile) {
            $image = new Image;
            $path = $imagefile->store('/images/resource', ['disk' =>   'my_files']);
            $image->url = $path;
            $image->product_id = $product->id;
            $image->save();
          }

        return redirect()->route('admin.product.index')->with('success', 'Product updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product $product)
    {
        foreach($product->images as $image)
        {
            if(File::exists(public_path('images/products/'. $image->name))){
            File::delete(public_path('images/products/'. $image->name));
            }
            $image->delete();
        }

        
        foreach($product->properties as $property) {
            $product->properties()->detach($property->id);
        }

        $product->delete();

        return redirect()->route('admin.product.index');
    }
}
