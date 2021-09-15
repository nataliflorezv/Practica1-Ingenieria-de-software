@extends('layouts.layout')

@section('css')
    <link href="https://cdn.datatables.net/1.11.0/css/dataTables.bootstrap5.min.css" rel="stylesheet">
@endsection
           
@section('content')
<header class='container-fluid'>
    <div class='row' style='height:600px; background-color:#CBF2FF'>
        <div class="col-12  text-center align-middle">
        <p class="text-start"> 
        <h3 style='color:#0E2D99'>¿Eres paciente?</h3>
            <h5 style='color:#031554'>Consulta tu resultado en linea</h5>
            <img src="{{asset('imagenes/perfil.png')}}"  alt="" width="120" height="120" ></img>
    
          
            <a class="btn btn-primary" href="{{route('paciente.create')}}">Ingresar</a>     </p>  

<br></br>
            
            <h3 style='color:#0E2D99'>¿Eres personal médico?</h3>
            <h5 style='color:#031554'>Ingresa a tu espacio de trabajo</h5>
            <img src="{{asset('imagenes/doctor .png')}}"  alt="" width="120" height="120" >
        </img>
        
        <a href="/login"  class="btn btn-primary">Ingresar</a>       
        </div>
        </div>

</header>
@endsection
