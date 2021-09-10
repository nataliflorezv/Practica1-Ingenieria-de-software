@extends('layouts.layoutP')

@section('css')
    <link href="https://cdn.datatables.net/1.11.0/css/dataTables.bootstrap5.min.css" rel="stylesheet">
@endsection

@section('content')
<br></br>
<img src="{{asset('imagenes/medico2.png')}}" class="rounded float-end" alt="" width="200" height="200"></img>
<h1 style='color:#16A085'> MIS RESULTADOS</h1>    
<h4>{{ $patient->nombre}} {{ $patient->apellido}}</h4>
<h5>Documento: {{ $patient->documento}}</h5> 
<h5>Genero: {{ $patient->sexo}}</h5>   
<h5>Entidad de salud: {{ $patient->eps}}</h5>        
<br></br>

<table class="table table-striped table-hover" id="patient">
    <thead>
        <tr>
            <th scope="col">PRUEBA</th>
            <th scope="col">RESULTADO</th>
            <th scope="col">RANGO DE REFERENCIA</th>
        </tr>
    </thead>
    <tbody>
            <tr>
            <th>Colesterol total</th>
            <th>{{ $patient->resultadoColTotal}}</th>
            <th>120-160</th>
            </tr>

            <tr>
            <th>Trigliceridos</th>
            <th>{{ $patient->resultadoTrigliceridos }}</th>
            <th>120-160</th>
            </tr>

            <tr>
            <th>HDL</th>
            <th>{{ $patient->resultadoHDL }}</th>
            <th>120-160</th>
            </tr>

            <tr>
            <th>LHL</th>
            <th>{{ $patient->resultadoLDL}}</th>
            <th>120-160</th>
            </tr>

    </tbody>
</table>
    <div class="d-grid gap-2 d-md-flex justify-content-md-end">
    <button class="btn btn-secondary" type="button">Descargar</button>
    <a href="/patients" class="btn btn-secondary" type="button">Volver</a>
    </div>

@endsection

@section('js')
      <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
      <script src="https://cdn.datatables.net/1.11.0/js/jquery.dataTables.min.js"></script>
      <script src="https://cdn.datatables.net/1.11.0/js/dataTables.bootstrap5.min.js"></script>
    <script>
        $(document).ready(function() {
    $('#patients').DataTable({
        "lengthMenu" : [[5,10,50,-1] , [5,10,50,"All"]],

        "language": {
        processing:     "Procesando...",
        search:         "Buscar:",
        lengthMenu:    "Mostrar _MENU_ pacientes",
        info:           "Mostrando _START_ a _END_ de _TOTAL_ pacientes",
        infoEmpty:      "Mostrando registros del 0 a 0 de un total de 0 registros",
        infoFiltered:   "(filtrado de un total de _MAX_ registros)",
        infoPostFix:    "",
        loadingRecords: "Cargando...",
        zeroRecords:    "No se muestran resultados",
        emptyTable:     "No hay datos disponibles en la tabla.",
        paginate: {
            first:      "Primera",
            previous:   "Anterior",
            next:       "Siguiente",
            last:       "Última"
        },
        aria: {
            sortAscending:  ": Activar para ordenar la columna de manera ascendente",
            sortDescending: ": Activar para ordenar la columna de manera descendente"
        }
    }

    });
} );
        </script>
@endsection

