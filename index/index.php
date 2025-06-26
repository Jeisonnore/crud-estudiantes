<?php include('../conexion.php'); ?>
<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <title>Gestión de Estudiantes</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</head>
<body class="bg-light">
<div class="container mt-5">
  <h2 class="mb-4">Registrar Estudiante</h2>
  <form action="agregar_estudiante.php" method="POST" class="row g-3">
    <div class="col-md-6">
      <input type="text" name="nombre" class="form-control" placeholder="Nombre completo" required>
    </div>
    <div class="col-md-6">
      <input type="text" name="documento" class="form-control" placeholder="Documento" required>
    </div>
    <div class="col-md-6">
      <input type="email" name="correo" class="form-control" placeholder="Correo electrónico" required>
    </div>
    <div class="col-md-6">
      <input type="text" name="telefono" class="form-control" placeholder="Teléfono (opcional)">
    </div>
    <div class="col-12">
      <button type="submit" class="btn btn-primary">Registrar</button>
    </div>
  </form>

  <hr class="my-5">

  <h2>Listado de Estudiantes</h2>
  <table class="table table-bordered">
    <thead class="table-dark">
      <tr>
        <th>ID</th>
        <th>Nombre</th>
        <th>Documento</th>
        <th>Correo</th>
        <th>Teléfono</th>
        <th>Acciones</th>
      </tr>
    </thead>
    <tbody>
      <?php
      $resultado = $conexion->query("SELECT * FROM estudiantes");
      while ($fila = $resultado->fetch_assoc()) {
        echo "<tr>
          <td>{$fila['id']}</td>
          <td>{$fila['nombre']}</td>
          <td>{$fila['documento']}</td>
          <td>{$fila['correo']}</td>
          <td>{$fila['telefono']}</td>
          <td>
            <button class='btn btn-warning btn-sm' data-bs-toggle='modal' data-bs-target='#modalEditar{$fila['id']}'>Editar</button>
            <button onclick='confirmarEliminacion({$fila['id']})' class='btn btn-danger btn-sm'>Eliminar</button>
          </td>
        </tr>";
      }
      ?>
    </tbody>
  </table>
</div>

<?php
$resultado = $conexion->query("SELECT * FROM estudiantes");
while ($fila = $resultado->fetch_assoc()) {
?>
<div class="modal fade" id="modalEditar<?= $fila['id'] ?>" tabindex="-1" aria-labelledby="modalLabel<?= $fila['id'] ?>" aria-hidden="true">
  <div class="modal-dialog">
    <form method="POST" action="actualizar_estudiante.php">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="modalLabel<?= $fila['id'] ?>">Editar Estudiante</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
        </div>
        <div class="modal-body">
          <input type="hidden" name="id" value="<?= $fila['id'] ?>">
          <div class="mb-3">
            <input type="text" class="form-control" name="nombre" value="<?= $fila['nombre'] ?>" required>
          </div>
          <div class="mb-3">
            <input type="text" class="form-control" name="documento" value="<?= $fila['documento'] ?>" required>
          </div>
          <div class="mb-3">
            <input type="email" class="form-control" name="correo" value="<?= $fila['correo'] ?>" required>
          </div>
          <div class="mb-3">
            <input type="text" class="form-control" name="telefono" value="<?= $fila['telefono'] ?>">
          </div>
        </div>
        <div class="modal-footer">
          <button type="submit" class="btn btn-success">Guardar cambios</button>
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
        </div>
      </div>
    </form>
  </div>
</div>
<?php } ?>

<script>
function confirmarEliminacion(id) {
  Swal.fire({
    title: '¿Estás seguro?',
    text: "Esta acción eliminará al estudiante.",
    icon: 'warning',
    showCancelButton: true,
    confirmButtonColor: '#d33',
    cancelButtonColor: '#6c757d',
    confirmButtonText: 'Sí, eliminar'
  }).then((result) => {
    if (result.isConfirmed) {
      window.location.href = 'eliminar_estudiante.php?id=' + id;
    }
  });
}
</script>
</body>
</html>
