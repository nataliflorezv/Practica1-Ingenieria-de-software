@extends('layouts.layout')

@section('content')
<header class='container-fluid'>
<div class='row' style='height:600px; background-color:#CBF2FF'>
  <div class="col-12  text-center align-middle">
  <br></br>
      <h2 style='color:#16A085'>Ingrese con su documento y contraseña</h2>
      <br></br>
      <form  method="POST">
        @csrf
        @method('PUT')
        <div class="mb-3">
          <label for="" class="form-label">Email</label>
          <input type="email" class="form-control" id="Documento" name="Documento" value="">
        </div>
        <div class="mb-3">
          <label for="" class="form-label">Contraseña</label>
          <input type="password" class="form-control" id="Contraseña" name="Contraseña" value="">
        </div>
        <button type="submit" class="btn btn-primary">Ingresar</button>
      </form>
  </div>
</div>
</header>

@endsection  