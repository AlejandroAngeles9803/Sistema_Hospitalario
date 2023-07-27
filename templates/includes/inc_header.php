<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo isset($d->title) ?  $d->title.' - '.get_sitename() : 'Bienvenido - '.get_sitename(); ?></title>
    <!-- ONLY CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">

   
</head>

 <!-- " -->
<body style="<?php echo isset($d->bg) && $d->bg=='light' ? 'background-color:#F5F4F5' : ($d->bg ==='blue' ? 'background-color:#98BDD3' : 'background-color:#27243D')  ?>" >

<!-- ends inc_header.php -->