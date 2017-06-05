<?php

namespace App\Http\Controllers;

use App\Doctor;
use App\Paciente;
use App\User;
use Illuminate\Http\Request;

class PacienteController extends Controller
{
   /** public function __construct()
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
        $pacientes = Paciente::all();

        return view('pacientes/index',['pacientes'=>$pacientes]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $users=User::all()->pluck('name','doctor_id');
        $doctors=Doctor::all('id');
        //dd();
        return view('pacientes/create', ['doctors' => $doctors], ['users' => $users]);


    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //dd($request);
        $this->validate($request, [
            'name' => 'required|max:255',
            'surname' => 'required|max:255',
            'email'=>'required|max:225',
            'dni'=>'required|max:225',
            'fechanacimiento'=>'required',
            'doctor_id'=>'required|exists:doctors,id',
            'nuhsa' => 'required|max:255'
        ]);
        //dd($request);
        $doctors=Doctor::all('id');
        $paciente = new Paciente($request->all(),['doctors'=>$doctors]);
        $paciente->save();

        flash('Paciente creado correctamente');

        return redirect()->route('pacientes.index');


}

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return view ('pacientes/show',['paciente'=>$id]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $paciente = Paciente::find($id);
        $doctors=Doctor::all();

       //$paciente = Paciente::all($medico_id);

        return view('pacientes/edit',['paciente'=>$paciente],['doctors'=> $doctors]);
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
            'name' => 'required|max:255',
            'surname' => 'required|max:255',
            'email'=>'required|max:225',
            'dni'=>'required|max:225',
            'fechanacimiento'=>'required',
            'doctor_id'=>'required|exists:doctors,id',
            'nuhsa' => 'required|max:255'
        ]);

        $paciente = Paciente::find($id);
        $doctors=Doctor::all();
        $paciente->fill($request->all(),['doctors'=> $doctors]);

        $paciente->save();

        flash('Paciente modificado correctamente');

        return redirect()->route('pacientes.index');
    }
        public function destroy ($id)
    {
        $paciente = Paciente::find($id);
        $paciente->delete();
        flash('Paciente borrado correctamente');

        return redirect()->route('pacientes.index');
    }


}
