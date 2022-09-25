<?php

namespace App\Http\Controllers\Admin;

use App\Models\Product;
use App\Models\Category;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Requests\ProductRequest;
use App\Models\Property;

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
        if ($request->hasFile('image')) {
            $destination = 'public/products';
            $image = $request->file('image');
            $imageName = Str::random(32) . '.' . $image->getClientOriginalExtension();
            $path = $request->file('image')->storeAs($destination, $imageName);
            $data['image'] = $imageName;
        }
        $product = Product::create($data);

        $product->properties()->sync($data['properties'] ?? []);

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

        if ($request->hasFile('image')) {
            $destination = 'public/products';
            $image = $request->file('image');
            $imageName = Str::random(32) . '.' . $image->getClientOriginalExtension();
            $path = $request->file('image')->storeAs($destination, $imageName);
            $data['image'] = $imageName;
        }

        $product->update($data);
        $product->properties()->sync($data['properties'] ?? []);

        return redirect()->route('admin.product.index')->with('success', 'Role updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product $product)
    {
        //
    }
}
