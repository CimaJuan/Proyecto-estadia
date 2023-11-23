@extends('layouts.Base')

@section('nav')
@endsection

@section('contenido')
    <main>
        <form action="{{ url('registros') }}" method="POST">
            @csrf
            <h1 class="text-center p2 my-4">
                <p>FORMULARIO DE REGISTRO</p>
            </h1>

            <div class="container text-center">
                <div class="row">
                    <div class="col-lg-6 col-md-12 col-xs-12">

                        <div class="mb-3">
                            <label for="fecha_recepcion" class="form-label">Fecha de recepción:</label>
                            <input type="date" class="form-control" id="fecha_recepcion" name="fecha_recepcion"
                                value="{{ old('fecha_recepcion') }}" required>
                        </div>

                        <div class="mb-3">
                            <label for="modulo" class="form-label">Modulo que recepciona:</label>
                            <input type="text" class="form-control" id="modulo" name="modulo"
                                value="{{ old('modulo') }}" required>
                        </div>

                        <div class="mb-3">
                            <label for="folio" class="form-label">Folio:</label>
                            <input type="text" class="form-control" id="folio" name="folio"
                                value="{{ old('folio') }}" required>
                        </div>

                        <div class="mb-3">
                            <label for="estado" class="form-label">Estado:</label>
                            <select class="form-select" name="estado" required>
                                <option disabled>--seleccione un estado--</option>
                                @foreach ($estado as $estado)
                                    <option value="{{ $estado->id }}">{{ $estado->nombre }}</option>
                                @endforeach
                            </select>
                        </div>

                        <div class="mb-3">
                            <label for="nombre_propietario" class="form-label">Nombre del propietario:</label>
                            <input type="text" class="form-control" id="nombre_propietario" name="nombre_propietario"
                                value="{{ old('nombre_propietario') }}" required>
                        </div>

                        <div class="mb-3">
                            <label for="telefono" class="form-label">Teléfono:</label>
                            <input type="tel" class="form-control" id="telefono" name="telefono"
                                value="{{ old('telefono') }}" required>
                        </div>

                        <div class="mb-3">
                            <label for="correo" class="form-label">Correo Electrónico:</label>
                            <input type="tel" class="form-control" id="correo" name="correo"
                                value="{{ old('correo') }}" required>
                        </div>

                        <div class="mb-3">
                            <label for="numero_serie" class="form-label">Número de serie:</label>
                            <input type="tel" class="form-control" id="numero_serie" name="numero_serie"
                                value="{{ old('numero_serie') }}" required>
                        </div>

                        <div class="mb-3">
                            <label for="modelo" class="form-label">Modelo:</label>
                            <input type="text" class="form-control" id="modelo" name="modelo"
                                value="{{ old('modelo') }}" required>
                        </div>

                        <div class="mb-3">
                            <label for="marca" class="form-label">Marca:</label>
                            <select class="form-select" name="marca" required>
                                <option disabled>--selecione una marca--</option>
                                @foreach ($marca as $marca)
                                    <option value="{{ $marca->id }}">{{ $marca->nombre }}</option>
                                @endforeach
                            </select>
                        </div>

                        <div class="mb-3">
                            <label for="numero_factura" class="form-label">Número de factura:</label>
                            <input type="text" class="form-control" id="numero_factura" name="numero_factura"
                                value="{{ old('numero_factura') }}" required>
                        </div>

                        <div class="mb-3">
                            <label for="fecha_factura" class="form-label">Fecha de factura:</label>
                            <input type="date" class="form-control" id="fecha_factura" name="fecha_factura"
                                value="{{ old('fecha_factura') }}" required>
                        </div>

                        <div class="mb-3">
                            <label for="rfc_curp" class="form-label">RFC o CURP:</label>
                            <input type="text" class="form-control" id="rfc_curp" name="rfc_curp"
                                value="{{ old('rfc_curp') }}" required>
                        </div>
                    </div>

                    <div class="col-lg-6 col-md-12 col-xs-12">

                        <div class="mb-3">
                            <label for="identificacion" class="form-label">Identificación:</label>
                            <select class="form-select" name="identificacion" required>
                                <option disabled>--selecione una identificación--</option>
                                @foreach ($identificacion as $identificacion)
                                    <option value="{{ $identificacion->id }}">{{ $identificacion->nombre }}</option>
                                @endforeach
                            </select>
                        </div>

                        <div class="mb-3">
                            <label for="numero_identificacion" class="form-label">Número de identificación</label>
                            <input type="text" class="form-control" id="numero_identificacion"
                                name="numero_identificacion" value="{{ old('numero_identificacion') }}" required>
                        </div>

                        <div class="mb-3">
                            <label for="entidad_federativa" class="form-label">Entidad federativa:</label>
                            <input type="text" class="form-control" id="entidad_federativa" name="entidad_federativa"
                                value="{{ old('entidad_federativa') }}" required>
                        </div>

                        <div class="mb-3">
                            <label for="numero_placa" class="form-label">Número de placa:</label>
                            <input type="text" class="form-control" id="numero_placa" name="numero_placa"
                                value="{{ old('numero_placa') }}" required>
                        </div>

                        <div class="mb-3">
                            <label for="numero_placa" class="form-label">Ejerce validar:</label>
                            <input type="text" class="form-control" id="ejerc_validar" name="ejerc_validar"
                                value="{{ old('ejerc_validar') }}" required>
                        </div>

                        <div class="mb-3">
                            <label for="aplica" class="form-label">Aplica regla:</label>
                            <select class="form-select" name="aplica" required>
                                <option disabled>--Aplica regla--</option>
                                @foreach ($aplica as $aplica)
                                    <option value="{{ $aplica->id }}">{{ $aplica->nombre }}</option>
                                @endforeach
                            </select>
                        </div>

                        <div class="mb-3">
                            <label for="respuesta" class="form-label">Ejerce validar:</label>
                            <input type="text" class="form-control" id="respuesta" name="respuesta"
                                value="{{ old('respuesta') }}" required>
                        </div>

                        <div class="mb-3">
                            <label for="nombre_tramitador" class="form-label">Nombre del tramitador:</label>
                            <input type="text" class="form-control" id="nombre_tramitador" name="nombre_tramitador"
                                value="{{ old('nombre_tramitador') }}" required>
                        </div>

                        <div class="mb-3">
                            <label for="testigo_1" class="form-label">Testigo 1:</label>
                            <input type="text" class="form-control" id="testigo_1" name="testigo_1"
                                value="{{ old('testigo_1') }}" required>
                        </div>

                        <div class="mb-3">
                            <label for="testigo_2" class="form-label">Testigo 2:</label>
                            <input type="text" class="form-control" id="testigo_2" name="testigo_2"
                                value="{{ old('testigo_2') }}" required>
                        </div>

                        <div class="mb-3">
                            <label for="nota" class="form-label">Nota:</label>
                            <input type="text" class="form-control" id="nota" name="nota"
                                value="{{ old('nota') }}" required>
                        </div>

                        <div class="mb-3">
                            <label for="firma" class="form-label">Firma:</label>
                            <input type="text" class="form-control" id="firma" name="firma"
                                value="{{ old('firma') }}" required>
                        </div>

                        <div class="mb-3">
                            <label for="obervacion" class="form-label">Observación:</label>
                            <textarea type="text" class="form-control" id="observacion" name="observacion" rows="3" required>{{ old('observacion') }}</textarea>
                        </div>

                    </div>

                    <div class="d-grid gap-2 col-6 mx-auto">
                        <button type="submit" class="btn text-white" style="background-color: #235b4e">Enviar</button>
                    </div>

                </div>
            </div>
        </form>

    </main>
@endsection
