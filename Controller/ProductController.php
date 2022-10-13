<?php
 
require_once "./Model/ProductModel.php";
require_once "./View/ProductView.php";



class ProductController {

    private $model;
    private $view;


    function __construct(){
    
        $this->model = new ProductModel();
        $this->view = new ProductView();
        
    }    


    function showHome(){

        $products = $this->model->getProducts();
         $this->view->showProducts($products);
        }

    function createProducts(){
         $this->model->insertProducts($_POST['Id_categoria'], $_POST['nombre'], $_POST['precio'], $_POST['stock']);
         $this->view->showHomeLocation();
            
       
           //insertProducts(1, "martillo", 2, 45);
        }

    function deleteproducts($id){

        $this->model->deleteproductsFromDB($id);
        $this->view->showHomeLocation();
         }

    function updateproducts($id){

        $this->model->updateProductsFromDB($_POST['Id_categoria'], $_POST['nombre'], $_POST['precio'], $_POST['stock']);
        $this->view->showHomeLocation();
        
         }

        // function viewProduct($id){
        // $producto = $this->model->getProduct($id);
        // $this->view->showProduct($producto);
                
          
        //         }
        }
                