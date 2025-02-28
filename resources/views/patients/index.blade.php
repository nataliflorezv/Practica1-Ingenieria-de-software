@extends('layouts.layoutP')

@section('css')
    <link href="https://cdn.datatables.net/1.11.0/css/dataTables.bootstrap5.min.css" rel="stylesheet">
@endsection

@section('content')
    <h1 style='color:#16A085' align='center'>CONSULTA MASIVA DE PACIENTES</h1>
    <br></br>
    <table class="table table-striped table-hover" id="patients">
        <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">DOCUMENTO</th>
                <th scope="col">NOMBRE</th>
                <th scope="col">APELLIDOS</th>
                <th scope="col">RESULTADOS</th>
                <th scope="col">ACCIONES</th>
            </tr>
        </thead>
        <tbody>
            @foreach($patients as $patient)
            <tr>
                <th>{{ $patient->id }}</th>
                <th>{{ $patient->documento }}</th>
                <th>{{ $patient->nombre }}</th>
                <th>{{ $patient->apellido }}</th>
                <th>
                <a href="{{route('patients.show' , $patient->id)}}" class="btn btn-link">Ver resultados</button>
                <th>
                    <form action="{{route('patients.destroy' , $patient->id)}}" method="POST">
                        @csrf
                        @method('DELETE') 
                        <a href="/patients/{{$patient->id}}/edit" class="btn btn-outline-primary">Editar</a>
                        <button type="submit" class="btn btn-outline-danger">Borrar</button>
                    </form>
                </th>
            </tr>
            @endforeach
        </tbody>
      </table>
      <a class="btn btn-secondary" href="patients/create">CREAR PACIENTE</a>
    
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
