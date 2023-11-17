
<!-- resources/views/inicio.blade.php -->
@extends('layouts.app')

@section('content')
    <!-- Contenido de la página 'inicio' -->


    <div class="contenido-ventas">
 

<div  class="menu-lateral-ventas">
    <ul>
    <a class="ultimo-carrito " href="http://localhost/usuarios/public/carrito"> <button class="boton-ultimo-carrito btn btn-success mb-3" > <i class="fa-solid fa-cart-shopping"></i> Carrito de compras<div class="numero-carrito">0</div> </button> </a> 
        <li  id="todos" class="boton-categoria" > Todos los productos</li> <hr>
        <li  id="aseo" class="boton-categoria">   Cuidado y aseo personal</li> <hr>
        <li  id="dolor" class="boton-categoria">  Alivio del dolor </li>  <hr>
        <li  id="salud-sexual" class="boton-categoria">Salud sexual</li> <hr>
        <li  id="dermatologicos" class="boton-categoria"> Dermocosmeticos</li> <hr>
        <li  id="gripa" class="boton-categoria"> Gripa y tos </li>  <hr>

       
       
    </ul>

</div>


<div id="contenedor-productos" class="productos ">


<div id="titulo-productos" class="titulo-productos "> Todos los productos</div>



</div>




</div>

<div class="paginacion" style="margin-top: 30px; margin-left:720px "></div>
<script src="{{ asset('ventas.js') }}"></script>

@endsection
