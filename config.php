<?php

define('SHOW_ERRORS', true);

//Password
// define ("SALTHEADER","PLOP23B453J");
// define ("SALTTRAILER","FDSF9434VH");
// webdomain                
define('DB_HOST', $_SERVER['SERVER_NAME'] == 'localhost' ? 'examen.voltixs.nl' : 'localhost');
define('DB_NAME', 'examen');
define('DB_USER', 'examen');
define('DB_PASS', 'KWcv0TaF2rXg9G0');

define('PATH_DIR', (pathinfo($_SERVER['PHP_SELF'])['dirname'] != '/' ? pathinfo($_SERVER['PHP_SELF'])['dirname'] : null ));
define('PATH_URL', '//' . $_SERVER['HTTP_HOST'] . PATH_DIR);
