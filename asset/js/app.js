/*==============================*
 *
 *  BOTON FLOTADOR PAARA MOVERTE AL PRINCIPIO
 *
 *  Cuando el usuario se desplace 20 píxeles hacia abajo
 *  desde la parte superior del documento, muestre el botón
 *
 * =============================*/

const mybutton = document.querySelector("#scroll-top");

mybutton.addEventListener("click", backToTop);

window.onscroll = function () {
  scrollFunction();
};

const scrollFunction = () => {
  if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
    mybutton.style.display = "block";
    return true;
  }
  mybutton.style.display = "none";
  return true;
};

// Cuando el usuario haga clic en el botón,
// desplácese hasta la parte superior del documento
function backToTop() {
  document.body.scrollTop = 0;
  document.documentElement.scrollTop = 0;
}