<?php
    class MainController {
        function routeController() {
            $controllerName = isset($_GET['controller']) ? $_GET['controller'] : 'HomeController';
            $action = isset($_GET['action']) ? $_GET['action'] : 'showHome';

            include 'controllers/' . $controllerName . '.php';

            $controller = new $controllerName();
            $controller->$action();
        }
    }