<?php

namespace App\Http\Controllers\Admin;

use App\Models\Example;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\SliderRequest;
use Illuminate\Support\Facades\File;
use App\Http\Requests\SliderUpdateRequest;

class ExampleController extends Controller
{
    public function __construct()
    {
        $this->middleware(['can:management.slider']);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $examples = Example::paginate();
        return view('admin.example.index', compact('examples'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $example = new Example($request->old());

        return view('admin.example.form', compact('example'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(SliderRequest $request)
    {
        $example = $request->validated();
        if ($request->hasFile('image')) {
            $destinationPath = 'images/examples/';
            $myimage = $request->image->getClientOriginalName();
            $request->image->move(public_path($destinationPath), $myimage);
            $example['image'] = $myimage;
        }
        Example::create($example);
        return redirect()->route('admin.example.index')->with('success', 'Example created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Example  $example
     * @return \Illuminate\Http\Response
     */
    public function show(Example $example)
    {
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Example  $example
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request, Example $example)
    {
        $example->fill($request->old());
        return view('admin.example.form', compact('example'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Example  $example
     * @return \Illuminate\Http\Response
     */
    public function update(SliderUpdateRequest $request, Example $example)
    {
        $example->fill($request->validated());
        if ($request->hasFile('image')) {
            $destinationPath = 'images/examples/';
            $myimage = $request->image->getClientOriginalName();
            $request->image->move(public_path($destinationPath), $myimage);
            $example['image'] = $myimage;
        }
        $example->save();

        return redirect()->route('admin.example.index')->with('success', 'Example updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Example  $example
     * @return \Illuminate\Http\Response
     */
    public function destroy(Example $example)
    {
        if(File::exists(public_path('images/examples/'. $example->image))){
            File::delete(public_path('images/examples/'. $example->image));
            }
        $example->delete();
        return redirect()->route('admin.example.index')->with('success', 'Example deleted successfully.');
    }
}
