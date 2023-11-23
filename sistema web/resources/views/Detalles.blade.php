@extends('layouts.Base')

@section('nav')
@endsection

@section('contenido')

    <body>
        <h1 class="text-center p2 my-4">VALIDACION DE PAGOS A ENTIDADES FEDERATIVAS</h1>

        <div class="text-start mb-3" style="padding-left: 7rem">
            <a class="btn btn-danger" target="_blank" href="{{url('detalles/' . $registros->id . '/pdf_detalles')}}">Reporte pdf</a>
        </div>

        <section class="container">
            <div class="tabla-2">
                <table class="table table-bordered border-dark table-hover text-center text-capitalize">
                    <thead class="table text-white" style="background-color: #235b4e">
                        <tr>
                            <th >Fecha de recepcion</th>
                            <th>Serie de unidad</th>
                            <th>Nombre del Propietario</th>
                            <th>Entidad federativa</th>
                            <th>Año solicitado</th>
                            <th>Modulo que recepcionó</th>
                            <th>Tramitador</th>
                            <th style="width: 20rem;">Observaciones</th>
                        </tr>
                    </thead>
                    <tbody class="bg-light">
                        <tr>
                            <td>{{ $registros->fecha_recepcion }}</td>
                            <td>{{ $registros->numero_serie }}</td>
                            <td>{{ $registros->nombre_propietario }}</td>
                            <td>{{ $registros->entidad_federativa }}</td>
                            <td>{{ $registros->ejerc_validar }}</td>
                            <td>{{ $registros->modulo }}</td>
                            <td>{{ $registros->nombre_tramitador }}</td>
                            <td>{{ $registros->observacion }}</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </section>

        <div class="d-grid gap-2 col-2 mx-auto">
            <a href="/registros" class="btn text-white" style="background-color: #888b8d">Regresar</a>
       </div>

    </body>
@endsection
