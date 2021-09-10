@extends('layouts.layoutP')

@section('content')
    <h1 style='color:#16A085'>Formulario para la creación de pacientes</h1>
    <br></br>
    <form action="/patients" method="POST">
        @csrf
        <div class="mb-3">
          <label for="" class="form-label">Documento</label>
          <input type="text" class="form-control" id="documento" name="documento">
        </div>
        <div class="mb-3">
          <label for="" class="form-label">Nombre</label>
          <input type="text" class="form-control" id="nombre" name="nombre">
        </div>
        <div class="mb-3">
            <label for="" class="form-label">Apellidos</label>
            <input type="text" class="form-control" id="apellido" name="apellido">
          </div>
          <div class="mb-3">
            <label for="" class="form-label">Sexo</label>
            <input type="text" class="form-control" id="sexo" name="sexo">
          </div>
          <div class="mb-3">
            <label for="" class="form-label">EPS</label>
            <input type="text" class="form-control" id="eps" name="eps">
          </div>
          <div class="mb-3">
            <label for="" class="form-label">Resultado Colesterol</label>
            <input type="text" class="form-control" id="resultadoColTotal" name="resultadoColTotal">
          </div>
          <div class="mb-3">
            <label for="" class="form-label">Resultado Trigliceridos</label>
            <input type="text" class="form-control" id="resultadoTrigliceridos" name="resultadoTrigliceridos">
          </div>
          <div class="mb-3">
            <label for="" class="form-label">Resultado HDL</label>
            <input type="text" class="form-control" id="resultadoHDL" name="resultadoHDL">
          </div>
          <div class="mb-3">
            <label for="" class="form-label">Resultado LDL</label>
            <input type="text" class="form-control" id="resultadoLDL" name="resultadoLDL">
          </div>
          <a href="/patients" class="btn btn-secondary">Cancelar</a>
        <button type="submit" class="btn btn-primary">Guardar</button>
      </form>
@endsection

