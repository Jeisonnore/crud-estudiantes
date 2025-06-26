<?php
include('../conexion.php');

$id = $_POST['id'];
$nombre = $_POST['nombre'];
$documento = $_POST['documento'];
$correo = $_POST['correo'];
$telefono = $_POST['telefono'];

$sql = "UPDATE estudiantes SET nombre=?, documento=?, correo=?, telefono=? WHERE id=?";
$stmt = $conexion->prepare($sql);
$stmt->bind_param("ssssi", $nombre, $documento, $correo, $telefono, $id);
$ejecutado = $stmt->execute();
?>
<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</head>
<body>
<?php
if ($ejecutado) {
  echo "
  <script>
    Swal.fire({
      icon: 'success',
      title: 'Actualización exitosa',
      text: 'Los datos del estudiante se actualizaron correctamente.',
      showConfirmButton: false,
      timer: 1500
    }).then(() => {
      window.location.href = 'index.php';
    });
  </script>";
} else {
  echo "
  <script>
    Swal.fire({
      icon: 'error',
      title: 'Error al actualizar',
      text: 'No se pudo actualizar el registro.',
      confirmButtonText: 'Aceptar'
    }).then(() => {
      window.location.href = 'index.php';
    });
  </script>";
}
?>
</body>
</html>
