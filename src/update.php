<?php
    $conn = mysqli_connect("Database","root","MYSQL_ROOT_PASSWORD","DatabaseDS");
    
    $id = $_POST['id'];
    $codigo =$_POST['Codigo'];
    $descripcion = $_POST['Descripcion'];
    $marca = $_POST['Marca'];
    $color = $_POST['Color'];
    $numero = $_POST['Talla'];
    $cantidad = $_POST['Cantidad'];

    $sql = "UPDATE Inventario SET Codigo='$codigo',Descripcion='$descripcion',Marca='$marca',Color='$color',Talla='$numero',Cantidad='$cantidad' WHERE ID='$id'";
    $query = mysqli_query($conn,$sql);

    if($query){
        Header("Location: inventario.php");
    }
?>