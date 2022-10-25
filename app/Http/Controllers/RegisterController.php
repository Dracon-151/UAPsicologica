<?php

namespace App\Http\Controllers;

use App\Models\Register;
use Illuminate\Http\Request;

class RegisterController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $registros = Register::orderBy('date', 'desc')->orderBy('name', 'asc')->orderBy('school', 'asc')->get();
        return view('admin.buscar-registro')->with(compact('registros'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.crear-registro');
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
            'date' => ['required'],
            'school' => ['required'],
            'grade' => ['required'],
            'time' => ['required'], 
            'zone' => ['required'],
            'group' => ['required'],
            'principal' => ['required'],
            'teacher' => ['required'],
            'attention_type' => ['required'],
            'municipality' => ['required'],
            'location' => ['required'],
        ]);
        
        $registro = new Register;
        $registro->date = $request->date;
        $registro->zone = $request->zone;
        if(isset($request->name))$registro->name = $request->name;
        $registro->teacher = $request->teacher;
        $registro->principal = $request->principal;
        $registro->school = $request->school;
        $registro->grade = $request->grade;
        $registro->group = $request->group;
        $registro->municipality = $request->municipality;
        $registro->location = $request->location;
        $registro->time = $request->time;
        if(isset($request->observations))$registro->observations = $request->observations;
        $registro->attention_type = $request->attention_type;

        $registro->save();

        return redirect(route('register.show', $registro->id))->with('success', 'ok');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $registro = Register::find($id);
        return view('admin.detalles-registro')->with(compact('registro'));
    }

     /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $registro = Register::find($id);
        return view('admin.editar-registro')->with(compact('registro'));
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

        $request->validate([
            'date' => ['required'],
            'school' => ['required'],
            'grade' => ['required'],
            'time' => ['required'], 
            'zone' => ['required'],
            'group' => ['required'],
            'principal' => ['required'],
            'teacher' => ['required'],
            'attention_type' => ['required'],
            'municipality' => ['required'],
            'location' => ['required'],
        ]);
        
        $registro = Register::where('id', $id)->first();

        $registro->update($request->all());

        return redirect(route('register.show', $registro->id))->with('success', 'ok');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $registro = Register::find($id);

        $registro->delete(); 
        return redirect(route('register.index'))->with('success', 'ok');
    }

    public function createPdf(Request $request)
    {
        $request->validate([
            'date' => ['required'],
            'folio' => ['required'],
            'ccp' => ['required'],
            'sender-name' => ['required'],
            'sender-job' => ['required'],
            'recipient-name' => ['required'],
            'recipient-job' => ['required'],
        ]);
        
        return $request;

        return redirect()->back()->with('success');
    }
}
