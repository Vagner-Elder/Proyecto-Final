# PASOS A SEGUIR
Primero, debe clonar el proyecto (se sugiere usar ssh), pero puede usar HTTP o la descarga directa.
## Paso 1. clonación con ssh

```bash
λ git clone git@gitlab.com:tecnoprofe/laravel-upds.git
```

## Paso 2. Copiar el archivo .env  
```bash
λ cd laravel-upds\
λ cp .env.example .env
```

## Paso 3. Editar el archivo .env
```bash
λ nano .env
```
Luego se debe realizar un edición en el usuario, password y nombre de BD.
```bash
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=laravel_upds
DB_USERNAME=root
DB_PASSWORD=
```
Una vez editado. presiona en windows, Ctrl+o y luego enter para guardar.
Luego presiona Ctrl+x para salir.
## Paso 4. Crear Base de datos por terminal.

```bash
λ mysql -u root -p
Enter password:
mysql>create database laravel_upds;
Query OK, 1 row affected (0.01 sec)
mysql> quit
```
Para salir del entorno de mysql, presione quit

## Paso 5. Descargar paquetes de php con composer
Ahora es necesario descargar las librerias de PHP para que el proyecto funcione.

```bash
λ composer update           
```
# Paso 6. Crear tablas relacionales y restaurar datos.
```bash
λ php artisan migrate:fresh --seed
```


-__