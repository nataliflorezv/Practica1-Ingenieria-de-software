@extends('layouts.layoutP')

@section('content')
<br></br>
    <h1 style='color:#16A085'>Editar información del paciente.</h1>
    <form action="/patients/{{$patient->id}}" method="POST">
        @csrf
        @method('PUT')
        <div class="mb-3">
          <label for="" class="form-label">Documento</label>
          <input type="text" class="form-control" id="documento" name="documento" value="{{$patient->documento}}">
        </div>
        <div class="mb-3">
          <label for="" class="form-label">Nombre</label>
          <input type="text" class="form-control" id="nombre" name="nombre" value="{{$patient->nombre}}">
        </div>
        <div class="mb-3">
            <label for="" class="form-label">Apellidos</label>
            <input type="text" class="form-control" id="apellido" name="apellido" value="{{$patient->apellido}}">
          </div>
          <div class="mb-3">
            <label for="" class="form-label">Sexo</label>
            <input type="text" class="form-control" id="sexo" name="sexo" value="{{$patient->sexo}}">
          </div>
          <div class="mb-3">
            <label for="" class="form-label">EPS</label>
            <input type="text" class="form-control" id="eps" name="eps"  value="{{$patient->eps}}">
          </div>
          <div class="mb-3">
            <label for="" class="form-label">Resultado ColTotal</label>
            <input type="text" class="form-control" id="resultadoColTotal" name="resultadoColTotal"  value="{{$patient->resultadoColTotal}}">
          </div>
          <div class="mb-3">
            <label for="" class="form-label">Resultado Trigliceridos</label>
            <input type="text" class="form-control" id="resultadoTrigliceridos" name="resultadoTrigliceridos"  value="{{$patient->resultadoTrigliceridos}}">
          </div>
          <div class="mb-3">
            <label for="" class="form-label">Resultado HDL</label>
            <input type="text" class="form-control" id="resultadoHDL" name="resultadoHDL"  value="{{$patient->resultadoHDL}}">
          </div>
          <div class="mb-3">
            <label for="" class="form-label">Resultado LDL</label>
            <input type="text" class="form-control" id="resultadoLDL" name="resultadoLDL"  value="{{$patient->resultadoLDL}}">
          </div>
          <a href="/patients" class="btn btn-secondary">Cancelar</a>
        <button type="submit" class="btn btn-primary">Guardar</button>
      </form>
@endsection

