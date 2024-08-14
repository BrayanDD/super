<?php

namespace App\Http\Controllers;

use App\Models\Carrito;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CarritoController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

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
        $request->validate([
            'product_id' => 'required|integer',
        ]);
        $data = [
            'product_id' => $request->input('product_id'),
            'user_id' => Auth::id(),
            
        ];

        
    
        Carrito::create($data);
    
        return back()->with('alert',[
            'message' => "Add to carr succesfully",
            'type' => 'success',
        ]);;
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
        $this->authorize('update',$carrito);

        $product = Product::find($carrito->product_id);

  
      return view('carritos.edit', compact('carrito', 'product'))->with('alert',[
        'message' => "Edited succesfully",
        'type' => 'success',
    ]);;
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
        $this->authorize('update',$carrito);

        $carrito->update($request->only(['quantity']));
        return redirect()->route('carrito.index')->with('alert',[
            'message' => "Updated succesfully ",
            'type' => 'success',
        ]);;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Carrito  $carrito
     * @return \Illuminate\Http\Response
     */
    public function destroy(Carrito $carrito)
    {
        $this->authorize('delete',$carrito);

        $carrito->delete();
        return back()->with('alert',[
            'message' => "Deleted succesfully",
            'type' => 'warning',
        ]);;
    }
}
