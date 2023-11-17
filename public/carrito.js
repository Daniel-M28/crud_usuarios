let productosEnCarrito = localStorage.getItem("productos-en-carrito");
productosEnCarrito = JSON.parse(productosEnCarrito);

const contenedorCarritoVacio = document.querySelector("#titulo-carrito");
const contenedorCarritoCompra = document.querySelector("#titulo2-carrito");
const contenedorCarritoProductos = document.querySelector("#productos-carrito");
const contenedorCarritoBotones = document.querySelector("#botones-compra-carrito");
let botonesEliminar = document.querySelectorAll(".eliminar-producto-carrito");
const botonVaciar = document.querySelector("#vaciar-carrito")
const total = document.querySelector("#precio-total")



function generarFactura(productosEnCarrito) {
  // Genera un ID único para la factura usando el timestamp actual
  const idFactura = new Date().getTime();

  // Obtiene la fecha actual
  const fechaActual = new Date();

  // Formatea la fecha en un formato legible
  const fechaFormateada = `${fechaActual.getDate()}/${fechaActual.getMonth() + 1}/${fechaActual.getFullYear()} ${fechaActual.getHours()}:${fechaActual.getMinutes()}`;

  let factura = `<div style='color:#48e;text-align:center;'> <img src='logo-farmacia.png' style='height:60px; width:80px; margin-left:-50px;'> === Factura === <br>`;
  factura += `<div style='color: black; text-align: center;'>ID Factura: ${idFactura}</div>`;
  factura += `<div style='color: black; text-align: center;'>Fecha: ${fechaFormateada}</div><br>`;
  factura += `<div style='text-align:center;'><hr style='border: 1px solid black;'></div><br>`;

  let total = 0;

  productosEnCarrito.forEach((producto, index) => {
    factura += `<div style='color:black; text-align:start;'> <br><br> Producto: <div style='color:black; text-align:end;'> ${producto.titulo}\n`;
    factura += `<div style='color:black; text-align:start;'> Cantidad:  <div style='text-align:end;'>${producto.cantidad}\n`;
    factura += `<div style='color:black; text-align:start;'> Precio unitario:  <div style='text-align:end;'>${producto.precio}\n`;
    factura += `<div style='color:black; text-align:start;'> Subtotal:  <div style='text-align:end;'> ${producto.precio * producto.cantidad}\n\n`;

    total += producto.precio * producto.cantidad;

    // Agrega una línea de separación después de cada producto, excepto el último
    if (index < productosEnCarrito.length - 1) {
      factura += `<div style='text-align:center;'><hr style='border: 1px solid black;'></div><br>`;
    }
  });

  factura += `<div style='text-align:center;'><hr style='border: 1px solid black;'></div><br>`;
  factura += `<div style='color:#48e; text-align:center;'><br><br>Total: $${total}\n\n<br><br>¡Gracias por tu compra!</div>`;

  // Actualiza el contenido del elemento HTML con la factura
  const elementoCarroCompra = document.querySelector(".carro-compra");
  elementoCarroCompra.innerHTML = `${factura}`;
}



const botonComprar = document.querySelector("#boton-comprar-carrito")



// Agrega esta función donde manejas el evento de clic en "Comprar ahora"
botonComprar.addEventListener("click", () => {
    // Primero, generamos la factura
    generarFactura(productosEnCarrito);
  
    // Luego, limpiamos el carrito y actualizamos la interfaz
    productosEnCarrito.length = 0;
    localStorage.setItem("productos-en-carrito", JSON.stringify(productosEnCarrito));
    cargarProductosCarrito();
  });
  


function cargarProductosCarrito(){

if(productosEnCarrito && productosEnCarrito.length > 0) {


contenedorCarritoVacio.classList.add("disabled");
contenedorCarritoProductos.classList.remove ("disabled");
contenedorCarritoBotones.classList.remove ("disabled");
contenedorCarritoCompra.classList.add ("disabled");

contenedorCarritoProductos.innerHTML= ""  

 productosEnCarrito.forEach(producto =>{
    
const div = document.createElement("div");
div.classList.add ("carrito-producto");
div.innerHTML = `
<div class="detalles-producto-carrito">
<img class="img-producto-carrito" src="${producto.imagen}">

<div>
<h4 style="font-size:16px;font-weight:bold">producto</h4>
<p>${producto.titulo}</p>
</div>

<div ><h4 style="font-size:16px;font-weight:bold">cantidad </h4>
<p> ${producto.cantidad} </p>
</div>

<div>
<h4 style="font-size:16px;font-weight:bold">precio</h4>
<p>${producto.precio}</p>
</div>

<div>
<h4 style="font-size:16px;font-weight:bold">subtotal </h4>
<p>${producto.precio * producto.cantidad}</p>
</div>

<div>
<button id="${producto.id}" class ="eliminar-producto-carrito btn btn-danger mt-3 mr-3"> eliminar </button>
</div>

`;
contenedorCarritoProductos.append(div);

})



} else {
contenedorCarritoVacio.classList.remove("disabled");
contenedorCarritoProductos.classList.add("disabled");
contenedorCarritoBotones.classList.add ("disabled");
contenedorCarritoCompra.classList.add("disabled");
}

actualizarBotonesEliminar();
actualizarTotal();

}

cargarProductosCarrito();

actualizarBotonesEliminar();

function actualizarBotonesEliminar(){
    botonesEliminar = document.querySelectorAll(".eliminar-producto-carrito");

    botonesEliminar.forEach(boton=>{
        boton.addEventListener("click",eliminarDelCarrito)});
    }

    function eliminarDelCarrito(e){
  const idBoton = e.currentTarget.id;
   
   const index = productosEnCarrito.findIndex (producto=> producto.id ===idBoton)
     console.log(productosEnCarrito)
     productosEnCarrito.splice(index, 1);

 localStorage.setItem("productos-en-carrito", JSON.stringify(productosEnCarrito))

cargarProductosCarrito();
    }


   botonVaciar.addEventListener("click",vaciarCarrito);
    function vaciarCarrito(){
       productosEnCarrito.length = 0;
        localStorage.setItem("productos-en-carrito", JSON.stringify(productosEnCarrito));
        cargarProductosCarrito();

    }

function actualizarTotal(){
   const totalCalculado = productosEnCarrito.reduce((acc, producto)=> acc + (producto.precio * producto.cantidad),0);
total.textContent = `Total:$ ${totalCalculado}`;

}


botonComprar.addEventListener("click",comprarCarrito);
    function comprarCarrito(){
       productosEnCarrito.length = 0;
        localStorage.setItem("productos-en-carrito", JSON.stringify(productosEnCarrito));      
contenedorCarritoVacio.classList.add("disabled");
contenedorCarritoProductos.classList.add("disabled");
contenedorCarritoBotones.classList.add ("disabled");
contenedorCarritoCompra.classList.remove("disabled");}