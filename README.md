# DesafioIDESA
Prueba de idesa sistema de Biblioteca

# Instalaciones y archivos necesarios para la utilizacion del sistema

# Paso 1: Creación del archivo .env
Para la utilizacion del sistema necesita crear un archivo .env, una ve creado el archivo debera copiar todo el
contenido del archivo .env-example el cual contiene la informacion ya configurada sobre el sistema


# Paso 2: ICreacion e importacion de la base de datos.
Antes de realizar la instalaciones de las librerias es necasario que tenga en cuenta que debe tener la base de
datos del proyecto ya que al instalar el composer le podria generar un error ya que no encontraria la conexion
a la base de datos puesta en el .env a la hora de realizar la instalacion. Para eso es necesario en su servidor local
ya sea XAMPP crear una base de datos nueva con el mismo nnombre de la base de datos del .env.

Una vez realizado la creacion de la base de datos en los archivos del proyecto se encuentra un sql de la base de datos,
el cual puede importar para tener la estructura de la base de datos. O tambien realizar un migrate a la base de datos
pero por razones de que el composer todavia no fue instalado podria fallar.

# Paso 3: Instalaciones de los paquetes necasarios para el sistema.
Una vez completado los procesos anteriores, proceda a instalar el sisguiente comando composer install,
el cual instalara la libreria de composer y todos sus componentes, hecho toda la instalacion debera ejecutar el
siguiente comando php artisan key:generate el cual generara la app key del proyecto.Para confirmacion de las instalaciones 
podra ejecutar el comando php artisan migrate:fresh --sedd o php artisan migrate para realizar la migraciones a la base de datos.

# Paso 4: Ejecutar el server del proyecto.
Terminado con todo los necesarios para el sistema ya con la base de datos ya migrada se procede a levantar el sistema
en laravel ser realiza con el siguiente comandon php artisan serve o si trabaja con una ip y un puerto 
seria php artisan serve --host='su dereccion ip' --pot='el puerto asignado'.

# Observaciones a tener en cuenta.
Si va utilizar su ip y un puerto asignado, tenga en cuenta que debe ser el mismo asignado an el.env en la APP_URL=http://localhost
el sistema cuenta con un usuario de prueba que seria el siguiente
Correo: prueba@gmail.com Contraseña: 123456789.

# Desde ya muchas gracias por la oportunidad.
