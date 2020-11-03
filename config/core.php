<?php

/**
 * Core configuration
 *
 * This class sets some standard constants to be used throughout the application
 * ranging from directory paths to URIs.
 *
 * @author Tyler Smith
 */

/*
    CORE DEFINITIONS
 */

// Easier access to DIRECTORY_SEPARATOR
define('DS', DIRECTORY_SEPARATOR);

// Definitions for parent directories.
define('DIR_ROOT',   getcwd() . DS);
define('DIR_APP',    DIR_ROOT . 'application' . DS);
define('DIR_CONFIG', DIR_ROOT . 'config' . DS);
define('DIR_PUBLIC', DIR_ROOT . 'public' . DS);
define('DIR_SRC',    DIR_ROOT . 'src' . DS);

// Definitions for public folder directories.
define('DIR_CSS', DIR_PUBLIC . 'css' . DS);
define('DIR_IMG', DIR_PUBLIC . 'img' . DS);
define('DIR_JS', DIR_PUBLIC . 'js' . DS);

// Definitions for application folder directories.
define('DIR_CONTROLLERS', DIR_APP . 'controllers' . DS);
define('DIR_MODELS',      DIR_APP . 'models' . DS);
define('DIR_VIEWS',       DIR_APP . 'views' . DS);

/*
    URL Decoding (for redirects, etc)
 */
define('HTTPS', (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? true : false));

// Write the current URL.
$url = (HTTPS ? 'https://' : 'http://') . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];

// Current working URL & URI request.
define('URL', $url);
define('URI', '/' . (isset($_GET['r']) && !empty($_GET['r']) ? $_GET['r'] : '/home/index'));

// AUTOLOADER
require_once(DIR_CONFIG . 'autoloader.php');
