@extends('layouts.layout')

@section('content')
<br></br>
<h2 style='color:#16A085'>Ingrese su documento de identidad </h2>

<form  method="POST">
  @csrf
  @method('PUT')
    <label for="" class="form-label">Documento</label>
    <input type="text" name="documento" value=''>
    <button type="submit" class="btn btn-primary">Ingresar</button>
</form>

<!-- $documento=basename($_FILES['documento']['name']); -->

<a href="{{route('patients.show', 4)}}" class="btn btn-secondary">Ingresar</a>

@endsection