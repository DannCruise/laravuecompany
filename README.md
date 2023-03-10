# CRUD Laravel + Vue + Inertia + ChartJS + DataTables    (LaraVueCompany)

## Doble CRUD con login en Laravel 10 y Vue3

Doble CRUD con relaciones entre tablas, se usa el sistema de autenticación Laravel Breeze. Se utiliza <b>Laravel 10</b> y <b>Vue 3</b> con <b>Inertia.js</b>.

- Crud tradicional para <b>Departamentos</b>

- Crud en una sola vista y con paginación para <b>Empleados</b>

- Grafica de empleados por departamento con <b>ChartJS</b>

- Reportes exportables de empleados y de departamentos con <b>DataTables</b>

- Se crea un componente para el select y otro para botón de editar.

- Se utiliza Factory para crear 6 registros de departamentos y 25 de empleados.


Instalación:

1) Crear una base de datos mysql

2) Clonar o descargar el proyecto en el directorio de tu servidor web

3) Acceder mediante terminal a la carpeta del proyecto

4) Ejecutar:  <b>Composer install</b>

5) Crear el archivo .env con los comandos: <b> cp .env.example .env</b>

6) Generar la API key ejecutando: <b> php artisan key:generate </b>

7) En el archivo .env colocar el nombre de la base de datos

8) Para ejecutar las migraciones: <b>php artisan migrate --seed</b>

9) Ejecutar <b>npm install</b> para las dependencias de node.js

10) Ejecutar <b>npm run build</b> y <b>php artisan serve</b> para visualizarlo en el navegador o puedes usar Laragon, xammp, etc.

## Tabla Departments
- id 
- name


## Tabla Employees
- id
- name
- email
- phone
- department_id


## Video de explicación

Si quieres ver el video en donde se explica el ejercicio paso a paso  [te comparto el siguiente enlace](https://youtu.be/sQwDLrleegA)