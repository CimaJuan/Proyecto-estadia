@extends('layouts.Base')

@section('nav')
@endsection

@section('contenido')

    <body> 

        <h1 class="text-center p2 my-4">
            <p>TABLA DE REGISTRO</p>
        </h1>

        <div class="text-center mb-3">
            <a href="{{ route('registros-export') }}" class="btn btn-success">Reporte de Excel</a>
        </div>

        <section>
            <div class="tabla-1">
                <table class="table table-responsive table-bordered border-dark table-hover text-center text-capitalize">
                    <thead>
                        <tr class="table text-white" style="background-color: #235b4e">
                            <th class="th">Fecha de recepción</th>
                            <th style="width:20rem;">Modulo que recepciona</th>
                            <th class="th">Folio</th>
                            <th class="th">Estado</th>
                            <th style="width:20rem;">Propietario</th>
                            <th class="th">Teléfono</th>
                            <th style="width:25rem;">Correo</th>
                            <th class="th">Numero de serie</th>
                            <th class="th">Modelo</th>
                            <th class="th">Marca</th>
                            <th class="th">Numero de Factura</th>
                            <th class="th">Fecha de factura</th>
                            <th style="width:20rem">RFC o CURP</th>
                            <th class="th">Identificación</th>
                            <th class="th">Numero de identificación</th>
                            <th class="th">Entidad federativa</th>
                            <th class="th">Placa</th>
                            <th class="th">Ejerce Validar</th>
                            <th class="th">Aplica regla</th>
                            <th class="th">Respuesta</th>
                            <th class="th">Nombre del tramitador</th>
                            <th class="th">Testigo 1</th>
                            <th class="th">Testigo 2</th>
                            <th class="th">Nota</th>
                            <th style="width: 20rem;">Firma</th>
                            <th style="width: 25rem;">Observación</th>
                            <th class="th">Detalles</th>
                            <th class="th">Editar</th>
                            <th class="th">Eliminar</th>
                        </tr>
                    </thead>
                    <tbody class="bg-light">
                        @foreach ($registros as $registro)
                            <tr>
                                <td>{{ $registro->fecha_recepcion }}</td>
                                <td>{{ $registro->modulo }}</td>
                                <td>{{ $registro->folio }}</td>
                                <td>{{ $registro->estado->nombre }}</td>
                                <td>{{ $registro->nombre_propietario }}</td>
                                <td>{{ $registro->telefono }}</td>
                                <td>{{ $registro->correo }}</td>
                                <td>{{ $registro->numero_serie }}</td>
                                <td>{{ $registro->modelo }}</td>
                                <td>{{ $registro->marca->nombre }}</td>
                                <td>{{ $registro->numero_factura }}</td>
                                <td>{{ $registro->fecha_factura }}</td>
                                <td>{{ $registro->rfc_curp }}</td>
                                <td>{{ $registro->identificacion->nombre }}</td>
                                <td>{{ $registro->numero_identificacion }}</td>
                                <td>{{ $registro->entidad_federativa }}</td>
                                <td>{{ $registro->numero_placa }}</td>
                                <td>{{ $registro->ejerc_validar }}</td>
                                <td>{{ $registro->aplica->nombre }}</td>
                                <td>{{ $registro->respuesta }}</td>
                                <td>{{ $registro->nombre_tramitador }}</td>
                                <td>{{ $registro->testigo_1 }}</td>
                                <td>{{ $registro->testigo_2 }}</td>
                                <td>{{ $registro->nota }}</td>
                                <td>{{ $registro->firma }}</td>
                                <td>{{ $registro->observacion }}</td>

                                <td><a href="{{ url('registros/' . $registro->id . '/detalles') }}"
                                        class="btn btn-success"><i class="bi bi-card-text"></i></td>

                                <td><a href="{{ url('registros/' . $registro->id . '/formulario_edit') }}"
                                        class="btn btn-warning"><i class="bi bi-pencil-square"></i></a></td>

                                <td>
                                    <form action="{{ url('/registros' . $registro->id) }}" method="POST">
                                        @method('DELETE')
                                        @csrf
                                        <button type="submit" class="btn btn-danger"><i class="bi bi-trash"></i></button>
                                    </form>
                                </td>
                        @endforeach
                    </tbody>

                </table>
            </div>
        </section>

    </body>
@endsection
