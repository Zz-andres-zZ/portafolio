jQuery(() => {
    /* const $blocked = document.getElementsByTagName("body");
    $($blocked).on("contextmenu", () => {
        $($blocked).on("keydown", () => {
            return false;
        });
        return false;
    }); */

    /* on="return false" onkeydown="return false" */
    /*
     *  ==============================================================
     * PRELOADER FIXED PARA DAR ESPERA A LOS ARCHIVOS DEL SISTEMA
     *
     * cuando inicializamos en nuestra pagina se desplazara un loader
     *  ==============================================================
     */
    $(document).ready(() => {
        $("#preloader").fadeOut();
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
const handle_section_active = (section) => {
    const $menu_top_container = $("#menu_top");
    $menu_top_container.find(".nav-link").removeClass("active");
    const $section_target = $menu_top_container.find(
        `.nav-link[href="${section}"]`
    );
    $section_target.addClass("active");
};
