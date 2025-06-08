## Requisitos

* Docker
* Docker Compose
* PHP >= 8.1
* Composer
* PostgreSQL

## Instalación


1. **Renombrar el archivo `.env.example`**

   Quita la palabra `example` para que el archivo se llame `.env`:

   ```bash
   cp .env.example .env
   ```

2. **Generar la clave de la aplicación**

   Dentro del contenedor de la aplicación, ejecuta:

   ```bash
   docker-compose exec app php artisan key:generate
   ```

3. **Ejecutar migraciones y seeders**

   Esto creará las tablas y las poblará con datos iniciales:

   ```bash
   docker-compose exec app php artisan migrate --seed
   ```

4. **Levantar la aplicación**

   Usa Docker Compose para iniciar todos los servicios:

   ```bash
   docker-compose up -d
   ```

5. **Acceder al Dashboard**

   Abre tu navegador en:

   ```
   http://localhost:8000
   ```
