
<!-- resources/views/inicio.blade.php -->
@extends('layouts.app')

@section('content')
    <!-- Contenido de la página 'inicio' -->


    <div class="contenido-ventas-carrito ">


<div id="titulo-carrito" class="titulo-carrito "> <h2>carrito de compras</h2> 

<p class="carro-vacio"> Tu carrito esta vacio <i class="fa-regular fa-face-frown-open"></i></p> 

</div>

<div id="titulo2-carrito" class="titulo2-carrito "> <h2 class="titulo-compra-carro"></h2> 

<p class="carro-compra">  <i class="fa-regular fa-face-laugh-beam"></i></p> 

</div>



<div class="menu-lateral-carrito">

<a class="seguir-compra" href="http://localhost/usuarios/public/tienda"> <button class="boton-seguir-compra btn btn-warning"> <i class="fa-solid fa-basket-shopping "></i> seguir comprando</button> </a> 




</div>



<div id="productos-carrito" class="productos-carrito ">
</div>
 <!-- los productos van en js-->
 <div id="botones-compra-carrito" class="botones-compra-carrito">
     <div >
         <button id="vaciar-carrito" class="vaciar-carrito btn btn-danger">vaciar carrito</button>
         
     </div>
            <div class="botones-derecha">
                 <div class="total-carrito"> <p id="precio-total" class="precio-total"> Total $3.000</p>
           </div>
                  <button id="boton-comprar-carrito" class="boton-comprar-carrito btn btn-success">comprar ahora</button></div>
 
 
         </div>
 








</div>


<script src="{{ asset('carrito.js') }}"></script>

@endsection
