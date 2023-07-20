<?php

//Constante para verificar si se trabaja de forma local o remota
define('IS_LOCAL',in_array($_SERVER['REMOTE_ADDR'],['127.0.0.1','::1']));

//Configuración para determinar los horarios en los que se trabajan
date_default_timezone_set('America/Mexico_City');


//Lenguaje
define('LANG','es');

//Ruta base del proyecto
define('BASEPATH', IS_LOCAL ? '/Proyecto_Hospital' : '__________El BASEPATH EN PRODUCCION_________');

//Salt del sistema
define('AUTH_SALT',' YourSafe<3');

//Puerto y URL del sitio
define('PORT','8848');
define('URL',IS_LOCAL ? 'http://127.0.0.1:'.PORT.'Proyecto_Hospital/' :'__________El URL EN PRODUCCION_________' );

//Rutas de los directorios y archivos
define('DS', DIRECTORY_SEPARATOR);
define('ROOT', getcwd().DS);

define('APP',ROOT.'app'.DS);
define('CLASSES',ROOT.'classes'.DS);
define('CONTROLLERS',APP.'controllers'.DS);
define('FUNCTIONS',APP.'functions'.DS);
define('CONFIG',APP.'config'.DS);
define('MODELS',APP.'models'.DS);

define('TEMPLATES',ROOT.'templates'.DS);
define('INCLUDES',TEMPLATES.'includes'.DS);
define('MODULES',TEMPLATES.'modules'.DS);
define('VIEWS',TEMPLATES.'views'.DS);


//Ruta de archivos con base url
define('ASSETS',URL.'assets/');
define('CSS',ASSETS.'css/');
define('FAVICON',ASSETS.'favicon/');
define('FONTS',ASSETS.'fonts/');
define('IMAGES',ASSETS.'images/');
define('JS',ASSETS.'js/');
define('PLUGINS',ASSETS.'plugins/');
define('UPLOADS',ASSETS.'uploads/');


//Credencialaes de la base de datos
//Set para conexión local

define('LDB_ENGINE', 'mysql');
define('LDB_HOST', 'localhost');
define('LDB_NAME', 'u4_pl_db');
define('LDB_USER', 'root');
define('LDB_PASS', '');
define('LDB_CHARSET', 'utf8');

//set para conexion remota

define('DB_ENGINE', 'mysql');
define('DB_HOST', 'localhost');
define('DB_NAME', '___REMOTE DB___');
define('DB_USER', '___REMOTE DB___');
define('DB_PASS', '___REMOTE DB___');
define('DB_CHARSET', '___REMOTE CHARTSET___');
