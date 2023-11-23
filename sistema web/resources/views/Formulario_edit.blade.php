@extends('layouts.Base')

@section('nav')
@endsection

@section('contenido')
    <main>
        <form action="{{ url('registros' . $registros->id) }}" method="POST">
            @method('PUT')
            @csrf
            <h1 class="text-center p2 my-4 mx-auto ">
                <p>FORMULARIO PARA EDITAR</p>
            </h1>

            <div class="container text-center">
                <div class="row">
                    <div class="col-lg-6 col-md-12 col-xs-12">

                        <div class="mb-3">
                            <label for="fecha_recepcion" class="form-label">Fecha de recepción:</label>
                            <input type="date" class="form-control" id="fecha_recepcion" name="fecha_recepcion"
                                value="{{ $registros->fecha_recepcion }}" required>
                        </div>

                        <div class="mb-3">
                            <label for="modulo" class="form-label">Modulo que recepciona:</label>
                            <input type="text" class="form-control" id="modulo" name="modulo"
                                value="{{ $registros->modulo }}" required>
                        </div>

                        <div class="mb-3">
                            <label for="folio" class="form-label">Folio:</label>
                            <input type="text" class="form-control" id="folio" name="folio"
                                value="{{ $registros->folio }}" required>
                        </div>

                        <div class="mb-3">
                            <label for="estado" class="form-label">Estado:</label>
                            <select class="form-select" name="estado" required>
                                <option disabled>--seleccione el estado--</option>
                                @foreach ($estado as $estado)
                                    <option value="{{ $estado->id }}"
                                        @if ($estado->id == $registros->estado_id) {{ 'selected' }} @endif>
                                        {{ $estado->nombre }} </option>
                                @endforeach
                            </select>
                        </div>

                        <div class="mb-3">
                            <label for="nombre_propietario" class="form-label">Nombre del propietario:</label>
                            <input type="text" class="form-control" id="nombre_propietario" name="nombre_propietario"
                                value="{{ $registros->nombre_propietario }}" required>
                        </div>

                        <div class="mb-3">
                            <label for="telefono" class="form-label">Teléfono:</label>
                            <input type="tel" class="form-control" id="telefono" name="telefono"
                                value="{{ $registros->telefono }}" required>
                        </div>

                        <div class="mb-3">
                            <label for="correo" class="form-label">Correo Electrónico:</label>
                            <input type="tel" class="form-control" id="correo" name="correo"
                                value="{{ $registros->correo }}" required>
                        </div>

                        <div class="mb-3">
                            <label for="numero_serie" class="form-label">Número de serie:</label>
                            <input type="tel" class="form-control" id="numero_serie" name="numero_serie"
                                value="{{ $registros->numero_serie }}" required>
                        </div>

                        <div class="mb-3">
                            <label for="modelo" class="form-label">Modelo:</label>
                            <input type="text" class="form-control" id="modelo" name="modelo"
                                value="{{ $registros->modelo }}" required>
                        </div>

                        <div class="mb-3">
                            <label for="marca" class="form-label">Marca:</label>
                            <select class="form-select" name="marca" required>
                                <option disabled>--selecione una marca--</option>
                                @foreach ($marca as $marca)
                                    <option value="{{ $marca->id }}"
                                        @if ($marca->id == $registros->marca_id) {{ 'selected' }} @endif>
                                        {{ $marca->nombre }}</option>
                                @endforeach
                            </select>
                        </div>

                        <div class="mb-3">
                            <label for="numero_factura" class="form-label">Número de factura:</label>
                            <input type="text" class="form-control" id="numero_factura" name="numero_factura"
                                value="{{ $registros->numero_factura }}" required>
                        </div>

                        <div class="mb-3">
                            <label for="fecha_factura" class="form-label">Fecha de factura:</label>
                            <input type="date" class="form-control" id="fecha_factura" name="fecha_factura"
                                value="{{ $registros->fecha_factura }}" required>
                        </div>

                        <div class="mb-3">
                            <label for="rfc_curp" class="form-label">RFC o CURP:</label>
                            <input type="text" class="form-control" id="rfc_curp" name="rfc_curp"
                                value="{{ $registros->rfc_curp }}" required>
                        </div>
                    </div>

                    <div class="col-lg-6 col-md-12 col-xs-12">

                        <div class="mb-3">
                            <label for="identificacion" class="form-label">Identificación:</label>
                            <select class="form-select" name="identificacion" required>
                                <option disabled>--seleccione una identificación--</option>
                                @foreach ($identificacion as $identificacion)
                                    <option value="{{ $identificacion->id }}"
                                        @if ($identificacion->id == $registros->identificacion_id) {{ 'selected' }} @endif>
                                        {{ $identificacion->nombre }}</option>
                                @endforeach
                            </select>
                        </div>

                        <div class="mb-3">
                            <label for="numero_identificacion" class="form-label">Número de identificación</label>
                            <input type="text" class="form-control" id="numero_identificacion"
                                name="numero_identificacion" value="{{ $registros->numero_identificacion }}" required>
                        </div>

                        <div class="mb-3">
                            <label for="entidad_federativa" class="form-label">Entidad federativa:</label>
                            <input type="text" class="form-control" id="entidad_federativa" name="entidad_federativa"
                                value="{{ $registros->entidad_federativa }}" required>
                        </div>

                        <div class="mb-3">
                            <label for="numero_placa" class="form-label">Número de placa:</label>
                            <input type="text" class="form-control" id="numero_placa" name="numero_placa"
                                value="{{ $registros->numero_placa }}" required>
                        </div>

                        <div class="mb-3">
                            <label for="numero_placa" class="form-label">Ejerce validar:</label>
                            <input type="text" class="form-control" id="ejerc_validar" name="ejerc_validar"
                                value="{{ $registros->ejerc_validar }}" required>
                        </div>

                        <div class="mb-3">
                            <label for="aplica" class="form-label">Aplica regla:</label>
                            <select class="form-select" name="aplica" required>
                                <option disabled>--Aplica regla--</option>
                                @foreach ($aplica as $aplica)
                                    <option value="{{ $aplica->id }}"
                                        @if ($aplica->id == $registros->aplica_id) {{ 'selected' }} @endif>
                                        {{ $aplica->nombre }}</option>
                                @endforeach
                            </select>
                        </div>

                        <div class="mb-3">
                            <label for="respuesta" class="form-label">Ejerce validar:</label>
                            <input type="text" class="form-control" id="respuesta" name="respuesta"
                                value="{{ $registros->respuesta }}" required>
                        </div>

                        <div class="mb-3">
                            <label for="nombre_tramitador" class="form-label">Nombre del tramitador:</label>
                            <input type="text" class="form-control" id="nombre_tramitador" name="nombre_tramitador"
                                value="{{ $registros->nombre_tramitador }}" required>
                        </div>

                        <div class="mb-3">
                            <label for="testigo_1" class="form-label">Testigo 1:</label>
                            <input type="text" class="form-control" id="testigo_1" name="testigo_1"
                                value="{{ $registros->testigo_1 }}" required>
                        </div>

                        <div class="mb-3">
                            <label for="testigo_2" class="form-label">Testigo 2:</label>
                            <input type="text" class="form-control" id="testigo_2" name="testigo_2"
                                value="{{ $registros->testigo_2 }}" required>
                        </div>

                        <div class="mb-3">
                            <label for="nota" class="form-label">Nota:</label>
                            <input type="text" class="form-control" id="nota" name="nota"
                                value="{{ $registros->nota }}" required>
                        </div>

                        <div class="mb-3">
                            <label for="firma" class="form-label">Firma:</label>
                            <input type="text" class="form-control" id="firma" name="firma"
                                value="{{ $registros->firma }}" required>
                        </div>

                        <div class="mb-3">
                            <label for="obervacion" class="form-label">Observación:</label>
                            <textarea type="text" class="form-control" id="observacion" name="observacion" rows="3" required>{{ $registros->observacion }}</textarea>
                        </div>

                    </div>
                </div>

                <div class="d-grid gap-2 col-6 mx-auto my-3">
                    <button type="submit" class="btn text-white" style="background-color: #235b4e">Guardar</button>
                </div>

                <div class="d-grid gap-2 col-6 mx-auto my-3">
                    <a href="/registros" class="btn text-white" style="background-color: #888b8d">Regresar</a>
                </div>
            </div>
        </form>

    </main>
@endsection
