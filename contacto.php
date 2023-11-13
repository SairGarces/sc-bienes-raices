<?php
include 'header.php';
include 'settings/boostrap.php';
?>

<?php
include 'inc/dataBase.php';
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Recuperar los datos del formulario
    $name = $_POST["name"];
    $lastName = $_POST["lastName"];
    $phone = $_POST["phone"];
    $email = $_POST["email"];
    $message = $_POST["messaje"];

    // Realizar la validación de los datos según tus requisitos
    $errors = array();

    // if (empty($name)) {
    //     $errors['name'] = 'El nombre es obligatorio.';
    // }

    // if (empty($lastName)) {
    //     $errors['lastName'] = 'El apellido es obligatorio.';
    // }

    // Agregar más validaciones según tus necesidades (por ejemplo, para teléfono, email, mensaje)

    // Si no hay errores, proceder a la inserción en la base de datos
    if (empty($errors)) {
        // Preparar la consulta SQL para la inserción
        $sql = "INSERT INTO contacto (name, lastName, phone, email, messaje) VALUES ('$name', '$lastName', '$phone', '$email', '$message')";

        // Ejecutar la consulta
        if ($conn->query($sql) === TRUE) {
            // echo "Registro insertado correctamente.";
        } else {
            echo "Error al insertar el registro: " . $conn->error;
        }
    } else {
        // Mostrar los errores de validación
        print_r($errors);
    }

    // Cerrar la conexión
    $conn->close();

    // header("Location: index.php"); // Reemplaza "gracias.php" con la URL de la página que desees mostrar después del envío del formulario
    // exit();
    echo '<script>
    $(document).ready(function(){
        $("#successModal").modal("show");
    });
    </script>';
}

?>


<main class="contenedor seccion">
    <h1>Contactanos</h1>
</main>

<div class="form_dad" style="background-image: url('assets/img/living.jpg'); background-repeat: no-repeat; background-size: cover; height:70rem; background-position: center center;">



    <form class="contenedor formulario_con" action="" method="post">
        <label for="name">Nombre:</label>
        <input type="text" id="name" name="name" placeholder="Nombre" required>

        <div id="nombreError" style="color: red;"></div>

        <label for="lastName">Apellido:</label>
        <input type="text" id="lastname" name="lastName" placeholder="Apellido" required>

        <div id="apellidoError" style="color: red;"></div>

        <label for="phone">Telefono:</label>
        <input type="number" id="phone" name="phone" placeholder="Telefono" required maxlength="10">

        <div id="telefonoError" style="color: red;"></div>

        <label for="email">Email:</label>
        <input type="email" id="email" name="email" placeholder="ejemplo@email.com" required>

        <div id="emailError" style="color: red;"></div>

        <label for="messaje">Mensaje:</label>
        <textarea id="messaje" name="messaje" rows="4" placeholder="Danos tu mensaje" required></textarea>

        <div id="mensajeError" style="color: red;"></div>

        <input type="submit" value="Enviar">
    </form>

    <script>
        const nombreInput = document.getElementById('name');
        const apellidoInput = document.getElementById('lastname');
        const telefonoInput = document.getElementById('phone');
        const emailInput = document.getElementById('email');
        const mensajeInput = document.getElementById('messaje');

        nombreInput.addEventListener('input', () => {
            if (nombreInput.validity.valueMissing) {
                nombreInput.setCustomValidity('Por favor ingrese su nombre');
                document.getElementById('nombreError').textContent = 'Por favor ingrese su nombre';
            } else {
                nombreInput.setCustomValidity('');
                document.getElementById('nombreError').textContent = '';
            }
        });

        apellidoInput.addEventListener('input', () => {
            if (apellidoInput.validity.valueMissing) {
                apellidoInput.setCustomValidity('Por favor ingrese su apellido');
                document.getElementById('apellidoError').textContent = 'Por favor ingrese su apellido';
            } else {
                apellidoInput.setCustomValidity('');
                document.getElementById('apellidoError').textContent = '';
            }
        });

        telefonoInput.addEventListener('input', () => {
            if (telefonoInput.validity.valueMissing) {
                telefonoInput.setCustomValidity('Por favor ingrese su teléfono');
                document.getElementById('telefonoError').textContent = 'Por favor ingrese su teléfono';
            } else {
                telefonoInput.setCustomValidity('');
                document.getElementById('telefonoError').textContent = '';
            }
        });

        emailInput.addEventListener('input', () => {
            if (emailInput.validity.valueMissing) {
                emailInput.setCustomValidity('Por favor ingrese su correo electrónico');
                document.getElementById('emailError').textContent = 'Por favor ingrese su correo electrónico';
            } else {
                emailInput.setCustomValidity('');
                document.getElementById('emailError').textContent = '';
            }
        });

        mensajeInput.addEventListener('input', () => {
            if (mensajeInput.validity.valueMissing) {
                mensajeInput.setCustomValidity('Por favor ingrese su mensaje');
                document.getElementById('mensajeError').textContent = 'Por favor ingrese su mensaje';
            } else {
                mensajeInput.setCustomValidity('');
                document.getElementById('mensajeError').textContent = '';
            }
        });
    </script>

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

<div class="modal fade" id="successModal" tabindex="-1" role="dialog" aria-labelledby="successModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="successModalLabel">Éxito</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Cerrar">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                El formulario se ha enviado correctamente nos estaremos comunicando con usted.
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-primary" onclick="window.location.href='index.php'">Aceptar</button>
            </div>
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