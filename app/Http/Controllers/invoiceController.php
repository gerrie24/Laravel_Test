<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Invoice;

class invoiceController extends Controller
{
    public function create(Request $request)
    {
        $data = $request->all();

        Invoice::create([
            'amount' => $data['amount'],
            'invoice_number' => $data['invoice_number'],
        ]);
    }

    public function jsonResponse()
    {
        return response()->json(['name' => 'piet']);
    }

    public function index()
    {

        $data = Invoice::get();

        return response()->json(['data' => $data]);
    }

    public function store(Request $request)
    {

        $data = $request->all();

        Invoice::create([
            'amount' => $data['amount'],
            'invoice_number' => $data['invoice_number'],
        ]);

        return response()->json(['data' => 'record created successfully']);
    }

    public function show($id)
    {
        $data = Invoice::get();

        return response()->json(['data' => $data]);
    }

    public function update(Request $request, $id)
    {
        $invoice = Invoice::find($id);

        $data = $request->all();

        $invoice->update([
            'amount' => $data['amount'],
            'invoice-number' => $data['invoice-number']
        ]);
    }

    public function destroy($id)
    {
        $invoice = Invoice::find($id);

        $invoice->delete();

        return response()->json(['data' => "record deleted"]);
    }
}
