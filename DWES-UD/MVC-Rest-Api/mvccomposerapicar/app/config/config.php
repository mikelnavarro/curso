<?php

//Configuración acceso a base de datos
define('DB_HOST', 'localhost'); //tu servidor de BD.
define('DB_USUARIO', 'dweb');
define('DB_PASSWORD', '12345');
define('DB_NOMBRE', 'test'); // Tu base de datos



//Ruta de la aplicación. /app o /src
define('RUTA_APP', (dirname(__DIR__)));

//Ruta url Ejemplo: http://localhost/curso/DWES-UD/MVC-Rest-Api/mvccomposerapicar
define ('RUTA_URL', 'http://localhost/curso/DWES-UD/MVC-Rest-Api/mvccomposerapicar');


//define ('NOMBRESITIO', '_NOMBRE_SITIO');
define ('NOMBRESITIO', 'MVC con Composer - REST API');

// Cargar archivo INI si es necesario.
//$config = parse_ini_file(RUTA_APP . '/config/config.ini', true);

// Otras configuraciones iniciales pueden ir aquí