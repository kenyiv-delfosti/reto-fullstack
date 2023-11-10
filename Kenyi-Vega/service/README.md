## Getting Started

Intalar dependencias:

```bash
composer install

Crear Base de datos

```MySQL
Crea una base de datos con nombre "service"

Migrar la base de datos y ejecutar los Seeder:

```bash
php artisan migrate:fresh --seed

Iniciar proyecto:

```bash
php artisan serve


Open [http://localhost:8000]

## Rutas

/api/login

    {
        "name": "ivan@gmail.com"
        "password": "123456"
    }

/api/register
/api/user
