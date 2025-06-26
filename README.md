
https://jeisonnore.github.io/crud-estudiantes/
# 🎓 Sistema de Gestión de Estudiantes (CRUD)

[![PHP](https://img.shields.io/badge/PHP-8.0+-blue.svg)](https://php.net/)
[![Bootstrap](https://img.shields.io/badge/Bootstrap-5.3-purple.svg)](https://getbootstrap.com/)
[![MySQL](https://img.shields.io/badge/MySQL-8.0-orange.svg)](https://www.mysql.com/)
[![SweetAlert2](https://img.shields.io/badge/SweetAlert2-11.0-yellow.svg)](https://sweetalert2.github.io/)

Sistema CRUD completo para gestión de estudiantes con interfaz intuitiva y validaciones robustas.

![image](https://github.com/user-attachments/assets/ad0f9aee-25c0-455f-9748-5a554334a8de)

![image](https://github.com/user-attachments/assets/bc518253-0925-42b8-adbc-188897fe0b8c)

![image](https://github.com/user-attachments/assets/1bfd70d8-1ad9-4213-8d63-03211d434d9b)




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



