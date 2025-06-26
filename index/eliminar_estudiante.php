<?php
include('../conexion.php');

$id = $_GET['id'];
$resultado = $conexion->query("DELETE FROM estudiantes WHERE id = $id");
?>
<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</head>
<body>
<?php
if ($resultado) {
  echo "
  <script>
    Swal.fire({
      icon: 'success',
      title: 'Estudiante eliminado',
      text: 'El registro fue eliminado correctamente.',
      showConfirmButton: false,
      timer: 1700
    }).then(() => {
      window.location.href = 'index.php';
    });
  </script>";
} else {
  echo "
  <script>
    Swal.fire({
      icon: 'error',
      title: 'Error al eliminar',
      text: 'No se pudo eliminar el estudiante.',
      confirmButtonText: 'Aceptar'
    }).then(() => {
      window.location.href = 'index.php';
    });
  </script>";
}
?>
</body>
</html>
