@extends('layouts.layoutP')

@section('content')
<h1 style='color:#16A085' align='center' >Ingreso control de calidad</h1>
<br></br>
<form action="/controls" method="POST">
    @csrf
    <h6>Prueba</h6>
          <div class="input-group mb-3">
            <label class="input-group-text" for="inputGroupSelect01">Prueba</label>
            <select class="form-select"  id="Prueba" name='Prueba'>
              <option selected>Elige la prueba</option>
              <option value="Colesterol">Colesterol</option>
              <option value="Triglicéridos">Triglicéridos</option>
              <option value="HDL">HDL</option>
              <option value="LDL">LDL</option>
            </select>
          </div>
    <div class="mb-3">
      <label for="" class="form-label">Minimo1</label>
      <input type="text" class="form-control" id="Minimo1" name="Minimo1">
    </div>
    <div class="mb-3">
      <label for="" class="form-label">Maximo1</label>
      <input type="text" class="form-control" id="Maximo1" name="Maximo1">
    </div>
    <div class="mb-3">
      <label for="" class="form-label">Resultado1</label>
      <input type="text" class="form-control" id="Resultado1" name="Resultado1">
    </div>
    <div class="mb-3">
        <label for="" class="form-label">Minimo2</label>
        <input type="text" class="form-control" id="Minimo2" name="Minimo2">
      </div>
      <div class="mb-3">
        <label for="" class="form-label">Maximo2</label>
        <input type="text" class="form-control" id="Maximo2" name="Maximo2">
      </div>
      <div class="mb-3">
        <label for="" class="form-label">Resultado2</label>
        <input type="text" class="form-control" id="Resultado2" name="Resultado2">
      </div>
      <a href="/patients" class="btn btn-secondary">Cancelar</a>
    <button type="submit" class="btn btn-primary">Guardar</button>
  </form>
@endsection

