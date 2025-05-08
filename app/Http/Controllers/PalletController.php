<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\Pallet;
use Illuminate\Http\Request;

class PalletController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Order $order)
       
    {
        return view('pallets.create', compact('order'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request, Order $order)
    {
        $validated = $request->validate([
            'number' => 'required|integer|unique:pallets,number',
            'field_number' => 'required|integer',
            'box_count' => 'required|integer',
            'lot_number' => 'required|string',
            'pot_size' => 'required|string',
        ]);
    
        $order->pallets()->create($validated);
    
        return redirect()->route('orders.show', $order)->with('success', 'Pallet added successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Pallet $pallet)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Pallet $pallet)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Pallet $pallet)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Pallet $pallet)
    {
        //
    }
}
