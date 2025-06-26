<?php
include('../conexion.php');

$nombre = $_POST['nombre'];
$documento = $_POST['documento'];
$correo = $_POST['correo'];
$telefono = $_POST['telefono'];

$verificar = $conexion->prepare("SELECT id FROM estudiantes WHERE documento = ?");
$verificar->bind_param("s", $documento);
$verificar->execute();
$verificar->store_result();
?>
<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</head>
<body>
<?php
if ($verificar->num_rows > 0) {
  echo "
  <script>
    Swal.fire({
      icon: 'error',
      title: 'Documento duplicado',
      text: 'Este número de documento ya está registrado.',
      confirmButtonText: 'Volver'
    }).then(() => {
      window.location.href = 'index.php';
    });
  </script>";
} else {
  $sql = "INSERT INTO estudiantes (nombre, documento, correo, telefono) VALUES (?, ?, ?, ?)";
  $stmt = $conexion->prepare($sql);
  $stmt->bind_param("ssss", $nombre, $documento, $correo, $telefono);
  if ($stmt->execute()) {
    echo "
    <script>
      Swal.fire({
        icon: 'success',
        title: 'Registro exitoso',
        text: 'El estudiante fue registrado correctamente.',
        showConfirmButton: false,
        timer: 1800
      }).then(() => {
        window.location.href = 'index.php';
      });
    </script>";
  } else {
    echo "
    <script>
      Swal.fire({
        icon: 'error',
        title: 'Error al registrar',
        text: 'Ocurrió un problema al registrar el estudiante.',
        confirmButtonText: 'Aceptar'
      }).then(() => {
        window.location.href = 'index.php';
      });
    </script>";
  }
}
?>
</body>
</html>
