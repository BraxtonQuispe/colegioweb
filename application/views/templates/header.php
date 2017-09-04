<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Sistema de Login e Registro</title>
        <link rel="stylesheet" href="<?php echo base_url("assets/css/bootstrap.css"); ?>">
        <link rel="stylesheet" href="<?php echo base_url("assets/css/bootstrap.min.css"); ?>">
        <link rel="stylesheet" href="<?php echo base_url("assets/css/bootstrap-theme.css"); ?>">
        <link rel="stylesheet" href="<?php echo base_url("assets/css/custom.css"); ?>">
    </head>
    <body>
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <h3 class="text-center">
                        Sistema  de intranet del colegio santo domingo de chorrillos
                    </h3>
                </div>
            </div>
            <div class="row">

                <div class="col-md-12">
                    <nav class="navbar navbar-default" role="navigation">
                        <div class="navbar-header">

                            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                                <span class="sr-only">Toggle navigation</span><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span>
                            </button> <a class="navbar-brand" href="<?php echo base_url(); ?>home">Intranet derecha</a>
                        </div>

                        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                            <ul class="nav navbar-nav">
                                <li>
                                    <a href="#">Datos personales</a>
                                </li>
                                <li>
                                    <a href="#">Mi Horario</a>
                                </li>
                                <li class="dropdown">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">Mis cursos<strong class="caret"></strong></a>
                                    <ul class="dropdown-menu">                                     
                                        <li>
                                            <a href="#">Matematica</a>
                                        </li>
                                        <li class="divider">
                                        </li>
                                        <li>
                                            <a href="#">Lenguaje</a>
                                        </li>
                                        <li class="divider">
                                        </li>
                                        <li>
                                            <a href="#">Ciencias</a>
                                        </li>
                                        <li class="divider">
                                        </li>
                                        <li>
                                            <a href="#">historia</a>
                                        </li>
                                    </ul>
                                </li>
                            </ul>

                            <ul class="nav navbar-nav navbar-right">

                                <?php if ($this->session->userdata('login')) { ?>
                                    <li><p class="navbar-text">Bienvenido(a) <?php echo $this->session->userdata('uname'); ?></p></li>
                                    <li><a href="<?php echo base_url(); ?>home/logout">Cerrar sesion</a></li>
                                <?php } else { ?>
                                    <li class="dropdown">
                                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Ingresar<strong class="caret"></strong></a>
                                        <ul class="dropdown-menu">
                                            <li>
                                                <a href="<?php echo base_url(); ?>login">Login</a>
                                            </li>

                                            <li class="divider">
                                            </li>
                                            <li>
                                                <a href="<?php echo base_url(); ?>signup">Registrate</a>
                                            </li>
                                        </ul>
                                    </li>
                                <?php } ?>
                            </ul>
                        </div>
                    </nav>                    

                    <!--termino del header-->

