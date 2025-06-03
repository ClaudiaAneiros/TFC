<h1 align="center"> Entre Libros </h1>
<p align="center">
<img alt="Imagen logo Entre Libros" src="https://github.com/user-attachments/assets/69b8283e-4d02-4b0c-a2bc-b709dee40a52" widht=300 height=300><br>
<img alt="Static Badge" src="https://img.shields.io/badge/version%20-%201.0%20-%20red">
<img alt="Static Badge" src="https://img.shields.io/badge/status%20-%20en%20desarrollo%20-default">
<img alt="Static Badge" src="https://img.shields.io/badge/lisence-MIT-blue">
</p>

<h2>Descripción del proyecto</h2> 
Entre Libros es una aplicación web para una librería online que permite a los usuarios explorar el catálogo completo de libros organizados por temáticas, navegar mediante un carrusel interactivo, y gestionar una cesta de la compra virtual.

<h2>🔨 Demostración de funciones y aplicaciones</h2> 
<ul>
  <li>Funcionalidad 1: recopilar información sobre los libros que hay en la tienda (nombre, autor, precio).</li>
  <li>Funcionalidad 2: añadir libros a una cesta de la compra, mostrándote el precio de cada uno y el total a pagar.</li>
  <li>Funcionalidad 3: poder contactar con la tienda mediante un formulario, en caso de dudas o aportaciones.</li>
  <li>Funcionalidad 4: consultar ubicaciones de las tiendas, email y teléfono.</li>
  <li>Funcionalidad 5: filtrar por género en la sección de libros, con una visualización en modo carrusel, podiendo acceder a cada uno mediante el enlace del título del género.</li>
  <li>Funcionalidad 6: iniciar sesión o registrarse si el usuario no dispone de cuenta, verficando las credenciales contra la base de datos en la que se almacenan.</li>
  <li>Funcionalidad 7: almacenar información sobre la empresa, para que los clientes sepan a lo que se dedican y las actividades que realizan.</li>
</ul>

<h2>📂 Acceso al Proyecto</h2>
  Para poder acceder al proyecto será necesario clonar el repositorio en el directorio de Apache: git clone https://github.com/ClaudiaAneiros/TFC.git /var/www/html/TFC. <br>
  Posteriormente, en la carpeta apache, se encuentran tres archivos de configuración que serán necesarios para poder lanzar la aplicación, cada uno de los archivos se deberán poner en las siguientes direcciones:<br>
  El archivo apache2.conf, que es el archivo de configuración principal para los servidores Apache que le permite controlar la configuración global, va en la carpeta /etc/apache2/.
  El archivo entrelibros.conf, se deberá añadir en /etc/apache2/sites-available/ y además, se deberá ejecutar el comando "sudo a2ensite entrelibros.conf" en la terminal para que el archivo se cree en /etc/apache2/sites-enabled/ y el archivo sea accesible por el servidor.
  Por último, el archivo hosts, se pegará en /etc/ y para que todos estos cambios se apliquen se deberá ejecutar "sudo systemctl reload apache2".
<h2>Tecnologías utilizadas</h2>
<ul>
  <li>HTML</li>
  <li>CSS</li>
  <li>PHP</li>
  <li>SQL</li>
</ul>

<h2>Personas contribuyentes</h2>
<img src="https://github.com/user-attachments/assets/8a472313-5df6-4095-8a5f-39384b3d1190" width=115>

<h2>Personas desarolladoras del proyecto</h2>
<img src="https://github.com/user-attachments/assets/8a472313-5df6-4095-8a5f-39384b3d1190" width=115>

<h2>Licencia</h2>
Este proyecto tiene MIT License.


Primark es un proyecto en el que la gente puede mirar toda la ropa y los distintos accesorios que hay para todas las edades, vendidos en las diferentes tiendas que existen de esta marca, a un precio económico.<br>
Además, también se puede ver la disponibilidad que tienen de cada producto en cada tienda y donde están situadas, mostrándolas en un mapa con su dirección, así como se pueden realizar pedidos online y pagar en la propia página
