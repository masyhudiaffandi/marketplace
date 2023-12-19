<?php

namespace App\Http\Controllers;
use App\Models\Market;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class Admin extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $Markets = Market::paginate(10);

        return view('admin', compact('Markets'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $Photo = null;

        if ($request->hasFile('photo')) {
            $Photo = $request->file('photo')->store('public/photo');
        }

        Market::create([
            'name' => $request->name,
            'price' => $request->price,
            'desc' => $request->desc,
            'photo' => $Photo,
        ]);

        return to_route('Admin.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $Market = Market::findOrFail($id);

        return view('edit', compact('Market'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $market = Market::findOrFail($id);

        // Check if a new photo is uploaded
        if ($request->hasFile('photo')) {
            // Delete the old photo if it exists
            if ($market->photo) {
                Storage::delete($market->photo);
            }

            // Store the new photo
            $photoPath = $request->file('photo')->store('public/photo');

            // Update the Market model with new data
            $market->update([
                'name' => $request->input('name'),
                'price' => $request->input('price'),
                'desc' => $request->input('desc'),
                'photo' => $photoPath,
            ]);
        } else {
            // Update the Market model without changing the photo
            $market->update([
                'name' => $request->input('name'),
                'price' => $request->input('price'),
                'desc' => $request->input('desc'),
            ]);
        }

        return redirect()->route('Admin.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $Market = Market::find($id);

        $Market->delete();

        return to_route('Admin.index');
    }
}
