@extends('layouts.layoutP')

@section('css')
    <link href="https://cdn.datatables.net/1.11.0/css/dataTables.bootstrap5.min.css" rel="stylesheet">
@endsection

@section('content')

@php
    $contadorT1 = 0;
    $contadorT2 = 0;
    $RTd1=0;
    $RTd2=0;
    $RT1=0;
    $RT2=0;
    $RmT1=0;
    $RmT2=0;
    $MT1=0;
    $MT2=0;
    $DT1=0;
    $DT2=0;

    $contadorC1 = 0;
    $contadorC2 = 0;
    $RCd1=0;
    $RCd2=0;
    $RC1=0;
    $RC2=0;
    $RmC1=0;
    $RmC2=0;
    $MC1=0;
    $MC2=0;
    $DC1=0;
    $DC2=0;

    $contadorH1 = 0;
    $contadorH2 = 0;
    $RHd1=0;
    $RHd2=0;
    $RH1=0;
    $RH2=0;
    $RmH1=0;
    $RmH2=0;
    $MH1=0;
    $MH2=0;
    $DH1=0;
    $DH2=0;

    $contadorL1 = 0;
    $contadorL2 = 0;
    $RLd1=0;
    $RLd2=0;
    $RL1=0;
    $RL2=0;
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
            <th scope="col">Fecha</th>
            <th scope="col">Prueba</th>
            <th scope="col">Min1</th>
            <th scope="col">Max1</th>
            <th scope="col">Resultado1</th>
            <th scope="col">Min2</th>
            <th scope="col">Max2</th>
            <th scope="col">Resultado2</th>
        </tr>
    </thead>
    <tbody>
    @foreach($controls as $control)
        <tr>  
        <th>{{ $control->created_at}}</th>
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
        
        @if ($control->Prueba == 'Triglicéridos')   
           
        <?php $RmT1 = $control->Resultado1 +$RmT1;?>
        <?php $RmT2 = $control->Resultado2+$RmT2;?>
        <?php $contadorT1 = $contadorT1+1?>

        @endif

        @if ($control->Prueba == 'Colesterol')
        
        <?php $RmC1 = $control->Resultado1 +$RmC1;?>
        <?php $RmC2 = $control->Resultado2+$RmC2;?>
        <?php $contadorC1 = $contadorC1+1?>

        @endif

        @if ($control->Prueba =="HDL")
        
        <?php $RmH1 = $control->Resultado1 +$RmH1;?>
        <?php $RmH2 = $control->Resultado2+$RmH2;?>
        <?php $contadorH1 = $contadorH1+1?>
        
        @elseif ($control->Prueba =="LDL")

        <?php $RmL1 = $control->Resultado1 +$RmL1;?>
        <?php $RmL2 = $control->Resultado2+$RmL2;?>
        <?php $contadorL1 = $contadorL1+1?>

        @endif



    @endforeach

    @if($contadorT1 > 0)
        <?php $MT1 = round($RmT1/$contadorT1,3);?>
        <?php $MT2 = round($RmT2/$contadorT1,3);?>
    @else
        <?php $MT1 = 0;?>
        <?php $MT2 = 0;?>
    @endif

    @if($contadorC1 > 0)
        <?php $MC1 = round($RmC1/$contadorC1,3);?>
        <?php $MC2 = round($RmC2/$contadorC1,3);?>
    @else
        <?php $MC1 = 0;?>
        <?php $MC2 = 0;?>
    @endif

    @if($contadorH1 > 0)
        <?php $MH1 = round($RmH1/$contadorH1,3);?>
        <?php $MH2 = round($RmH2/$contadorH1,3);?>
    @else
        <?php $MH1 = 0;?>
        <?php $MH2 = 0;?>
    @endif

    @if($contadorL1 > 0)
        <?php $ML1 = round($RmL1/$contadorL1,3);?>
        <?php $ML2 = round($RmL2/$contadorL1,3);?>
    @else
        <?php $ML1 = 0;?>
        <?php $ML2 = 0;?>
    @endif
    

    @foreach($controls as $control)
    
    @if ($control->Prueba =="Triglicéridos")
        <?php $RT1 = round(pow($control->Resultado1-$MT1,2),3);?>
        <?php $RT2 = round(pow($control->Resultado2-$MT2,2),3);?>
        <?php $RTd1 = round(($RTd1+$RT1),3);?>
        <?php $RTd2 = round(($RTd2+$RT2),3);?>
        <?php $contadorT2 = $contadorT2+1?>

    @elseif ($control->Prueba =="Colesterol")
        <?php $RC1 = round(pow($control->Resultado1-$MC1,2),3);?>
        <?php $RC2 = round(pow($control->Resultado2-$MC2,2),3);?>
        <?php $RCd1 = round($RCd1+$RC1,3);?>
        <?php $RCd2 =round($RCd2+$RC2,3);?>
        <?php $contadorC2 = $contadorC2+1?>
    
    @elseif ($control->Prueba =="HDL")
        <?php $RH1 = round(pow($control->Resultado1-$MH1,2),3);?>
        <?php $RH2 = round(pow($control->Resultado2-$MH2,2),3);?>
        <?php $RHd1 = round($RHd1+$RH1,3);?>
        <?php $RHd2 = round($RHd2+$RH2,3);?>
        <?php $contadorH2 = $contadorH2+1?>
    
    @elseif ($control->Prueba =="LDL")
        <?php $RL1 = round(pow($control->Resultado1-$ML1,2),3);?>
        <?php $RL2 = round(pow($control->Resultado2-$ML2,2),3);?>
        <?php $RLd1 = round($RLd1+$RL1,3);?>
        <?php $RLd2 = round($RLd2+$RL2,3);?>
        <?php $contadorL2 = $contadorL2+1?>

    @endif
    @endforeach
   

    @if($contadorT2 > 1)
        <?php $DT1 = round(sqrt($RTd1/($contadorT2-1)),3);?>
        <?php $DT2 = round(sqrt($RTd2/($contadorT2-1)),3);?>
        <?php $CT1 = round($DT1/$MT1,3);?>
        <?php $CT2 = round($DT2/$MT2,3);?>

    @else
        <?php $DT1 = 0;?>
        <?php $DT2 = 0;?>
        <?php $CT1 = 0;?>
        <?php $CT2 = 0;?>
        

    @endif

    @if($contadorC2 > 1)
        <?php $DC1 = round(sqrt($RCd1/($contadorC2-1)),3);?>
        <?php $DC2 = round(sqrt($RCd2/($contadorC2-1)),3);?>
        <?php $CC1 = round($DC1/$MC1,3);?>
        <?php $CC2 = round($DC2/$MC2,3);?>
    @else
        <?php $DC1 = 0;?>
        <?php $DC2 = 0;?>
        <?php $CC1 = 0;?>
        <?php $CC2 = 0;?>
    @endif

    @if($contadorH2 > 1)
        <?php $DH1 = round(sqrt($RHd1/($contadorH2-1)),3);?>
        <?php $DH2 = round(sqrt($RHd2/($contadorH2-1)),3);?>
        <?php $CH1 = round($DH1/$MH1,3);?>
        <?php $CH2 = round($DH2/$MH2,3);?>
    @else
        <?php $DH1 = 0;?>
        <?php $DH2 = 0;?>
        <?php $CH1 = 0;?>
        <?php $CH2 = 0;?>
    @endif

    @if($contadorL2 > 1)
        <?php $DL1 = round(sqrt($RLd1/($contadorL2-1)),3);?>
        <?php $DL2 = round(sqrt($RLd2/($contadorL2-1)),3);?>
        <?php $CL1 = round($DL1/$ML1,3);?>
        <?php $CL2 = round($DL2/$ML2,3);?>
    @else
        <?php $DL1 = 0;?>
        <?php $DL2 = 0;?>
        <?php $CL1 = 0;?>
        <?php $CL2 = 0;?>
    @endif

    </tbody>
    </table>

    <br></br>
    <h2 style='color:#16A085'>Estadísticas</h2>
<table class="table table-striped table-hover" id="control">
    <thead>
        <tr>
            <th scope="col">Prueba</th>
            <th scope="col">Desviacion1</th>
            <th scope="col">Media1</th>
            <th scope="col">Variacion1</th>
            <th scope="col">Desviacion2</th>
            <th scope="col">Media2</th>
            <th scope="col">Variacion2</th>
        </tr>
    </thead>
    <tbody>
        <tr>
        <th>Triglicéridos</th>
        <th>{{ $DT1}}</th>
        <th>{{ $MT1}}</th>
        <th>{{ $CT1}}</th>
        <th>{{ $DT2}}</th>
        <th>{{ $MT2}}</th>
        <th>{{ $CT2}}</th>
        </tr>

        <tr>
        <th>Colesterol</th>
        <th>{{ $DC1}}</th>
        <th>{{ $MC1}}</th>
        <th>{{ $CC1}}</th>
        <th>{{ $DC2}}</th>
        <th>{{ $MC2}}</th>
        <th>{{ $CC2}}</th>
        </tr>
        <tr>
        <th>HDL</th>
        <th>{{ $DH1}}</th>
        <th>{{ $MH1}}</th>
        <th>{{ $CH1}}</th>
        <th>{{ $DC2}}</th>
        <th>{{ $MH2}}</th>
        <th>{{ $CH2}}</th>
        </tr>
        <tr>
        <th>LDL</th>
        <th>{{ $DL1}}</th>
        <th>{{ $ML1}}</th>
        <th>{{ $CL1}}</th>
        <th>{{ $DL2}}</th>
        <th>{{ $ML2}}</th>
        <th>{{ $CL2}}</th>
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
    $('#controls').DataTable({
        "lengthMenu" : [[5,10,50,-1] , [5,10,50,"All"]],

        "language": {
        processing:     "Procesando...",
        search:         "Buscar:",
        lengthMenu:    "Mostrar _MENU_ controles",
        info:           "Mostrando _START_ a _END_ de _TOTAL_ controles",
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

