@extends('layouts.layout')

@section('content')
<br></br>
<h2 style='color:#16A085'>Ingrese su documento de identidad y el codigo asignado </h2>
<br></br>
<form action='/paciente' method="POST">
  @csrf
    <label for="" class="form-label">Documento</label>
    <input type="text" name="Documento" value=''>
    <button type="submit" class="btn btn-primary">Ingresar</button>
</form>

@endsection