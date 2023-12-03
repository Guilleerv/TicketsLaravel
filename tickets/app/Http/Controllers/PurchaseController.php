<?php

namespace App\Http\Controllers;

use App\Models\Purchase;
use Illuminate\Http\Request;

class PurchaseController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'id_cliente' => 'required|exists:users,id',
            'id_evento' => 'required|exists:events,id',
        ]);

        $purchase = Purchase::create($request->all());

        return response()->json($purchase, 201);
    }

    public function show($id_cliente)
    {
        $event = Purchase::where('id_cliente',$id_cliente)->with('event')->get();
        return response()->json($event, 200);
    }
}
