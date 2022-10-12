<?php

namespace App\Http\Controllers\Admin;

use App\Models\Slider;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\SliderRequest;
use Illuminate\Support\Facades\File;
use App\Http\Requests\SliderUpdateRequest;

class SliderController extends Controller
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
        $sliders = Slider::paginate();
        return view('admin.slider.index', compact('sliders'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $slider = new Slider($request->old());

        return view('admin.slider.form', compact('slider'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(SliderRequest $request)
    {
        $slider = $request->validated();
        if ($request->hasFile('image')) {
            $destination = 'public/sliders';
            $image = $request->file('image');
            $imageName = Str::random(32) . '.' . $image->getClientOriginalExtension();
            $path = $request->file('image')->storeAs($destination, $imageName);
            $slider['image'] = $imageName;
        }
        Slider::create($slider);
        return redirect()->route('admin.slider.index')->with('success', 'Slider created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Slider  $slider
     * @return \Illuminate\Http\Response
     */
    public function show(Slider $slider)
    {
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Slider  $slider
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request, Slider $slider)
    {
        $slider->fill($request->old());
        return view('admin.slider.form', compact('slider'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Slider  $slider
     * @return \Illuminate\Http\Response
     */
    public function update(SliderUpdateRequest $request, Slider $slider)
    {
        $slider->fill($request->validated());
        if ($request->hasFile('image')) {
            $destination = 'public/sliders';
            $image = $request->file('image');
            $imageName = Str::random(32) . '.' . $image->getClientOriginalExtension();
            $path = $request->file('image')->storeAs($destination, $imageName);
            $slider['image'] = $imageName;
        }
        $slider->save();

        return redirect()->route('admin.slider.index')->with('success', 'Slider updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Slider  $slider
     * @return \Illuminate\Http\Response
     */
    public function destroy(Slider $slider)
    {
        if(File::exists(storage_path('app/public/sliders/'. $slider->image))){
            File::delete(storage_path('app/public/sliders/'. $slider->image));
            }else{
            dd('File does not exists.');
            }
        $slider->delete();
        return redirect()->route('admin.slider.index')->with('success', 'Slider deleted successfully.');
    }
}
