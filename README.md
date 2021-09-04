<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400"></a></p>

# Proyecto base de datos de abogados.

<p>Este es un proyecto acerca del control de datos de un bufete de abogados. 
Se tienen los CRUD de clientes, abogados y casos sobre los cuales se pueden eliminar ciertos datos</p>
<p> Se pueden traer ejecutar el proyecto con el comando `php artisan serve` y comenzara a correr 
sobre el formulario que se tiene en esos momentos<p>
<p>Se requiren modificar ciertos datos en el archivo `env` en los siguientes parametros: </p>

``` 
    DB_DATABASE=
    DB_USERNAME=root
    DB_PASSWORD=
```
<p>Se quiere la creacion de la base de datos en el cual se desea realizar la migración y con 
```php artisan migrate
``` 
<p>hacerla para que el proyecto pueda correr.</p>

<img src=".//image/crud-clientes.png">
<p>Este es un ejemplo de la vista del CRUD de clientes.</p>

