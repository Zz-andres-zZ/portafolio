jQuery(() => {
  /*
   *  ==============================================================
   * PRELOADER FIXED PARA DAR ESPERA A LOS ARCHIVOS DEL SISTEMA
   *
   * cuando inicializamos en nuestra pagina se desplazara un loader
   *  ==============================================================
   */
  $(document).ready(() => {
    setTimeout(() => {
      $("#preloader").fadeOut();
    }, 700);
  });

  /*
   *
   *  ==================================================
   *  BOTON FLOTADOR PARA CAMBIAR LA SUPERPOCISION
   *
   *  el boton de whatsap tiene un z-index de 999999
   *  esto hace ocultarlo ante el debugger de la pagina
   *
   *  ==================================================
   */

  const $btn_whatsapp = document.querySelector("div[role='button']");
  $(this).removeAttr("style");

  /*
   *  =====================================================
   *  REDIRECCIONA A LA PAGINA PROHIVIDA
   *
   *  si habre la consola redirrecciona a la advertencia
   *  esto sucedera solo cuando el usuario abra la consola
   *  del navegador
   *
   *  =====================================================
   */
  const devtoolIsOpening = () => {
    console.clear();
    let before = new Date().getTime();
    debugger;
    let after = new Date().getTime();
    if (after - before > 200) {
      document.write(
        `
        <style>body{background:black;margin:0;padding:0;}body div{height:100vh;z-index:266521313123;position:relative!important;}div[role='button']{display:none}</style>
          <div style="hegiht:100%;display:flex;justify-content:center;align-items:center;">
              <h2 style="font-size: 5rem;text-align;center;color:#fff">Redireccionando ...</h2>
          </div>
        `
      );
      $(document).ready(() => {
        setTimeout(() => {
          // $(location).prop("href", "https://github.com/Zz-andres-zZ");
          $(window).attr("location", "view/prohibido/warning.php");
        }, 2500);
      });
    }
    setTimeout(devtoolIsOpening, 100);
  };
  // EXECUTAMOS LA FUNCTION PARA BLOQUEAR LA PAGINA
    devtoolIsOpening();

  /*
   *  =========================================================
   *  BOTON FLOTADOR PARA MOVERTE AL PRINCIPIO
   *
   *  Cuando el usuario se desplace 20 píxeles hacia abajo
   *  desde la parte superior del documento, muestre el botón
   *
   *  =========================================================
   */
  const mybutton = document.querySelector("#scroll-top");
  mybutton.addEventListener("click", backToTop);
  window.onscroll = function () {
    scrollFunction();
  };
  const scrollFunction = () => {
    if (
      document.body.scrollTop > 20 ||
      document.documentElement.scrollTop > 20
    ) {
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
});
