@extends('layouts.layoutP')

@section('css')
    <link href="https://cdn.datatables.net/1.11.0/css/dataTables.bootstrap5.min.css" rel="stylesheet">
@endsection

@section('content')

@php
    $contador1 = 0;
    $contador2 = 0;
    $Rd1=0;
    $Rd2=0;
    $R1=0;
    $R2=0;
    $Rm1=0;
    $Rm2=0;
    $M1=0;
    $M2=0;
    $D1=0;
    $D2=0;
@endphp

<br></br>
<h1 style='color:#16A085'>CONSULTA CONTROL DE CALIDAD</h1>
<br></br>
<table class="table table-striped table-hover" id="controls">
    <thead>
        <tr>
            <th scope="col">FECHA</th>
            <th scope="col">MINIMO1</th>
            <th scope="col">MAXIMO1</th>
            <th scope="col">RESULTADO1</th>
            <th scope="col">MINIMO2</th>
            <th scope="col">MAXIMO2</th>
            <th scope="col">RESULTADO2</th>
        </tr>
    </thead>
    <tbody>
    @foreach($controls as $control)
        <tr>  
        <th>{{ $control->Fecha}}</th>
        <th>{{ $control->Minimo1}}</th>
        <th>{{ $control->Maximo1}}</th>

        @if ($control->Resultado1 < $control->Maximo1)  
            @if($control->Resultado1 < $control->Minimo1)
            <th style='color:#E74C3C'>{{ $control->Resultado1}}</th>
            @else
            <th>{{ $control->Resultado1}}</th>
            @endif
        @else
            <th style='color:#E74C3C'>{{ $control->Resultado1}}</th>

        @endif

        <th>{{ $control->Minimo2}}</th>
        <th>{{ $control->Maximo2}}</th>

        @if ($control->Resultado2 < $control->Maximo2)  
            @if($control->Resultado2 < $control->Minimo2)
            <th style='color:#E74C3C'>{{ $control->Resultado2}}</th>
            @else
            <th>{{ $control->Resultado2}}</th>
            @endif
        @else
            <th style='color:#E74C3C'>{{ $control->Resultado2}}</th>

        @endif
        </tr>
        <?php $Rm1 = $control->Resultado1 +$Rm1;?>
        <?php $Rm2 = $control->Resultado2+$Rm2;?>
        <?php $contador1 = $contador1+1?>

    @endforeach

    @if($contador1 > 0)
        <?php $M1 = $Rm1/$contador1;?>
        <?php $M2 = $Rm2/$contador1;?>
    @else
        <?php $M1 = 0;?>
        <?php $M2 = 0;?>
    @endif

    @foreach($controls as $control)
        <?php $R1 = pow($control->Resultado1-$M1,2);?>
        <?php $R2 = pow($control->Resultado2-$M2,2);?>
        <?php $Rd1 = $Rd1+$R1;?>
        <?php $Rd2 = $Rd2+$R2;?>
        <?php $contador2 = $contador2+1?>


    @endforeach

    @if($contador2 > 0)
        <?php $D1 = sqrt($Rd1/($contador2-1));?>
        <?php $D2 = sqrt($Rd2/($contador2-1));?>
    @else
        <?php $D1 = 0;?>
        <?php $D2 = 0;?>
    @endif

    </tbody>
    </table>

    <br></br>
    <h2 style='color:#16A085'>Estadísticas</h2>
<table class="table table-striped table-hover" id="control">
    <thead>
        <tr>
            <th scope="col">DESVIACION NIVEL1</th>
            <th scope="col">MEDIA NIVEL1</th>
            <th scope="col">DESVIACION NIVEL2</th>
            <th scope="col">MEDIA NIVEL2</th>

        </tr>
    </thead>
    <tbody>
        <tr>
        <th>{{ $D1}}</th>
        <th>{{ $M1}}</th>
        <th>{{ $D2}}</th>
        <th>{{ $M2}}</th>
        </tr>

    </tbody>
    </table>  
    <a class="btn btn-secondary" href="{{route('controls.create')}}">NUEVO CONTROL</a>
  
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

