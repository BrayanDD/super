<?php

namespace App\Http\Controllers;

use App\Models\Carrito;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CarritoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $carrito = Carrito::where('user_id', Auth::id())->get();
    
        if ($carrito->isNotEmpty()) {
            $productIds = $carrito->pluck('product_id');
            $products = Product::whereIn('id', $productIds)->get();
    
            // Calcula el total considerando la cantidad de cada producto en el carrito
            $total = $carrito->sum(function($carritoItem) use ($products) {
                $product = $products->where('id', $carritoItem->product_id)->first();
                return $product->price * $carritoItem->quantity;
            });
        } else {
            $products = collect();
            $total = 0;
        }
    
        return view('carritos.index', compact('products', 'total', 'carrito'));
    }
    


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = [
            'product_id' => $request->input('product_id'),
            'user_id' => Auth::id(),
            'quantity' =>$request->input('quantity'),
        ];
    
        Carrito::create($data);
    
        return back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Carrito  $carrito
     * @return \Illuminate\Http\Response
     */
    public function show(Carrito $carrito)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Carrito  $carrito
     * @return \Illuminate\Http\Response
     */
    public function edit(Carrito $carrito)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Carrito  $carrito
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Carrito $carrito)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Carrito  $carrito
     * @return \Illuminate\Http\Response
     */
    public function destroy(Carrito $carrito)
    {
        $carrito->delete();
        return back();
    }
}
