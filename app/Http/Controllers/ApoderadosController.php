<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Apoderado;


class ApoderadosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)        
    {
        $this->validate($request, [
             'apoderado' => ['required','max:100'],
             'txtApellidoPaternoApoderado' => ['required','max:100'],
             'txtApellidoMaternoApoderado' => ['required','max:100'],
             'txtFono' => ['required','min:100000','max:99999999','numeric'],
             'txtRut' => ['required','max:100'],
             'txtDv' => ['required','max:1'],
             'txtCorreo'=> ['required','max:100']
         ],[
             'apoderado.required' => 'Debes escribir un nombre de apoderado.',
             'apoderado.max' => 'El nombre no puede superar los 100 caracteres',
             'txtApellidoPaternoApoderado.required' => 'Debes escribir un apellido.',
             'txtApellidoPaternoApoderado.max' => 'El apellido no puede superar los 100 caracteres',
             'txtApellidoMaternoApoderado.required' => 'Debes escribir un apellido de apoderado.',
             'txtApellidoMaternoApoderado.max' => 'El apellido no puede superar los 100 caracteres',
             'txtFono.required' => 'Debes escribir un telefono.',
             'txtFono.max' => 'El telefono no puede superar los 10 caracteres',
             'txtRut.required' => 'Debes escribir un nombre de apoderado.',
             'txtRut.max' => 'El nombre no puede superar los 100 caracteres',
             'txtDv.required' => 'Debes escribir tu digito verificador',
             'txtDv.max' => 'Debes escribir un solo caracter',
             'txtCorreo.max' => 'El correo no puede superar los 100 caracteres',
             'txtCorreo.required' => 'Debes escribir un correo electrónico.'
             
         ]);
        //dd($request->all());
        $apoderado = Apoderado::create([
             'nombreApo' => $request->input('apoderado'),
             'apPatApo' => $request->input('txtApellidoPaternoApoderado'),
             'apMatApo' => $request->input('txtApellidoMaternoApoderado'),
             'fonoApo' => $request->input('txtFono'),
             'rutApo' => $request->input('txtRut'),
             'dvApo' => $request->input('txtDv'),
             'correoApo'=> $request->input('txtCorreo')
         ]);
        return redirect('/fichaPostulante');
         //dd($apoderado);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //$apoderado = new apoderado();
        //$apoderado->nombreApo = $request->input("txtNombresApoderado");
        //$apoderado->apPatApo = $request->input("txtPrimerApellidoApoderado");
        //$apoderado->apMatApo = $request ->input("txtSegundoApellidoApoderado");
        //$apoderado->fonoApo = $request ->input("telefono");
        //$apoderado->save();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Message $message)
    {
        return view('apoderados.show', ['apoderado' => $apoderado,]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
