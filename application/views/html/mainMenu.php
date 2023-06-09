<div class="sidemenu-area">
    <div class="sidemenu-header">
        <a href="#" class="navbar-brand d-flex align-items-center">
            <img src="<?php echo base_url('assets\img\small-logo.png') ?>" alt="image">
            <span>SMM</span>
        </a>

        <div class="burger-menu d-none d-lg-block">
            <span class="top-bar"></span>
            <span class="middle-bar"></span>
            <span class="bottom-bar"></span>
        </div>

        <div class="responsive-burger-menu d-block d-lg-none">
            <span class="top-bar"></span>
            <span class="middle-bar"></span>
            <span class="bottom-bar"></span>
        </div>
    </div>

    <div class="sidemenu-body">
        <ul class="sidemenu-nav metisMenu h-100" id="sidemenu-nav" data-simplebar="">
            <li class="nav-item-title">
                Menú
            </li>

            <li class="nav-item">
                <a href="<?php echo base_url('Welcome')?>" class="nav-link">
                    <span class="icon"><i class='bx bx-home'></i></span>
                    <span class="menu-title ">Inicio</span>
                </a>
            </li>

            <li class="nav-item">
                <a href="<?php echo base_url('Listas') ?>" class="nav-link">
                    <span class="icon"><i class='bx bxs-contact'></i></span>
                    <span class="menu-title">Mantenimiento Listas</span>
                </a>
            </li>

            <li class="nav-item">
                <a href="<?php echo base_url('Usuario') ?>" class="nav-link">
                    <span class="icon"><i class='bx bx-user'></i></span>
                    <span class="menu-title">Mantenimiento Contactos</span>
                </a>
            </li>

            <li class="nav-item">
                <a href="<?php echo base_url('Campana') ?>" class="nav-link">
                    <span class="icon"><i class='bx bx-box'></i></span>
                    <span class="menu-title">Mantenimiento Campañas</span>
                </a>
            </li>

            <li class="nav-item">
                <a href="<?php echo base_url('Estadisticas') ?>" class="nav-link">
                    <span class="icon"><i class='bx bx-trending-up'></i></span>
                    <span class="menu-title">Estadisticas</span>
                </a>
            </li>

            <li class="nav-item">
                <a href="<?php echo base_url('Auth/logout') ?>" class="nav-link">
                    <span class="icon"><i class=' bx bx-log-out '></i></span>
                    <span class="menu-title">Cerrar Sesión</span>
                </a>
            </li>
        </ul>
    </div>
</div>