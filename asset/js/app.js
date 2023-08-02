// Cuando el DOM esté listo
$(document).ready(function () {
    /*
     *  ==============================================================
     * REGISTRO DE VISITAS
     *
     * cuando inicializamos en nuestra pagina se agregara a la base de
     * datos una visita nueva cada 2 horas de visitar la pagina
     *  ==============================================================
     */
    count_visits();

    /* Llamado del cv */
    download_dv();


    /*
     *  ==============================================================
     * PRELOADER FIXED PARA DAR ESPERA A LOS ARCHIVOS DEL SISTEMA
     *
     * cuando inicializamos en nuestra pagina se desplazara un loader
     *  ==============================================================
     */
    $("#preloader").fadeOut();

    /*
     *  =========================================================
     *  BOTON FLOTADOR PARA MOVERTE AL PRINCIPIO
     *
     *  Cuando el usuario se desplace 20 píxeles hacia abajo
     *  desde la parte superior del documento, muestre el botón
     *
     *  =========================================================
     */
    const $scrollButton = $("#scroll-top");
    // Agregar evento de clic al botón Scroll Top
    $scrollButton.on("click", function () {
        $("html, body").animate({ scrollTop: 0 }, 1); // Desplazamiento suave
    });
    // Mostrar u ocultar el botón Scroll Top al hacer scroll
    $(window).scroll(function () {
        if ($(this).scrollTop() > 20) {
            $scrollButton.fadeIn();
        } else {
            $scrollButton.fadeOut();
        }
    });
});

const handle_section_active = (section) => {
    const $menu_top_container = $("#menu_top");
    $menu_top_container.find(".nav-link").removeClass("active");
    const $section_target = $menu_top_container.find(
        `.nav-link[href="${section}"]`
    );
    $section_target.addClass("active");
};

const count_visits = () => {
    $.ajax({
        url: "app/model/countVisits.php",
        type: "POST",
        dataType: "json",
        success: function (response) {
            //console.log("response", response);
            var visits = response.visits;
            var date = response.date;
            document.querySelector("#visitsCounter").innerHTML = visits;
            document.querySelector("#lastVisit").innerHTML = date;
        },
        error: function (xhr, status, error) {
            console.log(error);
        },
    });
}

const download_dv = () => {
    $("#download").on("click", function(){
        $.ajax({
        url: "app/controller/download_cv.php",
        type: "POST",
        dataType: "json",
        success: function (response) {
            console.log("response", response);
        },
        error: function (xhr, status, error) {
            console.log("error", error);
        },
    });
    })
}