<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use App\Models\Product;
use App\Models\Category;
use App\Models\Property;
use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\Builder;

class FrontProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Category $category)
    {
        //
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
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show(Category $subcategory,Product $product)
    {
        $surfaces = $product->properties->filter(function ($value, $key) {
            return $value->type->value == 'surface';
        });
        $dimensions = $product->properties->filter(function ($value, $key) {
            return $value->type->value == 'dimension';
        });
        $availables = $product->properties->filter(function ($value, $key) {
            return $value->type->value == 'available';
        });
        $usages = $product->properties->filter(function ($value, $key) {
            return $value->type->value == 'usage';
        });
        
        $contact = Contact::first();
        return view('front.product.show',compact('product','surfaces','dimensions','availables','usages','contact'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit(Product $product,Request $request)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Product $product)
    {
        //
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
