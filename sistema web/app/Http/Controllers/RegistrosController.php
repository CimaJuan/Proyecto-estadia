<?php

namespace App\Http\Controllers;

use App\Models\Aplica;
use App\Models\Estado;
use App\Models\Identificacion;
use App\Models\Marca;
use App\Models\Registros;
use Barryvdh\DomPDF\Facade\Pdf;
use App\Exports\RegistrosExport;
use Maatwebsite\Excel\Facades\Excel;

use Illuminate\Http\Request;

class RegistrosController extends Controller
{

    public function index()
    {
        $registros = Registros::all();
        return view('Registros', ['registros' => $registros]);
    }

    public function export()
    {
        return Excel::download(new RegistrosExport, 'Registros.xlsx');
    }

    public function pdf($id)
    {
        $registros = Registros::find($id);
        $pdf = pdf::loadView('pdf_detalles', compact('registros'));
        return $pdf->stream();
    }

    
    public function create()
    {
        return view('Formulario', ['estado' => Estado::all(), 'aplica' => Aplica::all(), 'marca' => Marca::all(), 'identificacion' => Identificacion::all()]);
    }


    public function store(Request $request)
    {
        $request->validate([
            'fecha_recepcion' => 'required|date',
            'modulo' => 'required',
            'folio' => 'required',
            'estado' => 'required',
            'nombre_propietario' => 'required',
            'telefono' => 'required',
            'correo' => 'required',
            'numero_serie' => 'required',
            'modelo' => 'required',
            'marca' => 'required',
            'numero_factura' => 'required',
            'fecha_factura' => 'required|date',
            'rfc_curp' => 'required',
            'identificacion' => 'required',
            'numero_identificacion' => 'required',
            'entidad_federativa' => 'required',
            'numero_placa' => 'required',
            'ejerc_validar' => 'required',
            'aplica' => 'required',
            'respuesta' => 'required',
            'nombre_tramitador' => 'required',
            'testigo_1' => 'required',
            'testigo_2' => 'required',
            'nota' => 'required|max:255',
            'firma' => 'required',
            'observacion' => 'required|max:255',

        ]);

        $registros = new Registros();
        $registros->fecha_recepcion = $request->input('fecha_recepcion');
        $registros->modulo = $request->input('modulo');
        $registros->folio = $request->input('folio');
        $registros->estado_id = $request->input('estado');
        $registros->nombre_propietario = $request->input('nombre_propietario');
        $registros->telefono = $request->input('telefono');
        $registros->correo = $request->input('correo');
        $registros->numero_serie = $request->input('numero_serie');
        $registros->modelo = $request->input('modelo');
        $registros->marca_id = $request->input('marca');
        $registros->numero_factura = $request->input('numero_factura');
        $registros->fecha_factura = $request->input('fecha_factura');
        $registros->rfc_curp = $request->input('rfc_curp');
        $registros->identificacion_id = $request->input('identificacion');
        $registros->numero_identificacion = $request->input('numero_identificacion');
        $registros->entidad_federativa = $request->input('entidad_federativa');
        $registros->numero_placa = $request->input('numero_placa');
        $registros->ejerc_validar = $request->input('ejerc_validar');
        $registros->aplica_id = $request->input('aplica');
        $registros->respuesta = $request->input('respuesta');
        $registros->nombre_tramitador = $request->input('nombre_tramitador');
        $registros->testigo_1 = $request->input('testigo_1');
        $registros->testigo_2 = $request->input('testigo_2');
        $registros->nota = $request->input('nota');
        $registros->firma = $request->input('firma');
        $registros->observacion = $request->input('observacion');
        $registros->save();

        return redirect('registros');
    }


    public function show($id)
    {
        $registros = Registros::findOrFail($id);
        return view('Detalles', compact('registros'));
    }


    public function edit($id)
    {
        $registros = Registros::find($id);
        return view('Formulario_edit', ['registros' => $registros, 'estado' => Estado::all(), 'aplica' => Aplica::all(), 'marca' => Marca::all(), 'identificacion' => Identificacion::all()]);
    }


    public function update(Request $request, $id)
    {
        $request->validate([
            'fecha_recepcion' => 'required|date',
            'modulo' => 'required',
            'folio' => 'required',
            'estado' => 'required',
            'nombre_propietario' => 'required',
            'telefono' => 'required',
            'correo' => 'required',
            'numero_serie' => 'required',
            'modelo' => 'required',
            'marca' => 'required',
            'numero_factura' => 'required',
            'fecha_factura' => 'required|date',
            'rfc_curp' => 'required',
            'identificacion' => 'required',
            'numero_identificacion' => 'required',
            'entidad_federativa' => 'required',
            'numero_placa' => 'required',
            'ejerc_validar' => 'required',
            'aplica' => 'required',
            'respuesta' => 'required',
            'nombre_tramitador' => 'required',
            'testigo_1' => 'required',
            'testigo_2' => 'required',
            'nota' => 'required|max:255',
            'firma' => 'required',
            'observacion' => 'required|max:255',

        ]);

        $registros = Registros::find($id);
        $registros->fecha_recepcion = $request->input('fecha_recepcion');
        $registros->modulo = $request->input('modulo');
        $registros->folio = $request->input('folio');
        $registros->estado_id = $request->input('estado');
        $registros->nombre_propietario = $request->input('nombre_propietario');
        $registros->telefono = $request->input('telefono');
        $registros->correo = $request->input('correo');
        $registros->numero_serie = $request->input('numero_serie');
        $registros->modelo = $request->input('modelo');
        $registros->marca_id = $request->input('marca');
        $registros->numero_factura = $request->input('numero_factura');
        $registros->fecha_factura = $request->input('fecha_factura');
        $registros->rfc_curp = $request->input('rfc_curp');
        $registros->identificacion_id = $request->input('identificacion');
        $registros->numero_identificacion = $request->input('numero_identificacion');
        $registros->entidad_federativa = $request->input('entidad_federativa');
        $registros->numero_placa = $request->input('numero_placa');
        $registros->ejerc_validar = $request->input('ejerc_validar');
        $registros->aplica_id = $request->input('aplica');
        $registros->respuesta = $request->input('respuesta');
        $registros->nombre_tramitador = $request->input('nombre_tramitador');
        $registros->testigo_1 = $request->input('testigo_1');
        $registros->testigo_2 = $request->input('testigo_2');
        $registros->nota = $request->input('nota');
        $registros->firma = $request->input('firma');
        $registros->observacion = $request->input('observacion');
        $registros->save();

        return redirect('registros');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $registro = Registros::find($id);
        $registro->delete();

        return redirect('registros');
    }
}
