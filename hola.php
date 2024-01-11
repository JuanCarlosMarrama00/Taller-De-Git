<?php
// Autor: Juan Carlos Marrama <alumar8054@ieselcaminas.org>
// El nombre por defecto es Mundo
$nombre = isset($argv[1]) ? $argv[1] : "Mundo";
@print "Hola, {$nombre}\n";
?>
