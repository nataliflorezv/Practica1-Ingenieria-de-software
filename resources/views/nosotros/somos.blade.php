@extends('layouts.layout')

@section('content')
<header class='container-fluid'>
  <div class="col-12  text-center align-middle">
        <h1 style='color:#16A085'> Laboratorio vida</h1>
        <h4> Expertos en la evaluación clínica del perfil lipídico </h4>
        <h3> Somos su aliado en diagnóstico</h3>
        <br></br>
        <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="{{asset('imagenes/4.jpg')}}"  width="150" height="250" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="{{asset('imagenes/2.png')}}" width="150" height="250" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                        <img src="{{asset('imagenes/5.jpg')}}" width="150" height="250" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                        <img src="{{asset('imagenes/6.jpg')}}" width="150" height="250" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                        <img src="{{asset('imagenes/1.jpg')}}" width="150" height="250" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                        <img src="{{asset('imagenes/3.jpg')}}" width="150" height="250" class="d-block w-100" alt="...">
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
            </button>
        </div>
    <br></br>
    <a href="/nosotros/create" class="btn btn-outline-info">Contáctanos</a>
    </div>
</header>
@endsection