1 - Crear la base de datos:

Accede a tu servidor de base de datos (por ejemplo, MySQL).
Crea una base de datos con el nombre: prueba_tecnica.

2 - Configurar el archivo de entorno:

Cambia el nombre del archivo .env.example a .env.
Abre el archivo .env y actualiza las credenciales de conexión a la base de datos según tu configuración local.

3 - Instalar dependencias y configurar el proyecto:

Abre una terminal de comandos y navega hasta la carpeta raíz del proyecto.
Ejecuta los siguientes comandos en el orden indicado:
Instalar dependencias del proyecto:
composer install

4 - Generar la clave de la aplicación:
php artisan key:generate

5 - Ejecutar migraciones y sembrar datos en la base de datos:
php artisan migrate --seed

6 - Iniciar el servidor local:
php artisan serve

7 - Por defecto, el proyecto estará disponible en: http://127.0.0.1:8000.

8 - Si deseas usar un puerto diferente, puedes especificarlo al iniciar el servidor:
php artisan serve --port=8080


