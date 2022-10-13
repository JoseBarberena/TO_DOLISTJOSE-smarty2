
<div class="container">
{include file="header.tpl"}
<h2>Crear Producto</h2>

<form action="createProducts" method="POST">

        <input type="text" class="form-control" name="Id_categoria" id="Id_categoria" placeholder="Id Categoria">
        <input type="text" class="form-control" name="nombre" id="nombre" placeholder="Nombre del producto">
        <input type="number" class="form-control" name="precio" id="precio" placeholder="Precio">
        <input type="number" class="form-control" name="stock" id="stock" placeholder="Stock">
        <input type="submit" class="form-control" value="Guardar">

</form>


<table class="table">
    <thead>
        <tr>
            <th scope="col">Id Producto</th>
            <th scope="col">Id Categoria</th>
            <th scope="col">Nombre Producto</th>
            <th scope="col">Precio</th>
            <th scope="col">Stock</th>
            <th scope="col">Borrar</th>
            <th scope="col">Editar</th>
        </tr>
    </thead>
    <tbody>
        {foreach from=$producto item=$product}
        <tr>
            <td>{$product->Id_producto}</td>
            <td>{$product->Id_categoria}</td>
            <td>{$product->nombre}</td>
            <td>$ {$product->precio}</td>
            <td>{$product->stock}</td>
            <td><a class="btn btn-danger" href="deleteproducts/{$product->Id_producto}">Borrar</a></td>
            <td><a class="btn btn-danger" href="updateproducts/{$product->Id_producto}">Editar</a></td>
    


       
    {/foreach}
    
   
</ul>

{include file="footer.tpl"}
</div>

