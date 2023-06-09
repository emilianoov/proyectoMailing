<!doctype html>
<html lang="zxx">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <!-- Vendors Min CSS -->
        <link rel="stylesheet" href="<?php echo base_url('assets\css\vendors.min.css') ?> ">
        <!-- Style CSS -->
        <link rel="stylesheet" href="<?php echo base_url('assets\css\style.css') ?> ">
        <!-- Responsive CSS -->
        <link rel="stylesheet" href="<?php echo base_url('assets\css\responsive.css') ?>">

        <title>Sistema de Correos</title>

        <link rel="icon" type="image/png" href="<?php echo base_url('assets\img\favicon.pn') ?>g">
    </head>
    
    <body>

        <!-- Start Login Area -->
        <div class="login-area bg-image">
            <div class="d-table">
                <div class="d-table-cell">
                    <div class="login-form">
                        <div class="logo">
                            <a href="dashboard-analytics.html"><img src="<?php echo base_url('assets\img\logoSMM.png') ?>" alt="image"></a>
                        </div>

                        <h2>Bienvenido</h2>

                        <form action="<?php echo base_url('Auth/check') ?>" method="post">

                            <?php if ($this->session->flashdata('warning')) { ?>
                            <div class="alert alert-danger">
                                <strong>
                                    <?php echo $this->session->flashdata('warning')?>
                                </strong>
                            </div>
                            <?php }else if ($this->session->flashdata('error')) { ?>
                            <div class="alert alert-danger">
                                <strong>
                                    <?php echo $this->session->flashdata('error')?>
                                </strong>
                            </div>
                            <?php } ?>

                            <div class="form-group">
                                <input type="email" class="form-control" id="email" name="email" placeholder="Email">
                                <span class="label-title"><i class='bx bx-user'></i></span>
                            </div>

                            <div class="form-group">
                                <input type="password" class="form-control" id="password" name="password" placeholder="Contraseña">
                                <span class="label-title"><i class='bx bx-lock'></i></span>
                            </div>

                            <div class="form-group">
                                <div class="remember-forgot">
                                    <label class="checkbox-box">Recuerdame
                                        <input type="checkbox">
                                        <span class="checkmark"></span>
                                    </label>

                                    <a href="#" class="forgot-password">Olvidaste la contraseña?</a>
                                </div>
                            </div>

                            <button type="submit" class="login-btn">Ingresar</button>

                            <p class="mb-0">No tienes cuenta? <a href="#">Registrate</a></p>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Login Area -->
        

        <!-- Vendors Min JS -->
        <script src="<?php echo base_url('assets\js\vendors.min.j') ?>s"></script>

        <!-- ApexCharts JS -->
        <script src="<?php echo base_url('assets\js\apexcharts\apexcharts.min.js') ?>"></script>
        <script src="<?php echo base_url('assets\js\apexcharts\apexcharts-stock-prices.js') ?>"></script>
        <script src="<?php echo base_url('assets\js\apexcharts\apexcharts-irregular-data-series.j') ?>s"></script>
        <script src="<?php echo base_url('assets\js\apexcharts\apex-custom-line-chart.js') ?>"></script>
        <script src="<?php echo base_url('assets\js\apexcharts\apex-custom-pie-donut-chart.js') ?>"></script>
        <script src="<?php echo base_url('assets\js\apexcharts\apex-custom-area-charts.js') ?>"></script>
        <script src="<?php echo base_url('assets\js\apexcharts\apex-custom-column-chart.js') ?>"></script>
        <script src="<?php echo base_url('assets\js\apexcharts\apex-custom-bar-charts.js') ?>"></script>
        <script src="<?php echo base_url('assets\js\apexcharts\apex-custom-mixed-charts.') ?>js"></script>
        <script src="<?php echo base_url('assets\js\apexcharts\apex-custom-radialbar-charts.j') ?>s"></script>
        <script src="<?php echo base_url('assets\js\apexcharts\apex-custom-radar-chart.js') ?>"></script>

        <!-- ChartJS -->
        <script src="<?php echo base_url('assets\js\chartjs\chartjs.min.js') ?> "></script>
        <div class="chartjs-colors"> <!-- To use template colors with Javascript -->
            <div class="bg-primary"></div>
            <div class="bg-primary-light"></div>
            <div class="bg-secondary"></div>
            <div class="bg-info"></div>
            <div class="bg-success"></div>
            <div class="bg-success-light"></div>
            <div class="bg-danger"></div>
            <div class="bg-warning"></div>
            <div class="bg-purple"></div>
            <div class="bg-pink"></div>
        </div>
        
        <!-- jvectormap Min JS -->
        <script src="<?php echo base_url('assets\js\jvectormap-1.2.2.min.js') ?> "></script>
        <!-- jvectormap World Mil JS -->
        <script src="<?php echo base_url('assets\js\jvectormap-world-mill-en.js') ?> "></script>
        <!-- Custom JS -->
        <script src="<?php echo base_url('assets\js\custom.j') ?>s"></script>
    </body>
</html>