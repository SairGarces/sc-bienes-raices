<!-- 
//   include 'boostrap.php';

<table class="table table-dark">
  <thead>
    <tr></tr>
      <th scope="col">ID</th>
      <th scope="col">Nombre</th>
      <th scope="col">Apellido</th>
      <th scope="col">Telefono</th>
      <th scope="col">Email</th>
      <th scope="col">Mensaje</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td>Mark</td>
      <td>Otto</td>
      <td>@mdo</td>
      <td>@mdo</td>
      <td>@mdo</td>
    </tr>
  </tbody>
</table> -->

<?php
include 'header.php';
include 'settings/boostrap.php';
include 'inc/dataBase.php';

// Realizar la consulta para obtener los datos de la tabla 'contacto'
$sql = "SELECT id, name, lastName, phone, email, messaje FROM bienesraices.contacto";
$result = $conn->query($sql);

?>

<!-- Resto de tu código HTML -->

<table class="table table-dark">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Nombre</th>
      <th scope="col">Apellido</th>
      <th scope="col">Telefono</th>
      <th scope="col">Email</th>
      <th scope="col">Mensaje</th>
    </tr>
  </thead>
  <tbody>

    <?php
    // Mostrar los datos en la tabla
    while ($row = $result->fetch_assoc()) {
        echo '<tr>';
        echo '<th scope="row">' . $row['id'] . '</th>';
        echo '<td>' . $row['name'] . '</td>';
        echo '<td>' . $row['lastName'] . '</td>';
        echo '<td>' . $row['phone'] . '</td>';
        echo '<td>' . $row['email'] . '</td>';
        echo '<td>' . $row['messaje'] . '</td>';
        echo '</tr>';
    }
    ?>

  </tbody>
</table>

<!-- Resto de tu código HTML -->

<?php
// Cerrar la conexión
$conn->close();
include 'footer.php';
?>

