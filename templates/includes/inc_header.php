<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo isset($d->title) ?  $d->title.' - '.get_sitename() : 'Bienvenido - '.get_sitename(); ?></title>
    <!-- ONLY CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
    

</head>

<!-- " -->

<body style="<?php echo isset($d->bg) && $d->bg=='light' ? 'background-color:#F5F4F5;' : (isset($d->bg) && $d->bg ==='blue' ? 'background-color:#98BDD3;' : 'background-color:#27243D;') ?>">

    <nav class="wrapper-nav navbar navbar-expand-lg "  style="<?php echo isset($d->nav) && $d->nav=='dark' ? 'background-color: #e3f2fd;' : 'white' ?>" >
        <div class="container-fluid content-right">
            <a class="navbar-brand" href="">LOGO</a>
            <button class="navbar-toggler" type="button">
                <span class="navbar-toggler-icon">

                </span>
            </button>
            <div>

                <div class="container-fluid content-left">
                    <ul class="  navbar-nav me-auto mb-2 mb-lg-0 ">
                        <li class=" nav-item">
                            <a class="nav-link active" href="">Inicio</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" href="<?php  ?>">Servicios</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" href="">Departamentos</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" href="">Doctores</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" href="">Citas</a>
                        </li>
                        <li class="nav-item ">
                            <a href="" class=" nav-link active"><img class="rounded"
                                    src="\Proyecto_Hospital\assets\images\user-logo.png" alt="..."
                                    style="width:5vh"></a>
                        </li>
                    </ul>
                </div>
    </nav>
    <style>
    .wrapper-nav {
        display: flex;
        justify-content: space-between;
    }

    .navbar-nav {
        align-items: center;
    }

    .container-info {
        margin-top: 15vh;
    }

    .wrap-container {
        display: flex;

    }

    .black{
        color: aliceblue;
    }
    </style>
    <!-- ends inc_header.php -->