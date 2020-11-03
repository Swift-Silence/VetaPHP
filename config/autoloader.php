<?php

/**
 * Class Autoloader
 *
 * This function is responsible for loading namespaced classes that belong to
 * the framework.
 *
 * @author Tyler Smith
 */

spl_autoload_register(function($className){

    require(DIR_SRC . $className . '.php');

});

?>
