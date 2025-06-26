![Captura de pantalla 2025-06-25 191737](https://github.com/user-attachments/assets/2311c220-71e9-4727-9dc4-e09f2109a4b6)![Captura de pantalla 2025-06-25 191737](https://github.com/user-attachments/assets/2311c220-71e9-4727-9dc4-e09f2109a4b6)
https://jeisonnore.github.io/crud-estudiantes/
# 🎓 Sistema de Gestión de Estudiantes (CRUD)

[![PHP](https://img.shields.io/badge/PHP-8.0+-blue.svg)](https://php.net/)
[![Bootstrap](https://img.shields.io/badge/Bootstrap-5.3-purple.svg)](https://getbootstrap.com/)
[![MySQL](https://img.shields.io/badge/MySQL-8.0-orange.svg)](https://www.mysql.com/)
[![SweetAlert2](https://img.shields.io/badge/SweetAlert2-11.0-yellow.svg)](https://sweetalert2.github.io/)

Sistema CRUD completo para gestión de estudiantes con interfaz intuitiva y validaciones robustas.

![Captura de pantalla 2025-06-25 191834](https://github.com/user-attachments/assets/316ab7e3-5f06-4026-ae7f-0fbaa005382e)


![Captura de pantalla 2025-06-25 191859](https://github.com/user-attachments/assets/f3c14534-5f32-4087-b2a6-d1129499e752)





## ✨ Características principales

- ✅ Registro de estudiantes con validación de campos
- 🔍 Visualización en tabla responsive
- ✏️ Edición mediante modales de Bootstrap
- 🗑️ Eliminación con confirmación interactiva
- 📱 Diseño responsive compatible con móviles
- 💬 Notificaciones elegantes con SweetAlert2

## 🛠️ Tecnologías utilizadas

- **Backend**: PHP 8.0+
- **Frontend**: Bootstrap 5.3, SweetAlert2
- **Base de datos**: MySQL 8.0
- **Servidor**: Apache/Nginx

## 🚀 Instalación rápida

1. Clona el repositorio:
```bash
git clone https://github.com/tu-usuario/gestion-estudiantes.git
Importa la base de datos:

sql
CREATE DATABASE colegio;
USE colegio;

CREATE TABLE estudiantes (
  id INT AUTO_INCREMENT PRIMARY KEY,
  nombre VARCHAR(100) NOT NULL,
  documento VARCHAR(20) NOT NULL UNIQUE,
  correo VARCHAR(100) NOT NULL,
  telefono VARCHAR(20)
);
Configura la conexión (conexion.php):

php
$conexion = new mysqli("localhost", "tu_usuario", "tu_contraseña", "colegio");
¡Listo! Accede a index.php desde tu navegador.

🧩 Estructura de archivos
text
gestion-estudiantes/
├── conexion.php             # Configuración de la DB
├── index.php                # Vista principal
├── agregar_estudiante.php   # Lógica de creación
├── actualizar_estudiante.php # Lógica de actualización
└── eliminar_estudiante.php  # Lógica de eliminación



