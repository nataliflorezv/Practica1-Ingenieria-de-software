@extends('layouts.layout')

@section('content')
<header class='container-fluid'>
<div class='row' style='height:600px; background-color:#CBF2FF'>
  <div class="col-12  text-center align-middle">
  <br></br>
      <h2 style='color:#16A085'>Ingrese con su documento y contraseña</h2>
      <br></br>
      <form action='' method="POST">
        @csrf
        <!-- @method('PUT') -->
        <!-- <div class="mb-3">
          <label for="" class="form-label">Documento</label>
          <input type="text" class="form-control" id="documento" name="documento" value="">
        </div>
        <div class="mb-3">
          <label for="" class="form-label">Contraseña</label>
          <input type="text" class="form-control" id="contraseña" name="contraseña" value="">
        </div> -->
        <div class="mb-3">
        <label>
          <input type='email' class="form-control" placeholder='Email'>
          </div>
        </label><br>
        <div class="mb-3">
        <label>
          <input type='password' class="form-control" placeholder='Contraseña'>
          </div>
        </label><br>
        <button type="submit">Ingresar</button>
      </form>
      <!-- <a href="/patients" class="btn btn-secondary">Ingresar</a> -->
      
  </div>
</div>
</header>
@endsection

    