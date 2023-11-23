<table>
    <thead>
        <tr>
            <th style="font-weight: 500">Fecha de recepción</th>
            <th style="font-weight: 500">Modulo que recepciona</th>
            <th style="font-weight: 500">Folio</th>
            <th style="font-weight: 500">Estado</th>
            <th style="font-weight: 500">Propietario</th>
            <th style="font-weight: 500">Teléfono</th>
            <th style="font-weight: 500">Correo</th>
            <th style="font-weight: 500">Numero de serie</th>
            <th style="font-weight: 500">Modelo</th>
            <th style="font-weight: 500">Marca</th>
            <th style="font-weight: 500">Numero de Factura</th>
            <th style="font-weight: 500">Fecha de factura</th>
            <th style="font-weight: 500">RFC o CURP</th>
            <th style="font-weight: 500">Identificación</th>
            <th style="font-weight: 500">Numero de identificación</th>
            <th style="font-weight: 500">Entidad federativa</th>
            <th style="font-weight: 500">Placa</th>
            <th style="font-weight: 500">Ejerce Validar</th>
            <th style="font-weight: 500">Aplica regla</th>
            <th style="font-weight: 500">Respuesta</th>
            <th style="font-weight: 500">Nombre del tramitador</th>
            <th style="font-weight: 500">Testigo 1</th>
            <th style="font-weight: 500">Testigo 2</th>
            <th style="font-weight: 500">Nota</th>
            <th style="font-weight: 500">Firma</th>
            <th style="font-weight: 500">Observación</th>
        </tr>
    </thead>
    <tbody>
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
            </tr>
        @endforeach
    </tbody>
</table>
