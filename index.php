<?php
include 'header.php'
?>

<main class="mititulo">
    <h1>Titulo Página index</h1>
</main>
<section class="contenedor">
    <div class="searching">
        <p class="texto_search">
            Encuentra el inmueble que necesitas
        </p>
        <div class="inputs_select">
            <select class="tipo_inmueble" id="tipo_inmueble">
                <option value="" selected>Seleccione tipo inmueble</option>
                <option value="casa">Casa</option>
                <option value="apartamento">Apartamento</option>
                <option value="oficina">Oficina</option>
            </select>
            <select class="ubicacion" id="ubicacion">
                <option value="" selected>Seleccione una ubicación</option>
                <option value="ciudad">Ciudad</option>
                <option value="playa">Playa</option>
                <option value="montaña">Montaña</option>
            </select>
            <input type="text" class="city" id="precio" placeholder="Ciudad, barrio o citio de interes">
            <button class="button_search">Buscar</button>
        </div>
    </div>
</section>
<section class="contenedor catas">
    <?php
    include 'cards.php'
    ?>
</section>
<div class="contenedor">
    <div class="buttonVerMas">
        <a class="verMas" href="aptos.php">Ver más...</a>
    </div>
</div>

<?php
include 'footer.php'
?>