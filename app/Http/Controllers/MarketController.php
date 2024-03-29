<?php

namespace App\Http\Controllers;

use App\Models\Market;
use App\Models\Shipment;
use Illuminate\Http\Request;

class MarketController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $Markets = Market::paginate(10);

        return view('dashboard', compact('Markets'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Market $market)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Market $market)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Market $market)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Market $market)
    {
        //
    }

    public function checkout($id)
    {
        $Market = Market::find($id);
        $Shipments = Shipment::get();

        return view('checkout', compact(['Market', 'Shipments']));
    }
}
