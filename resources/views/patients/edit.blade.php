@extends('layouts.layoutP')

@section('content')
<br></br>
    <h1 align='center' style='color:#16A085' >Editar información del paciente.</h1>
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
          <h6>Genero</h6>
          <div class="input-group mb-3">
            <label class="input-group-text" for="inputGroupSelect01">Genero</label>
            <select class="form-select"  id="sexo" name='sexo' value="{{$patient->sexo}}">
              <option selected>{{$patient->sexo}}</option>
              <option value="Femenino">Femenino</option>
              <option value="Masculino">Masculino</option>
              <option value="Otro">Otro</option>
            </select>
          </div>
          <h6>EPS</h6>
          <div class="input-group mb-3">
            <label class="input-group-text" for="inputGroupSelect01">EPS</label>
            <select class="form-select"  id="eps" name='eps'>
              <option selected>{{$patient->eps}}</option>
              <option value="SURA">SURA</option>
              <option value="COLSANITAS">COLSANITAS</option>
              <option value="COMEVA">COMEVA</option>
              <option value="SUMIMEDICAL">SUMIMEDICAL</option>
              <option value="NUEVA EPS">NUEVA EPS</option>
              <option value="SISBEN">SISBEN</option>
              <option value="SALUD TOTAL">SALUD TOTAL</option>
              <option value="SAVIA SALUD">SAVIA SALUD</option>
              <option value="CAFE SALUD">CAFE SALUD</option>
              <option value="SALUDCOP">SALUDCOP</option>
              <option value="OTRA">OTRA</option>
            </select>
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

