var nuevo_element = document
  .getElementsByTagName("div")[0]
  .innerHTML.toString();
var i = 0;
document.getElementsByTagName("div")[0].innerHTML = "";

setTimeout(function () {
  var seteador = setInterval(function () {
    i++;
    document.getElementsByTagName("div")[0].innerHTML =
      nuevo_element.slice(0, i) + "|";
    if (i == nuevo_element.length) {
      clearInterval(seteador);
      document.getElementsByTagName("div")[0].innerHTML = nuevo_element;
    }
  }, 5);
}, 0);

/**
 * OBTENIENDO LA HORA Y LA FECHA
 */

var hoy = new Date();
var fecha =
  hoy.getDate() + "-" + (hoy.getMonth() + 1) + "-" + hoy.getFullYear();
var hora = hoy.getHours() + ":" + hoy.getMinutes() + ":" + hoy.getSeconds();

//Obteniendo una variable con la máscara d-m-Y H:i:s
var fechaYHora = fecha + " " + hora;

/**
 * CONDICIONANDO ENTRE DIA Y NOCHE
 */

if (hoy.getHours() >= 1 && hoy.getHours() <= 4) {
  time = "AM";
  message = "Buenas Madrugadas";
}

if (hoy.getHours() >= 6 && hoy.getHours() <= 11) {
  time = "AM";
  message = "Buenas Dias";
}

if (hoy.getHours() >= 13 && hoy.getHours() <= 18) {
  time = "PM";
  message = "Buenas Tardes";
}

if (hoy.getHours() >= 19 && hoy.getHours() <= 23) {
  time = "PM";
  message = "Buenas Noches";
}

/**
 * MENSAJE EN LA CONSOLA PERSONALIZADO
 */
console.log(
  "%cDETENTE UN MOMENTO",
  "padding:2rem 1rem;background:red;font-size:25px;color:#fff;"
);

console.log(
  `%c${message.toUpperCase()} ${hoy.getHours()}:${hoy.getMinutes()} ${time}`,
  "color: green;font-size:18px"
);

console.log(
  "%ccomo ves estoy programado para NO mostrar la consola en la aplicación de Andrés.\npor ende te dejo saber que si quieres visualisar su contenido no abras la consola",
  "margin:0;color: green;"
);

/**
 * LINK PARA VOLVER A LA APP DE ANDRES
 */

