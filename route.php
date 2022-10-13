<?php
require_once "Controller/ProductController.php";
//require_once "./templates/productlist.tpl";


define ('BASE_URL', '//'.$_SERVER['SERVER_NAME'] . ':' . $_SERVER['SERVER_PORT'] . dirname($_SERVER['PHP_SELF']).'/');
$action = 'list'; // acción por defecto
if (!empty($_GET['action'])) {
    $action = $_GET['action'];

} else {
    $action = 'home';
}

// parsea la accion Ej: dev/juan --> ['dev', juan]
$params = explode('/', $action);

$ProductController = new ProductController();

switch ($params[0]) {
    case 'home':
        $ProductController->showHome();
        break;
    case 'createProducts':
        $ProductController->createProducts();
        break;
    case 'deleteproducts':
        $ProductController->deleteproducts($params[1]);
        break;
    case 'updateproducts':
        $ProductController->updateproducts($params[1]);
        break;
    // case 'viewProduct': 
    //     $ProductController->viewProduct($params[1]); 
    //     break;
     default:
        echo('404 Page not found');
        break;
}
