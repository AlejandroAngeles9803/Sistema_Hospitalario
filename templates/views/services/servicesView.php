<?php require_once INCLUDES.'inc_header.php'; ?>

<div class="grid ms-1 mt-5 ">
  <div class="p-2 g-col-6 opt-1 text-white w-100 h-100">
    <img src="\Proyecto_Hospital\assets\images\icons8-sitio-web-de-citas.svg" alt="">
    <h3 class="display-3 mt-3 ">Citas</h3>
    <p class="blockquote">Todos nuestros visitantes pueden solicitar citas en línea Mientras tanto, si es su primera vez en nuestra clínica, no dude en solicitar una consulta  con el mejor médico disponible.</p>
    
    <button class="btn">
        <span class="blockquote text-white">Agendar una cita</span>
        <i class="fa-solid fa-arrow-right" style="color: #f7f7f7;"></i>
    </button>
  </div>
  <div class="p-2 g-col-6 opt-2 text-white w-100 h-100">
  <img class="img" src="\Proyecto_Hospital\assets\images\icons8-doctor-male-skin-type-3-96.png" alt="">
    <h3 class="display-3 mt-3 ">Doctores</h3>
    <p class="blockquote">Trabajamos y compartimos cooperación con los mejores expertos y los médicos más cuidadosos del país. Consulte la lista de nuestros médicos para ponerse en contacto fácilmente y reservar una cita.</p>
    
    <button class="btn">
        <span class="blockquote text-white">Conoce a nuestros médicos</span>
        <i class="fa-solid fa-arrow-right" style="color: #f7f7f7;"></i>
    </button>
  </div>

  <div class="p-2 g-col-6 opt-1 text-white w-100 h-100">
    <img class="img" src="\Proyecto_Hospital\assets\images\icons8-music-robot-96.png" alt="">
    <h3 class="display-3 mt-3 ">Chat-Bot</h3>
    <p class="blockquote">Nuestro Chat-Bot de Consejos de Enfermería está disponible las 24 horas del día, los 7 días de la semana para casos de emergencia.</p>
    
    <button class="btn">
        <span class="blockquote text-white">Pruébalo ahora</span>
        <i class="fa-solid fa-arrow-right" style="color: #f7f7f7;"></i>
    </button>
  </div>
</div>

<style>
    .grid{
        display: flex;
        height: 82vh;

    }

    .opt-1{
        background-color: #27243D;
        border: 1px solid #27243D;
        margin: 10px;
    }

    .opt-2{
        background-color: #535063;
        border: 1px solid #535063;
        margin: 10px;

    }

    .img{

      width: 10vw;

    }
</style>

<?php require_once INCLUDES.'inc_footer.php'; ?>