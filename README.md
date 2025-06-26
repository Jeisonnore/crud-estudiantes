
# 🎓 Sistema de Gestión de Estudiantes (CRUD)

[![PHP](https://img.shields.io/badge/PHP-8.0+-blue.svg)](https://php.net/)
[![Bootstrap](https://img.shields.io/badge/Bootstrap-5.3-purple.svg)](https://getbootstrap.com/)
[![MySQL](https://img.shields.io/badge/MySQL-8.0-orange.svg)](https://www.mysql.com/)
[![SweetAlert2](https://img.shields.io/badge/SweetAlert2-11.0-yellow.svg)](https://sweetalert2.github.io/)

Sistema CRUD completo para gestión de estudiantes con interfaz intuitiva y validaciones robustas.

---

## 🖼️ Vista previa

![Pantalla principal](https://github.com/user-attachments/assets/09507eae-007f-4809-bd88-4aeeee1c0565)
![Formulario de edición](https://github.com/user-attachments/assets/316ab7e3-5f06-4026-ae7f-0fbaa005382e)
![Modal editar estudiante](https://github.com/user-attachments/assets/f3c14534-5f32-4087-b2a6-d1129499e752)

---

## ✨ Características principales

- ✅ Registro de estudiantes con validación de campos
- 🔍 Visualización en tabla responsive
- ✏️ Edición mediante modales de Bootstrap
- 🗑️ Eliminación con confirmación interactiva
- 📱 Diseño responsive compatible con móviles
- 💬 Notificaciones elegantes con SweetAlert2

---

## 🛠️ Tecnologías utilizadas

- **Backend**: PHP 8.0+
- **Frontend**: Bootstrap 5.3, SweetAlert2
- **Base de datos**: MySQL 8.0
- **Servidor**: Apache/Nginx

---

## 🚀 Instalación rápida

1. Clona el repositorio:

```bash
git clone https://github.com/Jeisonnore/crud-estudiantes.git
Importa la base de datos en MySQL:

sql
Copiar
Editar
CREATE DATABASE colegio;
USE colegio;

CREATE TABLE estudiantes (
  id INT AUTO_INCREMENT PRIMARY KEY,
  nombre VARCHAR(100) NOT NULL,
  documento VARCHAR(20) NOT NULL UNIQUE,
  correo VARCHAR(100) NOT NULL,
  telefono VARCHAR(20)
);
Configura la conexión en conexion.php:

php
Copiar
Editar
$conexion = new mysqli("localhost", "tu_usuario", "tu_contraseña", "colegio");
Abre el proyecto desde tu navegador:
http://localhost/colegio/index.php

🧩 Estructura de archivos
perl
Copiar
Editar
crud-estudiantes/
├── conexion.php                  # Configuración de la base de datos
├── index/
│   ├── index.php                # Vista principal
│   ├── agregar_estudiante.php  # Crear estudiantes
│   ├── actualizar_estudiante.php # Editar estudiantes
│   └── eliminar_estudiante.php # Eliminar estudiantes
└── README.md
🌐 Demo en línea
Puedes ver una versión en vivo en:
👉 https://jeisonnore.github.io/crud-estudiantes/


