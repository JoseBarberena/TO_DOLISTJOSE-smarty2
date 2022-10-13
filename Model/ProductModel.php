<?php

class ProductModel{
    private $db;
    function __construct(){
        $this->db = new PDO('mysql:host=localhost;'.'dbname=articulos_rurales;charset=utf8', 'root', '');
        
        }

    function getProducts(){
        $sentencia = $this->db->prepare( "select * from productos");
        $sentencia->execute();
        $productos = $sentencia->fetchAll(PDO::FETCH_OBJ);
        return $productos;
    
        }

    function insertProducts($Id_categoria, $nombre, $precio, $stock,){
        $sentencia = $this->db->prepare("INSERT INTO productos(Id_categoria, nombre, precio, stock) VALUES(?, ?, ?, ?)");
        $sentencia->execute(array($Id_categoria, $nombre, $precio, $stock));
        
        }

    function deleteproductsFromDB($id){
        $sentencia = $this->db->prepare("DELETE FROM productos WHERE Id_producto=?");
        $sentencia->execute(array($id));
        
        }

    function updateProductsFromDB($Id_categoria, $nombre, $precio, $stock){
        $sentencia = $this->db->prepare("UPDATE productos SET Id_categoria=?, nombre=?, 
         precio=?, stock=? WHERE Id_producto=?");
        $sentencia->execute (array($Id_categoria, $nombre, $precio, $stock));
        }

    // function getProduct($producto){
    //     $sentencia = $this->db->prepare( "select * from  productos WHERE Id_producto=?");
    //     $sentencia->execute($producto);
    //     $producto = $sentencia->fetch(PDO::FETCH_OBJ);
    //     return $producto;
    
    //     }

}