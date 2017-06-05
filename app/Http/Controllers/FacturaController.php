<?php

namespace App\Http\Controllers;

use App\Cita;
use App\factura;
use App\Lineafactura;
use Illuminate\Http\Request;

class FacturaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $facturas = factura::all();

        return view('facturas/index',['facturas'=>$facturas]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $lineafacturas=Lineafactura::all()->pluck('id');
        $citas=Cita::all()->pluck('id');
        return view('facturas/create',['lineafacturas'=>$lineafacturas],['citas'=>$citas]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $lineafacturas=Lineafactura::all()->pluck('id');
        $citas=Cita::all()->pluck('id');
        $this->validate($request, [
            'cita_id' => 'required|exists:citas,id',
            'lineafactura_id' => 'required|exists:lineafacturas,id',
            'total' => 'required'
        ]);
        $factura = new factura($request->all(),['lineafacturas'=>$lineafacturas],['citas'=>$citas]);
        $factura->save();

        flash('Factura creada correctamente');

        return redirect()->route('facturas.index');
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
        $facturas = factura::find($id);
        $lineafacturas=Lineafactura::all();
        $citas=Cita::all();
        return view('facturas/edit',['facturas'=> $facturas],['citas'=>$citas,'lineafacturas'=> $lineafacturas]);
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
            'cita_id' => 'required|exists:citas,id',
            'lineafactura_id' => 'required|exists:lineafacturas,id',
            'total' => 'required'
        ]);

        $factura = factura::find($id);
        $factura->fill($request->all());

        $factura->save();

        flash('Factura modificada correctamente');

        return redirect()->route('facturas.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $factura = factura::find($id);
        $factura->delete();
        flash('Factura borrada correctamente');

        return redirect()->route('facturas.index');
    }
}
