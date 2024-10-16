<?php
  require_once '../app/bootstrap.php';

  // Init Core Library
  $init = new Core;




// index.php or front controller
//try {
//    // Route the request
//    $controllerName = isset($_GET['controller']) ? $_GET['controller'] : 'home';
//    $action = isset($_GET['action']) ? $_GET['action'] : 'index';
//
//    // Load the controller
//    $controllerPath = "controllers/{$controllerName}Controller.php";
//    if (!file_exists($controllerPath)) {
//        throw new Exception("Controller not found.");
//    }
//
//    include $controllerPath;
//    $controllerClass = ucfirst($controllerName) . 'Controller';
//    $controller = new $controllerClass();
//
//    // Check if the action exists
//    if (!method_exists($controller, $action)) {
//        throw new Exception("Action not found.");
//    }
//
//    // Execute the action
//    $controller->$action();
//} catch (Exception $e) {
//    // Log the error message
//    error_log($e->getMessage());
//
//    // Display the error page
//    if ($e->getMessage() === "Controller not found.") {
//        require_once 'views/pages/404.php';
//
//    }
//}
