<header class="navbar sticky-top navbar-expand-lg bg-light" style="">
    <nav class="container-xxl bd-gutter flex-wrap flex-lg-nowrap" aria-label="Main navigation">
        <button class="navbar-toggler p-2" type="button" data-bs-toggle="offcanvas" data-bs-target="#bdSidebar"
            aria-controls="bdSidebar" aria-expanded="false" aria-label="Toggle docs navigation">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" class="bi" fill="currentColor"
                viewBox="0 0 16 16">
                <path fill-rule="evenodd"
                    d="M2.5 11.5A.5.5 0 0 1 3 11h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4A.5.5 0 0 1 3 7h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4A.5.5 0 0 1 3 3h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5z">
                </path>
            </svg>
            <span class="d-none fs-6 pe-1">Browse</span>
        </button>

        <a class="navbar-brand h1" href="<?=site_url();?>application/home">
            <img src="<?=site_url();?>images/logoMarca.gif" height="30" class="d-inline-block">&nbsp;&nbsp;<?=APP_NAME?>
        </a>

        <button style="width: 38px;height: 38px;" class="navbar-toggler d-flex d-lg-none order-3 p-2" type="button" data-bs-toggle="offcanvas"
            data-bs-target="#bdNavbar" aria-controls="bdNavbar" aria-expanded="false" aria-label="Toggle navigation">
            <div style="font-weight: bold;font-size: x-large;color: #929393;">...</div>
            <!-- <svg class="bi" width="24" height="24" aria-hidden="true">
                <use xlink:href="#three-dots"></use>
            </svg> -->
        </button>

        <div class="offcanvas-lg offcanvas-end flex-grow-1" id="bdNavbar" aria-labelledby="bdNavbarOffcanvasLabel"
            data-bs-scroll="true">
            <div class="offcanvas-header px-4 pb-0">
                <h5 class="offcanvas-title" id="bdNavbarOffcanvasLabel"><?=APP_NAME?></h5>
                <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"
                    data-bs-target="#bdNavbar"></button>
            </div>

            <hr class="d-lg-none">

            <!-- Menu esquerda -->
            <div class="offcanvas-body p-4 pt-0 p-lg-0">
                <ul class="navbar-nav flex-row flex-wrap bd-navbar-nav">
                    <li class="nav-item col-6 col-lg-auto">
                        <a class="nav-link py-2 px-0 px-lg-2 active" aria-current="true" href="#">Home</a>
                    </li>
                    <li class="nav-item col-6 col-lg-auto">
                        <a class="nav-link py-2 px-0 px-lg-2" aria-current="true" href="#">Guias</a>
                    </li>
                    <li class="nav-item col-6 col-lg-auto">
                        <a class="nav-link py-2 px-0 px-lg-2" aria-current="true" href="#">Suporte</a>
                    </li>
                    <li class="nav-item col-6 col-lg-auto">
                        <a class="nav-link py-2 px-0 px-lg-2" aria-current="true" href="#">Blog</a>
                    </li>
                </ul>

                <hr class="d-lg-none">

                <!-- Menu direita -->
                <ul class="navbar-nav flex-row flex-wrap ms-md-auto">
                    <li class="nav-item col-6 col-lg-auto">
                        <a class="nav-link py-2 px-0 px-lg-2" href="https://opencollective.com/bootstrap">
                            <i class="fa-solid fa-magnifying-glass"></i>
                            <small class="d-lg-none ms-2">Pesquisar</small>
                        </a>
                    </li>
                    <li class="nav-item col-6 col-lg-auto">
                        <a class="nav-link py-2 px-0 px-lg-2" href="https://opencollective.com/bootstrap">
                            <i class="fa-solid fa-bell"></i>
                            <small class="d-lg-none ms-2">Noficações</small>
                        </a>
                    </li>
                    <li class="nav-item col-6 col-lg-auto">
                        <a class="nav-link py-2 px-0 px-lg-2" href="https://opencollective.com/bootstrap">
                            <i class="fa-solid fa-cog"></i>
                            <small class="d-lg-none ms-2">Configurações</small>
                        </a>
                    </li>
                    <li class="nav-item dropdown">
                        <button class="btn btn-link nav-link py-2 px-0 px-lg-2 dropdown-toggle" id="bd-versions"
                            data-bs-toggle="dropdown" aria-expanded="false" data-bs-display="static">
                            <img src="<?=site_url();?>application/images/user.jpg"
                                class="avatar-navbar">&nbsp;&nbsp;Jack
                            Sparrow
                        </button>
                        <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="bd-versions">
                            <li>
                                <div class="">
                                    <center>
                                        <img src="<?=site_url();?>application/images/user.jpg" class="avatar-profile">
                                        <figure>
                                            <blockquote class="blockquote">
                                                <p>Jack Sparrow.</p>
                                            </blockquote>
                                            <figcaption class="blockquote-footer">
                                                Administrador
                                            </figcaption>
                                        </figure>
                                    </center>
                                </div>
                            </li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li>
                                <center>
                                    <a class="" href="#"><button type="button" class="btn btn-light">Perfil</button></a>
                                    <a class="" href="#"><button type="button" class="btn btn-light">Logout</button></a>
                                </center>
                            </li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</header>