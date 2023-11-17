<!-- resources/views/inicio.blade.php -->
@extends('layouts.app')

@section('content')
    <!-- Contenido de la página 'inicio' -->
<div class="contenedor-formulario-citas">
    <h1>Formulario de Citas Médicas</h1>
    <form action="procesar_cita.php" method="post">
        <label for="nombre">Nombre</label>
        <input type="text" id="nombre" name="nombre" required><br><br>

        <label for="cedula">Cedula</label>
        <input type="text" id="cedula" name="cedula" required><br><br>

        <label for="fecha">Fecha </label>
        <input type="date" id="fecha" name="fecha" required><br><br>

        <label for="hora">Hora de Cita:</label>
        <input type="time" id="hora" name="hora" required><br><br>

        <input type="submit" value="Solicitar Cita">
    </form>
</div>

    @endsection