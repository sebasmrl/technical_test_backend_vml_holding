# Prueba Tecnica VML Holding - Backend

- Autor: Ing. Sebastian Morales


## Caracteristicas
Este proyecto es una RestAPI desarrollada en Laravel 11, para la administración de libros de una bibioteca 

## Indicaciones

- 1. Clona este repositorio 
- 2. Ubicate en la carpeta y ejecuta ```composer install ``` para instalar todas las dependecias del proyecto.
- 3. Cambiar el nombre del archivo ```.env.example``` por ```.env ```
- 4. Modifica las variables de entorno de tu DB, en dado caso de que no quiera utilizar por defecto SQLite por defecto
```bash
    DB_CONNECTION=sqlite  #mysql 
    DB_HOST=127.0.0.1
    DB_PORT=3306
    DB_DATABASE=laravel
    DB_USERNAME=tuUsuarioDeDB
    DB_PASSWORD=tuContrasena
```
- 5. Cerciórate en caso de usar SQLite que el puerto no esté ocuapado en tu maquina.
- 6. Ejecuta el comando ```php artisan migrate ``` para hacer la migración de la base de datos y establecer los esquemas.
- 8. Ejecuta el comando ```php artisan serve ``` para iniciar el servidor
- 7.  ...
