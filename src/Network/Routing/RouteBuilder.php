<?php

namespace Network\Routing;

use \Exceptions\RouteException;
use \Network\Routing\RouteFactory;

class RouteBuilder {

    public static function connect($uri, array $route) {
        if (!isset($route['controller']) || empty($route['controller'])) {
            throw new RouteException("Array key 'controller' is not set or is empty.");
        }

        if (!isset($route['action']) || empty($route['action'])) {
            throw new RouteException("Array key 'action' is not set or is empty.");
        }

        RouteFactory::newRoute($uri, $route);
    }

}

?>
