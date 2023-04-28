<?php
    $url = isset($_GET['url']) ? $_GET['url'] : false;
?>
<section id="footer" class="border-1 border-top">
    <div class="container">
        <div class="row m-0">
            <div class="col-12">
                <h1 class="display-6">Andrés H.</h1>
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link <?=($url == "about" ? "active" : "")?>" href="#about">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link <?=($url == "portafolio" ? "active" : "")?>" href="portafolio">Projects</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?=($url == "home" || !$url ? "services" : "Testimonials");?>">
                            <?=($url == "home" || !$url ? "Services" : "Testimonials");?>
                        </a>
                    </li>
                </ul>
                <ul id="social" class="navbar-nav mb-2">
                    <li class="nav-item">
                        <a class="btn btn-dark p-1 px-2 rounded-4" href="https://discord.gg/midudev" target="_blank"><i class="bi bi-discord text-white"></i></a>
                    </li>
                    <li class="nav-item mx-4">
                        <a class="btn btn-dark p-1 px-2 rounded-4" href="https://www.linkedin.com/in/andreshmndz/" target="_blank"><i class="bi bi-linkedin text-white"></i></a>
                    </li>
                    <li class="nav-item">
                        <a class="btn btn-dark p-1 px-2 rounded-4" href="https://github.com/Zz-andres-zZ" target="_blank"><i class="bi bi-github text-white"></i></a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <div class="col-12 bg-dark py-3">
        <div class="copyright text-light">
            <span>©</span> Copyright
            <b>Hndz</b>. All Rights Reserved
        </div>
    </div>
</section>

</footer>
<!-- End Footer -->

<!-- ✅ load jQuery (optional) ✅ -->
<script src="asset/vendor/jquery/jquery.min.js"></script>
<!-- ✅ load Bootstrap bundle (require) ✅ -->
<script src="asset/vendor/bs/js/bootstrap.bundle.min.js"></script>
<!-- ✅ load sweetalert (optional) ✅ -->
<script src="asset/vendor/sweetalert/js/sweetalert2.all.min.js"></script>
<!-- btn watsapp -->
<script src="https://apps.elfsight.com/p/platform.js" defer></script>
<!-- ✅ load js (require) ✅ -->
<script src="asset/js/app.js"></script>

<script>
    /**
     * 
     * ASINGAR CLASE ACTIVE PARA EL ITEM DE MENU
     * @param {string} section actual. se establecce en el archivo content main
     * 
     **/
    const handle_section_active = (section) => {
        /* console.log('section', section) */
        const $menu_top_container = $("#menu_top");
        // clean all nav-link
        $menu_top_container.find(".nav-link").removeClass("active");
        const $section_target = $menu_top_container.find(
            `.nav-link[href="${section}"]`
        );
        // add section active
        $section_target.addClass("active");
    };
    jQuery(() => {
        handle_section_active("<?= $section_active ?>");
    });
</script>

<div class="whatsapp">
    <div class="elfsight-app-5f58b17e-5b3e-4d58-b970-ac968a85e7de"></div>
</div>

</body>

</html>