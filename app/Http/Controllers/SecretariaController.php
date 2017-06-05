<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SecretariaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */


    public function index()
    {
        $secretarias = Secretaria::all();

        return view('secretarias/index',['secretarias'=>$secretarias]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('secretarias/create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required|max:255',
            'surname' => 'required|max:255',

        ]);
        $secretaria = new Secretaria($request->all());
        $secretaria->save();

        flash('Secretaria creada correctamente');

        return redirect()->route('secretarias.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return view('secretarias/show');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $secretaria = Secretaria::find($id);

        return view('secretarias/edit',['secretaria'=> $secretaria]);
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
        $this->validate($request, [  /** Siempre se valida sobre el request, ver 'especialidad_id' (exist) */
            'name' => 'required|max:255',
            'surname' => 'required|max:255',

        ]);

        $secretaria = Secretaria::find($id);
        $secretaria->fill($request->all());

        $doctor->save();

        flash('Doctor modificado correctamente');

        return redirect()->route('secretarias.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $secretaria = Secretaria::find($id);
        $secretaria->delete();
        flash('Secretaria borrada correctamente');

        return redirect()->route('secretarias.index');
    }
}
