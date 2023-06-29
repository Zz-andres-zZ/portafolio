<?php $url = isset($_GET['url']) ? $_GET['url'] : false; ?>
<section id="footer" class="border-1 border-top">
    <div class="container">
        <div class="row m-0">
            <div class="col-12">
                <h1 class="display-6">Andrés H.</h1>
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link <?= ($url == "about" ? "active" : "") ?>" href="about">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link <?= ($url == "portafolio" ? "active" : "") ?>" href="portafolio">Projects</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?= ($url == "home" || !$url ? "services" : "Testimonials"); ?>">
                            <?= ($url == "home" || !$url ? "Services" : "Testimonials"); ?>
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

<!-- ✅ load jQeury (require) ✅ -->
<script src="asset/vendor/jquery/jquery.min.js"></script>
<!-- ✅ load Bootstrap bundle (require) ✅ -->
<script src="asset/vendor/bs/js/bootstrap.bundle.min.js"></script>
<!-- ✅ load js (require) ✅ -->
<script src="asset/js/app.js"></script>
<!-- ✅ load ERROR (require) ✅ -->
<script src="asset/js/devtoolIsOpening.js"></script>

<script>
    jQuery(() => {
        handle_section_active("<?= $section_active ?>");
    });
</script>

</body>

</html>