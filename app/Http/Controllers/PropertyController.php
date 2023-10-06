<?php

namespace App\Http\Controllers;

use App\Models\Property;
use Illuminate\Http\Request;

class PropertyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Property::latest()->paginate(5);
        return view('pages.properties', compact('data'))->with('i', (request()->input('page', 1)-1)*5);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages.Csellerpage');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'property_address'           => 'required',
            'property_listing_name'           => 'required',
            'property_type'           => 'required',
            'property_city'           => 'required',
            'property_purpose'           => 'required',
            'property_rooms'           => 'required',
            'property_bathrooms'           => 'required',
            'property_image'           => 'required|image|mimes:jpg,png,jpeg,gif,svg|max:4048|dimensions:min_width=100,min_height=100,max-width=1000,max-height=1000',
        ]);

        $file_name = time() . '.' . request()->property_image->getClientOriginalExtension();

        request()->property_image->move(public_path('images'), $file_name);

        $property = new Property;

        $property->property_address = $request->property_address;
        $property->property_listing_name = $request->property_listing_name;
        $property->property_type = $request->property_type;
        $property->property_city = $request->property_city;
        $property->property_purpose = $request->property_purpose;
        $property->property_rooms= $request->property_rooms;
        $property->property_bathrooms = $request->property_bathrooms;
        $property->property_image = $file_name;

        $property->save();

        return redirect()->route('properties.index')->with('success', 'Property Added Successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Property  $property
     * @return \Illuminate\Http\Response
     */
    public function show(Property $property)
    {
        return view('pages.viewpage', compact('property'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Property  $property
     * @return \Illuminate\Http\Response
     */
    public function edit(Property $property)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Property  $property
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Property $property)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Property  $property
     * @return \Illuminate\Http\Response
     */
    public function destroy(Property $property)
    {
        //
    }
}
