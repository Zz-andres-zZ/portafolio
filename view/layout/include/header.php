<nav id="navbar" class="navbar navbar-expand-lg bg-white shadow p-0 py-1">
    <div class="container-fluid px-lg-4 g-0">
        <a class="nav-link m-0 p-0 d-flex align-items-center" href="home">
            <img src="asset/img/logo/logo.png" class="w-50 img-fluid position-relative top-0" alt="logo">
            <?php /* $conectar = new Database(); */ ?>
        </a>

        <button class="navbar-toggler p-0 me-3" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar">
            <span class="navbar-toggler-icon p-3"></span>
        </button>

        <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
            <div class="offcanvas-header py-1 px-4 border-3 border-bottom">
                <a class="nav-link navbar-brand m-0 p-0" href="home">
                    <img src="asset/img/logo/logo.png" class="img-fluid w-50" alt="logo">
                </a>
                <button type="button" class="btn-close bg-white" data-bs-dismiss="offcanvas" aria-label="Close"></button>
            </div>
            <div class="offcanvas-body d-flex flex-column justify-content-between flex-lg-row justify-content-lg-end">
                <ul id="menu_top" class="navbar-nav align-items-lg-center justify-content-lg-end p-lg-0 flex-row flex-wrap align-content-start">
                    <li class="nav-item col-6 col-lg-auto">
                        <a class="nav-link" href="home">
                            <i class="bi bi-house d-lg-none"></i>
                            Home
                        </a>
                    </li>
                    <li class="nav-item col-6 col-lg-auto">
                        <a class="nav-link" href="about">
                            <i class="bi bi-person d-lg-none"></i>
                            About
                        </a>
                    </li>
                    <li class="nav-item col-6 col-lg-auto">
                        <a class="nav-link" href="services">
                            <i class="bi bi-postcard d-lg-none"></i>
                            services
                        </a>
                    </li>
                    <li class="nav-item col-6 col-lg-auto">
                        <a class="nav-link" href="portafolio">
                            <i class="bi bi-person-badge d-lg-none"></i>
                            portafolio
                        </a>
                    </li>
                    <li class="nav-item col-6 col-lg-auto">
                        <a class="nav-link" href="contact">
                            <i class="bi bi-envelope-at d-lg-none"></i>
                            Contact
                        </a>
                    </li>
                </ul>

                <ul id="menu_top" class="navbar-nav d-lg-none align-items-lg-center pt-2 justify-content-lg-end border-top flex-row flex-wrap align-content-start">
                    <li class="nav-item col-6 col-lg-auto">
                        <a class="nav-link" target="_blank" href="https://www.facebook.com/GoodLo0.k">
                            <i class="bi bi-facebook"></i>
                            Facebook
                        </a>
                    </li>
                    <li class="nav-item col-6 col-lg-auto">
                        <a class="nav-link" target="_blank" href="https://www.instagram.com/andresitojh/">
                            <i class="bi bi-instagram"></i>
                            Instagram
                        </a>
                    </li>
                    <li class="nav-item col-6 col-lg-auto">
                        <a class="nav-link" target="_blank" href="https://www.linkedin.com/in/andreshmndz/">
                            <i class="bi bi-linkedin d-lg-none"></i>
                            Linkedin
                        </a>
                    </li>
                    <li class="nav-item col-6 col-lg-auto">
                        <a class="nav-link" target="_blank" href="https://github.com/Zz-andres-zZ">
                            <i class="bi bi-github d-lg-none"></i>
                            Github
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</nav>