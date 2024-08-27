<?php require_once("conectar.php");

if($_POST){
    mysqli_query($conn, "INSERT INTO clientes(nombre,razon_social,email,telefono,direccion) VALUES ('$_REQUEST[nombre]','$_REQUEST[razonsocial]','$_REQUEST[correo]','$_REQUEST[telefono]','$_REQUEST[direccion]')")
    or die ("Problemas en el select" . mysqli_error($conn));

}


header("Location: clientes.php");

?>;
