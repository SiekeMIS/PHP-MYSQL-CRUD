# Nombre del Proyecto

🔹 **Descripción breve** 
Este es un proyecto básico de CRUD (Create, Read, Update, Delete) de un sistema de tareas implementado con PHP y MySQL, utilizando XAMPP como entorno de desarrollo local. El proyecto permite gestionar registros en una base de datos a través de una interfaz web sencilla.

## Tecnologías utilizadas
- PHP 8.2.12
- MySQL 9.3.0
- XAMPP 8.2.12
- Bootstrap 5
- HTML5, CSS3

## Requisitos previos
- XAMPP instalado
- Servidor Apache en ejecución
- Servicio MySQL en ejecución
- Navegador web moderno

## Instalación
1. Clona el repositorio o descarga los archivos: git clone https://github.com/SiekeMIS/PHP-MYSQL-CRUD.git
2. Coloca la carpeta del proyecto en el directorio htdocs de XAMPP: C:\xampp\htdocs\PHP-MYSQL-CRUD
3. Importa lña base de datos:
    - Abre phpMyAdmin (http://localhost/phpmyadmin)
    - Crea una nueva base de datos llamada crud
    - Importa el archivo crud.sql que se encuentra en el proyecto
4. Configura la conexión a la base de datos:
    - Edita el archivo conexion.php con tus credenciales de MySQL si es necesario:
    - $conexion = mysqli_connect("localhost", "root", "", "crud");
5. Accede al proyecto en tu navegador:
    - http://localhost/PHP-MYSQL-CRUD/

## Estructura del proyecto
PHP-MYSQL-CRUD/
├── includes 
    ├── footer.php
    └── header .php
├── db.php        # Archivo de conexión a la base de datos
├── index.php          # Página principal que muestra las tareas.
├── save_task.php          # Formulario para crear nuevos tareas.
├── delete_task.php       # Lógica para eliminar regtareas.
├── edit.php     # Lógica para actualizar tareas y descripción.
├── README.md          # Pequeño resumen de como usarlo e implementarlo.
└── Documentación.md    #Documentaión detallada.

## Funcionalidades
- Crear Tareas: Añade nuevas tareas a la base de datos.
- Leer Tareas: Visualiza todos las tareas existentes.
- Actualizar Tareas: Modifica información de tareas existentes.
- Eliminar Tareas: Remueve registros de la base de datos.

# Contribuciones
- Haz un fork del repositorio.
- Crea una rama con tu nueva feature (git checkout -b feature/nueva-feature).
- Haz commit de tus cambios (git commit -am 'Añade nueva feature').
- Haz push a la rama (git push origin feature/nueva-feature).
- Abre un Pull Request.

# Futuras Mejoras
- Mejorar la estetica.
- Marcar tareas como completadas** (con cambio de color).  
- Fechas y recordatorios** (usando JavaScript).  
- Sistema de usuarios** (para múltiples listas).  
- Diseño responsive mejorado** (Mobile First).  
- Categorías/etiquetas** para organizar tareas.