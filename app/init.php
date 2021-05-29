<?php


// <start>
spl_autoload_register(function( $class ) {
    // get name class without namespacing
    $class = explode('\\', $class);
    $class = end($class);
    // require file in folder automatically
    require_once __DIR__ . '/core/' . $class . '.php';
});
// <end/>