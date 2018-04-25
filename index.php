<?php
    include 'static/header.php';

    include 'controllers/MainController.php';

    $controller = new MainController();
    $controller->routeController();

    include 'static/footer.php';