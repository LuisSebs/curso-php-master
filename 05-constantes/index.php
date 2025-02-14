<?php
// Constantes
// Es un contenedor de informacion que no puede variar
define('nombre', 'Luis Sebastian');
define('web','sebastian_luis@ciencias.unam.mx');

echo '<h1>'.nombre.'</h1>';
echo '<h2>'.web.'</h2>';

// Variable
$web = 'luis2sebastiansos@gmail.com';
echo '<h3>'.$web.'</h3>';

// Constantes predefinidas
echo PHP_OS.'<br>';
echo PHP_VERSION.'<br>';
echo PHP_EXTENSION_DIR.'<br>';
echo __FILE__.'<br>';
function holaMundo(){
    ECHO __FUNCTION__.'<br>';
}
holaMundo();
?>