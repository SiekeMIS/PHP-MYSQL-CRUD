# CRUD con PHP y MySQL
Aplicación básica para crear, leer, actualizar y eliminar tareas en una base de datos MySQL.

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
## Uso
- Agregar un nombre para la tarea con una descripción
- Luego podras eliminar la tarea o actualizarla.