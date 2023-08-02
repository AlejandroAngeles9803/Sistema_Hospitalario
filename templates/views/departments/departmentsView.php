<?php require_once INCLUDES.'inc_header.php';?>

<div class="container-fluid mt-4">
    <h1 class="text-white display-1 text-center">Departamentos</h1>

    <h4 class="text-white text-center  mt-3">Ponemos la salud, la comodidad y el bienestar de nuestros pacientes como
        nuestra principal prioridad</h4>
</div>

<div class="grid gap-5 mt-5 ">
    <div class="p-2 g-col-6 opt-1 w-25 bg-light border rounded">
        <div class="container-main">
            <img class="img-thumbnail float" src="../Proyecto_Hospital\assets\images\icons8-corazón-con-pulso-100.png"
            alt="...">
        </div>

        <h1 class="mt-4">Cardiología</h1>
        <p>Nuestra clínica cuenta con un departamento de cardiología especializado y equipado con las últimas
            tecnologías para garantizar un tratamiento completo y de calidad a nuestros pacientes.</p>
        <button class="btn">
            <span class="blockquote ">Agenda una cita</span>
            <i class="fa-solid fa-arrow-right"></i>
        </button>
    </div>

    <div class="p-2 g-col-6 opt-1 w-25 bg-light border rounded ">
        <div class="container-main">
            <img class="img-thumbnail float" src="../Proyecto_Hospital\assets\images\icons8-salud-mental-64.png"
                alt="...">
        </div>

        <h1 class="mt-4">Neurología</h1>
        <p>El departamento de neurología es el mejor para diagnosticar y tratar incluso las condiciones neurológicas más
            difíciles.</p>
        <button class="btn mt-5">
            <span class="blockquote ">Agenda una cita</span>
            <i class="fa-solid fa-arrow-right"></i>
        </button>
    </div>

    <div class="p-2 g-col-6 opt-1 w-25 bg-light border rounded">
        <div class="container-main">
            <img class="img-thumbnail float" src="../Proyecto_Hospital\assets\images\icons8-pastillas-100.png"
                alt="...">
        </div>
        <h1 class="mt-4">Farmacia</h1>
        <p >Nuestro departamento farmacéutico, le brindara las mejores preinscripciones para
        sus tratamientos.</p>
        <button class="btn mt-5">
            <span class="blockquote ">Agenda una cita</span>
            <i class="fa-solid fa-arrow-right"></i>
        </button>
    </div>

</div>

<style>
.grid {
    display: flex;
    justify-content: center;

}

.container-main {
    float: inline-start;
    position: absolute;
    top: 35%;
    width: 4.2vw;

}

.float {}
</style>

<?php require_once INCLUDES.'inc_footer.php';?>