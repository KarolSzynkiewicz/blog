<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\TransportOrder;

class TransportOrderController extends Controller
{

    public function index()
    {
        $transportOrders = TransportOrder::all();

        return view('transport_orders.index', compact('transportOrders'));
    }

    public function create()
    {
        return view('transport_orders.create');
    }

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

public function show($order)
{

    $transportOrder = TransportOrder::findOrFail($order);
    return view('transport_orders.show', compact('transportOrder'));
}


public function edit($order)
{
    $transportOrder = TransportOrder::findOrFail($order);
    return view('transport_orders.edit', compact('transportOrder'));
}

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


public function destroy(TransportOrder $transportOrder)
{
    $transportOrder->delete();

    return redirect()->route('transport_orders.index')
    ->with('success', 'Transport order deleted successfully');
}
}
