# TicketsLaravel

## Supuestos para la Solución

Para la solución implementada se utilizarán 3 tablas:
1. Tabla events: contiene los datos de los eventos
2. Tabla users: contiene los datos del usuario que realiza la compra
3. Tabla purchases: contiene los datos de la compra (id de usuario e id del evento)

## Ejecución de la Solución

### 1. Configuración de Variables de Entorno

Se deben modificar las variables de entorno en el archivo `.env` según la configuración de tu base de datos. Aquí hay un ejemplo para una base de datos MySQL llamada `tickets`:

```env
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=tickets
DB_USERNAME=root
DB_PASSWORD=
```

### 2. Migración de la Base de Datos

Ejecutar el siguiente comando en la consola para aplicar las migraciones de la base de datos:

```bash
php artisan migrate
```

### 3. Iniciar el Servidor Laravel

Iniciar el servidor Laravel ejecutando el siguiente comando:

```bash
php artisan serve
```

Esto iniciará el servidor en http://localhost:8000 de forma predeterminada.

### 4. Realizar Consultas con Postman

Utiliza Postman, ThunderClient u otra herramienta de prueba de API para realizar consultas a las rutas definidas:

- **Listar todos los eventos:**
  - Método: GET
  - URL: http://localhost:8000/events

![image](https://github.com/Guilleerv/TicketsLaravel/assets/74439275/b8781d01-081d-41bb-a982-e11ae00daffd)

- **Obtener detalles de un evento específico:**
  - Método: GET
  - URL: http://localhost:8000/events/{id}

![image](https://github.com/Guilleerv/TicketsLaravel/assets/74439275/e825036a-8a3e-4c84-a650-1045ead16295)

- **Realizar una compra:**
  - Método: POST
  - URL: http://localhost:8000/purchase
  - Cuerpo de la solicitud (Ejemplo en formato JSON):
    ```json
    {
      "id_cliente": 2,
      "id_evento": 2
    }
    ```
![image](https://github.com/Guilleerv/TicketsLaravel/assets/74439275/56fc6fdd-2326-4f92-a802-41e6ddfe74c5)

- **Obtener todas las órdenes relacionadas al ID del cliente:**
  - Método: GET
  - URL: http://localhost:8000/orders/{id}


![image](https://github.com/Guilleerv/TicketsLaravel/assets/74439275/03bfce4f-9422-4917-8ca9-9539513bfece)

![image](https://github.com/Guilleerv/TicketsLaravel/assets/74439275/722fe4c6-c348-4f07-a3f4-e0448826aa42)
