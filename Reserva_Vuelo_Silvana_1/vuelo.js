// selecciono un elemento del documento. tenemos acceso a un evento del formulario
//cada vez que damos un click se ejuta la funcion 'guardarVuelo'

document.getElementById('vuelo-formulario').addEventListener('submit', guardarVuelo);
// creamos la funcion 'guardarVuelo'
function guardarVuelo (e) {
  //guardanos los datos extraidos del input en variables
  let ciudadOrigen = document.getElementById('ciudad_origen').value;  
  let ciudadDestino = document.getElementById('ciudad_destino').value;
  let fechaInicial = document.getElementById('fecha_inicial').value;
  let fechaFinal = document.getElementById('fecha_final').value;
  let tipoServicio = document.getElementById('tipo_servicio').value;
  let adulto = document.getElementById('adulto').value;
  let niqo = document.getElementById('niqo').value;
// creamos el objeto llamado 'vuelo'
  const vuelo = {
    ciudadOrigen,
    ciudadDestino,
    fechaInicial,
    fechaFinal,
    tipoServicio,
    adulto,
    niqo
    };

    // utilizaremos localstorage, nos permite almacenar los datos dentro de la memoria del navegador
    // el método setItem nos permite almacenar un dato, necesita dos parametros
    // el primero es el nombre de como nombramos a esos datos, segundo es el valor de los datos
    // convertimos el valor de los datos en un string  
    // localStorage.setItem('vuelos', JSON.stringify(vueloss));
    // utilizamos otro evento del localStorage [localStorage.getItem('tarea')]
    // el método getItem trae los datos guardados. en este caso lo que hay en 'vuelos'

    if (localStorage.getItem('vuelos') === null) {

      // si desde el localStorage ya existe vuelos = null vamos a crear el arreglo 'vuelos'
      // al array lo llenamos con el metodo push , con lo que tenemos en vuelo (objeto)
        let vuelos = [];
        vuelos.push(vuelo);
      // luego lo almacenamos en el localStorage
        localStorage.setItem('vuelos',JSON.stringify(vuelos));
      }   else {
        
        // de lo contrario si ya existen valores vamos a empezar a actualizarlos
        // obtenemos los vuelos almacenados desde el localStorage y los almacenamos en una variable 
        let vuelos = JSON.parse(localStorage.getItem('vuelos'));
        // una vez obtenidas las actualizamos y le paso por el método push las tareas nuevas
        vuelos.push(vuelo);
        // luego las volvemos a guardar en el localStorage
        localStorage.setItem('vuelos', JSON.stringify(vuelos));
    }

    listarVuelos();
    // recetea el formulario. lo trae con los campos vacios
    document.getElementById('vuelo-formulario').reset();
    // cancela que se refresque la página
    e.preventDefault();

}

function listarVuelos () {
    // desde el localStorage quiero obtener los vuelos. las almeceno en una variable
    let vuelos = JSON.parse(localStorage.getItem('vuelos'));
    //queremos mostrar los vuelos por pantalla, obtemos el id del div para insertar datos.  lo guardamos en una variable
    mostrarVuelo = document.getElementById('vuelo');
    mostrarVuelo.innerHTML = '';

    console.clear();
    // me limpia la consola
    vuelos.forEach(element => { 
      // con la funcion forEach recorremos el array y por cada elemento le pedimos lo siguiente:

      // 1. imprimimos por consola de cada elemento del array los atributos ciudad_origen, ciudad_destino, tipo_servicio
        console.log(`Ciudad de origen: ${element.ciudadOrigen}`);
        console.log(`Ciudad destino: ${element.ciudadDestino}`);
        console.log(`Tipo de servicio: ${element.tipoServicio}`);
        console.log('');
      // creamos las variables para que guarde lo que hay en los elementos ciudad_origen, ciudad_destino, tipo_servicio
         let ciudadOrigen = element.ciudadOrigen;
         let ciudadDestino = element.ciudadDestino;
         let tipoServicio = element.tipoServicio;
      //mostramos en el documento los valores de la variable
         mostrarVuelo.innerHTML += `<div class="card">
         <div class="card-body">
         <p> <h3> VUELO </h3> </p>
         <p>${ciudadOrigen}</p>
         <p>${ciudadDestino}</p>
         <p>${tipoServicio}</p>
         <a class="btn btn-danger" onclick="eliminarVuelo('${ciudadOrigen}')"> Eliminar </a>
         </div>
         </div>`
        // en el evento onclick se ejuta la funcion eliminarVuelo cuyo parametro es ciudad_origen

    });
    
} 
// creo la funcion y busca el parametro ciudad_origen
function eliminarVuelo (ciudadOrigen) {
  // guardamos en la variable lo que tenemos almacenado en el localstorage
  // aplicamos JSON.parce para que me convierta en objeto lo que se guardo con string
    let vuelos = JSON.parse(localStorage.getItem('vuelos'));
  // con un ´para´ recorremos el array y preguntamos con un ´si´ el atributo ciudadOrigen es igual al parametro de la funcion
   for (let i = 0;  i < vuelos.length; i++) {
    if (vuelos[i].ciudadOrigen == ciudadOrigen) {
        // si son iguales en el array el método splice elimina o quita un elemento del arreglo
        vuelos.splice(i, 1); 
    }  
   } 
  //
   localStorage.setItem('vuelos', JSON.stringify(vuelos));
   //una vez almacenado volvemos a ejecutar la funcion listarVuelo
   listarVuelos ();
}

listarVuelos ();


 