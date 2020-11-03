<?php

namespace Network\Routing;

class RouteFactory {

    private static $routes = [];

    public static function newRoute($uri, $route) {
        self::$routes[$uri] = new Route($route);
    }

    public static function getRoute($uri) {
        if (isset(self::$routes[$uri]) && !empty(self::$routes[$uri])) {
            return self::$routes[$uri];
        } else {
            return self::getRouteFromURI($uri);
        }
    }

    private static function getRouteFromURI($uri) {
        $uri = substr($uri, 1);
        $uri = explode('/', $uri);

        $controller = $uri[0];
        unset($uri[0]);
        $uri = array_values($uri);

        $action = $uri[0];
        unset($uri[0]);
        $uri = array_values($uri);

        $params = $uri;

        $route = [
            'controller' => $controller,
            'action' => $action,
            'parameters' => $params
        ];

        return new Route($route);
    }

}

?>
