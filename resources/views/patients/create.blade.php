@extends('layouts.layoutP')

@section('content')
    <h1 align='center' style='color:#16A085'>Formulario para la creación de pacientes</h1>
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
          <h6>Genero</h6>
          <div class="input-group mb-3">
            <label class="input-group-text" for="inputGroupSelect01">Genero</label>
            <select class="form-select"  id="sexo" name='sexo'>
              <option selected>Elige tu genero</option>
              <option value="Femenino">Femenino</option>
              <option value="Masculino">Masculino</option>
              <option value="Otro">Otro</option>
            </select>
          </div>
          <h6>EPS</h6>
          <div class="input-group mb-3">
            <label class="input-group-text" for="inputGroupSelect01">EPS</label>
            <select class="form-select"  id="eps" name='eps'>
              <option selected>Elige tu EPS</option>
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

