<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>LIS</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
        <!-- CSS only -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">

    </head>
    <body>
           
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
        <img src="{{asset('imagenes/medico2.png')}}"  alt="" width="50" height="50" class="d-inline-block align-text-top"></img>
        <a class="navbar-brand" href="#">Laboratorio VIDA</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
        <li class="nav-item">
        <a class="nav-link active" aria-current="page" href="#">Quiénes somos?</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Contáctenos</a>
        </li>
      </ul>
    </div>
  </div>
</nav>
    <header class='container-fluid'>
        <div class='row' style='height:600px; background-color:#CBF2FF'>
            <div class="col-12  text-center align-middle">
            <p class="text-start"> 
            <h3 style='color:#0E2D99'>¿Eres paciente?</h3>
                <h5 style='color:#031554'>Consulta tu resultado en linea</h5>
                <img src="{{asset('imagenes/perfil.png')}}"  alt="" width="120" height="120" ></img>
        
             
                <a class="btn btn-primary" href="/login/loginpaciente">Ingresar</a>     </p>  

<br></br>
                
                <h3 style='color:#0E2D99'>¿Eres personal médico?</h3>
                <h5 style='color:#031554'>Ingresa a tu espacio de trabajo</h5>
                <img src="{{asset('imagenes/doctor .png')}}"  alt="" width="120" height="120" >
            </img>
            
            <a href="/login"  class="btn btn-primary">Ingresar</a>       
            </div>
            </div>

    </header>
</body>

</html>
