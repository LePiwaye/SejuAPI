<?php
/**
 * Autoloader for the API.
 * You only have to include this file to have access to the whole library
 */
spl_autoload_register(function( $className ){

    $packagedClassName = explode('\\',$className);
    $includePath = "";

    foreach ($packagedClassName as $part){
        $includePath .= $part . DIRECTORY_SEPARATOR;
    }
    $includePath = substr($includePath, 0, -1);

    include($includePath . ".php");
});
?>