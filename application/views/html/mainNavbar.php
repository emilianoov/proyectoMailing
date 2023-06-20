<div class="main-content d-flex flex-column">
<nav class="navbar top-navbar navbar-expand">
    <div class="collapse navbar-collapse" id="navbarSupportContent">
        <div class="responsive-burger-menu d-block d-lg-none">
            <span class="top-bar"></span>
            <span class="middle-bar"></span>
            <span class="bottom-bar"></span>
        </div>

        <ul class="navbar-nav left-nav align-items-center">
            <li class="nav-item">
                <a href="<?php echo base_url('Campana') ?>" class="nav-link" data-toggle="tooltip" data-placement="bottom" title="Email">
                    <i class="bx bx-envelope"></i>
                </a>
            </li>

            <li class="nav-item">
                <a href="<?php echo base_url('Estadisticas') ?>" class="nav-link" data-toggle="tooltip" data-placement="bottom" title="Estadisticas">
                    <i class='bx bx-pie-chart-alt-2'></i>
                </a>
            </li>

            <li class="nav-item">
                <a href="<?php echo base_url('Listas') ?>" class="nav-link" data-toggle="tooltip" data-placement="bottom"
                    title="Todo List">
                    <i class='bx bx-edit'></i>
                </a>
            </li>

        </ul>

        <form class="nav-search-form d-none ml-auto d-md-block">
        </form>

        <ul class="navbar-nav right-nav align-items-center">
            <li class="nav-item">
                <a class="nav-link bx-fullscreen-btn" id="fullscreen-button">
                    <i class="bx bx-fullscreen"></i>
                </a>
            </li>

            <li class="nav-item dropdown profile-nav-item">
                <a href="#" class="nav-link dropdown-toggle" role="button" data-toggle="dropdown" aria-haspopup="true"
                    aria-expanded="false">
                    <div class="menu-profile">
                        <span class="name">Hola! <?php echo $this->session->userdata('name'); ?> </span>

                    </div>
                </a>

                <div class="dropdown-menu">
                    <div class="dropdown-header d-flex flex-column align-items-center">
                        <div class="info text-center">
                            <span class="name"><?php echo $this->session->userdata('name'); ?>
                                <?php echo $this->session->userdata('paterno'); ?></span>
                            <p class="mb-3 email"><?php echo $this->session->userdata('user_email'); ?></p>
                        </div>
                    </div>

                    <div class="dropdown-body">
                        <ul class="profile-nav p-0 pt-3">
                            <li class="nav-item">
                                <a href="#" class="nav-link">
                                    <i class='bx bx-user'></i> <span>Profile</span>
                                </a>
                            </li>

                            <li class="nav-item">
                                <a href="#" class="nav-link">
                                    <i class='bx bx-envelope'></i> <span>My Inbox</span>
                                </a>
                            </li>

                            <li class="nav-item">
                                <a href="#" class="nav-link">
                                    <i class='bx bx-edit-alt'></i> <span>Edit Profile</span>
                                </a>
                            </li>

                            <li class="nav-item">
                                <a href="#" class="nav-link">
                                    <i class='bx bx-cog'></i> <span>Settings</span>
                                </a>
                            </li>
                        </ul>
                    </div>

                    <div class="dropdown-footer">
                        <ul class="profile-nav">
                            <li class="nav-item">
                                <a href="<?php echo base_url('Auth/logout') ?>" class="nav-link">
                                    <i class='bx bx-log-out'></i> <span>Logout</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </li>
        </ul>
    </div>
</nav>