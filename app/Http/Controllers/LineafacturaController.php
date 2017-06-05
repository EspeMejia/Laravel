<?php

namespace App\Http\Controllers;

use App\Lineafactura;
use App\Producto;
use Illuminate\Http\Request;

class LineafacturaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $lineafacturas = Lineafactura::all();

        return view('lineafacturas/index',['lineafacturas'=>$lineafacturas]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $productos = Producto::all()->pluck('id');
        //dd($productos);
        return view('lineafacturas/create',['productos'=>$productos]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $productos=Producto::all();

        $this->validate($request, [
            'producto_id' => 'required|exists:productos,id',
            'cantidad' => 'required|max:255',
            'subtotal' => 'required'
        ]);

        $lineafactura = new Lineafactura($request->all(),['productos'=>$productos]);
        $lineafactura->save();

        flash('Linea de factura creada correctamente');

        return redirect()->route('lineafacturas.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return view('lineafactura/show');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $lineafactura = Lineafactura::find($id);
        $productos=Producto::all();
        return view('lineafacturas/edit',['lineafactura'=>$lineafactura],['productos'=> $productos]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'producto_id' => 'required|exists:productos,id',
            'cantidad' => 'required|max:255',
            'subtotal' => 'required'
        ]);

        $lineafactura = Lineafactura::find($id);
        $lineafactura->fill($request->all());

        $lineafactura->save();

        flash('Linea de factura modificada correctamente');

        return redirect()->route('lineafacturas.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $lineafactura = Lineafactura::find($id);
        $lineafactura->delete();
        flash('Línea de factura borrada correctamente');

        return redirect()->route('lineafacturas.index');
    }
}
