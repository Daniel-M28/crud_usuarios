
<!-- resources/views/inicio.blade.php -->
@extends('layouts.app')

@section('content')
    <!-- Contenido de la página 'inicio' -->

    <header>
        <img src="{{asset ('logo-farmacia.png')}}" class="header1 img1" style="height: 150px; width:200px;margin-left: 300px">
           <div  style="margin-left: 500px; margin-top: 250px" class="titulo"> <h1 class="header1" > Bienvenidos - Nuestros servicios </h1> </div>
          
        </header>
        <div class="contenedor-cards-inicio">
        <div class="card-inicio-container">
          <!-- Tarjetas de arriba -->

          <a href="{{ route('citas.index')}}">
          <button class="card-inicio">
              <h2 class="titulo-card-inicio">Solicitud de citas</h2>
              <p>Solicita tu cita medica</button> </a>
         

            <a href="{{ route('tienda')}}">
            <button class="card-inicio">
              <h2 class="titulo-card-inicio">Visita nuestra tienda</h2>
              <p>Conoce nuestras ofertas</p> </button> </a>

            
            <a href="{{ route('preguntas')}}">
          <button class="card-inicio">
              <h2 class="titulo-card-inicio">Certificados medicos</h2>
              <p>Descarga tus certificados</p> </button></a>
          
          <!-- Tarjetas de abajo -->
          <a href="{{ route('preguntas')}}">
          <button class="card-inicio">
              <h2 class="titulo-card-inicio">Preguntas frecuentes</h2>
              <p>Resuelve tus dudas</p>
              </button></a>

              <a href="{{ route('pqrs')}}">
          <button class="card-inicio">
              <h2 class="titulo-card-inicio">PQRS</h2>
              <p>Te escuchamos</p>
              </button></a>

              <a href="{{ route('inventario.index')}}">
          <button class="card-inicio">
              <h2 class="titulo-card-inicio">Inventario/admin</h2>
              <p>Administradores</p>
              </button></a>
      </div>
</div>



@endsection




