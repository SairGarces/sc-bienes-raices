<?php
include 'header.php'
?>

<main class="contenedor seccion">
    <h1>Contactanos</h1>
</main>

<div class="form_dad" style="background-image: url('assets/img/living.jpg'); background-repeat: no-repeat; background-size: cover; height:70rem; background-position: center center;">

    <form class="contenedor formulario_con" action="#" method="post">
        <label for="nombre">Nombre:</label>
        <input type="text" id="nombre" name="nombre" placeholder="Nombre">

        <label for="apellido">Apellido:</label>
        <input type="text" id="apellido" name="apellido" placeholder="Apellido">

        <label for="telefono">Telefono:</label>
        <input type="number" id="telefono" name="telefono" placeholder="telefono">

        <label for="email">Email:</label>
        <input type="email" id="email" name="email" placeholder="ejemplo@email.com">

        <label for="mensaje">Mensaje:</label>
        <textarea id="mensaje" name="mensaje" rows="4" placeholder="Danos tu mensaje"></textarea>

        <input type="submit" value="Enviar">
    </form>

</div>
<div class="contenedor">
    <div class="maps">
        <div>
            <h3>Donde estamos úbicados</h3>
        </div>
        <div class="map-responsive">
            <iframe src="https://www.google.com/maps/embed?pb=!1m17!1m12!1m3!1d24194.151942173787!2d-75.89212511600357!3d8.71312090773569!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m2!1m1!2zOMKwNDMnMjAuMSJOIDc1wrA1MycxOS44Ilc!5e0!3m2!1ses-419!2sco!4v1698371768115!5m2!1ses-419!2sco" width="100%" height="600" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
    </div>
</div>
<div class="contenedor">
    <h3>Visitanos en nuestras redes sociales</h3>
    <div class="redes_sociales">
        <div class="red-social">
            <a href="#"><img src="assets/icons/whatsapp.png" alt="whatsapp"></a>
        </div>
        <div class="red-social">
            <a href="#"><img src="assets/icons/tik-tok.png" alt="whatsapp"></a>
        </div>
        <div class="red-social">
            <a href="#"><img src="assets/icons/facebook.png" alt="whatsapp"></a>
        </div>
        <div class="red-social">
            <a href="#"><img src="assets/icons/gmail.png" alt="whatsapp"></a>
        </div>
        <div class="red-social">
            <a href="#"><img src="assets/icons/gorjeo.png" alt="whatsapp"></a>
        </div>
        <div class="red-social">
            <a href="#"><img src="assets/icons/youtube.png" alt="whatsapp"></a>
        </div>
        <div class="red-social">
            <a href="#"><img src="assets/icons/instagram.png" alt="whatsapp"></a>
        </div>
    </div>
</div>

<?php
include 'footer.php'
?>