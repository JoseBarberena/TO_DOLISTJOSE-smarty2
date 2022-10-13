<?php
require_once './libs/smarty-4.2.1/libs/Smarty.class.php';


class ProductView{

private $smarty;

function __construct(){

    $this->smarty = new smarty(); 
        
}

function showProducts($producto){
    $this->smarty->assign('producto', $producto);
    $this->smarty->display('templates/productlist.tpl');
 
}
function showHomeLocation(){
            header("Location: ".BASE_URL."home");
}

function showProduct($producto){
         
        echo ' <!DOCTYPE html>
        <html lang="en">
        <head>
            <base href="'.BASE_URL.'" />
            <meta charset="UTF-8">
            <meta http-equiv="X-UA-Compatible" content="IE=edge">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title>Document</title>
        </head>
        <body>
            <h1>'.$producto->Id_categoria.'</h1>
            <h1>'.$producto->nombre.'</h1>
            <h1>'.$producto->precio.'</h1>
            <h1>'.$producto->stock.'</h1>
    
            </body>
            </html>';

    }
}