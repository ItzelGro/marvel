/********************** */


//                        Programación  Web
//                        JavaScript
//                        8 de Enero del 2021
//                        Julio César Chávez Nava


/********************** */


//SELECCIONAR MULTIPLES ELEMENTOS DE LA PAGINA

//1. Utilizando querySelector('Nombre de la clase')

const listaProductos = document.querySelector('#lista-productos');
const carrito = document.querySelector('#lista-carrito tbody');
const vaciarCarrito = document.querySelector('#vaciar-carrito');

//Arreglo para guardar los productos del Cliente
let arregloProductos = [];

//2. Mandar llamar una funcion que cargue los eventos

cargarEventListener();

//3. Desarrollar las funciones (funcionalidad a la pagina)
function cargarEventListener() {
    listaProductos.addEventListener('click', agregarProducto);

    //Agregar el evento cuando se carga la pagina o documento
    document.addEventListener('DomContentLoaded', () => {
        //Sincronizar el CARRITO de mi pagina con el contenido de LocalStorage
        arregloProductos = JSON.parse(localStorage.getItem('miCarrito')) || [];
        //Pintar los Productos en el CARRITO
        carritoHTML();
    });

    //Agregar evento click para eliminar el producto
    carrito.addEventListener('click', eliminarProducto);
    //Agregar evento click para vaciar el carrito
    vaciarCarrito.addEventListener('click', vaciarLocalStorage);
    
}

//Funcion que elimina el producto del carrito
function eliminarProducto(e) {
    e.preventDefault();
    if (e.target.classList.contains('borrar-producto')) {
        //Obtener el ID  del Producto a eliminar
        const productoID = e.target.getAttribute('data-id');
        //Eliminar el producto del arreglo productos(carrito)
        arregloProductos = arregloProductos.filter(producto => producto.id !== productoID);
        //console.log(arregloProductos);
        carritoHTML();
        
    }

}

//Funcion Agregar Producto
function agregarProducto(e) {
    e.preventDefault();
    //Detectar la clase agregar-carrito
    if (e.target.classList.contains('agregar-carrito')) {
        //Definir una constante para guardar el producto seleccionado
        const productoSeleccionado = e.target.parentElement.parentElement;
        //console.log(e.target.parentElement.parentElement);
        leerDatosProductos(productoSeleccionado);
    }

    //console.log('Diste Click en Lista-Producto');
}

function leerDatosProductos(producto) {
    //Crear un objeto con los datos del producto (abajo se define uno)
    const infoProducto = {
        imagen: producto.querySelector('img').src, //Un Selector para la imagen
        nombre: producto.querySelector('h4').textContent, //Selector que apunta al h4
        precio: producto.querySelector('.precio span').textContent,
        id: producto.querySelector('a').getAttribute('data-id'),
        cantidad: 1
    }
    if (arregloProductos.some(prod => prod.id === infoProducto.id)) {
        const pro = arregloProductos.map(p => {
            if (p.id === infoProducto.id) {
                p.cantidad++;
                return p;
            }
            else
                return p;
        })
        arregloProductos = [...pro];
    }
    else {
        arregloProductos = [...arregloProductos, infoProducto];
    }
    //Agregar el infoProducto al arregloProducto

    //Dibujar los productos en el carrito
    carritoHTML();
    //console.log(arregloProductos);
}

//Dibuje los productos en el carrito
function carritoHTML() {
    //Limpiar el HTML del carrito
    limpiarHTML();
    //Crear los TR o renglones para insertarlos al carrito
    arregloProductos.forEach(producto => {
        const renglon = document.createElement('tr');  //Es para crear un renglon o nodo TR, este es un renglon
        renglon.innerHTML = `<td>
                                <img src="${producto.imagen}" width=100>
                            </td>
                            <td>${producto.nombre}</td>
                            <td>${producto.precio}<br> 
                            <td aling="center">${producto.cantidad}</td>
                            <td>  
                                <a href="#" class="borrar-producto" data-id="${producto.id}"> X</a>
                            </td>`;
        carrito.appendChild(renglon);  //Agregar el NODO o ELEMENTO de HTML al documento


    });
    //Guardar los productos en LocalStorage
    sincronizarConLocalStorage();
    
}

//Funcion para almacenar productos en Local Storage
function sincronizarConLocalStorage() {
    localStorage.setItem('miCarrito', JSON.stringify(arregloProductos));
}

//Funcion que limpia el HTML
function limpiarHTML() {
    //Forma lenta para hacerlo
    // carrito.innerHTML = '';
    
    //Forma rapida
    while (carrito.firstChild) {
        carrito.removeChild(carrito.firstChild);
       
    }
   
}

function vaciarLocalStorage() {
    limpiarHTML();
    localStorage.clear();
}







































































// Eliminar de Local Storage
//localStorage.clear();

/* let elemento =document.getElementById('header').className;

console.log(elemento); */

/* let encabezado;
encabezado=document.getElementById('encabezado');
console.log(encabezado);

encabezado.style.background='#333';
encabezado.style.color='#fff';
encabezado.style.padding='20px';

encabezado.innerText='Los mejores cursos de la web'; */

//Utilizando querySelector con Id y con clases

/* const encabezado=document.querySelector('.encabezado');

console.log(encabezado);
encabezado.style.background="#333";
encabezado.style.color='#fff';
encabezado.style.padding='20px';
encabezado.innerText='Los mejores cursos.'; */

/* const imagenes=document.querySelector('.card img');
console.log(imagenes); */

/* const formatoTexto = document.getElementById('buscador');
formatoTexto.style.color='#333'; */