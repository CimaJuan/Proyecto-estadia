<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="/assets/img/seafi-logo.png" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css"
        integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous">
    </script>

    <title>REPORTE VALIDACION DE PAGOS A ENTIDADES FEDERATIVAS</title>
</head>

<body>
    <img src="{{ public_path('assets/img/seafi-logo.png') }}" width="50px" height="50px">

    <h2 class="tema text-center my-4 font-weight-bold">Validacion De Pagos A Entidades Federativas</h2>

    <table class="table table-bordered text-center table-sm">
        <thead class="table-active">
            <tr>
                <th>Fecha de recepcion</th>
                <th>Serie de unidad</th>
                <th>Nombre del Propietario</th>
                <th>Entidad federativa</th>
                <th>Año solicitado</th>
                <th>Modulo que recepcionó</th>
                <th>Tramitador</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>{{ $registros->fecha_recepcion }}</td>
                <td>{{ $registros->numero_serie }}</td>
                <td>{{ $registros->nombre_propietario }}</td>
                <td>{{ $registros->entidad_federativa }}</td>
                <td>{{ $registros->ejerc_validar }}</td>
                <td>{{ $registros->modulo }}</td>
                <td>{{ $registros->nombre_tramitador }}</td>
            </tr>
        </tbody>
    </table>

    <p class="font-weight-bold">Observaciones:</p>
    {{ $registros->observacion }}

</body>

</html>
