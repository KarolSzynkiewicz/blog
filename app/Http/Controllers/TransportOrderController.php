<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\TransportOrder;

class TransportOrderController extends Controller
{
    /**
     * Display a listing of the transport orders.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $transportOrders = TransportOrder::all();

        return view('transport_orders.index', compact('transportOrders'));
    }

    /**
     * Show the form for creating a new transport order.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('transport_orders.create');
    }

    /**
     * Store a newly created transport order in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'client' => 'required',
            'reference_number' => 'required',
            'price' => 'required',
            'currency' => 'required',
            'truck' => 'required',
            'loading_date' => 'required',
            'unloading_date' => 'required',
            'loading_address' => 'required',
            'unloading_address' => 'required',
]);
        TransportOrder::create($request->all());

        return redirect()->route('transport_orders.index')
                        ->with('success', 'Transport order created successfully.');
    }
/**
     * Display the specified transport order.
     *
     * @param  \App\TransportOrder  $transportOrder
     * @return \Illuminate\Http\Response
     */
public function show(TransportOrder $transportOrder)
{
    return view('transport_orders.show', compact('transportOrder'));
}

/**
 * Show the form for editing the specified transport order.
 *
 * @param  \App\TransportOrder  $transportOrder
 * @return \Illuminate\Http\Response
 */
public function edit(TransportOrder $transportOrder)
{
    return view('transport_orders.edit', compact('transportOrder'));
}

/**
 * Update the specified transport order in storage.
 *
 * @param  \Illuminate\Http\Request  $request
 * @param  \App\TransportOrder  $transportOrder
 * @return \Illuminate\Http\Response
 */
public function update(Request $request, TransportOrder $transportOrder)
{
    $request->validate([
        'client' => 'required',
        'reference_number' => 'required',
        'price' => 'required',
        'currency' => 'required',
        'truck' => 'required',
        'loading_date' => 'required',
        'unloading_date' => 'required',
        'loading_address' => 'required',
        'unloading_address' => 'required',
    ]);

    $transportOrder->update($request->all());

    return redirect()->route('transport_orders.index')
                    ->with('success', 'Transport order updated successfully');
}

/**
 * Remove the specified transport order from storage.
 *
 * @param  \App\TransportOrder  $transportOrder
 * @return \Illuminate\Http\Response
 */
public function destroy(TransportOrder $transportOrder)
{
    $transportOrder->delete();

    return redirect()->route('transport_orders.index')
    ->with('success', 'Transport order deleted successfully');
}
}
