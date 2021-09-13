@extends('layouts.layoutP')

@section('css')
    <link href="https://cdn.datatables.net/1.11.0/css/dataTables.bootstrap5.min.css" rel="stylesheet">
@endsection

@section('content')

@php
    $contadorT1 = 0;
    $contador2 = 0;
    $Rd1=0;
    $Rd2=0;
    $R1=0;
    $R=0;
    $RmT1=0;
    $RmT2=0;
    $MT1=0;
    $MT2=0;
    $DT1=0;
    $DT2=0;

    $contadorC1 = 0;
    $contadorC2 = 0;
    $Rd1=0;
    $Rd2=0;
    $R1=0;
    $R2=0;
    $RmC1=0;
    $RmC2=0;
    $MC1=0;
    $MC2=0;
    $DC1=0;
    $DC2=0;

    $contadorH1 = 0;
    $contadorH2 = 0;
    $Rd1=0;
    $Rd2=0;
    $R1=0;
    $R2=0;
    $RmH1=0;
    $RmH2=0;
    $MH1=0;
    $MH2=0;
    $DH1=0;
    $DH2=0;

    $contadorL1 = 0;
    $contadorL2 = 0;
    $Rd1=0;
    $Rd2=0;
    $R1=0;
    $R2=0;
    $RmL1=0;
    $RmL2=0;
    $ML1=0;
    $ML2=0;
    $DL1=0;
    $DL2=0;
@endphp

<br></br>
<h1 style='color:#16A085'>CONSULTA CONTROL DE CALIDAD</h1>
<br></br>
<table class="table table-striped table-hover" id="controls">
    <thead>
        <tr>
            <th scope="col">FECHA</th>
            <th scope="col">PRUEBA</th>
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
        <th>{{ $control->Prueba}}</th>
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
        @if ($control->Prueba)=="Triglicéridos"
        </tr>
        <?php $RmT1 = $control->Resultado1 +$RmT1;?>
        <?php $RmT2 = $control->Resultado2+$RmT2;?>
        <?php $contadorT1 = $contadorT1+1?>

        @elif ($control->Prueba)=="Colesterol"
        </tr>
        <?php $RmC1 = $control->Resultado1 +$RmC1;?>
        <?php $RmC2 = $control->Resultado2+$RmC2;?>
        <?php $contadorC1 = $contadorC1+1?>

        @elif ($control->Prueba)=="HDL"
        </tr>
        <?php $RmH1 = $control->Resultado1 +$RmH1;?>
        <?php $RmH2 = $control->Resultado2+$RmH2;?>
        <?php $contadorH1 = $contadorH1+1?>

        @elif ($control->Prueba)=="LDL"
        </tr>
        <?php $RmL1 = $control->Resultado1 +$RmL1;?>
        <?php $RmL2 = $control->Resultado2+$RmL2;?>
        <?php $contadorL1 = $contadorL1+1?>

        @endif



    @endforeach

    @if($contadorT1 > 0)
        <?php $MT1 = $RmT1/$contadorT1;?>
        <?php $MT2 = $RmT2/$contadorT1;?>
    @else
        <?php $MT1 = 0;?>
        <?php $MT2 = 0;?>
    @endif

    @if($contadorC1 > 0)
        <?php $MC1 = $RmC1/$contadorC1;?>
        <?php $MC2 = $RmC2/$contadorC1;?>
    @else
        <?php $MC1 = 0;?>
        <?php $MC2 = 0;?>
    @endif

    @if($contadorH1 > 0)
        <?php $MH1 = $RmH1/$contadorH1;?>
        <?php $MH2 = $RmH2/$contadorH1;?>
    @else
        <?php $MH1 = 0;?>
        <?php $MH2 = 0;?>
    @endif

    @if($contadorL1 > 0)
        <?php $ML1 = $RmL1/$contadorL1;?>
        <?php $ML2 = $RmL2/$contadorL1;?>
    @else
        <?php $ML1 = 0;?>
        <?php $ML2 = 0;?>
    @endif
    

    @foreach($controls as $control)
        <?php $R1 = pow($control->Resultado1-$MT1,2);?>
        <?php $R2 = pow($control->Resultado2-$MT2,2);?>
        <?php $Rd1 = $Rd1+$R1;?>
        <?php $Rd2 = $Rd2+$R2;?>
        <?php $contador2 = $contador2+1?>


    @endforeach

    @if($contador2 > 1)
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
            <th scope="col">PRUEBA</th>
            <th scope="col">DESVIACION NIVEL1</th>
            <th scope="col">MEDIA NIVEL1</th>
            <th scope="col">DESVIACION NIVEL2</th>
            <th scope="col">MEDIA NIVEL2</th>

        </tr>
    </thead>
    <tbody>
        <tr>
        <th>Triglicéridos</th>
        <th>{{ $DT1}}</th>
        <th>{{ $MT1}}</th>
        <th>{{ $DT2}}</th>
        <th>{{ $MT2}}</th>
        </tr>
        <tr>
        <th>Colesterol</th>
        <th>{{ $DC1}}</th>
        <th>{{ $MC1}}</th>
        <th>{{ $DC2}}</th>
        <th>{{ $MC2}}</th>
        </tr>
        <tr>
        <th>HDL</th>
        <th>{{ $DH1}}</th>
        <th>{{ $MH1}}</th>
        <th>{{ $DH2}}</th>
        <th>{{ $MH2}}</th>
        </tr>
        <tr>
        <th>LDL</th>
        <th>{{ $DL1}}</th>
        <th>{{ $ML1}}</th>
        <th>{{ $DL2}}</th>
        <th>{{ $ML2}}</th>
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

