<!-- FILEPATH: /C:/apache/htdocs/sc-bienes-raices/modal/modal.html -->

<!-- Agrega los enlaces a los archivos CSS y JS de Bootstrap -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

<!-- Agrega el botón que abrirá el modal -->
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal">
  Abrir modal
</button>

<!-- Agrega el modal -->
<div class="modal" id="myModal">
  <div class="modal-dialog">
    <div class="modal-content">

      <!-- Encabezado del modal -->
      <div class="modal-header">
        <h4 class="modal-title">Título del modal</h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>

      <!-- Cuerpo del modal -->
      <div class="modal-body">
        <p>Contenido del modal</p>
      </div>

      <!-- Pie del modal -->
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
      </div>

    </div>
  </div>
</div>
