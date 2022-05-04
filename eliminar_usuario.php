<?php
include("conexion.php");


if(isset($_GET['codigo'])){
    $codigo = $_GET['codigo'];
    $query = "DELETE FROM usuarios where codigo =$codigo";
    $result = mysqli_query($conn,$query);
    if(!$result){
        die("Query Failed");
    }
    else{
        header('Location: GestionUsuarios.php');
    }
}



?>