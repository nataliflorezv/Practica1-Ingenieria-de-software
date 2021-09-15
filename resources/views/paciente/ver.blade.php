@extends('layouts.layout')

@section('content')
<br></br>
<header class='container-fluid'>
  <div class="col-12  text-center align-middle">
    <h1 style='color:#16A085'> Bienvenido {{ $patient->nombre}} {{ $patient->apellido}}</h1>
    <br></br>
    <a href="{{route('paciente.show', $id)}}" class="btn btn-outline-primary">VER MIS RESULTADOS</a>

      
  
    
  </div>
</header>
@endsection